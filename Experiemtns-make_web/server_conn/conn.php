<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 2019-05-02
 * Time: ¿ÀÈÄ 3:25
 */

session_start();

$conn = mysql_connect("localhost", "root", "apmsetup");
mysql_select_db("makeweb", $conn);

?>