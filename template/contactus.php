<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Επικοινωνία</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/form.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script> 
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/TMForm.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
			}) 
		</script>
		<!--[if lt IE 8]>
		<div style=' clear: both; text-align:center; position: relative;'>
			<a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
				<img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
			</a>
		</div>
		<![endif]-->
		<!--[if lt IE 9]>
			<script src="js/html5shiv.js"></script>
			<link rel="stylesheet" media="screen" href="css/ie.css">
		<![endif]-->
	</head>
	<body class="" id="top">
<!--==============================header=================================-->
		<header>
			<div class="clear"></div>
			<div class="container_12">
				<div class="grid_12">
					<h1>
						<a href="index.html">
							<img src="images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
								<li>
									<a href="index.html">Home</a>
									<ul>
										<li><a href="#">history</a></li>
										<li><a href="#">offers</a></li>
										<li>
											<a href="#">news</a>
											<ul>
												<li><a href="#">fresh </a></li>
												<li><a href="#">archive</a></li>
											</ul>
										</li>
									</ul> 
								</li>
								 <li><a href="ourschool.php">Το Σχολειο μας </a></li>
                                                                <li><a href="parents.php">Συλλογος Γονεων</a></li>
                                                                <li><a href="actions.php">Δρασεις </a></li>
                                                                <li><a href="europianprograms.php">Ευρωπαϊκα Προγραμματα</a></li>
							</ul>
						</nav>
						<div class="clear"></div>
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</header>
		<div class="main">
<!--==============================Content=================================-->
			<div class="content"><div class="ic">More Website Templates @ TemplateMonster.com - December 16, 2013!</div>
				<div class="container_12">
					<div class="grid_12">
						<div class="map">
							<figure class=" ">
								<iframe src="http://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Brooklyn,+New+York,+NY,+United+States&amp;aq=0&amp;sll=37.0625,-95.677068&amp;sspn=61.282355,146.513672&amp;ie=UTF8&amp;hq=&amp;hnear=Brooklyn,+Kings,+New+York&amp;ll=40.649974,-73.950005&amp;spn=0.01628,0.025663&amp;z=14&amp;iwloc=A&amp;output=embed"></iframe>
							</figure>
						</div>
					</div>
					<div class="grid_4">
						<h3>Διευθυνση</h3>
						<div class="map">
							<address>
								<dl>
									<dt>Δημοτικό Σχολειο Σκουταρεως <br>
										Σκούταρι 62100<br>
										Σέρρες, Ελλάδα
									</dt>
									
									<dd><span>Telephone:</span>+1 800 603 6035</dd>
									<dd><span>FAX:</span>+1 800 889 9898</dd>
									<dd>E-mail: <a href="#" class="col1">mail@demolink.org</a></dd>
									<dd>Skype: <a href="#" class="col1">@skypename</a></dd>
								</dl>
							</address>
							<p>Αν θέλετε να επικοινωνήσετε μαζιμας, συμπληρωστε τα στοιχεια σας, γράψτε το μηνυμά σας στο πλαίσιο και πατηστε αποστολή </p>
							
						</div>
					</div>
					<div class="grid_8">
						<h3>Φορμα επικοινωνιας</h3>
						<form id="form">
							<div class="success_wrapper">
								<div class="success-message">Φορμα επικοινωνιας</div>
							</div>
							<label class="name">
								<input type="text" placeholder="Name:" data-constraints="@Required @JustLetters" />
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid name.</span>
							</label>
							<label class="email">
								<input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid email.</span>
							</label>
							<label class="phone">
								<input type="text" placeholder="Phone:" data-constraints="@Required @JustNumbers"/>
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*This is not a valid phone.</span>
							</label>
							<label class="message">
								<textarea placeholder="Message:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
								<span class="empty-message">*This field is required.</span>
								<span class="error-message">*The message is too short.</span>
							</label>
							<div>
								<div class="clear"></div>
								<div class="btns">
									<a href="#" data-type="submit" class="btn">Αποστολη</a>
									<a href="#" data-type="reset" class="btn">Καθαρισμος</a>
								</div>
							</div>
						</form>   
					</div>
				</div>
			</div>
<!--==============================footer=================================-->
			<footer>	
				<div class="hor bg3"></div>
				<div class="container_12">
					<div class="grid_12 ">  
						<div class="socials">
							<a href="#"></a>
							<a href="#"></a>
							<a href="#"></a>
							<div class="clear"></div>
						</div>
						<div class="copy">
							<strong>Life in Color</strong> &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a> <br>
							Website designed by <a href="http://www.templatemonster.com/" rel="nofollow">TemplateMonster.com</a>
						</div>  
					</div>
				</div>  
			</footer>
		</div>
	</body>
</html>

