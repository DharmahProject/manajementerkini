<?PHP
error_reporting(0);
session_start();
//session_register("USERNAME");
if (!isset($_SESSION['USERNAME']) || !isset($_SESSION['NAMA']) || !isset($_SESSION['EMAIL'])) {
	echo "<script>document.location.href='index.php';</script>";
}

?>
<div class="row">
	<div class="col-lg-4">
		<h3 class="page-header">Dashboard</h3>
	</div>
	<div class="col-lg-8">
		<h3 class="page-header" style="font-weight:bolder; color:rgb(51, 122, 183)" align="right">
			MANAJEMEN TERKINI
		</h3>
	</div>
	<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-4 col-md-6">
		<div class="panel panel-primary">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-commenting fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<?php
							include "koneksi.php";
							$sql = "SELECT count(*) as jumlah FROM comments where new_status ='0'  "; // query silahkan disesuaikan
							$result = mysqli_query($koneksi, $sql); // eksekusi query

							$data = mysqli_fetch_assoc($result);

							echo "$data[jumlah]";
							?>
						</div>
						<div>New Comment</div>
					</div>
				</div>
			</div>
			<a href="?menu=newcomment">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<!--
	<div class="col-lg-3 col-md-6">
		<div class="panel panel-yellow">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-comments-o fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
						<?php
						include "koneksi.php";
						$sql = "SELECT count(*) as jumlah FROM comments_detail where status ='0' "; // query silahkan disesuaikan
						$result = mysqli_query($koneksi, $sql); // eksekusi query

						$data = mysqli_fetch_assoc($result);

						echo "$data[jumlah]";
						?>
						</div>
						<div>New Comment Reply</div>
					</div>
				</div>
			</div>
			<a href="?menu=newreply">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	-->
	<div class="col-lg-4 col-md-6">
		<div class="panel panel-green">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-envelope-o fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<?php
							include "koneksi.php";
							$sql = "SELECT count(*) as jumlah FROM saran_komentar where status='0'"; // query silahkan disesuaikan
							$result = mysqli_query($koneksi, $sql); // eksekusi query

							$data = mysqli_fetch_assoc($result);


							echo "$data[jumlah]";

							?>

						</div>
						<div>New Mail</div>
					</div>
				</div>
			</div>
			<a href="?menu=mail">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>
	<div class="col-lg-4 col-md-6">
		<div class="panel panel-red">
			<div class="panel-heading">
				<div class="row">
					<div class="col-xs-3">
						<i class="fa fa-lock fa-5x"></i>
					</div>
					<div class="col-xs-9 text-right">
						<div class="huge">
							<?php
							include "koneksi.php";
							$sql = "SELECT count(*) as jumlah FROM admin"; // query silahkan disesuaikan
							$result = mysqli_query($koneksi, $sql); // eksekusi query

							$data = mysqli_fetch_assoc($result);

							echo "$data[jumlah]";
							?>
						</div>
						<div>User Admin</div>
					</div>
				</div>
			</div>
			<a href="?menu=adminuser">
				<div class="panel-footer">
					<span class="pull-left">View Details</span>
					<span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
					<div class="clearfix"></div>
				</div>
			</a>
		</div>
	</div>

</div>
<!-- /.row -->
<div class="row">
	<div class="col-lg-12">
		<div class="panel panel-default">
			<div class="panel-heading">
				<b>Manajemen Terkini Chart</b>
				<div class="pull-right">
				</div>
			</div>
			<!-- /.panel-heading -->
			<div class="panel-body">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-6">
						<div id="chartContainer" style="height: 300px; width: 100%;"></div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-6">
						<div id="chartContainer2" style="height: 300px; width: 100%;"></div>
					</div>

					<div class="col-xs-12 col-sm-12 col-md-12">
						<div id="chartContainer1" style="height: 300px; width: 100%;"></div>
					</div>


				</div>
			</div>
			<!-- /.panel-body -->
		</div>
		<!-- /.panel -->


	</div>
	<!-- /.col-lg-8 -->

</div>
<!-- /.row -->


<script src="../highchart/code/highcharts.js"></script>
<script src="../highchart/code/modules/exporting.js"></script>


