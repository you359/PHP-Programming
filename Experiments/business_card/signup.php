<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-03-28
 * Time: 오전 11:36
 */

// MySQL 데이터베이스 연걸
$connect = mysql_connect("localhost","kyj","1111");
// DB 선택
mysql_select_db("kyj_db", $connect);

// 동일한 회원 이름이 있는지 확인하기 위해
// select 쿼리 스트링 생성
$sql = "select * from user where name='$_POST[name]'";

// select 쿼리 스트링 실행
$result = mysql_query($sql);

// 쿼리 결과 (레코드) 가져오기
$row = mysql_fetch_array($result);

if(!$row) {
    // 쿼리 결과 (레코드) 가 없는 경우
    // 즉, 입력한 name 이 테이블에 없는 경우에만 회원가입 진행

    // 회원 정보 mysql user 테이블에 입력하기 위한 insert 쿼리 스트링 생성
    $sql = "insert into user(name, password, email, company, side, jop, blog_url, facebook_id, twitter_id, github_id)";
    $sql .= " values ('$_POST[name]', '$_POST[password]', '$_POST[email]', '$_POST[company]', '$_POST[side]', '$_POST[jop]', '$_POST[blog_url]', '$_POST[facebook_id]', '$_POST[twitter_id]', '$_POST[github_id]')";

    $result = mysql_query($sql);

    if (!$result) {
        // insert sql error
        echo "<script> alert('입력 에러!') </script>";
    }

    mysql_close($connect);
} else {
    // select 쿼리 결과 (레코드)가 있는 경우
    // 즉, 입력한 name 이 테이블에 있는 경우, 오류 메시지 출력
    echo "<script> alert('이미 username 이 존재합니다.') </script>";
}

?>

<script>
    location.href = 'login_form.php';
</script>
