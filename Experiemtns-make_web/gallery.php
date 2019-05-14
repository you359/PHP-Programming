<?php
    session_start();

    include "server_conn/conn.php";
?>
<!doctype html>
<html>
	<head>
		<title>coreNavigation - Multi purpose navigation menu for javascript library based on jquery</title>
        <?php
        include "partial/meta.php"
        ?>

        <link rel="stylesheet" href="dist/unitegallery/css/unite-gallery.css">
	</head>
	<body>
		<!-- Start Navigation -->
        <?php
        include "partial/nav.php"
        ?>
		<!-- End Navigation -->

        <style>
            .section-upload {
                padding: 30px; text-align: center;
            }
            .section-upload a{
                text-decoration: none;
                color: #3a3a3a;
            }
            .section-upload a:hover{
                color: #e74c3c;
            }

            .section-pagination {
                padding: 30px; text-align: center;
            }

            .section-pagination a {
                display: inline-block;
                width: 40px;
                padding: 10px;
                margin-right: 5px;
                background: #3a3a3a;
                text-decoration: none;
                color: #fff;
            }

            .section-pagination a:hover {
                background: #e74c3c;
            }

            .section-pagination .selected {
                background: #e74c3c;
            }

        </style>

        <div class="section-upload">
            <a id="upload_image" href="#"> Upload Image to Gallery </a>
        </div>

        <?php
        $sql = "select count(*) as cnt from galley";
        $result = mysql_query($sql, $conn);
        $row = mysql_fetch_array($result);
        $total_items = $row[cnt];
        $item_per_page = 3;
        $num_page_button = 5;
        $total_page = ceil($total_items / $item_per_page);
        if(isset($_GET[p])) {
            $current_page = $_GET[p];
        } else {
            $current_page = 0;
        }

        $start = $current_page * $item_per_page;

        if($total_page > $current_page + $num_page_button)
            $display_pagenum = $num_page_button;
        else
            $display_pagenum = $total_page - $current_page;
        ?>

		<div class="section" style="padding: 0px;">
            <?= $end ?>
            <div id="gallery" style="display:none;">
                <?php
                $sql = "select * from galley limit $start, $item_per_page";
                $result = mysql_query($sql, $conn);
                while($row = mysql_fetch_array($result)) {
                    echo
                    "<a href=\"#\">
                        <img alt=\"$row[title]\"
                             src=\"$row[image_thumbs_url]\"
                             data-image=\"$row[image_big_url]\"
                             data-image-mobile=\"$row[image_thumbs_url]\"
                             data-thumb-mobile=\"$row[image_thumbs_url]\"
                             data-description=\"$row[description]\"
                             style=\"display:none\">
                    </a>";
                }
                ?>
            </div>
		</div>
        <div class="section-pagination">
            <div>
                <?php
                    if($current_page != 0) {
                        $prev_page = $current_page - 1;
                        echo "<a href='gallery.php?p=0'> << </a>";
                        echo "<a href='gallery.php?p={$prev_page}'> < </a>";
                    }
                ?>
                <?php
                    for($i=$current_page; $i<($current_page + $display_pagenum); $i++) {
                        $page = $i + 1;
                        if($current_page == $i)
                            echo "<a class='selected' href='gallery.php?p={$i}'> {$page} </a>";
                        else
                            echo "<a href='gallery.php?p={$i}'> {$page} </a>";
                    }
                ?>
                <?php
                    if($current_page < $total_page - 1) {
                        $next_page = $current_page + 1;
                        $final_page = $total_page - 1;
                        echo "<a href='gallery.php?p={$next_page}'> > </a>";
                        echo "<a href='gallery.php?p={$final_page}'> >> </a>";
                    }
                ?>
            </div>
        </div>

        <?php
        include "partial/popup.php"
        ?>

        <?php
        include "partial/script.php"
        ?>

        <script type='text/javascript' src='dist/unitegallery/js/unitegallery.min.js'></script>
        <script type='text/javascript' src='dist/unitegallery/themes/tiles/ug-theme-tiles.js'></script>
        <script type="text/javascript">

            jQuery(document).ready(function(){

                jQuery("#gallery").unitegallery();

            });

            function readURL(input) {
                if (input.files && input.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#blah').attr('src', e.target.result);
                        $('#blah').css('display', 'block');
                    }

                    reader.readAsDataURL(input.files[0]);
                }
            }

            $("#imgInp").change(function() {
                readURL(this);
            });

        </script>
	</body>
</html>