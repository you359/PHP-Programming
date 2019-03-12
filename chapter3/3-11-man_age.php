<?PHP
/* if문 예제 : 만 나이 계산
 *
 * 출생월이 3월 이전, 1~2월인 경우, 나이 = 현재년도 - 출생년도
 * 출생월이 3월인 경우,
 *   출생일이 10일 이전이거나 그 이전, 즉 1~10일인 경우, 나이 = 현재년도 - 출생년도
 *   출생일이 10일 이후, 즉 11~31일 경우, 나이 = 현재년도 - 출생년도 - 1
 * 출생월이 3월 이후인 경우, 나이 = 현재년도 - 출생년도 - 1
 */

//2013년 3월 10일을 기준으로 생년월일에 따라 만 나이 계산하기

// 예시에서는 현재 일자를 2013년 3월 10일로 가정했지만,
// 일반적인 경우, date([format]) 함수 사용
//$now_year = date('Y');
//$now_month = date('m');
//$now_day = date('d');
$now_year=2013;
$now_month=3;
$now_day=10;

$birth_year=1990;
$birth_month=3;
$birth_day=30;

if($birth_month < $now_month)
	$age= $now_year - $birth_year;
else if($birth_month == $now_month)
{
	if($birth_day <= $now_day)
		$age= $now_year - $birth_year;
	else
		$age= $now_year - $birth_year-1;
}
else
	$age= $now_year - $birth_year-1;

echo "오늘 날짜 : $now_year 년 $now_month 월 $now_day 일<br>";
echo "생년월일 : $birth_year 년 $birth_month 월 $birth_day 일생<br>";
echo "만 나이 : $age 세";
?>
