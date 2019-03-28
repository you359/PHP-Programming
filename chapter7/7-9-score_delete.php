<?
   $connect = mysql_connect("localhost","kyj","1111");
   mysql_select_db("kyj_db", $connect);

   // 필드 num이 $num 값을 가지는 레코드 삭제
   $sql = "delete from stud_score where num = $_GET[num]";
   mysql_query($sql, $connect);

   mysql_close($connect);


?>
<script>
   // 7-8-score_list.php 로 돌아감
   location.href = "7-8-score_list.php"
</script>
 
