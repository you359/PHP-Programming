<?PHP
/* 함수 예제 : 함수를 이용한 두 수의 합 계산(합수의 반환값이 있는 경우)
 * return
 */

function plus($a, $b)
{
        $c = $a + $b;

        return $c;
}

$result = plus(15, 25);
echo $result."<br>";

$result = plus(3500, 1500);
echo $result;
?> 