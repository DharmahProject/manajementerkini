<style>
	.hideEnd { display: none}

	h1:hover{ color:#BDB76B }
</style>

<!-- article category-->
<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li ><a style="color:#fff" href="index.html">Home</a></li>
                        <li ><a style="color:#fff" href="#">Article</a></li>
                        <li>Latest</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <!-- Right Sidebar Container  -->
    <section class="page-section padding-30">
        <div class="container">
            <div class="row">
                <!-- Content -->
						
                <div class="col-md-9">
					<div id="response">
						<?php
							include "koneksi.php";
							$sql = "SELECT * FROM article order by created_dt desc limit 2";
							$result = mysqli_query($koneksi, $sql); 
							$no_urut =0;
							$dateStr="";
							$date1Str="";
							
							while ($data = mysqli_fetch_array($result)) {
								
								if ($data['changed_dt'] != null && $data['changed_dt'] != '0000-00-00')
								{
									$dateStr = date_format (new DateTime($data['changed_dt']), 'd-M-Y h:i:s');
								}
								
								$date1Str = date_format (new DateTime($data['created_dt']), 'd-M-Y h:i:s');
						?>
								
							<div class="blog-listing" >
							<article >
								
								<a href="?menu=article&id=<?php echo $data['id_article'] ?>"><h1 style="color:#000"><?php echo $data['title'] ?></h1></a>
								<hr class="title-underline">
									<div class="post-meta" style="padding-top:15px; color:#BDB76B" >
										<i class="fa fa-calendar"></i> <?php echo $date1Str ?> &nbsp;
										<i class="fa fa-user"></i> By : <?php echo $data['author'] ?> &nbsp;
										<i class="fa fa-heart-o"></i> <?php echo $data['likes'] ?> Likes &nbsp;
										<i class="fa fa-eye"></i> <?php echo $data['views'] ?> Views &nbsp;
										<i class="fa fa-comments"></i> <?php echo $data['comments'] ?> Comments
									</div>
								
								
								<p >
									<span><?php  echo substr($data['content'],0,700)  ?> ... </span>
									<a href="blog-single-post.html" class="btn btn-xs btn-primary pull-right">Read more...</a>
								</p>
								<img class="img-thumbnail" src="admin/images/Article/<?php  echo $data['picture']  ?>">
							</article>
							</div>
						   <?php } ?>
						   <!--
							<ul class="pagination pagination-lg">
								<li><a href="#">«</a></li>
								<li class="active"><a href="#">1</a></li>
								<li><a href="#">2</a></li>
								<li><a href="#">3</a></li>
								<li><a href="#">»</a></li>
							</ul>
							-->
					</div>	
						<input type="hidden" id="pageno" value="1">
						<div class="text-center">
							<img id="loader" src="img/load1.gif">
						</div>
						
						<div class="text-center hideEnd" id="endPage" style="padding:15px">
							-- End of page --
						</div>
				</div>
					


                <!-- Sidebar -->
                <div class="col-md-3">
                    <aside class="sidebar">
                        <div class="widget">
                            <form>
                                <div class="input-group input-group-lg">
                                    <input class="form-control" placeholder="Search..." name="s" id="s" type="text">
                                    <span class="input-group-btn"><button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button></span>
                                </div>
                            </form>
                        </div>
                        <div class="widget">
                            <h4 class="sidebar-header">Categories</h4>
                              <ul class="nav nav-list">
								<?php
										
										$sql = "SELECT * FROM article_category a ORDER BY id_category";
										
										$result = mysqli_query($koneksi, $sql); 
																		
										while ($data = mysqli_fetch_array($result)) {
										
										
									?>
									<li><a href="?menu=category"><b class="caret-right"></b> <?php echo $data['category_name'] ?></a></li>
									<?php } ?>
							
						
                            </ul>
                        </div>
                        <div class="widget blog-widget">
                            <div class="tabs">
                                <ul class="nav nav-tabs">
                                    <li class="active"><a href="#popularPosts" data-toggle="tab" aria-expanded="true"><i class="fa fa-star"></i> Popular</a></li>
                                    <li class=""><a href="#recentPosts" data-toggle="tab" aria-expanded="false">Recent</a></li>
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="popularPosts">
                                        <ul class="post-list">
                                            <li class="post">
                                                <div class="post-image">
                                                    <div class="img-thumbnail">
                                                        <a href="blog-single-post.html">
                                                            <img src="http://placehold.it/50x50" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="blog-single-post.html">Nullam Vitae Nibh Un Odiosters</a>
                                                    <div class="post-meta">
                                                        Jan 10, 2016
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post-image">
                                                    <div class="img-thumbnail">
                                                        <a href="blog-single-post.html">
                                                            <img src="http://placehold.it/50x50" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="blog-single-post.html">Vitae Nibh Un Odiosters</a>
                                                    <div class="post-meta">
                                                        Jan 10, 2016
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post-image">
                                                    <div class="img-thumbnail">
                                                        <a href="blog-single-post.html">
                                                            <img src="http://placehold.it/50x50" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="blog-single-post.html">Odiosters Nullam Vitae</a>
                                                    <div class="post-meta">
                                                        Jan 10, 2016
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="recentPosts">
                                        <ul class="post-list">
                                            <li class="post">
                                                <div class="post-image">
                                                    <div class="img-thumbnail">
                                                        <a href="blog-single-post.html">
                                                            <img src="http://placehold.it/50x50" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="blog-single-post.html">Lorem Vitae Nibh Un Odiosters</a>
                                                    <div class="post-meta">
                                                        Jan 10, 2016
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post-image">
                                                    <div class="img-thumbnail">
                                                        <a href="blog-single-post.html">
                                                            <img src="http://placehold.it/50x50" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="blog-single-post.html">Lorem Vitae Nibh Un Odiosters</a>
                                                    <div class="post-meta">
                                                        Jan 10, 2016
                                                    </div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="post-image">
                                                    <div class="img-thumbnail">
                                                        <a href="blog-single-post.html">
                                                            <img src="http://placehold.it/50x50" alt="">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="blog-single-post.html">Lorem Odiosters Nullam Vitae</a>
                                                    <div class="post-meta">
                                                        Jan 10, 2016
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget tags">
                            <a href="#">lorem</a> <a href="#">loremipse</a> <a href="#">Esrite</a> <a href="#">remip</a> <a href="#">serte</a> <a href="#">quiaxms</a> <a href="#">loremipse</a> <a href="#">Esrite</a>
                        </div>
                        <div class="widget">
                            <h4 class="sidebar-header">About Us</h4>
                            <p>Nulla nunc dui, tristique in semper vel, congue sed ligula. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. Nulla nunc dui, tristique in semper vel. Nam dolor ligula, faucibus id sodales in, auctor fringilla libero. </p>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </section>
	
	
	<script>
         $(document).ready(function(){
             $('#loader').on('inview', function(event, isInView) {
				 
				 setTimeout(function () {
						
					if (isInView) {
                     var nextPage = parseInt($('#pageno').val()) +1;
                     $.ajax({
                         type: 'POST',
                         url: 'pagination.php',
                         data: { pageno: nextPage },
                         success: function(data){
							 console.log(data)
							 
                             if(!isEmpty(data) && data.length > 10){							 
								 $('#response').append(data);
                                 $('#pageno').val(nextPage);
								 
                             } else {								 
                                 $("#loader").hide();
								 
								 $("#endPage").removeClass("hideEnd");
                             }
                         }
                     });
                 }
						
						
                    }, 500);
             });
         });
		 
		 function isEmpty(arg){
		  return (
			arg == null || // Check for null or undefined
			arg.length === 0 || // Check for empty String (Bonus check for empty Array)
			(typeof arg === 'object' && Object.keys(arg).length === 0) // Check for empty Object or Array
		  );
		}
		 
     </script>