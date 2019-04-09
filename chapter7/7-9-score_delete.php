<?
   $connect = mysql_connect("localhost","root","apmsetup");
   mysql_select_db("phpprogram", $connect);

   // 필드 num이 $num 값을 가지는 레코드 삭제
   $sql = "delete from stud_score where num = $_GET[num]";
   mysql_query($sql, $connect);

   mysql_close($connect);

   // 7-8-score_list.php 로 돌아감
   Header("Location:7-8-score_list.php");
?>
<script>
   location.href="7-8-score_list.php";
   history.go(-1);
</script>
 
