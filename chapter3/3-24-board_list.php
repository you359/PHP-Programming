<html>
<body>
<h3>▶ 게시판 목록보기</h3>
<!-- border는 해당 태그의 경계선을 의미하고, 1로 설정하면 두께가 1인 경계선을 표시함을 명시 -->
<!-- width는 해당 태그의 너비를 의미하고, 600으로 설정하면 테이블의 너비를 600px로 설정함 -->
<table border='1' width='600'>
    <tr bgcolor='#ccccc' align='center'><td>번호</td><td>제목</td><td>글쓴이</td><td>날짜</td></tr>
    <?PHP
    /* for문 예제 : 게시판 목록 보기
     */

    $num = 1;
    $name = "홍길동";
    $date = "2013/03/10";

    for($i=1; $i<=10; $i++)
    {
        $title = "게시판 제목 ".$num;

        echo "<tr><td width='50' align='center'>$num</td><td>$title</td>
                      <td width='50'>$name</td><td width='80'>$date</td></tr>";

        $num++;
    }
    ?>
</table>
</body>
</html>