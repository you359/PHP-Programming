<?
   session_start();

   echo "세션 시작!!!<p>";

   $_SESSION['userid'] = "kdhong";
   $_SESSION['username']  = "홍길동";
   $_SESSION['time']    = time();   // time()은 현재 시간

   echo '3개의 세션 변수 등록 완료!!!<br>';

   echo $_SESSION['userid']."<br>";
   echo $_SESSION['username']."<br>";
   echo $_SESSION['time']."<br>";
?> 
<meta charset="utf-8">