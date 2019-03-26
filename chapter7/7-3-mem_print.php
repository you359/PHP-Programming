<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
/* POST로 전달받은 값 출력!
 * 서버 환경 설정 - PHP 설정에서 register_globals 를 Off로 설정했기 때문에, 기본 변수로 POST나 GET으로 전달된 파라미터가 전달되지 않음!
 * register_globals를 Off로 설정한 경우, $_POST[변수이름]을 통해서, POST로 전달된 파라미터를 변수로 받을 수 있음!
 */

echo "아이디   : $id<br>";
echo "이름     : $name<br>";
echo "비밀번호 : $passwd<br>";
echo "비밀번호 확인 : $passwd_confirm<br>";
echo "성별     : $gender<br>";
echo "휴대번호 : $phone1 - $phone2 - $phone3<br>";
echo "주소     : $address<br>";
echo "영화감상 : $movie<br>";
echo "독서     : $book<br>";
echo "쇼핑     : $shop<br>";
echo "운동     : $sport<br>";
echo "자기소개 : $intro<br>";
echo "제목(hidden 타입에서 전달) : $title<br>";
?>