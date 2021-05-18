<script type="text/javascript" src="https://platform.linkedin.com/badges/js/profile.js" async defer></script>
<script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=5f0dcc24c6b903001335c1e5&product=inline-share-buttons" async="async"></script>
<?php
include "koneksi.php";
$id = $_GET['id'];
error_reporting(0);
session_start();

?>

<input type="hidden" id="idSession">


<style>
	.hideEnd {
		display: none
	}

	h1:hover {
		color: #BDB76B
	}

	h4 {
		font-size: 18px;
		line-height: 1.2
	}

	}

	ul.comments .comment-block {
		background-color: #fff !important;
	}

	.comment-block {
		border-top: solid 2px red;
		background-color: #f9f9f9 !important;
	}

	.badge {
		background-color: orange
	}

	.textarea1 {
		box-sizing: border-box;
		resize: none;
	}

	.textarea2 {
		box-sizing: border-box;
		resize: none;
	}

	ul.comments .comment-block {
		padding: 15px 20px 5px 20px
	}
</style>

<!-- Page Header -->
<div class="page-header">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb">
					<li><a style="color:#fff" href="index.php"> <i class="fa fa-home"></i> &nbsp; Home</a></li>
					<li><a style="color:#fff" href="#">Article</a></li>
				</ul>
			</div>
		</div>
		<!--
			<div class="row">
                <div class="col-md-12">
                    <h1>Blog Single Post Sidebar</h1>
                </div>
            </div>
			-->
	</div>
</div>


