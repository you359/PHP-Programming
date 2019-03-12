<?
	$test1 = 70;	// 획득한 필기 점수
	$test2 = 80;	// 획득한 실기 점수
   	$test3 = 87;	// 획득한 도로주행 점수

        $test1_cut = 70;		// 필기 기준 점수
        $test2_cut = 80;		// 필기 기준 점수
        $test3_cut = 90;		// 필기 기준 점수

	echo "운전면허 시험 합격 기준은<br>";
	echo "필기 점수 $test1_cut 점 이상,<br>";
	echo "실기 점수 $test2_cut 점 이상,<br>";
	echo "도로주행 점수 $test3_cut 점 이상입니다.<br><br>";

	echo "획득한 필기 점수 : $test1 점, 실기 점수 : $test2 점, 도로주행 점수 : $test3 점<br><br>";

       	if ( ($test1 >= $test1_cut) && ($test2 >= $test2_cut) && ($test3 >= $test3_cut) )
	   echo "합격하셨습니다!!!";
	else	
	   echo "죄송하지만 불합격입니다!!!";
?>