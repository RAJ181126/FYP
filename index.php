<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<title>TOUR AND TRAVEL</title>

<!-- swiperjs cdn link -->

	<link
	rel="stylesheet"
	href="https://unpkg.com/swiper@8/swiper-bundle.min.css"
  />	

	<!-- font awesome cdn link -->

	<script src="https://kit.fontawesome.com/f0b4c49911.js" crossorigin="anonymous"></script>
	
	<!-- custom css file link -->

	<link rel="stylesheet" type="text/css" href="style.css">


</head>
<body>

	<!-- header section starts -->

 <header>

 	<div id="menu-bar" class="fas fa-bars"></div>

 	<a href="#" class="logo"><span>T</span>ravel</a>

 	<nav class="navbar">

 		<a href="#home">Home</a>
 		<a href="#book">Book</a>
 		<a href="#packages">places</a>
 		<a href="#services">Services</a>
 		<a href="#gallery">Gallery</a>
 		<a href="#review">Review</a>
 		<a href="#contact">Contact</a>

 	</nav>

 	<div class="icons">

        <i class="fas fa-search" id="search-btn"></i>
        <i class="fas fa-user" id="login-btn"></i>

    </div>

    
 	<form action="#" class="search-bar-container">
        <input type="search" id="search-bar" placeholder="search here...">
        <label for="search-bar" class="fas fa-search"></label>

    </form>

 </header>	

 

<!-- header section ends -->


<!-- home section starts -->
	<?php

		session_start();
		if(isset($_SESSION['ststus']))
		{
			echo $_SESSION['status'];
			unset($_SESSION['status']);
		}

	?>
<section class="home" id="home">
	<div class="content">
		<h3>Witness</h3>
		<p>The mesmerizing beauty of himalayas</p>
		<a href= "" class="btn">know more</a>
	</div>

	<d class="controls">
		<span class="vid-btn active" data-src="images/vid-1.mp4"></span>
		<span class="vid-btn" data-src="images/vid-2.mp4"></span>
		<span class="vid-btn" data-src="images/vid-3.mp4"></span>
		<span class="vid-btn" data-src="images/vid-4.mp4"></span>
		<span class="vid-btn" data-src="images/vid-5.mp4"></span>
	</d>

	<div class="video-container">
		<video src="images/vid-1.mp4" id="video-slider" loop autoplay muted></video>
	</div>


</section>

<!-- home section ends -->

<!-- booking section starts-->

<section class="book" id="book">
	<h1 class="heading">
		<span>b</b></span>
		<span>o</b></span>
		<span>o</b></span>
		<span>k</b></span>
		<span class="space"></b></span>
		<span>n</b></span>
		<span>o</b></span>		
		<span>w</b></span>
	</h1>

	<?php

		if(isset($_POST['booking_btn']))
		{
			$number=$_POST["number"];
			$arrival=$_POST["arrival"];
			$leaving=$_POST["leaving"];
			$mail=$_POST["mail"];
	
			$FromEmail="18110sharma@gmail.com";
			$ReplyTo=$mail;
			$ToEmail="rajpokhrel18110@gmail.com";
			$sub="Request for booking";
			$msg='Number of guest:-'.$number. 'Date of arrival:-' .$arrival.  'Leaving:-' .$leaving;
			$header = "From: 18110sharma@gmail.com";

	
			if(mail($ToEmail, $sub, $msg, $header)){
				$_SESSION['status'] = "Thank You for booking with us";
				header('location: index.php');
			}
			else{
				echo "something went wrong";
			}
		}

 	?>

	<div class="row">

		<div class="image">
			<img src="images/book-img.svg" alt="">

		</div>

		
		<form action="" method="POST">
			<div class="inputBox">
				<h3>Email</h3>
				<input type="email" name="mail" placeholder="email">
			</div>
			<div class="inputBox">
				<h3>How many</h3>
				<input type="number" name="number" placeholder="number of guests">
			</div>
			<div class="inputBox">
				<h3>arrivals</h3>
				<input type="date" name="arrival">
			</div>
			<div class="inputBox">
				<h3>leaving</h3>
				<input type="date" name="leaving">
			</div>
			<input type="submit" name="booking_btn" class="btn" value="BOOK NOW">
		</form>

	</div>