<script type="text/javascript">
	var chart;
	var chartView;
    var chartLine;
	
	$(document).ready(function() {

		$.getJSON("chartmostview.php", function(json) {
			chart = Highcharts.chart('chartContainer', {
				chart: {
					plotBackgroundColor: null,
					plotBorderWidth: null,
					plotShadow: false,
					type: 'pie',
				},
				credits: {
					enabled: false
				},
				title: {
					text: 'Most Interest Article'
				},
				tooltip: {
					pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
				},
				accessibility: {
					point: {
						valueSuffix: '%'
					}
				},
				plotOptions: {
					pie: {
						allowPointSelect: true,
						cursor: 'pointer',
						dataLabels: {
							enabled: true,
							format: '<b>{point.name}</b>: {point.percentage:.1f} %'
						}
					}
				},
				series: json,
			});
		});
	});


	$.getJSON("chartmostline.php", function(json) {
		console.log(json);
		chart = Highcharts.chart('chartContainer1', {
			chart: {
				type: 'area'
			},
			title: {
				text: 'Monthly Viewer'
			},
			credits: {
				enabled: false
			},
			subtitle: {
				text: 'Year : ' + new Date().getFullYear()
			},
			xAxis: {
				categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
				tickmarkPlacement: 'on',
				title: {
					enabled: false
				}
			},
			yAxis: {
				title: {
					text: 'Views'
				},
				labels: {
					/*formatter: function () {
						return this.value / 1000;
					}*/
				}
			},
			tooltip: {
				split: true,
				valueSuffix: ' Views'
			},
			plotOptions: {
				area: {
					stacking: 'normal',
					lineColor: '#666666',
					lineWidth: 1,
					marker: {
						lineWidth: 1,
						lineColor: '#666666'
					}
				}
			},
			series: json
		});
	});

	$.getJSON("chartmostvalview.php", function(json) {
		console.log(json);
		chartView = Highcharts.chart('chartContainer2', {
			title: {
				text: 'Most View'
			},
			credits: {
				enabled: false
			},
			subtitle: {},
			xAxis: {
				categories: json[0].categories
			},

			series: json

		});
	});


	/*
	var canvas = document.getElementById("canvas");
	var ctx = canvas.getContext("2d");
	var radius = canvas.height / 2;
	ctx.translate(radius, radius);
	radius = radius * 0.90
	setInterval(drawClock, 1000);

	function drawClock() {
	  drawFace(ctx, radius);
	  drawNumbers(ctx, radius);
	  drawTime(ctx, radius);
	}

	function drawFace(ctx, radius) {
	  var grad;
	  ctx.beginPath();
	  ctx.arc(0, 0, radius, 0, 2*Math.PI);
	  ctx.fillStyle = 'white';
	  ctx.fill();
	  grad = ctx.createRadialGradient(0,0,radius*0.95, 0,0,radius*1.05);
	  grad.addColorStop(0, '#333');
	  grad.addColorStop(0.5, 'white');
	  grad.addColorStop(1, '#333');
	  ctx.strokeStyle = grad;
	  ctx.lineWidth = radius*0.1;
	  ctx.stroke();
	  ctx.beginPath();
	  ctx.arc(0, 0, radius*0.1, 0, 2*Math.PI);
	  ctx.fillStyle = '#333';
	  ctx.fill();
	}

	function drawNumbers(ctx, radius) {
	  var ang;
	  var num;
	  ctx.font = radius*0.15 + "px arial";
	  ctx.textBaseline="middle";
	  ctx.textAlign="center";
	  for(num = 1; num < 13; num++){
		ang = num * Math.PI / 6;
		ctx.rotate(ang);
		ctx.translate(0, -radius*0.85);
		ctx.rotate(-ang);
		ctx.fillText(num.toString(), 0, 0);
		ctx.rotate(ang);
		ctx.translate(0, radius*0.85);
		ctx.rotate(-ang);
	  }
	}

	function drawTime(ctx, radius){
		var now = new Date();
		var hour = now.getHours();
		var minute = now.getMinutes();
		var second = now.getSeconds();
		//hour
		hour=hour%12;
		hour=(hour*Math.PI/6)+
		(minute*Math.PI/(6*60))+
		(second*Math.PI/(360*60));
		drawHand(ctx, hour, radius*0.5, radius*0.07);
		//minute
		minute=(minute*Math.PI/30)+(second*Math.PI/(30*60));
		drawHand(ctx, minute, radius*0.8, radius*0.07);
		// second
		second=(second*Math.PI/30);
		drawHand(ctx, second, radius*0.9, radius*0.02);
	}

	function drawHand(ctx, pos, length, width) {
		ctx.beginPath();
		ctx.lineWidth = width;
		ctx.lineCap = "round";
		ctx.moveTo(0,0);
		ctx.rotate(pos);
		ctx.lineTo(0, -length);
		ctx.stroke();
		ctx.rotate(-pos);
	}*/
</script>