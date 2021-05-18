<?php
include 'koneksi.php';
session_start();
?>

<!-- Hero Header -->
<section class="page-section" style="padding:0px">

	<div class="row" style="padding:0px">
		<div class="col-lg-6 col-md-6 col-sm-6" style="padding:0px">
			<div class="latest_slider">
				<div class="slick_slider">

					<?php

					$sqlSlide = "SELECT a.*, ac.category_name,
							(select count(1) from comments where id_article = a.id_article and status ='1') c_comment
						 FROM article a 
							join article_category ac on ac.id_category = a.id_category 
								order by created_dt desc limit 3";
					$resultSlide = mysqli_query($koneksi, $sqlSlide);
					$dateSlide = "";


					while ($dataSlide = mysqli_fetch_array($resultSlide)) {


						$dateSlide = date_format(new DateTime($dataSlide['created_dt']), 'd-M-Y H:i:s');
					?>

						<div class="single_iteam"><img src="admin/images/Article/<?php echo $dataSlide['picture'] ?>" alt="" style="min-height:426px">
							<h2><a class="slider_tittle" href="?menu=detailarticle&id=<?php echo $dataSlide['kode'] ?>"><?php echo $dataSlide['title'] ?>
									<h5>
										<div class="post-meta" style="padding-top:15px; color:#fff; font-size:13px">

											<div class="comments_box" style="background-color: rgba(0,0,0,0.6); padding:10px; color:#fff !important">

												<span class="meta_date" style="color:#fff"><?php echo $dateSlide ?></span> <span class="meta_comment">
													<a style="color:#fff" href="?menu=detailarticle&id=<?php echo $dataSlide['kode'] ?>"><?php echo $dataSlide['c_comment'] ?> Comments</a></span> <span class="meta_more">
													<a href="?menu=detailarticle&id=<?php echo $dataSlide['kode'] ?>">Read More...</a></span>

											</div>
										</div>
									</h5>
								</a>
							</h2>


						</div>
					<?php } ?>

				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6" style="padding:0px">
			<div class="content_top_right">
				<ul class="featured_nav wow fadeInDown">

					<?php

					$sqlSlide = "SELECT a.*, ac.category_name
						FROM article a 
							join article_category ac on ac.id_category = a.id_category 
							where a.created_dt >= DATE_ADD(sysdate(), INTERVAL -30 DAY)
								order by views desc limit 4"
								;
					$resultSlide = mysqli_query($koneksi, $sqlSlide);
					$dateSlide = "";
					while ($dataSlide = mysqli_fetch_array($resultSlide)) {
						$dateSlide = date_format(new DateTime($dataSlide['created_dt']), 'd-M-Y H:i:s');
					?>
						<li><img src="admin/images/Article/<?php echo $dataSlide['picture'] ?>" alt="">
							<div class="title_caption"><a href="?menu=detailarticle&id=<?php echo $dataSlide['kode'] ?>"><?php echo $dataSlide['title'] ?><br>
									<span class="meta_date" style="color:#fff; font-size:12px"><?php echo $dateSlide ?></span></a>
							</div>
						</li>
					<?php } ?>

				</ul>
			</div>
		</div>
	</div>

</section>



<section class="page-section" style="padding:25px 0px">
	<!--
		 <div class="single_category">
		  <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Bisnis</a> </h2>
		</div>
		-->
	<div class="container">

		<div class="row blog-listing">

			<?php

			$sqlNew = "SELECT a.*, ac.category_name ,
						(select count(1) from comments where id_article = a.id_article and status ='1') c_comment
					FROM article a 
								join article_category ac on ac.id_category = a.id_category 
									order by likes desc limit 3";
			$resultNew = mysqli_query($koneksi, $sqlNew);
			$dateStrNew = "";


			while ($dataNew = mysqli_fetch_array($resultNew)) {


				$dateStrNew = date_format(new DateTime($dataNew['created_dt']), 'd-M-Y');
			?>


				<div class="col-md-4" style="margin-top:50px">
					<article>
						<a href="?menu=detailarticle&id=<?php echo $dataNew['kode'] ?>">
							<img class="img-thumbnail img-responsive" src="admin/images/Article/<?php echo $dataNew['picture']  ?>" style="height:200px" alt="" /></a>
						<a href="?menu=detailarticle&id=<?php echo $dataNew['kode'] ?>">
							<h2><?php echo $dataNew['title']  ?></h2>
						</a>
						<hr class="title-underline">

						<div class="post-meta" style="padding-top:15px; color:#BDB76B">
							<i class="fa fa-calendar"></i> <?php echo $dateStrNew ?> &nbsp;
							<i class="fa fa-eye"></i> <?php echo $dataNew['views'] ?> Views &nbsp;
							<i class="fa fa-comments"></i> <?php echo $dataNew['c_comment'] ?> Comments
						</div>


						<p>
							<span><?php echo substr($dataNew['content'], 0, 500)  ?> ... </span></i>
						</p>
						<a href="?menu=detailarticle&id=<?php echo $dataNew['kode'] ?>" class="btn btn-xs btn-primary pull-right">Read more...</a>
					</article>
				</div>
			<?php } ?>

		</div>
	</div>
