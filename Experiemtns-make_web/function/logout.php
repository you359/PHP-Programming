<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-05-07
 * Time: 오전 8:42
 */

session_start();

unset($_SESSION[id]);
unset($_SESSION[pw]);

echo "<script> location.replace('../index.php'); </script>"
?>