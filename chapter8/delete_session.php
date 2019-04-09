<?
   session_start();

   unset($_SESSION['userid']);
   unset($_SESSION['username']);
   unset($_SESSION['time']);
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<h3>▶ 세션의 삭제</h3>
<table width="400" border="1">
<tr><td>아이디</td><td>이름</td><td>현재시간</td></tr>
<tr>
    <td><?=$_SESSION['userid'] ?> &nbsp;</td>
    <td><?=$_SESSION['username'] ?> &nbsp;</td>
    <td><?=$_SESSION['time'] ?> &nbsp;</td>
</tr>
</table>
</body>
</html>
