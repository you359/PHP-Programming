<html>
<body>
<h5>▶ 섭씨를 화씨로 변경</h5>
<table border='1'width='300'>   
<tr align='center'><td width'150'>섭씨</td><td>화씨</td></tr>
<?
    	for ($c=-15; $c<=35; $c=$c+5)
    	{
       	    $f = $c * 9 / 5 + 32;
       	    echo "<tr align='center'><td>$c</td><td>$f</td></tr>";
	}
?>
</table>
</body>
</html>

