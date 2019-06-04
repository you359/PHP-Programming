<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-06-04
 * Time: 오후 9:03
 */

//print_r($_FILES);

echo "<br>";

//print_r($_FILES['userfile']);

echo $_FILES['userfile']['name'][0] ."<br/>";
echo $_FILES['userfile']['name'][1] ."<br/>";

echo $_FILES['userfile']['type'][0] ."<br/>";
echo $_FILES['userfile']['type'][1] ."<br/>";

echo $_FILES['userfile']['tmp_name'][0] ."<br/>";
echo $_FILES['userfile']['tmp_name'][1] ."<br/>";

echo $_FILES['userfile']['size'][0] ."<br/>";
echo $_FILES['userfile']['size'][1] ."<br/>";

?>