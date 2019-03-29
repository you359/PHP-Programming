<!-- 구글 검색 : business card card css => CSS Business Card - CodePen -->
<!-- 출처: https://codepen.io/swellfoop/pen/NLyRON -->

<?PHP
// MySQL 데이터베이스 연결
$connect = mysql_connect("localhost","kyj","1111");
// DB 선택
mysql_select_db("kyj_db", $connect);
// sql 쿼리 string 생성
$sql = "select * from user where name='$_POST[name]' and password='$_POST[password]'";
// sql 쿼리 실행
$result = mysql_query($sql);
// 결과 row 값 가져오기!
$row = mysql_fetch_array($result);

if(!$row) {
    // 입력한 name 과 password 에 해당하는 결과 레코드가 없는 경우
    echo "<script> alert('회원 정보가 없거나, 비밀번호가 일치하지 않습니다.') </script>";
    echo "<script> location.href = 'login_form.php' </script>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link href="css/business_card.css" rel="stylesheet">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/business_card.js"></script>
</head>
<body>

<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" style="display: none;">
    <symbol id="logo-img" viewBox="0 0 248 248">
        <path d="M236.613,137.22c-4.84,17.588-12.908,33.239-24.203,46.954s-24.445,25.736-39.451,36.063
		c-15.006,10.327-31.706,18.879-50.101,25.656c0.646-0.646,0.484-0.646-0.483,0c7.1-7.422,12.102-16.619,15.006-27.592
		c-12.264,14.845-30.497,25.01-54.7,30.496c11.618-10.649,17.911-21.783,18.878-33.4c-6.777,7.744-15.813,13.23-27.107,16.458
		c3.227-5.809,5.244-10.488,6.051-14.038s0.161-6.857-1.937-9.924c-2.097-3.064-4.518-5.566-7.261-7.502
		c-2.743-1.937-7.261-5.244-13.554-9.924s-12.021-9.439-17.185-14.279C20.56,157.793,9.507,134.799,7.409,107.208
		c-2.098-27.592,5.405-51.553,22.509-71.884C42.827,20.157,60.011,9.83,81.471,4.344c21.46-5.486,41.548-4.518,60.266,2.904
		c23.235-2.582,44.292,3.469,63.17,18.152C223.786,40.084,235,59.043,238.55,82.278C242.1,101.318,241.454,119.632,236.613,137.22z
		 M133.266,42.827c-3.711,1.775-8.955,4.921-15.732,9.439c-6.777,4.518-13.876,9.842-21.299,15.974
		c-7.422,6.131-15.409,14.28-23.961,24.445c-8.552,10.165-15.894,21.057-22.025,32.674c28.721,0,45.179-0.646,49.375-1.937
		c6.454-2.259,31.464-17.104,75.03-44.534l-3.872-6.293c-2.582-4.195-6.857-9.52-12.828-15.974
		c-5.97-6.454-12.183-11.94-18.637-16.458C138.994,40.165,136.978,41.052,133.266,42.827z M171.991,154.646
		c4.034-6.615,6.776-12.425,8.229-17.427c1.453-5.002,2.421-10.165,2.905-15.49c0.483-5.325,0.645-8.875,0.483-10.65
		s-0.242-3.146-0.242-4.114l-7.261,10.166c-5.163,6.777-10.729,13.714-16.7,20.814c-5.97,7.1-9.923,10.973-11.859,11.618
		c-1.937,0.968-8.31,0.081-19.12-2.663c-10.812-2.742-17.427-3.63-19.847-2.662c-2.42,0.969-5.647,4.922-9.681,11.859
		c-4.034,6.939-7.181,10.73-9.439,11.376c-1.936,0.968-5.889,0.161-11.859-2.42c-5.97-2.582-10.488-4.68-13.554-6.293
		c-3.066-1.614-5.729-2.904-7.987-3.872c0.323,0,1.291,0.887,2.904,2.662c1.614,1.774,3.55,3.631,5.809,5.566
		c2.259,1.937,5.083,4.275,8.471,7.02c3.389,2.742,7.019,5.244,10.892,7.502c3.873,2.26,7.987,4.438,12.344,6.535
		s9.036,3.469,14.038,4.115c5.002,0.645,10.004,0.726,15.007,0.242c5.002-0.484,10.245-2.098,15.731-4.842
             c5.486-2.742,10.811-6.373,15.975-10.891C163.036,167.313,167.957,161.262,171.991,154.646z"></path>
    </symbol>
</svg>

<div class="note">Click anywhere to flip</div>

<div class="container">
    <div class="card card--front">
        <div class="logo">
            <svg class="logo__img">
                <use xlink:href="#logo-img"></use>
            </svg>
        </div>
        <div class="text">
            <header class="head">
                <h1 class="head__name">
                    <b class="name__fn"><? echo $row[company] ?></b>
                    <? echo $row[name] ?>
                </h1>
                <p class="head__subtitle"><? echo $row[side] ?><br> <? echo $row[jop] ?></p>
            </header>
        </div>
    </div>

    <div class="card card--back">
        <div class="card__content">
            <ul class="contact">
                <li><a href="https://<? echo $row[blog_url] ?>"><? echo $row[blog_url] ?></a></li>
                <li><a href="https://facebook.com/<? echo $row[facebook_id] ?>">facebook.com/<? echo $row[facebook_id] ?></a></li>
                <li><a href="https://twitter.com/<? echo $row[twitter_id] ?>">twitter.com/<? echo $row[twitter_id] ?></a></li>
                <li><a href="https://github.com/<? echo $row[github_id] ?>">github.com/<? echo $row[github_id] ?></a></li>
        </div>
    </div>

    <div class="card-shadow"></div>

</div>

</body>
</html>