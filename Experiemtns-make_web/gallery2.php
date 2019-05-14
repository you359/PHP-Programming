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

            var current_page = -1;
            var total_page = 0;
            var total_item_text = "";
            var api = null;

            function get_data() {
                current_page++;
                $.ajax({
                    url:"function/get_page.php",
                    type: "post",
                    dataType:"json",
                    data: "p=" + current_page + "&item_per_page=5",
                    success: function (data) {
                        console.log(data);
                        total_page = data['total_page'];

                        for(var i=0; i<data['datalist'].length; i++) {
                            total_item_text +=
                                "<a href=\"#\">\n" +
                                "<img alt=\"" + data['datalist'][i]['title'] + "\"\n" +
                                "src=\"" + data['datalist'][i]['image_thumb_url'] + "\"\n" +
                                "data-image=\"" + data['datalist'][i]['image_big_url'] + "\"\n" +
                                "data-image-mobile=\"" + data['datalist'][i]['image_thumb_url'] + "\"\n" +
                                "data-thumb-mobile=\"" + data['datalist'][i]['image_thumb_url'] + "\"\n" +
                                "data-description=\"" + data['datalist'][i]['description'] + "\"\n" +
                                "style=\"display:none\">\n" +
                                "</a>";
                        }

                        if(api) {
                            api.destroy();
                        }

                        $('#gallery').empty();
                        $('#gallery').append(total_item_text);

                        var api = jQuery("#gallery").unitegallery();
                        console.log(api);
                        api.on("resize", function () {
                            console.log("resize");
                        })

                        api.on("item_change", function () {
                            console.log("item_change");
                        })

                    }
                });
            }

            jQuery(document).ready(function(){

                // first init
                get_data();

                $(window).bind('mousewheel', function(e) {
                    if(e.originalEvent.wheelDelta / 120 > 0) {
                    } else {
                        console.log(total_page)
                        console.log(current_page)

                        if(Math.ceil($(window).scrollTop()) + $(window).height() >= $(document).height()) {
                            if(current_page < total_page - 1)
                                get_data();
                        }
                    }
                });

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