<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019-05-02
 * Time: 오후 2:40
 */

include "../server_conn/conn.php";

$id = $_POST[id];
$pw = $_POST[pw];

$sql = "select * from user where id='$id'";
$result = mysql_query($sql, $conn);

$row = mysql_fetch_array($result);

if($row) {
    if($pw == $row[pw]) {
        // Login Success
        $_SESSION[id] = $id;
    } else {
        // Login Failed
        echo "<script>alert('비밀번호가 일치하지 않습니다.')</script>";
    }

} else {
    echo "<script>alert('아이디가 없습니다.')</script>";
}

echo "<script> location.replace('../index.php'); </script>"
?>