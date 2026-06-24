<?php
$message = "";

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $message = "Thank you for visiting, " . $name . "!";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="css/style.css?v=10">
</head>

<body>

<?php include "navbar.php"; ?>

<section class="contact-page">

    <div class="contact-box">
        <p class="small-title">SEND A MESSAGE</p>

        <h1>CONTACT</h1>

        <p>Enter your name below.</p>

        <form method="POST">
            <input type="text" name="name" placeholder="Enter your name" required>
            <input type="submit" name="submit" value="Submit">
        </form>

        <h2><?php echo $message; ?></h2>
    </div>

    <div class="map-box">
        <h2>Mac Miller's Hometown</h2>

        <iframe
            width="100%"
            height="350"
            src="https://maps.google.com/maps?q=Pittsburgh%20Pennsylvania&output=embed">
        </iframe>
    </div>

</section>

<?php include "footer.php"; ?>

</body>
</html>