</section>

<!-- booking section ends-->

<!--package section starts-->

<section class="packages" id="packages">

	<h1 class="heading">
		<span>P</b></span>
		<span>L</b></span>
		<span>A</b></span>
		<span>C</b></span>
		<span>E</b></span>
		<span>S</b></span>
		<span class="space"></b></span>
		<span>Y</b></span>		
		<span>O</b></span>
		<span>U</b></span>
		<span class="space"></b></span>
		<span>C</b></span>
		<span>A</b></span>
		<span>N</b></span>
		<span class="space"></b></span>
		<span>V</b></span>
		<span>I</b></span>
		<span>S</b></span>
		<span>I</b></span>
		<span>T</b></span>
	</h1>

		<div class="box-container">
			 
			<div class="box">
				<img src="images/p-1.jpeg" alt="">
				<div class="content">
					<h3> <i class="fas fa-map-marker-alt"></i>  Dali Monastry</h3>
					<p>A Drukpa Kagyud Monastry belonging to the Kagyupa Order of tibetan Buddhism is the Dali Monastry at Dali on the route between Ghoom and Darjeeling at an altitude of 7000ft above sea level.</p>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</div>
					
				</div>
			</div>


			<div class="box">
				<img src="images/p-2.jpeg" alt="">
				<div class="content">
					<h3><i class="fas fa-map-marker-alt"></i>  mirik lake</h3>
					<p>Mirik Lake, or Sumendu Lake, is a lake in Mirik, Darjeeling district, West Bengal, India. It is 1.25 kilometres (0.78 mi) long. There is an 80-foot (24 m) long arch footbridge across the lake called the Indreni Pull</p>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</div>
					
				</div>
			</div>

			<div class="box">
				<img src="images/p-3.jpeg" alt="">
				<div class="content">
					<h3><i class="fas fa-map-marker-alt"></i>  Tinchuley</h3>
					<p>This spot can offer a landscape view of green valley, tea garden , snow capped kanchenjenga along with other wide range mountain views under blue sky.</p>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</div>
					
				</div>
			</div>

			<div class="box">
				<img src="images/p-4.jpeg" alt="">
				<div class="content">
					<h3><i class="fas fa-map-marker-alt"></i> Lamahatta</h3>
					<p>The place with its vast stretch of Pine, Dhupi & Large Cardamom trees along with the looming Mount Kanchenjunga in the forefront has been wooing the heart of visitors. Lamahatta Eco Park is a prime attraction of the destination.</p>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
						<i class="far fa-star"></i>
					</div>
					
				</div>
			</div>

			<div class="box">
				<img src="images/p-5.jpeg" alt="">
				<div class="content">
					<h3><i class="fas fa-map-marker-alt"></i>  Japanese tample</h3>
					<p>This temple belongs to the Japanese Buddhist Sangha of the Nipponzan Myohoji sect of Buddhism. Followers of this sect chant the simple phrase 'Nam-Myoho-Renge-Kyo' to reflect on the essence of Buddhism.</p>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</div>
					
				</div>
			</div>

			<div class="box">
				<img src="images/p-6.jpeg" alt="">
				<div class="content">
					<h3><i class="fas fa-map-marker-alt"></i>  dali Monastery</h3>
					<p>Dali Monastery is one of the most prominent monasteries of the Kargyupa sect, built by Kyabje Thuksey Rinpoche in 1971. The gompa was inaugurated by His Holiness Dalai Lama in 1993, where he gave 3 days of religious teachings.</p>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</div>
					
				</div>
			</div>

	</div>

</section>

<!--package section ends-->


<!-- services section starts -->