</section>

<hr>


<!-- Call to Action Primary -->
<section class="cta cta-primary">
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<h2> <span><br>Artikel Manajemen & Humaniora</span></h2>

			</div>
			<div class="col-md-4">
				<img class="img-responsive" src="img/logo.png" alt="logo" style="border-radius:10px">
			</div>
		</div>
	</div>
</section>



<!-- Full Spotlight left-->
<section class="page-section-no-padding">
	<div class="container-fluid">
		<div class="row">
			<div class="container col-md-6">
				<div class="row">
					<?php

					$sql1 = "SELECT a.* FROM article a 
										where id_category = 3
											order by id_article desc limit 1";
					$result1 = mysqli_query($koneksi, $sql1);
					$dateStr1 = "";
					$date1Str1 = "";

					$data1 = mysqli_fetch_array($result1);

					if (mysqli_num_rows($result1) < 1) {
						echo "";
					} else {
						$date1Str1 = date_format(new DateTime($data1['created_dt']), 'd-M-Y h:i:s');
					}
					?>



					<div class="col-md-9 col-md-offset-2 spotlight-container">
						<h2 class="title-section" style="line-height:50px;"><span class="title-regular"><?php echo $data1['title'] ?></span></h2>
						<hr class="title-underline" />
						<div class="post-meta" style="padding-top:15px; color:#BDB76B">
							<i class="fa fa-calendar"></i> <?php echo $date1Str1 ?> &nbsp;
							<i class="fa fa-eye"></i> <?php echo $data1['views'] ?> Views &nbsp;
							<i class="fa fa-comments"></i> <?php echo $data1['comments'] ?> Comments
						</div>
						<p>
							<?php echo strip_tags(substr($data1['content'], 0, 500))  ?> ...
						</p>
						<a href="?menu=detailarticle&id=<?php echo $data1['kode'] ?>" class="btn btn-xs btn-primary pull-right">Read more...</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 spotlight-img-cont" style="background-image: url('admin/images/Article/<?php echo $data1['picture'] ?>'); "> </div>
		</div>
	</div>
</section>

<!-- Full Spotlight right-->
<section class="page-section-no-padding">
	<div class="container-fluid">
		<div class="row">
			<div class="container col-md-6 col-md-push-6">
				<div class="row">
					<div class="col-md-9 col-md-offset-2 spotlight-container">

						<?php

						$sql2 = "SELECT a.*,
									(select count(1) from comments where id_article = a.id_article and status ='1') c_comment
							 FROM article a 
										where id_category = 3
											and id_article != (select id_article from article where id_category = 3 order by id_article desc limit 1)
											order by id_article desc limit 1";
						$result2 = mysqli_query($koneksi, $sql2);
						$dateStr2 = "";
						$date1Str2 = "";

						$data2 = mysqli_fetch_array($result2);

						if (mysqli_num_rows($result2) < 1) {
							echo "";
						} else {
							$date1Str2 = date_format(new DateTime($data2['created_dt']), 'd-M-Y h:i:s');
						}
						?>


						<h2 class="title-section" style="line-height:50px; padding:0px"><span class="title-regular"><?php echo $data2['title'] ?></h2>
						<hr class="title-underline" />
						<div class="post-meta" style="padding-top:15px; color:#BDB76B">
							<i class="fa fa-calendar"></i> <?php echo $date1Str2 ?> &nbsp;
							<i class="fa fa-eye"></i> <?php echo $data2['views'] ?> Views &nbsp;
							<i class="fa fa-comments"></i> <?php echo $data2['c_comment'] ?> Comments
						</div>
						<p>
							<?php echo strip_tags(substr($data2['content'], 0, 500))  ?> ...
						</p>
						<a href="?menu=detailarticle&id=<?php echo $data2['kode'] ?>" class="btn btn-xs btn-primary pull-right">Read more...</a>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-md-pull-6 spotlight-img-cont" style="background-image: url(admin/images/Article/<?php echo $data2['picture'] ?>); "> </div>
		</div>
	</div>
