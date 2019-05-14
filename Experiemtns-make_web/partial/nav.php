<!-- Start Navigation -->
<nav hidden>
    <div class="nav-header">
        <a href="#" class="brand">
            <img src="assets/img/brand.png" />
        </a>
        <button class="toggle-bar">
            <span class="fa fa-bars"></span>
        </button>
    </div>
    <ul class="menu">
        <li><a href="index.php">Home</a></li>
        <li><a href="About.php">About</a></li>
        <li><a href="gallery.php">Gallery</a></li>
        <li><a href="gallery2.php">Gallery-Ajax</a></li>
        <li><a href="#">Service</a></li>
        <li><a href="#">Contact Us</a></li>
        <?php
            if($_SESSION[id]) {
                // Login state
                echo "<li><a id=\"logout\" href=\"function/logout.php\">Logout</a></li>";
            } else {
                // Logout state
                echo "<li><a id=\"login\" href=\"#\">Login</a></li>";
            }
        ?>

    </ul>
</nav>
<!-- End Navigation -->