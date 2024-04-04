<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>
	<head>
		<style>
			#cwrap .crow {
				background-color:#e1dae6;
  border: 1px solid blue;
  margin: 10px 0;
  padding: 10px;
}
#cwrap .chead {
  margin-bottom: 10px;
}
#cwrap .cname {
  color: #005B44;
  font-weight: bold;
  font-size:1.5rem}
#cwrap .ctime {
  color: rgb(141, 29, 29);
  font-size: 0.95em;
}
#cwrap .cmsg {
  font-size: 1.2em;
  font-weight:semi-bold;
  color:black;
}
		</style>
		<title>Car Rental Website</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link href='https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css' rel='stylesheet'>
                                <link href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css' rel='stylesheet'>
                                <script type='text/javascript' src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
		
	
	<link rel="stylesheet" href="assets/css/main.css" />
		<!-- <noscript><link rel="stylesheet" href="assets/css/noscript.css" /></noscript> -->
	</head>

	<script src="3b-comments.js"></script>
    <link href="3c-comments.css" rel="stylesh	eet">

	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<?php include("includes/menu.php"); ?>

				<!-- Banner -->
					<section id="banner" class="major">
						<div class="inner">
							<header class="major">
								<h1>Rent a car at low prices</h1>
							</header>
							<div class="content">
								
								<ul class="actions">
									<li><a href="#one" class="button next scrolly">Select a Car</a></li>
								</ul>
							</div>
						</div>
					</section>

				<!-- Main -->
					<div id="main">

						<!-- One -->
							<section id="one" class="tiles">
								<article class="first">
									<span class="image">
										<img src="images/image-1.jpg" alt="" />
									</span>
									
									<header class="major">
										<h3>Luxury car</h3>


										<div class="major-actions">
											<a href="Luxrycar.php" class="button small next scrolly">Book now</a>
										</div>
									</header>
								</article> 	
								<article class="second">
									<span class="image">
										<img src="images/image-3.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Suv car</h3>

										<div class="major-actions">
											<a href="SUVcar.php" class="button small next scrolly">Book now</a>
										</div>
									</header>
								</article>
							</section>
							<section id="three" class="tiles">
								<article class="third">
									<span class="image">
										<img src="images/sedan.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Sedan car</h3>

										<div class="major-actions">
											<a href="Sedencar.php" class="button small next scrolly">Book now</a>
										</div>
									</header>
								</article>
								<article class="fourth">
									<span class="image">
										<img src="images/image-4.jpg" alt="" />
									</span>
									<header class="major">
										<h3>Electric car</h3>

										<div class="major-actions">
											<a href="Electriccar.php" class="button small next scrolly">Book now</a>
										</div>
									</header>
								</article>
								</section>

						<!-- Two -->
							<section id="two">
								<div class="inner">
									<header class="major">
										<h2>About us</h2>
									</header>
									<p>To save time of customers and with simplicity navigations we are building  web application to fulfill various needs of customer for rent or sell or buy a tow wheeler and four wheeler vehicle.</p>
									<ul class="actions">
										
									</ul>
								</div>
							</section>

	
<!-- Main Body -->
<section>
    <div class="container">

	<input type="hidden" id="pid" value="999"/>

<!-- (C) COMMENTS WILL LOAD HERE -->
<h1>COMMENTS</h1>
<div id="cwrap"></div>

<!-- (D) ADD NEW COMMENT -->
<form id="cadd" onsubmit="return comments.add(this)" style="background-color: #95b7ad;">
  <h1 style="margin:0px; font-family: Georgia, serif;
font-size: 53px;
letter-spacing: -2.6px;
word-spacing: 2.4px;
color: #C34A36;
font-weight: 9000;
text-decoration: none solid rgb(68, 68, 68);
font-style: italic;
font-variant: normal;
text-transform: capitalize;">Leave a reply</h1>
  <label style="margin-bottom: 0px; color:#073033; font-size:xx-large; margin-left:10px;padding:0px"> Name: </label>
  <input type="text" id="cname" placeholder="Name"  style="  border-radius: 12px;
  font: bold 1.05rem sans-serif; color: #000041;border: solid; border: solid #01a787 0.1px;
  outline-offset: 0.5rem; background-color:#ADC5CF "required />

  <label style="margin-bottom: 0px; color:#073033; font-size:xx-large; margin-left:10px; margin-top:15px;padding-bottom:0px"> Message: </label>
  <textarea id="cmsg" placeholder="Message" required  style="  border-radius: 12px;
  font: bold 1rem sans-serif; color: #000041; border: solid #01a787 0.1px;
  outline-offset: 0.5rem; background-color:#ADC5CF"></textarea>
  <input type="submit" value="Post Comment" style="background-color:#d19090; margin-left:10px; margin-top:20px; font-size:large;"/>