</section>


<section class="page-section" style="background-color:#f9f9f9; padding:0px">
	<div class="content_middle">
	    <!--
		<div class="col-lg-3 col-md-3 col-sm-3" style="margin-top:20px">
			<!--
		   <div class="single_category" style="margin-bottom:20px">
				  <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Salesmanship</a> </h2>
			</div>
			-->
			<!--
			<div class="content_middle_leftbar">
				<div class="single_category wow fadeInDown">

					<ul class="catg1_nav">
						<?php

						$sqlSal = "SELECT a.*, ac.category_name FROM article a 
								join article_category ac on ac.id_category = a.id_category 
									where a.id_category = 3
									order by id_article desc limit 3";
						$resultSal = mysqli_query($koneksi, $sqlSal);
						$dateSal = "";

						while ($dataSal = mysqli_fetch_array($resultSal)) {

							$dateSal = date_format(new DateTime($dataSal['created_dt']), 'd-M-Y');
						?>
							<li>

								<div class="catgimg_container"> <a href="?menu=detailarticle&id=<?php echo $dataSal['kode'] ?>" class="catg1_img"><img alt="" src="admin/images/Article/<?php echo $dataSal['picture'] ?>"></a></div>
								<div class="post-meta" style="padding:5px 0px 0px 0px; margin-bottom:0px; color:#BDB76B;">
									<i class="fa fa-calendar"></i> <?php echo $dateSal ?> &nbsp;
									<i class="fa fa-eye"></i> <?php echo $dataSal['views'] ?> Views &nbsp;
									<i class="fa fa-comments"></i> <?php echo $dataSal['comments'] ?> Comments
								</div>

								<h3 class="post_titile"><a href="?menu=detailarticle&id=<?php echo $dataSal['kode'] ?>"><?php echo $dataSal['title'] ?></a></h3>
							</li>
						<?php } ?>
					</ul>
				</div>
			</div>
		</div>-->
		<div class="col-lg-6 col-md-6 col-sm-6" style="margin-top:20px">
			<!--
			<div class="single_category" style="margin-bottom:20px">
				  <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Properti</a> </h2>
			</div>
			-->
			<div class="content_middle_middle">
				<div class="slick_slider2">
					<?php

					$sqlProp = "SELECT a.*, ac.category_name ,
						(select count(1) from comments where id_article = a.id_article and status ='1') c_comment
					FROM article a 
								join article_category ac on ac.id_category = a.id_category 
									where a.id_category =5
									order by id_article desc limit 3";
					$resultprop = mysqli_query($koneksi, $sqlProp);
					$dateProp = "";

					while ($dataProp = mysqli_fetch_array($resultprop)) {

						$dateProp = date_format(new DateTime($dataProp['created_dt']), 'd-M-Y');
					?>

						<div class="single_featured_slide"> <a href="?menu=detailarticle&id=<?php echo $dataProp['kode'] ?>"><img src="admin/images/Article/<?php echo $dataProp['picture'] ?>" alt="" style=""></a>
							<div class="post-meta" style="padding-top:15px; color:#BDB76B">
								<i class="fa fa-calendar"></i> <?php echo $dateProp ?> &nbsp;
								<i class="fa fa-eye"></i> <?php echo $dataProp['views'] ?> Views &nbsp;
								<i class="fa fa-comments"></i> <?php echo $dataProp['c_comment'] ?> Comments
							</div>

							<h2><a href="?menu=detailarticle&id=<?php echo $dataProp['kode'] ?>"><?php echo $dataProp['title'] ?></a></h2>
							<p style="font-size:14px"><?php echo strip_tags(substr($dataProp['content'], 0, 300))  ?> ...</p>
						</div>


					<?php } ?>

				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-6 col-sm-6" style="margin-top:20px">
			<!--
			<div class="single_category" style="margin-bottom:20px">
				  <h2> <span class="bold_line"><span></span></span> <span class="solid_line"></span> <a class="title_text" href="#">Manajemen</a> </h2>
			</div>
			-->
			<div class="content_middle_rightbar">
				<div class="single_category wow fadeInDown">
				    <ul class="small_catg wow fadeInDown" style="padding:10px">
					<?php

					$sqlC1 = "SELECT a.*, ac.category_name,
						(select count(1) from comments where id_article = a.id_article and status ='1') c_comment
					 FROM article a 
								join article_category ac on ac.id_category = a.id_category 
									where a.id_category =6
									order by a.id_article desc limit 3";
					$resultC1 = mysqli_query($koneksi, $sqlC1);
					$dateC1 = "";

					while ($dataC1 = mysqli_fetch_array($resultC1)) {

						$dateC1 = date_format(new DateTime($dataC1['created_dt']), 'd-M-Y');
					?>


						<li>
							<div class="media wow fadeInDown"> <a class="media-left" href="?menu=detailarticle&id=<?php echo $dataC1['kode'] ?>"><img src="admin/images/Article/<?php echo $dataC1['picture'] ?>" alt=""></a>
								<div class="media-body">
									<h4 class="media-heading"><a href="?menu=detailarticle&id=<?php echo $dataC1['kode'] ?>">
											<h5 style="line-height: 1.1;"><?php echo $dataC1['title'] ?> </h5>
										</a></h4>
									<div class="comments_box">
										<i class="fa fa-calendar"></i> <?php echo $dateC1 ?> &nbsp;
										<i class="fa fa-eye"></i> <?php echo $dataC1['views'] ?> Views &nbsp;
										<i class="fa fa-comments"></i> <?php echo $dataC1['c_comment'] ?> Comments<br>
										<span class="meta_more"><a href="?menu=detailarticle&id=<?php echo $dataC1['kode'] ?>">Read More...</a></span>
									</div>

								</div>
							</div>
						</li>
					<?php } ?>
				</ul>
				    
