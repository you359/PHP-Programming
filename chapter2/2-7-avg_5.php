<?
   	$kor = 85;   	// 국어 점수
	$eng = 90;  	// 영어 점수
  	$math = 98;  	// 수학 점수
	$soc = 80;  	// 사회 점수
 	$sci = 90;   	// 과학 점수

	$sum = $kor + $eng + $math + $soc + $sci; 	// 5과목의 합계 구하기

        $avg = $sum / 5;

        echo "국어 : $kor, 영어 : $eng, 수학 : $math, 사회 : $soc, 과학 : $sci <br>";
        echo "합계 : $sum, 평균 : $avg";
?>