</form>
        <!-- <div class="row">
            <div class="col-sm-5 col-md-6 col-12 pb-4">
                <h1>Comments</h1>
                <div class="comment mt-4 text-justify float-left"> <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Rahul Makawala</h4> <span>- 20 January, 2022</span> <br>
                    <p>To save time of customers and with simplicity navigations we are building  web application to fulfill various needs of customer for rent or sell or buy a tow wheeler and four wheeler vehicle.</p>
                </div>
                <div class="text-justify darker mt-4 float-right"> <img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Rohan Lonkar</h4> <span>- 20 October, 2021</span> <br>
                    <p>To save time of customers and with simplicity navigations we are building  web application to fulfill various needs of customer for rent or sell or buy a tow wheeler and four wheeler vehicle./p>
                </div>
                <div class="comment mt-4 text-justify"> <img src="https://i.imgur.com/yTFUilP.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Dhirav Agrawal</h4> <span>- 20 may, 2021</span> <br>
                    <p>To save time of customers and with simplicity navigations we are building  web application to fulfill various needs of customer for rent or sell or buy a tow wheeler and four wheeler vehicle.</p>
                </div>
                <div class="darker mt-4 text-justify"> <img src="https://i.imgur.com/CFpa3nK.jpg" alt="" class="rounded-circle" width="40" height="40">
                    <h4>Madhav Mehta</h4> <span>- 20 Augest, 2018</span> <br>
                    <p>To save time of customers and with simplicity navigations we are building  web application to fulfill various needs of customer for rent or sell or buy a tow wheeler and four wheeler vehicle.</p>
                </div>
            </div>
            <div class="col-lg-4 col-md-5 col-sm-4 offset-md-1 offset-sm-1 col-12 mt-4">
                <form id="algin-form">
                    <div class="form-group">
                        <h4>Leave a comment</h4> <label for="message">Message</label> <textarea name="msg" id="" msg cols="30" rows="5" class="form-control" style="background-color: white;"></textarea>
                    </div>
                    <div class="form-group"> <label for="name">Name</label> <input type="text" name="name" id="fullname" class="form-control"> </div>
                    <div class="form-group"> <label for="email">Email</label> <input type="text" name="email" id="email" class="form-control"> </div>
                    <div class="form-group">
                        
                    </div>
                    
                    <div class="form-group"> <button type="button" id="post" class="btn">Post Comment</button> </div>
                </form>
            </div>
        </div> -->
    </div>
</section>
<script type='text/javascript' src='https://stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.bundle.min.js'></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/javascript' src=''></script>
                                <script type='text/Javascript'></script>
                               



					</div>

				
			</div>
			<footer class="footer-distributed">

			<div class="footer-left">

				<h3>Car Rental System</span></h3>

				<p class="footer-company-name">Car Rental</p>
			</div>

			<div class="footer-center">

				<div>
					<i class="fa fa-map-marker"></i>
					<p><span>Pandit Deendayal Energy Univeristy ,</span>Ahemedabad, Gujarat.</p>
				</div>

				<div>
					<i class="fa fa-phone"></i>
					<p>+91 1234567890</p>
				</div>

				<div>
					<i class="fa fa-envelope"></i>
					<p><a href="mailto:support@gadidekho.com">support@gadidekho.com</a></p>
				</div>

			</div>

			<div class="footer-right">

				<p class="footer-company-about">
					<span>About the company</span>
          To save time of customers and with simplicity navigations we are building  web application to fulfill various needs of customer for rent or sell or buy a tow wheeler and four wheeler vehicle.
				</p>

				<div class="footer-icons">

					<a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
					<a href="https://mobile.twitter.com/i/flow/login"><i class="fa fa-twitter"></i></a>
					<a href="https://www.instagram.com/accounts/login/"><i class="fa fa-instagram"></i></a>
					<a href="https://github.com/login"><i class="fa fa-github"></i></a>

				</div>

			</div>

		</footer>
  

		<Scripts>
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/browser.min.js"></script>
			<script src="assets/js/breakpoints.min.js"></script>
			<script src="assets/js/util.js"></script>
			<script src="assets/js/main.js"></script>

	</body>
</html>