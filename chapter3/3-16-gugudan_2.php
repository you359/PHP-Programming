<?
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

