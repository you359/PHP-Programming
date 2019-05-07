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
        </style>

        <div class="section-upload">
            <a id="upload_image" href="#"> Upload Image to Gallery </a>
        </div>
		<div class="section" style="padding: 0px;">
            <div id="gallery" style="display:none;">
                <?php
                $sql = "select * from galley";
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

<!--                <a href="#">-->
<!--                    <img alt="Lemon Slice"-->
<!--                         src="images/thumbs/tile1.jpg"-->
<!--                         data-image="images/big/tile1.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile1.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile1.jpg"-->
<!--                         data-description="This is a Lemon Slice"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Peppers"-->
<!--                         src="images/thumbs/tile2.jpg"-->
<!--                         data-image="images/big/tile2.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile2.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile2.jpg"-->
<!--                         data-description="Those are peppers"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Keys"-->
<!--                         src="images/thumbs/tile3.jpg"-->
<!--                         data-image="images/big/tile3.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile3.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile3.jpg"-->
<!--                         data-description="Those are keys"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Friuts in cup"-->
<!--                         src="images/thumbs/tile4.jpg"-->
<!--                         data-image="images/big/tile4.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile4.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile4.jpg"-->
<!--                         data-description="Those are friuts in a cup"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Yellow Flowers"-->
<!--                         src="images/thumbs/tile5.jpg"-->
<!--                         data-image="images/big/tile5.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile5.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile5.jpg"-->
<!--                         data-description="Those are yellow flowers"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Butterfly"-->
<!--                         src="images/thumbs/tile6.jpg"-->
<!--                         data-image="images/big/tile6.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile6.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile6.jpg"-->
<!--                         data-description="This is butterfly"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Boat"-->
<!--                         src="images/thumbs/tile7.jpg"-->
<!--                         data-image="images/big/tile7.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile7.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile7.jpg"-->
<!--                         data-description="This is a boat"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Woman"-->
<!--                         src="images/thumbs/tile8.jpg"-->
<!--                         data-image="images/big/tile8.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile8.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile8.jpg"-->
<!--                         data-description="This is a woman"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Cup Of Coffee"-->
<!--                         src="images/thumbs/tile9.jpg"-->
<!--                         data-image="images/big/tile9.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile9.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile9.jpg"-->
<!--                         data-description="This is cup of coffee"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Iphone Back"-->
<!--                         src="images/thumbs/tile10.jpg"-->
<!--                         data-image="images/big/tile10.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile10.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile10.jpg"-->
<!--                         data-description="This is iphone back"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Lemon Slice"-->
<!--                         src="images/thumbs/tile1.jpg"-->
<!--                         data-image="images/big/tile1.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile1.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile1.jpg"-->
<!--                         data-description="This is a Lemon Slice"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Peppers"-->
<!--                         src="images/thumbs/tile2.jpg"-->
<!--                         data-image="images/big/tile2.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile2.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile2.jpg"-->
<!--                         data-description="Those are peppers"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Keys"-->
<!--                         src="images/thumbs/tile3.jpg"-->
<!--                         data-image="images/big/tile3.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile3.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile3.jpg"-->
<!--                         data-description="Those are keys"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Friuts in cup"-->
<!--                         src="images/thumbs/tile4.jpg"-->
<!--                         data-image="images/big/tile4.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile4.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile4.jpg"-->
<!--                         data-description="Those are friuts in a cup"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Yellow Flowers"-->
<!--                         src="images/thumbs/tile5.jpg"-->
<!--                         data-image="images/big/tile5.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile5.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile5.jpg"-->
<!--                         data-description="Those are yellow flowers"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Butterfly"-->
<!--                         src="images/thumbs/tile6.jpg"-->
<!--                         data-image="images/big/tile6.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile6.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile6.jpg"-->
<!--                         data-description="This is butterfly"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Boat"-->
<!--                         src="images/thumbs/tile7.jpg"-->
<!--                         data-image="images/big/tile7.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile7.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile7.jpg"-->
<!--                         data-description="This is a boat"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Woman"-->
<!--                         src="images/thumbs/tile8.jpg"-->
<!--                         data-image="images/big/tile8.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile8.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile8.jpg"-->
<!--                         data-description="This is a woman"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Cup Of Coffee"-->
<!--                         src="images/thumbs/tile9.jpg"-->
<!--                         data-image="images/big/tile9.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile9.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile9.jpg"-->
<!--                         data-description="This is cup of coffee"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Iphone Back"-->
<!--                         src="images/thumbs/tile10.jpg"-->
<!--                         data-image="images/big/tile10.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile10.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile10.jpg"-->
<!--                         data-description="This is iphone back"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Lemon Slice"-->
<!--                         src="images/thumbs/tile1.jpg"-->
<!--                         data-image="images/big/tile1.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile1.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile1.jpg"-->
<!--                         data-description="This is a Lemon Slice"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Peppers"-->
<!--                         src="images/thumbs/tile2.jpg"-->
<!--                         data-image="images/big/tile2.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile2.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile2.jpg"-->
<!--                         data-description="Those are peppers"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Keys"-->
<!--                         src="images/thumbs/tile3.jpg"-->
<!--                         data-image="images/big/tile3.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile3.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile3.jpg"-->
<!--                         data-description="Those are keys"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Friuts in cup"-->
<!--                         src="images/thumbs/tile4.jpg"-->
<!--                         data-image="images/big/tile4.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile4.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile4.jpg"-->
<!--                         data-description="Those are friuts in a cup"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Yellow Flowers"-->
<!--                         src="images/thumbs/tile5.jpg"-->
<!--                         data-image="images/big/tile5.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile5.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile5.jpg"-->
<!--                         data-description="Those are yellow flowers"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Butterfly"-->
<!--                         src="images/thumbs/tile6.jpg"-->
<!--                         data-image="images/big/tile6.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile6.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile6.jpg"-->
<!--                         data-description="This is butterfly"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Boat"-->
<!--                         src="images/thumbs/tile7.jpg"-->
<!--                         data-image="images/big/tile7.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile7.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile7.jpg"-->
<!--                         data-description="This is a boat"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Woman"-->
<!--                         src="images/thumbs/tile8.jpg"-->
<!--                         data-image="images/big/tile8.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile8.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile8.jpg"-->
<!--                         data-description="This is a woman"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Cup Of Coffee"-->
<!--                         src="images/thumbs/tile9.jpg"-->
<!--                         data-image="images/big/tile9.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile9.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile9.jpg"-->
<!--                         data-description="This is cup of coffee"-->
<!--                         style="display:none">-->
<!--                </a>-->
<!---->
<!--                <a href="http://unitegallery.net">-->
<!--                    <img alt="Iphone Back"-->
<!--                         src="images/thumbs/tile10.jpg"-->
<!--                         data-image="images/big/tile10.jpg"-->
<!--                         data-image-mobile="images/thumbs/tile10.jpg"-->
<!--                         data-thumb-mobile="images/thumbs/tile10.jpg"-->
<!--                         data-description="This is iphone back"-->
<!--                         style="display:none">-->
<!--                </a>-->


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