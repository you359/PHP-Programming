<?
   session_start();

   $id = $_SESSION['userid'];
   $name = $_SESSION['username'];
   $time = $_SESSION['time'];

   $time = date('Y-m-d(H:i:s)', $time);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h3>▶ 등록된 세션의 사용</h3>
<table width="400" border="1">
<tr><td>아이디</td><td>이름</td><td>현재시간</td></tr>
<tr>
    <td><?=$id ?></td>
    <td><?=$name ?></td>
    <td><?=$time ?></td>
</tr>
</table>
</body>
</html>
