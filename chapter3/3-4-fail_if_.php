<?PHP
/* if문 예제 : 자격증 시험 합격 판정
 * 논리 연산
 */

$pilgi = 95;
$silgi = 55;
$result = "합격";

if($pilgi < 70 || $silgi < 80 ) //만약 필기 시험 점수가 70점 이하이거나, 실기 시험 점수가 80점 이하인 경우
{
    $result = "불합격";
}

echo "필기 점수 : $pilgi, 실기점수 : $silgi<br>";
echo "결과 : $result";
?>
