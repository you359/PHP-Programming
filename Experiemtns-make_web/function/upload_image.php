<?php
/**
 * Created by PhpStorm.
 * User: kim2
 * Date: 2019-05-07
 * Time: 오전 9:58
 */

session_start();

include "../server_conn/conn.php";

// 설정
$uploads_big_dir = 'images/big';
$uploads_thumbs_dir = 'images/thumbs';
$allowed_ext = array('jpg','jpeg','png','gif', 'JPG','JPEG','PNG','GIF', );

// 변수 정리
$error = $_FILES['myfile']['error'];
$name = $_FILES['myfile']['name'];
$ext = array_pop(explode('.', $name));

// 오류 확인
if( $error != UPLOAD_ERR_OK ) {
    switch( $error ) {
        case UPLOAD_ERR_INI_SIZE:
        case UPLOAD_ERR_FORM_SIZE:
            echo "파일이 너무 큽니다. ($error)";
            break;
        case UPLOAD_ERR_NO_FILE:
            echo "파일이 첨부되지 않았습니다. ($error)";
            break;
        default:
            echo "파일이 제대로 업로드되지 않았습니다. ($error)";
    }
    exit;
}

// 확장자 확인
if( !in_array($ext, $allowed_ext) ) {
    echo "허용되지 않는 확장자입니다.";
    exit;
}

$name = uniqid("img-") . '.' . $ext;

// 파일 이동
copy( $_FILES['myfile']['tmp_name'], "../" . "$uploads_big_dir/$name");
move_uploaded_file( $_FILES['myfile']['tmp_name'], "../" . "$uploads_thumbs_dir/$name");

// 파일 정보 출력 (debug)
//echo "<h2>파일 정보</h2>
//<ul>
//	<li>파일명: $name</li>
//	<li>확장자: $ext</li>
//	<li>파일형식: {$_FILES['myfile']['type']}</li>
//	<li>파일크기: {$_FILES['myfile']['size']} 바이트</li>
//</ul>";

$sql = "insert into galley(user_id, image_big_url, image_thumbs_url, description, title) values('$_SESSION[id]', '$uploads_big_dir/$name', '$uploads_thumbs_dir/$name', '$_POST[description]', '$_POST[title]')";
$result = mysql_query($sql, $conn);

echo "<meta charset='utf-8'>";

if($result) {
    // success
    echo "<script> alert('파일 업로드 성공'); </script>";
} else {
    // failed
    echo "<script> alert('파일 업로드 실패'); </script>";
}

echo "<script> location.replace('../gallery.php'); </script>"

?>