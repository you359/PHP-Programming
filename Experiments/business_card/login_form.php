<!-- 구글 검색 : login form css => 59 Free HTML5 And CSS3 Login Form For Your Website 2019 - Colorlib -->
<!-- 출처: https://colorlib.com/wp/template/creative-login-form/ -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>

    <link href="css/login_form.css" rel="stylesheet">

    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="js/login_form.js"></script>

</head>
<body>

<div class="login-page">
    <div class="form">
        <form class="register-form">
            <input type="text" placeholder="name (< 9 alphabet)"/>
            <input type="password" placeholder="password"/>
            <input type="text" placeholder="email address"/>
            <input type="text" placeholder="company (< 6 alphabet)"/>
            <input type="text" placeholder="side (ex, front-end web)"/>
            <input type="text" placeholder="jop (ex, developer)"/>

            <input type="text" placeholder="blog url (ex, keithpickering.github.io)"/>
            <input type="text" placeholder="facebook id"/>
            <input type="text" placeholder="twitter id"/>
            <input type="text" placeholder="github id"/>

            <!--<button>create</button>-->
            <input type="submit" value="create" />
            <p class="message">Already registered? <a href="#">Sign In</a></p>
        </form>

        <form class="login-form">
            <input type="text" placeholder="username"/>
            <input type="password" placeholder="password"/>
            <input type="submit" value="login" />
            <!--<button>login</button>-->
            <p class="message">Not registered? <a href="#">Create an account</a></p>
        </form>
    </div>
</div>

</body>
</html>