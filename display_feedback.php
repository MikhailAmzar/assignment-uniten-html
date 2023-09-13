<!DOCTYPE html>
<html style="background: url(bg0.jpg)no-repeat center center fixed;
-webkit-background-size: cover;
-moz-background-size: cover;
-o-background-size: cover;
background-size: cover;">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="mainstyle.css">
<style>
	h2.marg {
		margin: 20px 50px 0px 300px
	}
	b.tumarg {
		margin: 20px 200px 0px 0px
	}
</style>
</head>

<body>
    <div class="logo">
        <img class="logohead" src="mainpage images/banner2.png" alt="logo">
    </div>

    <div class="topnav">
        <ul>
            <li><a href="START.html">Start</a></li>
            <li><a href="ARTIST.html">Featured</a></li>
            <li><a href="GENRE.html">Genre</a></li>
            <li><a href="LANGUAGE.html">Language</a></li>
            <li><a href="ABOUT.html">About Us</a></li>
            <li><a href="FEEDBACK.html">Feedback</a></li>
        </ul>
    </div>
	
<?php

	$name = $_POST["name"];
	$gender = $_POST["gender"];
	$email = $_POST["email"];
	$type = $_POST["typeFeedback"];
	$feedback = $_POST["feedback"];
	$date = $_POST["datetime"];
	
echo "Name : <b>$name</b>";
echo "<br>";
echo "Gender : <b>$gender</b>";
echo "<br>";
echo "Email : <b>$email</b>";
echo "<br>";
echo "Type of feedback : <b>$type</b>";
echo "<br>";
echo "Feedback : <b>$feedback</b>";
echo "<br>";
echo "Date & Time : <b>$date</b>";

?>

</body>
</html>