
<?php
include "koneksi.php";
$list = array();
$sql = "
select name, round((y/n)*100,2) as y from (
    select category_name as name
        , sum(VIEWS) as y
        ,(select sum(views) from article) as n
    from article_category ac
        join article a on a.id_category = ac.id_category
       group by category_name
 )a
";

$result = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_array($result)) {
	$list['name'] = "Article";
	$list['data'][] = array('name' => $data[0], 'y' => $data[1]);
}
$result = array();
array_push($result, $list);
// echo json_encode($list);
print json_encode($result, JSON_NUMERIC_CHECK);
?>

