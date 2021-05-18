
<?php
include "koneksi.php";
$list = array();
$sql = "
    select category_name as name
        , sum(VIEWS) as y
    from article_category ac
        join article a on a.id_category = ac.id_category
       group by category_name

";

$result = mysqli_query($koneksi, $sql);
while ($data = mysqli_fetch_array($result)) {
    $list['name'] = "Article";
    $list['type'] = "column";
    $list['colorByPoint'] = true;
    $list['showInLegend'] = true;
    $list['categories'][] = array($data[0]);
    $list['data'][] = array('name' => $data[0], 'y' => $data[1]);
}
$result = array();
array_push($result, $list);
// echo json_encode($list);
print json_encode($result, JSON_NUMERIC_CHECK);
?>

