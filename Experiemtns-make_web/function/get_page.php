<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-05-14
 * Time: 오전 11:56
 */

include "../server_conn/conn.php";

if(isset($_POST[p])) {
    $current_page = $_POST[p];
} else {
    $current_page = 0;
}

if(isset($_POST[item_per_page])) {
    $item_per_page = $_POST[item_per_page];
} else {
    $item_per_page = 5;
}

$sql = "select count(*) as cnt from galley";
$result = mysql_query($sql, $conn);
$row = mysql_fetch_array($result);
$total_items = $row[cnt];
$total_page = ceil($total_items / $item_per_page);

$start = $current_page * $item_per_page;

$sql = "select * from galley limit $start, $item_per_page";
$result = mysql_query($sql, $conn);

$data_list = array();
while($row = mysql_fetch_array($result)) {
    $data = array(
        "num" => $row['num'],
        "user_id" => $row['user_id'],
        "image_big_url" => $row['image_big_url'],
        "image_thumb_url" => $row['image_thumbs_url'],
        "description" => $row['description'],
        "title" => $row['title']
    );

    array_push($data_list, $data);
}

$return_array = array (
    'total_page' => $total_page,
    'datalist' => $data_list
);

$return_object = (object) $return_array;

echo json_encode($return_object);

?>