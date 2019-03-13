<?PHP
/* 함수 예제 : 함수를 이용한 만 나이 계산
 *
 */

/* 오늘 날짜와 생년월일에 따라
    만 나이 계산하기  */

function man_age($year, $month, $day,
				 $b_year, $b_month, $b_day)
{
	if($b_month < $month)
		$age= $year - $b_year;
	else if($b_month == $month)
	{
		if($b_day <= $day)
			$age= $year - $b_year;
		else
			$age= $year - $b_year - 1;
	}
	else
	{
		$age= $year - $b_year - 1;
	}
	return $age;
}

// 예시에서는 현재 일자를 2013년 3월 10일로 가정했지만,
// 일반적인 경우, date([format]) 함수 사용
//$now_year = date('Y');
//$now_month = date('m');
//$now_day = date('d');
$now_year=2013;
$now_month=2;
$now_day=10;

$birth_year=1993;
$birth_month=2;
$birth_day=9;

$your_age = man_age($now_year, $now_month, $now_day,
	$birth_year, $birth_month,
	$birth_day);

echo "오늘 날짜 : $now_year 년 $now_month 월 $now_day 일<br>";
echo "생년월일 : $birth_year 년 $birth_month 월 $birth_day 일생<br>";
echo "만 나이 : $your_age 세";
?>
