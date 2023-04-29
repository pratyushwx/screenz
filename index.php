<?php
session_start();
if (!isset($_SESSION["user"])) {
   header("Location: login.php");
}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Screenz</title>
	<link rel="stylesheet" type="text/css" href="css/2.css">
</head>
<body>
	<header>
		<nav>
			<ul>
                <div class="logo">
                    <a href="index.php"><img src="images/logo.png" alt=""></a>
                    <li><a href="ticket.php" class="btn">View Tickets</a></li>
                    <li><a href="logout.php" class="btn btn-warning">Logout</a></li>
                </div>
			</ul>
		</nav>
		<div class="hero">
			<h1>Book your favorite movies hassle-free and enjoy an unforgettable movie night with just a few clicks!</h1>
			<p>Book anywhere. Cancel anytime.</p>
            <label class="cta" for="city">Choose your city:</label>

<select name="city" id="city">
  <option value="delhi">Delhi</option>
  <option value="jaipur">Jaipur</option>
  <option value="mumbai">Mumbai</option>
  <option value="jammu">Jammu</option>
</select>
		</div>
	</header>

	<section>
		<h2>Live on Screenz</h2>
		<div class="gallery">
			<div class="movie">
				<img src="images/1.gif">
                <h3 class="movie-title">Cars</h3>
                <p class="screen-name">⭐7.2/10</p>
                <div class="booking">
                    <h2 class="price">300₹</h2>
                    <a href="payment.php" class="btn">Book Tickets</a>
                </div>
			</div>
			<div class="movie">
				<img src="images/2.gif">
                <h3 class="movie-title">Star Wars</h3>
                <p class="screen-name">⭐8.6/10</p>
                <div class="booking">
                    <h2 class="price">700₹</h2>
                    <a href="/main/booking/index.html" class="btn">Book Tickets</a>
                </div>
			</div>
			<div class="movie">
				<img src="images/3.gif">
                <h3 class="movie-title">Avengers</h3>
                <p class="screen-name">⭐8.4/10</p>
                <div class="booking">
                    <h2 class="price">400₹</h2>
                    <a href="/main/booking/index.html" class="btn">Book Tickets</a>
                </div>
			</div>
			<div class="movie">
				<img src="images/4.gif">
                <h3 class="movie-title">Toy Story</h3>
                <p class="screen-name">⭐8.3/10</p>
                <div class="booking">
                    <h2 class="price">300₹</h2>
                    <a href="/main/booking/index.html" class="btn">Book Tickets</a>
                </div>
			</div>
			<div class="movie">
				<img src="images/5.gif">
                <h3 class="movie-title">Maleficent</h3>
                <p class="screen-name">⭐6.9/10</p>
                <div class="booking">
                    <h2 class="price">400₹</h2>
                    <a href="/main/booking/index.html" class="btn">Book Tickets</a>
                </div>
			</div>
			<div class="movie">
				<img src="images/6.gif">
                <h3 class="movie-title">Avatar</h3>
                <p class="screen-name">⭐7.9/10</p>
                <div class="booking">
                    <h2 class="price">700₹</h2>
                    <a href="/main/booking/index.html" class="btn">Book Tickets</a>
                </div>
			</div>
			<div class="movie">
				<img src="images/7.gif">
                <h3 class="movie-title">Wall-E</h3>
                <p class="screen-name">⭐8.4/10</p>
                <div class="booking">
                    <h2 class="price">300₹</h2>
                    <a href="/main/booking/index.html" class="btn">Book Tickets</a>
                </div>
			</div>
			<div class="movie">
				<img src="images/8.gif">
                <h3 class="movie-title">Jocker</h3>
                <p class="screen-name">⭐8.4/10</p>
                <div class="booking">
                    <h2 class="price">300₹</h2>
                    <a href="/main/booking/index.html" class="btn">Book Tickets</a>
                </div>
			</div>
			<div class="movie">
				<img src="images/9.gif">
                <h3 class="movie-title">Batman</h3>
                <p class="screen-name">⭐7.8/10</p>
                <div class="booking">
                    <h2 class="price">400₹</h2>
                    <a href="/main/booking/index.html" class="btn">Book Tickets</a>
                </div>
			</div>
			<div class="movie">
				<img src="images/10.gif">
                <h3 class="movie-title">Godzilla VS Kong</h3>
                <p class="screen-name">⭐6.3/10</p>
                <div class="booking">
                    <h2 class="price">300₹</h2>
                    <a href="/main/booking/index.html" class="btn">Book Tickets</a>
                </div>
			</div>
			<div class="movie">
				<img src="images/11.gif">
                <h3 class="movie-title">Guardians Of The Galaxy</h3>
                <p class="screen-name">⭐8/10</p>
                <div class="booking">
                    <h2 class="price">700₹</h2>
                    <a href="/main/booking/index.html" class="btn">Book Tickets</a>
                </div>
			</div>
			<div class="movie">
				<img src="images/12.gif">
                <h3 class="movie-title">The Conjuring</h3>
                <p class="screen-name">⭐7.5/10</p>
                <div class="booking">
                    <h2 class="price">300₹</h2>
                    <a href="/main/booking/index.html" class="btn">Book Tickets</a>
                </div>
			</div>
		</div>
	</section>

	<footer>
		<p>&copy; 2023 Screenz. All rights reserved.</p>
	</footer>
</body>
</html>
