<?php
    session_start();
?>
<!doctype html>
<html>
	<head>
		<title>coreNavigation - Multi purpose navigation menu for javascript library based on jquery</title>
        <?php
        include "partial/meta.php"
        ?>
	</head>
	<body>
		<!-- Start Navigation -->
        <?php
        include "partial/nav.php"
        ?>
		<!-- End Navigation -->

		<div class="section">
			<div class="container">
                <h3> Google HTML iframe Map</h3>
                <!-- google map 지도 공유 -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3196.2538447565353!2d127.28036225166714!3d36.764477377309426!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357b2ac6c614c717%3A0x820bda83618bd53b!2z7ZWc6rWt6riw7Iig6rWQ7Jyh64yA7ZWZ6rWQIOygnDHsuqDtjbzsiqQ!5e0!3m2!1sko!2skr!4v1558310598109!5m2!1sko!2skr" width="100%" height="500" frameborder="0" style="border:0" allowfullscreen></iframe>
			</div>
		</div>

        <div class="section">
            <div class="container">
                <h3> Kakao Javascript Map </h3>
                <!-- google map 지도 공유 -->
                <div id="map" style="width:100%; height:500px;"></div>
            </div>
            <script type="text/javascript" src="//dapi.kakao.com/v2/maps/sdk.js?appkey=f603785fb799f1ed3ec172ba88ff1a92"></script>
            <script>
                var container = document.getElementById('map');
                var options = {
                    center: new daum.maps.LatLng(33.450701, 126.570667),
                    level: 3
                };

                var map = new daum.maps.Map(container, options);
            </script>
        </div>

        <?php
        include "partial/popup.php"
        ?>

        <?php
        include "partial/script.php"
        ?>
	</body>
</html>