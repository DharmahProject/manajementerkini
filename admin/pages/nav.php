<div class="navbar-default sidebar" role="navigation">
		<div class="sidebar-nav navbar-collapse">
			<ul class="nav" id="side-menu">
				<li class="sidebar-search">
					<?php
						include "koneksi.php";
						$sql = "SELECT * FROM admin where kd_admin = '$_SESSION[USERNAME]'"; // query silahkan disesuaikan
						$result = mysqli_query($koneksi, $sql); // eksekusi query
						$data=mysqli_fetch_array($result);
						$date= date("d-M-Y");
					?>
				  
					<img src="../images/admin/<?php echo $data[6]?>" width="80px" height="80px" style="border-radius:100%; box-shadow: 0px 1px 10px #999"> <span style="color:#337ab7; font-size:14px; padding-left:5px; top:0; font-weight:bolder;"> 
					Welcome</span>
					<a href="#" style="background-color:#337ab7; border-radius:5px; color:#fff; margin-top:10px">Admin: <?php echo $_SESSION['NAMA'] ?></a>
					<!-- /input-group -->
				</li>
				<li>
					<a href="?menu=index"><i class="fa fa-dashboard fa-fw"></i> &nbsp; Dashboard</a>
				</li>
				<li>
					<a href="?menu=articlecategory"><i class="fa fa-newspaper-o fa-fw"></i> &nbsp; Article Category</a>
				   
				</li>
				<li>
					<a href="?menu=articledata"><i class="fa fa-newspaper-o fa-fw"></i> &nbsp; Article</a>
				   
				</li>				
				<li>
					<a href="?menu=setting"><i class="fa fa-cogs fa-fw"></i> &nbsp; Setting</a>
				</li>
			</ul>
		</div>
		<!-- /.sidebar-collapse -->
	</div>
	<!-- /.navbar-static-side -->
</nav>