<!-- Right Sidebar Container  -->
<section class="page-section padding-30">
	<div class="container">
		<div class="row">
			<!-- Content -->
			<div class="col-md-8">

				<?php
				$sql1 = "update article set views= (views +1) where kode = '$id'";
				$res_data1 = mysqli_query($koneksi, $sql1);

				$sqlgetviewmonth = "select count(1) valCount from monthly_view where DATE_FORMAT(datevalue, '%Y%m')= DATE_FORMAT(CURRENT_DATE, '%Y%m')";
				$resViewMont = mysqli_query($koneksi, $sqlgetviewmonth);

				$dataView = mysqli_fetch_array($resViewMont);
				$updateViewExists = "insert into monthly_view values(CURRENT_DATE, 1)";
				$updateViewNotExists = "update monthly_view set viewvalue = (viewvalue +1) where
				                      DATE_FORMAT(datevalue, '%Y%m')= DATE_FORMAT(CURRENT_DATE, '%Y%m')";


				if ($dataView['valCount'] == 0) {
					$res_update1 = mysqli_query($koneksi, $updateViewExists);
				} else {
					$res_update2 = mysqli_query($koneksi, $updateViewNotExists);
				}


				$sql = "SELECT * FROM article where kode= '$id'";
				$res_data = mysqli_query($koneksi, $sql);

				$data = mysqli_fetch_array($res_data);

				$idA = $data['id_article'];
				$idCat = $data['id_category'];
				$date1Str1 = date_format(new DateTime($data['date']), 'd-M-Y h:i');
				?>

				<div class="blog-listing">
					<article>
						<h1 style="color:#000"><?php echo $data['title'] ?></h1>
						<hr class="title-underline">
						<!--
							<a href="#"><span class="hb hb-xs"><i class="fa fa-facebook"></i></span></a>
							<a href="#"><span class="hb hb-xs"><i class="fa fa-twitter"></i></span></a>
							<a href="#"><span class="hb hb-xs"><i class="fa fa-linkedin-square"></i></span></a>
							--><br>
						<div class="sharethis-inline-share-buttons"></div>
						<!--
							<div class="fb-share-button" data-href="http://localhost:8989/bismaproperty/?menu=detailarticle&id=d41d8cd98f00b204e9800998ecf8427e4"  data-layout="button_count">
							</div>
							-->

						<div class="post-meta" style="padding-top:15px; color:#BDB76B" id="listLike">

						</div>

						<img class="img-thumbnail" src="admin/images/Article/<?php echo $data['picture']  ?>"><br>
						<div style="font-style:italic; color: #B46A5A"><?php echo $data['image_caption'] ?></div>
						<p><?php echo $data['content'] ?></p>

						<input type="hidden" value="<?php echo $_GET['id'] ?>" id="idForDetail">
						<input type="hidden" value="<?php echo $data['id_article'] ?>" id="idArticle">

						<div class="row">
							<div class="col-md-12">
								<b>References Link: </b>
							</div>
							<div class="col-md-4" style="font-style:italic">
								<a href="<?php echo $data['ref_link1'] ?>"><?php echo $data['ref_link1'] ?></a>
							</div>
							<div class="col-md-4">
								<a href="<?php echo $data['ref_link2'] ?>"><?php echo $data['ref_link2'] ?></a>
							</div>
							<div class="col-md-4">
								<a href="<?php echo $data['ref_link3'] ?>"><?php echo $data['ref_link3'] ?></a>
							</div>
						</div>

						<!-- detailComment -->
						<div id="detailComment">

						</div>


						<div class="post-block">
							<h3><i class="fa fa-commenting"></i>Leave a comment</h3>
							<form action="" method="post">

								<div class="form-group">
									<label>Comment *</label>
									<textarea maxlength="5000" rows="5" placeholder="Comment..." class="form-control textarea2" name="comment" id="comment1"></textarea>
								</div>
								<a onClick="submitComment()" class="btn btn-primary">Post Comment</a>
							</form>
						</div>
					</article>
				</div>

				<hr>
				<!-- similar category -->
				<div class="">
					<h2 class="title-section" style="font-size:28px"><span class="title-regular"></span>Related Post<br /></h2>
					<hr class="title-underline" />
				</div>
				<div class='row blog-listing'>
					<?php

					$sqlL = "SELECT a.* FROM article a 
										where  id_article != '$idA' and id_category ='$idCat'
											order by created_dt desc limit 6";
					$resultL = mysqli_query($koneksi, $sqlL);
					$dateStrL = "";
					while ($dataL = mysqli_fetch_array($resultL)) {
						$dateStrL = date_format(new DateTime($dataL['created_dt']), 'd-M-Y h:i:s');


					?>


						<div class="col-md-4 col-sm-6 col-xs-6 ">
							<article style="margin-bottom:10px">

								<a href="?menu=detailarticle&id=<?php echo $dataL['kode'] ?>">
									<h4 style="color:#000"><?php echo $dataL['title'] ?></h4>
									<hr class="title-underline">
									<br>
									<img class="img-thumbnail" src="admin/images/Article/<?php echo $dataL['picture']  ?>" style="height:130px">
								</a>

							</article>
						</div>


					<?php
					}
					?>
				</div>
			</div>

			<!-- Sidebar -->
			<div class="col-md-4">
				<aside class="sidebar">
					<!--
						 <div class="widget">
                            <h4 class="sidebar-header">Categories</h4>
                              <ul class="nav nav-list">
								<?php

								$sql = "SELECT * FROM article_category a ORDER BY id_category";

								$result = mysqli_query($koneksi, $sql);

								while ($data = mysqli_fetch_array($result)) {


								?>
									<li><a href="?menu=article&category=<?php echo $data['category_name'] ?>"><b class="caret-right"></b> <?php echo $data['category_name'] ?></a></li>
									<?php } ?>
							
						
                            </ul>
                        </div>
						<br>
						-->
					<div class="widget blog-widget">
						<div class="tabs">
							<ul class="nav nav-tabs">
								<li class="active"><a href="#popularPosts" data-toggle="tab" aria-expanded="true"><i class="fa fa-star"></i> Popular</a></li>
								<li class=""><a href="#recentPosts" data-toggle="tab" aria-expanded="false">Recent</a></li>
							</ul>
							<div class="tab-content">
								<div class="tab-pane active" id="popularPosts">
									<ul class="post-list">

										<?php

										$sql2 = "SELECT a.*, ac.category_name,
													(select count(1) from comments where id_article = a.id_article and status ='1') c_comment,
													(select count(1) from comments c 
														join comments_detail cd on cd.id_comment = c.id_comment
													where c.status='1' and c.id_article = a.id_article) c_commentd
												 FROM article a 
															join article_category ac on ac.id_category = a.id_category 
																order by likes desc limit 5";
										$result2 = mysqli_query($koneksi, $sql2);
										$no_urut2 = 0;
										$dateStr2 = "";
										$date1Str2 = "";

										if (mysqli_num_rows($result2) < 1) {
											echo "";
										} else {

											while ($data2 = mysqli_fetch_array($result2)) {

												$countComment = $data2['c_comment'] + $data2['c_commentd'];
												
												if ($data2['changed_dt'] != null && $data2['changed_dt'] != '0000-00-00') {
													$dateStr2 = date_format(new DateTime($data2['changed_dt']), 'd-M-Y');
												}

												$date1Str2 = date_format(new DateTime($data2['created_dt']), 'd-M-Y');
										?>

												<li class="post">
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="?menu=detailarticle&id=<?php echo $data2['kode'] ?>">
																<img style="width:100px; class="" src=" admin/images/Article/<?php echo $data2['picture']  ?>"> </a>
														</div>
													</div>
													<div class="post-info">
														<a href="?menu=detailarticle&id=<?php echo $data2['kode'] ?>">
															<h6 style="line-height: 18px;"><?php echo $data2['title'] ?></h6>
														</a>
														<div class="post-meta" style="color:#666">
															<?php echo $date1Str2 ?>&nbsp; &#9900; &nbsp; <?php echo $countComment ?> Comments <br>
														</div>


													</div>
												</li>

										<?php }
										} ?>
									</ul>
								</div>
								<div class="tab-pane" id="recentPosts">
									<ul class="post-list">

										<?php

										$sql3 = "SELECT a.*, ac.category_name,
													(select count(1) from comments where id_article = a.id_article and status ='1') c_comment,
													(select count(1) from comments c 
															join comments_detail cd on cd.id_comment = c.id_comment
														where c.status='1' and c.id_article = a.id_article) c_commentd
												 FROM article a 
															join article_category ac on ac.id_category = a.id_category 
																where a.created_dt  >= CURDATE() - INTERVAL 7 DAY
																order by created_dt desc limit 5";
										$result3 = mysqli_query($koneksi, $sql3);
										$no_urut3 = 0;
										$dateStr3 = "";
										$date1Str3 = "";

										if (mysqli_num_rows($result3) < 1) {
											echo "";
										} else {

											while ($data3 = mysqli_fetch_array($result3)) {
												$countComment = $data3['c_comment'] + $data3['c_commentd'];

												if ($data3['changed_dt'] != null && $data3['changed_dt'] != '0000-00-00') {
													$dateStr3 = date_format(new DateTime($data3['changed_dt']), 'd-M-Y');
												}

												$date1Str3 = date_format(new DateTime($data3['created_dt']), 'd-M-Y');
										?>

												<li class="post">
													<div class="post-image">
														<div class="img-thumbnail">
															<a href="?menu=detailarticle&id=<?php echo $data3['kode'] ?>">
																<img style="width:100px; class="" src=" admin/images/Article/<?php echo $data3['picture']  ?>"> </a>
														</div>
													</div>
													<div class="post-info">
														<a href="?menu=detailarticle&id=<?php echo $data3['kode'] ?>">
															<h6 style="line-height: 18px;"><?php echo $data3['title'] ?></h6>
														</a>
														<div class="post-meta" style="color:#666">
															<?php echo $date1Str3 ?> &nbsp; &#9900; &nbsp; <?php echo $countComment ?> Comments
														</div>


													</div>
												</li>

										<?php }
										
										} ?>


									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="widget tags">
						<h4 class="sidebar-header">Tags</h4><br>

						<?php

						$sqlTag = "SELECT distinct tags FROM article where tags !=''";

						$resultTag = mysqli_query($koneksi, $sqlTag);

						while ($dataTag = mysqli_fetch_array($resultTag)) {


						?>
							<a href="?menu=articletag&tags=<?php echo $dataTag['tags'] ?>"><?php echo $dataTag['tags'] ?></a>
						<?php } ?>

					</div>
					<div class="widget">
						<div id="datepicker" style="text-align:center; color:#000"></div>
					</div>
					<!--
					<div class="widget" style="text-align: center">
						<div class="LI-profile-badge" data-version="v1" data-size="large" data-locale="en_US" data-type="vertical" data-theme="light" data-vanity="kris-banarto-52a8a054"><a class="LI-simple-link" href='https://id.linkedin.com/in/kris-banarto-52a8a054?trk=profile-badge'>Kris Banarto</a></div>
					</div>
					-->
				</aside>
			</div>
		</div>
	</div>
