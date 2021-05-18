
<?php
include "koneksi.php";
$list = array();
$sql = "
select monthName, 
(select COALESCE(viewvalue,0) from monthly_view a where DATE_FORMAT(datevalue, '%Y%m') = CONCAT(tb.year,tb.month)) y
 from(
	select 'Jan' monthName, '01' as month, DATE_FORMAT(CURRENT_DATE, '%Y') year union
  	select 'Feb' monthName, '02' as month, DATE_FORMAT(CURRENT_DATE, '%Y') year UNION
  	select 'Mar' monthName, '03' as month, DATE_FORMAT(CURRENT_DATE, '%Y') year UNION
    select 'Apr' monthName, '04' as month, DATE_FORMAT(CURRENT_DATE, '%Y') year UNION
    select 'Mey' monthName, '05' as month, DATE_FORMAT(CURRENT_DATE, '%Y') year UNION
    select 'Jun' monthName, '06' as month, DATE_FORMAT(CURRENT_DATE, '%Y') year UNION
    select 'Jul' monthName, '07' as month, DATE_FORMAT(CURRENT_DATE, '%Y') year UNION
    select 'Aug' monthName, '08' as month, DATE_FORMAT(CURRENT_DATE, '%Y') year UNION
    select 'Sep' monthName, '09' as month, DATE_FORMAT(CURRENT_DATE, '%Y') year union
    select 'Oct' monthName, '10' as month, DATE_FORMAT(CURRENT_DATE, '%Y') year UNION
    select 'Nov' monthName, '11' as month, DATE_FORMAT(CURRENT_DATE, '%Y') year UNION
    select 'Dec' monthName, '12' as month, DATE_FORMAT(CURRENT_DATE, '%Y') year
) as tb
";

$result = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_array($result)) {
    $list['name'] = "Manajemen Terkini Monitoring";
    $list['colorByPoint'] = true;
    $list['showInLegend'] = true;
    $list['categories'][] = array($data[0]);
    $list['data'][] = array($data[1]);
}
$result = array();
array_push($result, $list);
// echo json_encode($list);
print json_encode($result, JSON_NUMERIC_CHECK);
?>

