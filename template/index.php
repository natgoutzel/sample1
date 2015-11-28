<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Home</title>
		<meta charset="utf-8">
		<meta name = "format-detection" content = "telephone=no" />
		<link rel="icon" href="images/favicon.ico">
		<link rel="shortcut icon" href="images/favicon.ico" />
		<link rel="stylesheet" href="css/owl.carousel.css">
		<link rel="stylesheet" href="css/slider.css">
		<link rel="stylesheet" href="css/style.css">
		<script src="js/jquery.js"></script>
		<script src="js/jquery-migrate-1.1.1.js"></script>
		<script src="js/script.js"></script>
		<script src="js/jquery.ui.totop.js"></script>
		<script src="js/superfish.js"></script>
		<script src="js/jquery.equalheights.js"></script>
		<script src="js/jquery.mobilemenu.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script src="js/owl.carousel.js"></script>
		<script src="js/jquery.flexslider-min.js"></script>
		<script src="js/kwiks.js"></script>
		<script>
			$(document).ready(function(){
				$().UItoTop({ easingType: 'easeOutQuart' });
				var owl = $("#owl");
				owl.owlCarousel({
					items : 4, //10 items above 1000px browser width
					itemsDesktop : [995,3], //5 items between 1000px and 901px
					itemsDesktopSmall : [767, 2], // betweem 900px and 601px
					itemsTablet: [700, 2], //2 items between 600 and 0
					itemsMobile : [479, 1], // itemsMobile disabled - inherit from itemsTablet option
					navigation : true,
				});
			})
			var Main = Main || {};
			jQuery(window).load(function() {
				window.responsiveFlag = jQuery('#responsiveFlag').css('display');
				Main.gallery = new Gallery();
				jQuery(window).resize(function() {
					Main.gallery.update();
				});
			});
			function Gallery(){
				var self = this,
					container = jQuery('.flexslider'),
					clone = container.clone( false );
					this.init = function (){
						if( responsiveFlag == 'block' ){
						var slides = container.find('.slides');
						slides.kwicks({
							max : 500,
							spacing : 0
						}).find('li > a').click(function (){
							return false;
						});
						} else {
							container.flexslider();
						}
					}
					this.update = function () {
						var currentState = jQuery('#responsiveFlag').css('display');
						if(responsiveFlag != currentState) {
							responsiveFlag = currentState;
							container.replaceWith(clone);
							container = clone;
							clone = container.clone( false );
							this.init();
						}
					}
				this.init();
			}
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
	<body class="page1" id="top">
