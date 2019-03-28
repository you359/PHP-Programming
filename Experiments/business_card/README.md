# business_card
회원가입/로그인 기능 + 명함 카드 완성하기

## 기존 파일
```
 .
├── css
│   └── business_card.css
│   └── login_form.css
├── js
│   └── business_card.js
│   └──  login_form.css
├── index.html
├── login_form.html
```

## 추가 및 수정된 파일
```
 .
├── index.php (수정)
├── login_form.php (수정)
├── signup.php (추가)
```

## index.php (수정)
- login_form.php 에서 POST로 전달된 변수 값을 가져옴
    + name, password
- MySQL 데이터베이스 연동
    + mysql_connect
    + mysql_select_db
- 전달받은 변수 값 name, password 를 이용해서 select 쿼리 스트링 생성
- mysql_query() 함수를 이용해서, MySQL 에 쿼리 스트링 전송
    + mysql_query
- mysql_fetch_array() 함수를 이용해서, 전달받은 레코드를 가져옴
- html의 각 위치(name, company...) 에 전달받은 레코드의 각 속성 값을 적절히 echo() 함수를 통해 배치해서 출력

## login_form.php (수정)
- login-form 의 form 태그에 method='POST' action='index.php' 추가
- register-form 의 form 태그에 method='POST' action='signup.php' 추가
각 form 태그 내 input 태그에 적절한 name 속성을 부여함

## sign_up.php (수정)
- login_form.php 에서 POST로 전달된 변수 값을 가져옴
    + name, password, company, ..., github_id 
- MySQL 데이터베이스 연동
    + mysql_connect
    + mysql_select_db
- 전달받은 변수 값 name, password 를 이용해서 input 쿼리 스트링 생성
- mysql_query() 함수를 이용해서, MySQL 에 쿼리 스트링 전송
- mysql_query() 함수의 결과에 따라, 
    + 정상적으로 입력되지 않은 경우, alert() 을 통해 에러 메시지 출력
- PHP 코드 종료 후, login_form.php 링크로 이동

