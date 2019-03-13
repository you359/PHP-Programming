<?PHP
/* 배열 예제 : 2차원 배열을 이용한 합계와 평균 계산
 * array( array(초기값), array(초기값), ... )
 * count() 함수를 이용하면, 배열의 크기를 얻을 수 있음!
 */

// 2차원 배열을 이용한 3명의 학생에 대한 4과목 합계와 평균

$score = array( array(88, 98, 96, 77, 63), array(86, 77, 66, 86, 93),
	array(74, 83, 95, 86, 97) );

// 입력된 성적과 배열 인덱스 출력

for ($i=0; $i<count($score); $i++)
{
	for ($j=0; $j<count($score[$i]); $j++)
		echo "\$score[$i][$j] = ".$score[$i][$j]."<br>";

	echo "<br>";
}

// 3명에 대한 과목의 합계와 평균
for($i=0; $i<count($score); $i++)
{
	$sum=0;

	for($j=0; $j<count($score[$i]); $j++)
		$sum = $sum + $score[$i][$j];

	$avg = $sum/count($score[$i]);
	$student_num = $i + 1;
	echo("$student_num 번째 학생의 점수 => 합계 : $sum,  
                  평균 : $avg <br>");
}
?>

