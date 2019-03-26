<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
$connect = mysql_connect("localhost","kyj","1111");
$db_con = mysql_select_db("kyj_db", $connect);

$sql = "select * from membership where address like '%서울%' order by age;";
$result = mysql_query($sql,$connect);

$fields=mysql_num_fields($result);

$number = 1;
?>
<h2>▶ mysql_fetch_row()를 이용한 데이터 읽기</h2>
<table width= "800" border="1" cellspacing="0" cellpadding="5">
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
    while ( $row = mysql_fetch_row($result))
    {
        echo "<tr>";
        echo "<td> $number </td>";

        for ($i=0; $i < $fields; $i++)
        {
            echo "<td> $row[$i] </td>";
        }

        echo "<tr>";

        $number++;
    }

    mysql_close();
    ?>
</table>