<section class="services" id="services">

	<h1 class="heading">
		<span>s</b></span>
		<span>e</b></span>
		<span>r</b></span>
		<span>v</b></span>
		<span>i</b></span>
		<span>c</b></span>
		<span>e</b></span>		
		<span>s</b></span>
	</h1>

		<div class="box-container">
			<div class="box">
				<i class="fas fa-hotel"></i>
				<h3>reservation 24X7</h3>
			</div>	

			<div class="box">
				<i class="fas fa-utensils"></i>
				<h3>food and drinks</h3>
			</div>

			<div class="box">
				<i class="fas fa-bullhorn"></i>
				<h3>safty guide</h3>
			</div>

			<div class="box">
			<i class="fa-solid fa-car-tunnel"></i>
				<h3>parking space</h3>
			</div>

			<div class="box">
			<i class="fa-solid fa-truck-pickup"></i>
				<h3>pick up & drop</h3>
			</div>

			<div class="box">
				<i class="fas fa-hiking"></i>
				<h3>adventure</h3>
			</div>

		</div>

</section>

<!-- services section ends -->

<!-- galery saction starts -->

<saction class="gallery" id="gallery">
	<h1 class="heading">
		<span>g</b></span>
		<span>a</b></span>
		<span>l</b></span>
		<span>l</b></span>
		<span>e</b></span>
		<span>r</b></span>
		<span>y</b></span>		
	</h1>

		<div class="box-container">

			<div class="box">
				<img src="images/g-1.jpeg" alt="">
				<div class="content">
					<h3>amazing places</h3>
				</div>
			</div>

			<div class="box">
				<img src="images/g-2.jpeg" alt="">
				<div class="content">
					<h3>amazing places</h3>
				</div>
			</div>

			<div class="box">
				<img src="images/g-3.jpeg" alt="">
				<div class="content">
					<h3>amazing places</h3>
				</div>
			</div>

			<div class="box">
				<img src="images/g-4.jpeg" alt="">
				<div class="content">
					<h3>amazing places</h3>
				</div>
			</div>

			<div class="box">
				<img src="images/g-5.jpeg" alt="">
				<div class="content">
					<h3>amazing places</h3>
				</div>
			</div>

			<div class="box">
				<img src="images/g-6.jpeg" alt="">
				<div class="content">
					<h3>amazing places</h3>
				</div>
			</div>

			<div class="box">
				<img src="images/g-7.jpeg" alt="">
				<div class="content">
					<h3>amazing places</h3>
				</div>
			</div>

			<div class="box">
				<img src="images/g-8.jpeg" alt="">
				<div class="content">
					<h3>amazing places</h3>
				</div>
			</div>

			<div class="box">
				<img src="images/g-9.jpeg" alt="">
				<div class="content">
					<h3>amazing places</h3>
				</div>
			</div>

			<div class="box">
				<img src="images/g-10.jpeg" alt="">
				<div class="content">
					<h3>amazing places</h3>
				</div>
			</div>

			<div class="box">
				<img src="images/g-11.jpeg" alt="">
				<div class="content">
					<h3>amazing places</h3>
				</div>
			</div>

			<div class="box">
				<img src="images/g-12.jpeg" alt="">
				<div class="content">
					<h3>amazing places</h3>
				</div>
			</div>



		</div>

</saction>

<!-- gallery saction ends -->

<!-- review section starts -->

