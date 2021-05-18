<?php
include 'koneksi.php';
session_start();
?>

<style>
	.comment-block {
		border-top: solid 2px red;
		background-color: #f9f9f9 !important;
		padding: 20px 10px 0px 10px;
	}

	.textarea1 {
		box-sizing: border-box;
		resize: none;
	}
</style>

<?php

$id = $_POST['id'];

$sqlCount = "select count(1) comments FROM article a  
				join comments c on c.id_article = a.id_article
			where kode= '$id' and c.status='1'";

$Count = mysqli_query($koneksi, $sqlCount);

$dataCount = mysqli_fetch_array($Count);

$total = $dataCount['comments'];

?>

<input type="hidden" value="<?php echo $_SESSION['EMAIL'] ?>" id="sesEmail">

<div class="post-block clearfix">
	<h3><i class="fa fa-comments"></i>Comments (<?php echo $total ?>)</h3>
	<ul class="comments">

		<?php

		$sqlComment = "select c.*, m.name, m.image from comments c 
							left join members m on m.id_member = c.id_member
					where id_article in (SELECT id_article FROM article where kode= '$id') and c.status='1'";

		$sqlComment1 = mysqli_query($koneksi, $sqlComment);

		while ($dataC = mysqli_fetch_array($sqlComment1)) {
			$idComment = $dataC['id_comment'];

			$date1 = "";
			$date1 = date_format(new DateTime($dataC['comment_date']), 'd-M-Y h:i:s');

		?>
			<input type="hidden" value="<?php echo $idComment ?>" id="idComment">
			<li>
				<div class="comment">
					<div class="img-thumbnail">
						<?php

						echo "<img class='avatar' alt='' src='img/member/img.png'>";

						?>
					</div>
					<div class="comment-block">
						<span class="comment-by">
							<strong><?php echo $dataC['name'] ?></strong>
							<span class="date pull-right"><?php echo $date1 ?></span>
						</span>
						<p style="margin-bottom:5px"><?php echo $dataC['comment'] ?></p>

					</div>
				</div>
				<ul class="comments">
					<?php

					$sqlCD = "select c.*, m.name, m.image from comments_detail c 
									join members m on m.id_member = c.id_member
							where id_article = (SELECT id_article FROM article where kode= '$id')
									and id_comment = '$idComment' and c.status='1'
							";

					$sqlCD1 = mysqli_query($koneksi, $sqlCD);

					while ($dataCD = mysqli_fetch_array($sqlCD1)) {

						$date2 = "";
						$date2 = date_format(new DateTime($dataCD['comment_date']), 'd-M-Y h:i:s');
					?>

						<li class="<?php echo $dataCD['id_article'] ?>_<?php echo $dataCD['id_comment'] ?>">
							<div class="comment">
								<div class="img-thumbnail">
									<?php
									if ($dataCD['image'] == 'img1.png') {
										echo "<img class='avatar' alt='' src='img/member/$dataCD[image]'>";
									} else {
										echo "<img class='avatar' alt='' src='$dataCD[image]'>";
									}
									?>
								</div>
								<div class="comment-block">
									<span class="comment-by">
										<strong><?php echo $dataCD['name'] ?></strong>
										<span class="pull-right">
											<span class="date pull-right"><?php echo $date2 ?></span>

										</span>
									</span>
									<p style="margin-bottom:5px"><?php echo $dataCD['comment'] ?></p>
								</div>
							</div>
						</li>
					<?php } ?>

					<li class="<?php echo $dataC['id_article'] ?>_<?php echo $dataC['id_comment'] ?>">
						<div class="comment">

							<!--
						<div class="comment-block" style="padding:10px 0px">
								<div class="row" style="margin-bottom:5px">
									<div class="col-lg-6 col-md-6">
										<input type="text" Placeholder="Name.." id="title" class="form-control"  name="" value="">
									</div>
									<div class="col-lg-6 col-md-6">
										<input type="text" Placeholder="Email.." id="author" class="form-control"  name="" value="">
									</div>
								</div>
							<textarea maxlength="5000" rows="1" idArticle="<?php echo $dataC['id_article'] ?>" idComment="<?php echo $dataC['id_comment'] ?>" placeholder="Reply..." class="form-control textarea1" ></textarea>
							
						</div>
						-->
						</div>
					</li>
				</ul>
			</li>
		<?php } ?>
	</ul>
</div>


<script>
	$('.textarea1').on('keyup input', function(e) {
		$(this).css('height', 'auto').css('height', this.scrollHeight + (this.offsetHeight - this.clientHeight));

		if ((e.keyCode || e.which) == 13) {

			var ses1Email = $("#sesEmail").val();

			var idArticle = $(this).attr("idArticle");
			var idComment = $(this).attr("idComment");
			var idMember = ses1Email;
			var comment = $(this).val();
			var action = 'detail';

			if (idMember == '' || idMember == null || idMember == undefined || idMember == "undefined") {
				showErrorMesgGrowl("Please login to add comment to this article");
				return false;
			}

			if (idMember.substring(1, 3) == "br") {
				showErrorMesgGrowl("Please login to add comment to this article");
				return false;
			}


			formData = new FormData();
			formData.append("comment", comment);
			formData.append("idArticle", idArticle);
			formData.append("idComment", idComment);
			formData.append("idMember", idMember);
			formData.append("action", action);

			$.ajax({
				url: "savecomment.php",
				method: "POST",
				data: {
					formData: formData
				},
				data: formData,
				processData: false,
				contentType: false,
				success: function(data) {
					searchComment();
					$('.textarea1').val('');

				}
			});


		};

	});
</script>