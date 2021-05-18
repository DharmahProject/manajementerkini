<?php
	include "koneksi.php";
	
	$pageno = $_POST['pageno'];
	$cat = $_POST['cat'];

    $no_of_records_per_page = 2;
    $offset = ($pageno-1) * $no_of_records_per_page;

    if (mysqli_connect_errno()){
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
        die();
    }
	
    $sql = "SELECT a.*,
		(select count(1) from comments where id_article = a.id_article and status ='1') c_comment,
		(select count(1) from comments c 
			join comments_detail cd on cd.id_comment = c.id_comment
		where c.status='1' and c.id_article = a.id_article) c_commentd
	 FROM article a
				join article_category ac on ac.id_category = a.id_category 
				where tags = '$cat'
					and id_article != (
											SELECT a.id_article FROM article a 
												join article_category ac on ac.id_category = a.id_category 
													where tags = '$cat'
														order by a.created_dt desc limit 1
										)
			order by a.created_dt desc LIMIT $offset, $no_of_records_per_page";
    $res_data = mysqli_query($koneksi,$sql);

    while($data = mysqli_fetch_array($res_data)){
		if ($data['changed_dt'] != null && $data['changed_dt'] != '0000-00-00')
		{
			$dateStr = date_format (new DateTime($data['changed_dt']), 'd-M-Y h:i:s');
		}
		
		$date1Str = date_format (new DateTime($data['created_dt']), 'd-M-Y h:i:s');
		
		$countComment = $data1['c_comment'] + $data1['c_commentd'];
	?>
	
		<div class="row blog-listing" >
			<div class="col-md-6">
				<article >
					
					<a href="?menu=article&id=<?php echo $data['id_article'] ?>"><h2 style="color:#000"><?php echo $data['title'] ?></h2></a>
					<hr class="title-underline">
						<div class="post-meta" style="padding-top:15px; color:#BDB76B">
							<i class="fa fa-calendar"></i> <?php echo $date1Str ?> &nbsp;
							<i class="fa fa-user"></i> By : <?php echo $data['author'] ?> &nbsp;<br>
							<i class="fa fa-eye"></i> <?php echo $data['views'] ?> Views &nbsp;
							<i class="fa fa-comments"></i> <?php echo $countComment ?> Comments
						</div>
					
					<div style="min-height:85px">
						<p >
							<span><?php  echo strip_tags(substr($data['content'],0,200))  ?>... </span>
							<a href="?menu=detailarticle&id=<?php echo $data['kode'] ?>" class="btn btn-xs btn-primary pull-right">Read more...</a>
						</p>
					</div>
					<img class="img-thumbnail" src="admin/images/Article/<?php  echo $data['picture']  ?>">
				</article>
			</div>
	</div>
	<?php 
	}
?>