</section>


<input type="hidden" value="<?php echo $_SESSION['EMAIL'] ?>" id="sesEmail">
<input type="hidden" value="<?php echo $_SESSION['NAME'] ?>" id="sesName">
<input type="hidden" value="<?php echo $_SESSION['IMAGE'] ?>" id="sesImage">

<script>
	$('.textarea2').on('keyup input', function() {
		$(this).height(50);
		$(this).css('height', 'auto').css('height', this.scrollHeight + (this.offsetHeight - this.clientHeight));
	});

	$('.textarea1').on('keyup input', function() {
		$(this).css('height', 'auto').css('height', this.scrollHeight + (this.offsetHeight - this.clientHeight));
	});


	$(document).ready(function() {
		searchComment();
		searchLike();

		$("#datepicker").zabuto_calendar({
			today: true
		});
	});


	function searchComment() {

		var id = $("#idForDetail").val();

		$.ajax({
			url: "detailcomment.php",
			method: "POST",
			data: {
				id: id
			},
			dataType: "text",
			success: function(data) {
				$('#detailComment').html(data);
			}
		});

	}


	function searchLike() {

		var id = $("#idForDetail").val();

		$.ajax({
			url: "detaillike.php",
			method: "POST",
			data: {
				id: id
			},
			dataType: "text",
			success: function(data) {
				$('#listLike').html(data);
			}
		});

	}

	function submitComment() {

		var sesEmail = "<?php echo $_SESSION['EMAIL']; ?>";
		var sesName = "<?php echo $_SESSION['NAME']; ?>";
		var sesImage = "<?php echo $_SESSION['IMAGE']; ?>";

		var comment1 = $('#comment1').val();
		var idArticle = $('#idArticle').val();
		var nameComment = sesName;
		var emailComment = sesEmail;
		var idComment = $('#idComment').val();
		var idMember = sesEmail;
		var action = '';


		if (idMember == '' || idMember == null) {
			showErrorMesgGrowl("Please login to add comment to this article");

			setTimeout(function() {

				window.location.href = "index.php?menu=login";

			}, 2000);
			return false;
		}

		if (comment1 == '' || comment1 == null) {
			$('#comment1').focus();
			showErrorMesgGrowl("Please input your comment");
			return false;
		}


		formData = new FormData();
		formData.append("comment", comment1);
		formData.append("nameComment", nameComment);
		formData.append("emailComment", emailComment);
		formData.append("idArticle", idArticle);
		formData.append("idComment", idComment);
		formData.append("idMember", idMember);
		formData.append("imageG", sesImage);
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
				//searchLike();
				$('#comment1').val('');
				$('#emailComment').val('');
				$('#nameComment').val('');
				showSuccessMesgGrowl("Your comment was saved successfully.");

			}
		});

	};


	function showErrorMesgGrowl(mesg) {
		$.bootstrapGrowl(mesg, {
			type: 'danger',
			allow_dismiss: true,
			align: 'center',
			delay: 10000
		});
	}

	function showSuccessMesgGrowl(mesg) {
		$.bootstrapGrowl(mesg, {
			type: 'success',
			allow_dismiss: true,
			align: 'center',
			delay: 10000
		});
	}


	(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s);
		js.id = id;
		js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
		fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>