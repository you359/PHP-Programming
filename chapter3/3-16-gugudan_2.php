<?PHP
/* while문 예제 : 2단 구구단 표 출력
 * echo문으로 table 구성해서 2단 구구단 표 출력
 * 3-15 예제를 PHP로 출력하기
 *
 * $a를 바꿔서 n단 구구단으로 동적으로 바꿀 수 있음!
 */

$a=2;			// 2단을 만들기 위해 $a에 2를 입력

echo "<html>
	      <body>
	      <h3>2단 구구단 표 만들기</h3>
    	      <table border='1' width='100'>";

$b=1;
while ($b<=9)           // $b는 1부터 9까지
{
	$c = $a * $b;
	echo "<tr><td align='center'>$a x $b = $c</td></tr>";
	$b++;     		// $b 값을 1증가 시킴
}

echo "</table>
	      </body>
              </html>";
?>

