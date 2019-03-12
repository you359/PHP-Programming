<!-- for문 예제 : 섭씨를 화씨로 변환 (표 형태 출력) -->
<!-- static하게 출력되는 html echo문은 html로 표시하고, -->
<!-- 부분적으로만 PHP 코드를 사용할 수 있음! -->

<html>
<body>
<h5>▶ 섭씨를 화씨로 변경</h5>
<table border='1'width='300'>
    <tr align='center'><td width'150'>섭씨</td><td>화씨</td></tr>
    <?PHP
    for ($c=-15; $c<=35; $c=$c+5)
    {
        $f = $c * 9 / 5 + 32;
        echo "<tr align='center'><td>$c</td><td>$f</td></tr>";
    }
    ?>
</table>
</body>
</html>

