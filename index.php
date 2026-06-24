<!DOCTYPE html>
<html>
<head>
    <title>Mac Miller Tribute</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="js/script.js"></script>
</head>

<body>

<?php include "navbar.php"; ?>

<section id="hero">

    <div class="hero-text">
        <h1>MAC<br>MILLER</h1>

        <p class="years">1992 - 2018</p>

        <p class="quote">“Take time. Make your soul happy.”</p>

        <button onclick="showMessage()">EXPLORE MORE</button>
    </div>

</section>

<section class="menu-cards">

    <div class="card">
        <div class="icon">♙</div>
        <h2>ABOUT</h2>
        <p>Learn about Mac Miller's life, his journey, and the person behind the music.</p>
        <a href="about.php">READ MORE →</a>
    </div>

    <div class="card">
        <div class="icon">♫</div>
        <h2>MUSIC</h2>
        <p>Explore his discography and the songs that touched millions of hearts.</p>
        <a href="music.php">LISTEN NOW →</a>
    </div>

    <div class="card">
        <div class="icon">♡</div>
        <h2>LEGACY</h2>
        <p>Remembering Mac's impact on fans, culture, and the music industry.</p>
        <a href="legacy.php">DISCOVER →</a>
    </div>

    <div class="card">
        <div class="icon">▣</div>
        <h2>GALLERY</h2>
        <p>Photos and moments that capture Mac's incredible journey.</p>
        <a href="gallery.php">VIEW GALLERY →</a>
    </div>

</section>

<?php include "footer.php"; ?>

</body>
</html>