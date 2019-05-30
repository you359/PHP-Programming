<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-05-30
 * Time: 오후 4:32
 */

/*
 * $_POST 나 $_GET 은 일종의 POST로 전달된 파라미터의 배열이라고 생각할 수 있다.
 * 다음은 $_POST나 $_GET 에 포함된 element 들을 모두 출력하는 php 코드이다.
 * 참고 링크 : http://mwultong.blogspot.com/2007/05/php-print-echo-array.html
 */

echo "=== var_dump(POST) =================<br /><br /><br />\n\n\n";

echo "<pre>\n";
var_dump($_POST);
echo "</pre>\n";

echo "=== print_r(POST) =================<br /><br /><br />\n\n\n";

echo "<pre>\n";
print_r($_POST);
echo "</pre>\n";

echo "=== var_dump(GET) =================<br /><br /><br />\n\n\n";

echo "<pre>\n";
var_dump($_GET);
echo "</pre>\n";

echo "=== print_r(GET) =================<br /><br /><br />\n\n\n";

echo "<pre>\n";
print_r($_GET);
echo "</pre>\n";

?>