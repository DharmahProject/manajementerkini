<script src="../vendor/jquery/jquery.min.js"></script>

 <div id="page-wrapper">
			
		<?php
		if($_GET['menu']=="index")
		{
			include "home.php";
		}
		else if($_GET['menu']=="articlecategory")
		{
			include "articlecategory.php";
		}
		else if($_GET['menu']=="articledata")
		{
			include "articledata.php";
		}
		else if($_GET['menu']=="adminuser")
		{
			include "admin.php";
		}
		else if($_GET['menu']=="setting")
		{
			include "setting.php";
		}
		else if($_GET['menu']=="addarticle")
		{
			include "addarticle.php";
		}
		else if($_GET['menu']=="mail")
		{
			include "mail.php";
		}
		else if($_GET['menu']=="newcomment")
		{
			include "newcomment.php";
		}
		else if($_GET['menu']=="newreply")
		{
			include "newreply.php";
		}
		else
		{
			include "home.php";
		}
	
	
	?>
</div>