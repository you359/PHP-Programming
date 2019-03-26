<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
    $connect = mysql_connect("localhost","kyj","1111");
    $db_con = mysql_select_db("kyj_db", $connect);

    $sql = "select * from membership;";
    $result = mysql_query($sql,$connect);

    $number = 1;
?>
<h2>▶ mysql_fetch_array()를 이용한 데이터 읽기</h2>
<table width= "800" border="1" cellpadding="10">
<tr align="center">
<td bgcolor="#cccccc">일련번호</td>
<td bgcolor="#cccccc">아이디</td>
<td bgcolor="#cccccc">이름</td>
<td bgcolor="#cccccc">우편번호</td>
<td bgcolor="#cccccc">주소</td>
<td bgcolor="#cccccc">전화번호</td>
<td bgcolor="#cccccc">나이</td>
</tr>
<?
   while ( $row = mysql_fetch_array($result)) 
   {
      echo "
	  <tr>
	  <td> $number </td>
          <td> $row[id] </td>
          <td> $row[name] </td>
          <td> $row[post_num] </td>
          <td> $row[address] </td>
          <td> $row[tel] </td>
          <td> $row[age] </td>
          </tr>
         ";
      $number++;
   }

   mysql_close();
?>
</table>