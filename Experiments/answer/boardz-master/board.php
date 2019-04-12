<!-- 구글 검색 : galley board css => CSS Only Pinterest-like Responsive Board Layout - Boardz.css | CSS ... -->
<!-- 출처 : https://www.cssscript.com/css-pinterest-like-responsive-board-layout-boardz-css/ -->

<?php
// DB 연결 및 선택
$connect = mysql_connect("localhost","kyj","1111");
mysql_select_db("kyj_db", $connect);

// POST로 search 내용 받아오기
// 만약 POST 값이 있는 경우, where 조건절 추가
if($_POST[search] != '')
    $sql = "select * from boardz where title like '%$_POST[search]%'";
else
    $sql = "select * from boardz";

// 쿼리스트링 전송
$result = mysql_query($sql);

// 쿼리 결과, 레코드 수 얻기
$records = mysql_num_rows($result);

?>

<!doctype html>

<html lang="en">
<head>
    <meta charset="UTF-8"> 

    <title>Boardz Demo</title>
    <meta name="description" content="Create Pinterest-like boards with pure CSS, in less than 1kB.">
    <meta name="author" content="Burak Karakan">
    <meta name="viewport" content="width=device-width; initial-scale = 1.0; maximum-scale=1.0; user-scalable=no" />
    <link rel="stylesheet" href="src/boardz.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/wingcss/0.1.8/wing.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body>
    <div class="seventyfive-percent  centered-block">
        <!-- Sample code block -->
        <div>    
            <hr class="seperator">

            <!-- Example header and explanation -->
            <div class="text-center">
                <h2>Beautiful <strong>Boardz</strong></h2>
                <div style="display: block; width: 50%; margin-right: auto; margin-left: auto; position: relative;">
                    <form class="example" method="post" action="board.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
            </div>

            <!--<hr class="seperator fifty-percent">-->

            <!-- Example Boardz element. -->
            <div class="boardz centered-block beautiful">
                <?php
                // 검색된 레코드의 개수를 3으로 나눠서, 한 열(ul)에 표시될 레코드의 개수를 구함
                $num_sub_item = (int)($records/3);

                // 만약 한 열에 표시될 레코드의 수가 0이면, 즉 3으로 나눈 값이 0이면, 1로 할당(ul 하나 이상)
               if($num_sub_item == 0) $num_sub_item = 1;

                $is_first = True;
                $index = 0;

                while ( $row = mysql_fetch_array($result)) {
                    $index ++;

                    // 레코드를 각 열별로 출력
                    if(($index-1) % $num_sub_item == 0) {
                        if($is_first) {
                            echo "<ul>";
                            $is_first = False;
                        } else if(($index) <= $num_sub_item*3) {
                            echo "</ul>";
                            echo "<ul>";
                        }
                    }

                    if($row[title] != '') $title = "<h1>$row[title]</h1>";
                    else $title = '';

                    echo " <li>
                                $title
                                $row[contents]

                                <img src='$row[image_url]' alt=\"demo image\"/>

                            </li>";
                }
                echo "</ul>";
                ?>
            </div>
        </div>

        <hr class="seperator">

    </div>
</body>
</html>