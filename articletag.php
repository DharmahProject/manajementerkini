<?php
	include "koneksi.php";
	session_start();		
	$tags = $_GET['tags'];
?>

<style>
	h4 {
		font-size:18px;
		line-height:1.2
		
	}
	
	.hideEnd { display: none}

	h1:hover{ color:#BDB76B }
	
	.badge{
		background-color:orange
		
	}
</style>

<!-- article category-->
<div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li ><a style="color:#fff" href="index.php"> <i class="fa fa-home"></i> &nbsp; Home</a></li>
                        <li ><a style="color:#fff" href="#">Article</a></li>
						<li ><a style="color:#fff" href="#"> Tag</a></li>
                        <li><?php echo $_GET['tags'] ?></li>
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
						
                <div class="col-md-8">
					<div id="response">
					
						<?php
							
							$sql1 = "SELECT a.*,
								(select count(1) from comments where id_article = a.id_article and status ='1') c_comment
							 FROM article a 
										join article_category ac on ac.id_category = a.id_category 
										where tags = '$tags'
											order by a.created_dt desc limit 1";
							$result1 = mysqli_query($koneksi, $sql1); 
							$dateStr1="";
							$date1Str1="";
							
							$data1 = mysqli_fetch_array($result1);
							
							if(mysqli_num_rows($result1) < 1)  {
								echo "";
							}
							else
							{
								$date1Str1 = date_format (new DateTime($data1['created_dt']), 'd-M-Y h:i:s');
							
						?>
							
							<div class="blog-listing">
							<article >
								
								<a href="?menu=detailarticle&id=<?php echo $data1['kode'] ?>"><h1 style="color:#000"><?php echo $data1['title'] ?></h1></a>
								<hr class="title-underline">
									<div class="post-meta" style="padding-top:15px; color:#BDB76B" >
										<i class="fa fa-calendar"></i> <?php echo $date1Str1 ?> &nbsp;
										<i class="fa fa-user"></i> By : <?php echo $data1['author'] ?> &nbsp;
										<i class="fa fa-eye"></i> <?php echo $data1['views'] ?> Views &nbsp;
										<i class="fa fa-comments"></i> <?php echo $data1['c_comment'] ?> Comments
									</div>
								<p >
									<span><?php  echo substr($data1['content'],0,700)  ?> ... </span>
									<a href="?menu=detailarticle&id=<?php echo $data1['kode'] ?>" class="btn btn-xs btn-primary pull-right">Read more...</a>
								</p>
								<img class="img-thumbnail" src="admin/images/Article/<?php  echo $data1['picture'] ?>" style="margin-top:10px">
							</article>
						</div>
							
							
						<?php
							}
						?>
						
						<hr>
						<div class='row blog-listing'>
						<?php
							
							$sql = "SELECT a.*,
								(select count(1) from comments where id_article = a.id_article and status ='1') c_comment
							 FROM article a 
										join article_category ac on ac.id_category = a.id_category 
										where tags = '$tags'
											and id_article != (
												SELECT a.id_article FROM article a 
													join article_category ac on ac.id_category = a.id_category 
														where tags = '$tags'
															order by a.created_dt desc limit 1
											)
											order by a.created_dt desc limit 2";
							$result = mysqli_query($koneksi, $sql); 
							$no_urut =0;
							$dateStr="";
							$date1Str="";
							
							if(mysqli_num_rows($result) < 1)  {
								echo "";
							}
							else
							{
							
							
							while ($data = mysqli_fetch_array($result)) {
								
								if ($data['changed_dt'] != null && $data['changed_dt'] != '0000-00-00')
								{
									$dateStr = date_format (new DateTime($data['changed_dt']), 'd-M-Y h:i:s');
								}
								
								$date1Str = date_format (new DateTime($data['created_dt']), 'd-M-Y h:i:s');
								
							
						?>
								
								<div class="col-md-6">
									<article >
										
										<a href="?menu=detailarticle&id=<?php echo $data1['kode'] ?>"><h2 style="color:#000"><?php echo $data['title'] ?></h2></a>
										<hr class="title-underline">
											<div class="post-meta" style="padding-top:15px; color:#BDB76B" >
												<i class="fa fa-calendar"></i> <?php echo $date1Str ?> &nbsp;
												<i class="fa fa-user"></i> By : <?php echo $data['author'] ?> &nbsp;<br>
												<i class="fa fa-eye"></i> <?php echo $data['views'] ?> Views &nbsp;
												<i class="fa fa-comments"></i> <?php echo $data['c_comment'] ?> Comments
											</div>
										
										<div style="min-height:85px">
										<p>
											<span><?php  echo strip_tags(substr($data['content'],0,200))  ?> ... </span>
											<a href="?menu=detailarticle&id=<?php echo $data1['kode'] ?>" class="btn btn-xs btn-primary pull-right">Read more...</a>
										</p>
										</div>
										<img class="img-thumbnail" src="admin/images/Article/<?php  echo $data['picture']  ?>" style="">
										
									</article>
								</div>
							
							
							<?php }
							}
							?>
						   </div>
					</div>	
						<input type="hidden" id="pageno" value="1">
						<input type="hidden" id="txtCategory" value="<?php echo $_GET['tags'] ?>">
						<div class="text-center">
							<img id="loader" src="img/load1.gif">
						</div>
						
						<div class="text-center hideEnd" id="endPage" style="padding:15px">
							-- End of page --
						</div>
				</div>
					


                <!-- Sidebar -->
                <div class="col-md-4">
                    <aside class="sidebar">
					<!--
                        <div class="widget">
                            <form>
                                <div class="input-group input-group-lg">
                                    <input class="form-control" placeholder="Search..." name="s" id="s" type="text">
                                    <span class="input-group-btn"><button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-search"></i></button></span>
                                </div>
                            </form>
                        </div>
						-->
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
						<br>-->
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
													(select count(1) from comments where id_article = a.id_article and status ='1') c_comment
												 FROM article a 
															join article_category ac on ac.id_category = a.id_category 
																where a.created_dt  >= CURDATE() - INTERVAL 30 DAY
																order by created_dt desc limit 5";
												$result2 = mysqli_query($koneksi, $sql2); 
												$no_urut2 =0;
												$dateStr2="";
												$date1Str2="";
												
												if(mysqli_num_rows($result2) < 1)  {
													echo "";
												}
												else
												{
												
												while ($data2 = mysqli_fetch_array($result2)) {
													
													if ($data2['changed_dt'] != null && $data2['changed_dt'] != '0000-00-00')
													{
														$dateStr2 = date_format (new DateTime($data2['changed_dt']), 'd-M-Y');
													}
													
													$date1Str2 = date_format (new DateTime($data2['created_dt']), 'd-M-Y');
											?>
											
											<li class="post">
                                                <div class="post-image">
                                                    <div class="img-thumbnail">
                                                        <a href="?menu=detailarticle&id=<?php echo $data2['kode'] ?>">
                                                            <img style="width:100px; max-height:60px" class="" src="admin/images/Article/<?php  echo $data2['picture']  ?>">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="?menu=detailarticle&id=<?php echo $data2['kode'] ?>"><h6 style="line-height: 18px;"><?php echo $data2['title'] ?></h6></a>
                                                    <div class="post-meta" style="color:#666">
                                                        <?php echo $date1Str2 ?>&nbsp; &#9900; &nbsp; <?php echo $data2['c_comment'] ?> Comments  <br>
                                                    </div>
                                                </div>
                                            </li>
                                            
												<?php } } ?>
                                        </ul>
                                    </div>
                                    <div class="tab-pane" id="recentPosts">
                                        <ul class="post-list">
                                            
											<?php
							
												$sql3 = "SELECT a.*, ac.category_name,
													(select count(1) from comments where id_article = a.id_article and status ='1') c_comment
												 FROM article a 
															join article_category ac on ac.id_category = a.id_category 
																where a.created_dt  >= CURDATE() - INTERVAL 30 DAY
																order by created_dt desc limit 5";
												$result3 = mysqli_query($koneksi, $sql3); 
												$no_urut3 =0;
												$dateStr3="";
												$date1Str3="";
												
												if(mysqli_num_rows($result3) < 1)  {
													echo "";
												}
												else
												{
												
												while ($data3 = mysqli_fetch_array($result3)) {
													
													if ($data3['changed_dt'] != null && $data3['changed_dt'] != '0000-00-00')
													{
														$dateStr3 = date_format (new DateTime($data3['changed_dt']), 'd-M-Y');
													}
													
													$date1Str3 = date_format (new DateTime($data3['created_dt']), 'd-M-Y');
											?>
											
											<li class="post">
                                                <div class="post-image">
                                                    <div class="img-thumbnail">
                                                        <a href="?menu=detailarticle&id=<?php echo $data3['kode'] ?>">
                                                            <img style="width:100px; max-height:60px" class="" src="admin/images/Article/<?php  echo $data3['picture']  ?>">
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="post-info">
                                                    <a href="?menu=detailarticle&id=<?php echo $data3['kode'] ?>"><h6 style="line-height: 18px;"><?php echo $data3['title'] ?></h6></a>
                                                    <div class="post-meta" style="color:#666">
                                                        <?php echo $date1Str3 ?>  &nbsp; &#9900; &nbsp; <?php echo $data3['c_comment'] ?> Comments														
                                                    </div>
													
													
                                                </div>
                                            </li>
                                            
												<?php } } ?>
												

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
                        
                    </aside>
                </div>
            </div>
        </div>
    </section>
	
	
	<script>
		
         $(document).ready(function(){
			
			 $("#datepicker").zabuto_calendar(
				{
				   today: true
				}			 
			 );
			 
			 
             $('#loader').on('inview', function(event, isInView) {
				 
				 setTimeout(function () {
						
					if (isInView) {
                     var nextPage = parseInt($('#pageno').val()) +1;
					 var cat = $("#txtCategory").val();
                     $.ajax({
                         type: 'POST',
                         url: 'paginationtag.php',
                         data: { pageno: nextPage,
								 cat : cat
						 },
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