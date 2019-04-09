<?
    $a = setcookie("userid", "");
    $b = setcookie("username", "");

    if ($a and $b)
    {
        echo "쿠키 'userid'와 'username' 삭제 완료!";
    }
?> 