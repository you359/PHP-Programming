<?PHP
/* 함수 예제 : 인자가 세 개인 함수
 *
 */

function bbb($a, $b, $c)
        {
                $d = $a + $b - $c;
                return $d;
        }

        $i=500;
        $j=200;
        $k=300;
        $m = bbb($i, $j, $k);
        echo $m;
?> 