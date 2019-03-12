<?PHP
/* if문 예제 : 배수 판별
 * else 문
 */

$besu = 5;	// 대상 숫자

$num = 15;	// 5의 배수인지를 판별하고자 하는 대상 숫자

if ($num % $besu == 0)
{
	//$num을 $besu로 나눈 나머지가 0인 경우
	echo "$num 은(는) $besu 의 배수다.";
}
else
{
	//$num을 $besu로 나눈 나머지가 0이 아닌 경우
	echo "$num 은(는) $besu 의 배수가 아니다.";
}
?>