<section class="review" id="review">

	<h1 class="heading">
		<span>r</b></span>
		<span>e</b></span>
		<span>v</b></span>
		<span>i</b></span>
		<span>e</b></span>
		<span>w</b></span>
	</h1>

	<div class="swiper review-slider">

		<div class="swiper-wrapper">

			<div class="swiper-slide">
				<div class="box">
					<img src="images/pic1.png" alt="">
					<h3>Anish lopchan</h3>
					<p>Darjeeling is very beautiful Hill Station in North Bengal if u love to to visit mountains u should go to see the beauties of Darjeeling. The people of darjeeling are very helpful and sweet. If u visit darjeeling in winters u can also able to see snowfall. Best time to visit darjeeling is between January to April</p>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</div>
				</div>
			</div>	

			<div class="swiper-slide">
				<div class="box">
					<img src="images/pic2.png" alt="">
					<h3>sidhant tamang</h3>
					<p>Darjeling best and good for Relaxation place. More tea plantations mountains etc. Darjeling one of the Famous Tourist point in india.</p>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</div>
				</div>
			</div>	

			<div class="swiper-slide">
				<div class="box">
					<img src="images/pic3.png" alt="">
					<h3>suvam lama</h3>
					<p>People says Darjeeling, " The queen of the hill" as it is the second highest railway city. The climate of the city is always calm and chilled. People of there are warm and kind hearted. Most people of Darjeeling follows buddhism. It is filled with beautiful and enchanting monasteries. Darjeeling mainly income is from tourism and tea. Tourists all over the world comes Darjeeling just to relax and to enjoy the beauty of the hills.</p>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
						<i class="far fa-star"></i>
					</div>
				</div>
			</div>	

			<div class="swiper-slide">
				<div class="box">
					<img src="images/pic4.png" alt="">
					<h3>charles lepcha</h3>
					<p>I'm a darjeelinge ( people who is based on Darjeeling called darjeelinge) soo.it's one of the best place to visit if uh are more mountain person because Darjeeling is a mountain area.make sure when uh go to Darjeeling Don't forget to visit chawrasta. if uh love Riding in horse it's the best place to visit. In Darjeeling uh can Experience the best weather and if uh have a good luck then uh can experience a snowfall also. trust me once uh visit Darjeeling uh never want to leave.</p>
					<div class="stars">
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="fas fa-star"></i>
						<i class="far fa-star"></i>
					</div>
				</div>
			</div>


		</div>
	</div>



</section>

<!-- review section ends -->

<!-- contact section starts -->



<section class="contact" id="contact">

	<h1 class="heading">
		<span>c</b></span>
		<span>o</b></span>
		<span>n</b></span>
		<span>t</b></span>
		<span>a</b></span>
		<span>c</b></span>
		<span>t</b></span>
	</h1>
	

	 

	<div class="row">
		<div class="images">
			<img src="images/contact-img.svg" alt="">
		</div>

		<?php

if(isset($_POST['submit_btn']))
{
	$name=$_POST["name"];
	$email=$_POST["email"];
	$phno=$_POST["number"];
	$subject=$_POST["subject"];
	$message=$_POST["message"];

	
	$FromEmail="18110sharma@gmail.com";
	$ReplyTo=$email;
	$ToEmail="rajpokhrel18110@gmail.com";
	$sub=$subject;
	$msg='Name:-'.$name.'\nEmail:-' .$email.'\n Phone Number:-' .$phno.'\nMessage:-' .$message;
	$header = "From: 18110sharma@gmail.com";

	
	if(mail($ToEmail, $sub, $msg, $header, '-f'.$FromEmail)){
		echo "Your message has been send, we will reply as soon as possible. Thank You";
	}
	else{
		echo "Sorry we are unable to send your message please again try after some time.";
	}
}

 		?>

		<form action="" method="POST">
			<div class="inputBox">
				<input type="text" name="name" placeholder="name">
				<input type="email" name="email" placeholder="email">
			</div>
			<div class="inputBox">
				<input type="number" name="number" placeholder="number">
				<input type="text" name="subject" placeholder="subject">
			</div>
			<textarea type="text" name="message" placeholder="message"  id="" cols="30" rows="10"></textarea>
			<input type="submit" name="submit_btn" class="btn" value="send message">
		</form>

	</div>

</section>

<!-- footer section starts -->

<section class="footer">

<div class="box-container">
	<div class="box">
		<h3><a href="about.php">about us</a></h3>
	</div>
	<div class="box">
		<h3>quick links</h3>
		<a href="#home">home</a>
		<a href="#book">book</a>
		<a href="#packages">places</a>
		<a href="#services">services</a>
		<a href="#gallery">gallery</a>
		<a href="#contact">contact us</a>
		<a href="#review">review</a>
	</div>

	<div class="box">
		<h3>follow us</h3>
		<a href="#">facebook</a>
		<a href="#">instagram</a>
	</div>
<i class= "fa-solid fa-user-xmark" id="form-close"></i> 

</div>
	<h1 class="credit"> created by <span> RAJ SHARMA </span> | all right reserved</h1>

</section>
<!-- footer section ends -->


<!-- swiperjs javascript link -->

<script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

<!-- custom js file link -->

<script src="script.js"> </script>


</body>

</html>