<!--
					<ul class="catg1_nav">
						<?php

						$sqlMan = "SELECT a.*, ac.category_name FROM article a 
								join article_category ac on ac.id_category = a.id_category 
									where a.id_category =5
									order by id_article desc limit 3";
						$resultMan = mysqli_query($koneksi, $sqlMan);
						$dateMan = "";

						while ($dataMan = mysqli_fetch_array($resultMan)) {

							$dateMan = date_format(new DateTime($dataMan['created_dt']), 'd-M-Y');
						?>

							<li>
								<div class="catgimg_container"> <a href="?menu=detailarticle&id=<?php echo $dataMan['kode'] ?>" class="catg1_img"><img alt="" src="admin/images/Article/<?php echo $dataMan['picture'] ?>"></a></div>
								<div class="post-meta" style="padding:5px 0px 0px 0px; margin-bottom:0px; color:#BDB76B;">
									<i class="fa fa-calendar"></i> <?php echo $dataMan ?> &nbsp;
									<i class="fa fa-eye"></i> <?php echo $dataMan['views'] ?> Views &nbsp;
									<i class="fa fa-comments"></i> <?php echo $dataMan['comments'] ?> Comments
								</div>
								<h3 class="post_titile"><a href="?menu=detailarticle&id=<?php echo $dataMan['kode'] ?>"><?php echo $dataMan['title'] ?></a></h3>
							</li>
						<?php } ?>
					</ul>-->
				</div>
			</div>
		</div>
	</div>
</section>



<!-- ALTERNATIVE SECTION -->
<!-- insert "sec-alternative" class into section tag -->


<!-- VIDEO 
    <div class="page-section-no-padding  video-container" style="background-image: url(http://placehold.it/1920x1080); background-size: cover;">
        <div class="video-content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 ">
                        SEE HOW
                        <a class="fancybox-media vide-icon" href="http://www.youtube.com/watch?v=opj24KnzrWo"><i class=" fa fa-play-circle-o"></i></a> WE WORK
                    </div>
                </div>
            </div>
        </div>
    </div>

	-->


<script>
	function signOut() {
		alert("huu");
		formData = new FormData();



		var auth2 = gapi.auth2.getAuthInstance();
		auth2.signOut().then(function() {});
		auth2.disconnect();

		$.ajax({
			url: "logout.php",
			method: "POST",
			data: {},
			data: formData,
			processData: false,
			contentType: false,
			success: function(data) {
				showSuccessMesgGrowl("Loguot successfully");
				window.location.href = "index.php";
				onLoadCallback();
			}
		});

	}

	function onLoad() {
		gapi.load('auth2', function() {
			gapi.auth2.init();
		});
	}
</script>