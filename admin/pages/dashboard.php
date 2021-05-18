<?PHP
error_reporting(0);
include 'koneksi.php';
session_start();
//session_register("USERNAME");
if (!isset($_SESSION['USERNAME']) || !isset($_SESSION['NAMA']) || !isset($_SESSION['EMAIL'])) {
    echo "<script>document.location.href='index';</script>";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../images/icon.png">
    <title>ManajemenTerkini - Administrator</title>
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="../vendor/bootstrap/css/dataTables.bootstrap.css" rel="stylesheet">
    <link href="../vendor/metisMenu/metisMenu.min.css" rel="stylesheet">
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" type="text/css" href="../source/jquery.fancybox.css" media="screen" />


    <style>
        .table>thead>tr>th {
            padding: 5px;
            vertical-align: middle;
            text-align: center
        }
    </style>


</head>

<body style="font-size:13px">

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="">Administrator Pages</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <li><a href="logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                    <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <?php include "nav.php" ?>
            <?php include "content.php" ?>

    </div>
    <!-- /#wrapper -->

    <div style="width:100%; background-color: #f8f8f8; height:25px; border:solid 1px #e7e7e7 ;text-align:center; padding:0; color:#337ab7; font-size:12px; bottom:0; margin:0">
        Copyright &copy 2021 Manajemen Terkini</div>


    <!-- jQuery -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>




    <script src="../dist/js/sb-admin-2.js"></script>
    <script type="text/javascript" src="ckeditor/ckeditor.js"></script>
    <script type="text/javascript" src="ckeditor/adapters/jquery.js"></script>
    <script type="text/javascript" src="../source/jquery.fancybox.pack.js"></script>
    <script src="../js/jquery.dataTables.js"></script>
    <script src="../js/dataTables.bootstrap.js"></script>
    <script src="../js/dataTables.fixedColumns.min.js"></script>
    <script src="../js/jquery.bootstrap-growl.js"></script>
    <script src="../vendor/metisMenu/metisMenu.min.js"></script>





</body>

</html>