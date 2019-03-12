<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-03-12
 * Time: 오후 7:04
 */

/* 증감 연산자 동작
 * c언어의 증감 연산자와 동일하게 동작합니다.
 * 변수 앞에 증감 연산자가 붙은 경우, 증감 연산 적용 후 대입
 * 변수 뒤에 증감 연산자가 붙은 경우, 대입 후 증감 연산 작용
 */

$a = 1;
echo "증가 전 출력<br>";
echo $a++ ."<br>";
echo "증가 후 출력<br>";
echo $a ."<br>";

$a = 1;
echo "증가 후 출력<br>";
echo ++$a ."<br>";

?>