<!--==============================header=================================-->
		<header>
			<div class="clear"></div>
			<div class="container_12">
				<div class="grid_12">
					<h1>
                                            <a href="index.php">
							<img src="images/logo.png" alt="Your Happy Family">
						</a>
					</h1>
					<div class="menu_block">
						<nav class="horizontal-nav full-width horizontalNav-notprocessed">
							<ul class="sf-menu">
                                                            <li class="current"><a href="index.php">Αρχική</a>
									<ul>
										<li><a href="#">history</a></li>
										<li><a href="#">offers</a></li>
										<li><a href="#">news</a>
										<ul>
											<li><a href="#">fresh </a></li>
											<li><a href="#">archive</a></li>
										</ul>
									</ul>
								 </li>
                                                                <li><a href="ourschool.php">Το Σχολειο μας </a></li>
								<li><a href="index-2.php">Συλλογος Γονεων</a></li>
                                                                <li><a href="actions.php">Δρασεις </a></li>
								<li><a href="index-4.php">Ευρωπαϊκα Προγραμματα</a></li>
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
					<div class="grid_8">
						<div class="flexslider">
							<ul class="slides">
								<li>
									<img src="images/page1_img1.jpg" alt="">
									<div class="flex-caption">
										<p>Hope</p>
									</div>
								</li>
								<li>
									<img src="images/page1_img2.jpg" alt="">
									<div class="flex-caption c2">
										<p>Save</p>
									</div>
								</li>
								<li>
									<img src="images/page1_img3.jpg" alt="">
									<div class="flex-caption">
										<p>Help</p>
									</div>
								</li>
							</ul>
						</div>
						<span id="responsiveFlag"></span>
					</div>
					<div class="grid_4">
                                            <a href="#" class="donate">Καλως Ήρθατε</a>
						<div class="text1">στο Δημοτικό σχολείο Σκουτάρεως</div>
						<p>Θα μείνουμε ευχαριστημένοι αν η περιήγησή σας στον ιστοτοπό μας, έχει να σας προσφέρει οτιδήποτε επιμορφωτικό, πληροφοριακό ή ψυχαγωγικό.</p>
					</div>
					<div class="clear"></div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">Η Ιστορια του σχολειου μας</div>
							<div class="pad">
								Το 1922 το πρώτο σχολείο στεγάστηκε σε σπίτι ανταλλάξιμο το οποίο παραχωρήθηκε στη σχολική εφορεία μαζί με γήπεδο 2.400 τ.μ. Το διδακτήριο κτίστηκε το 1929 σε γήπεδο 7.016 τ.μ. (116Χ60 περίπου) και ήταν 2/θέσιο με έκταση 182 τ.μ.<div class="alright"><a href="#" class="btn">Περισσοτερα</a></div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">ωρολογιο προγραμμα</div>
							<div class="pad">
								Εδώ μπορείτε να βρείτε πληροφορίες σχετικά με τα μαθήματα, τις ώρες και τις αίθουσες διδασκαλίας του σχολείου μας.<div class="alright"><a href="#" class="btn">Περισσοτερα</a></div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">ανακοινωσεις</div>
							<div class="pad">Εδω θα βρείτε τις τελευταίες ανακοινώσεις του σχολείου μας. <div class="alright"><a href="#" class="btn">περρισσοτερα</a></div>
							</div>
						</div>
					</div>
					<div class="grid_3">
						<div class="block2 maxheight">
							<div class="title">δρασεις</div>
							<div class="pad">Εδώ θα βρείτε φωτογραφικό υλικό από τις διάφορες δράσεις και εκδηλώσεις που έχει πραγματοποιήσει το σχολείο μας.<div class="alright"><a href="#" class="btn">περισσότερα</a></div></div>
						</div>
					</div>
					<div class="clear"></div>
					<div class="grid_12">
						<h2>You can help Them</h2>
						<div id="owl">
							<div class="item">
								<a href="#"><img src="images/page1_img4.jpg" alt="">Jim <br>
								8 years</a>
							</div>
							<div class="item it1">
								<a href="#"><img src="images/page1_img5.jpg" alt="">Ann <br>
								3 years</a>
							</div>
							<div class="item it2">
								<a href="#"><img src="images/page1_img6.jpg" alt="">Linda <br>
								5 years</a>
							</div>
							<div class="item it3">
								<a href="#"><img src="images/page1_img7.jpg" alt="">Mark  <br>
								6 years</a>
							</div>
							<div class="item">
								<a href="#"><img src="images/page1_img4.jpg" alt="">Jim <br>
								8 years</a>
							</div>
							<div class="item it1">
								<a href="#"><img src="images/page1_img5.jpg" alt="">Ann <br>
								3 years</a>
							</div>
							<div class="item it2">
								<a href="#"><img src="images/page1_img6.jpg" alt="">Linda <br>
								5 years</a>
							</div>
							<div class="item it3">
								<a href="#"><img src="images/page1_img7.jpg" alt="">Mark  <br>
								6 years</a>
							</div>
						</div>
					</div>
					<div class="grid_4">
						<h3 class="nowrap mb0">για χρηστες</h3>
						Πατήστε παρακάτω για να συνδεθείτε
						<div class="alright"><a href="#" class="btn">συνδεση</a></div>
					</div>
					<div class="grid_7 prefix_1">
						<h3>Σχετικα</h3>
						<img src="images/page1_img8.jpg" alt="" class="img_inner fleft">
						<div class="extra_wrapper">
							<p>Το σχολείο μας στεγάζεται στο Σκούταρι Σερρών. Πατήστε παρακάτω για πλοήγηση σατο χάρτη <span class="col1"><a href=" http://blog.templatemonster.com/free-website-templates/" rel="dofollow">εδώ</a></span>.</p>
							Αν θέλετε να επικοινωνήσετε πατήστε παρακάτω. 
						</div>
						<div class="clear"></div>
						<div class="alright"><a href="#" class="btn">περισσότερα</a></div>
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
							<strong>Δημοτικό Σχολείο Σκουτάρεως</strong>   &copy; <span id="copyright-year"></span> | <a href="#">Privacy Policy</a><br>
							Website designed by <a href="http://informatics.teicm.gr/" rel="nofollow">ΤΕΙ Κεντρικής Μακεδονίας Τμήμα ΜηχανικώνΠληροφορικής</a>
						</div>
					</div>
				</div>
			</footer>
		</div>
	</body>
</html>