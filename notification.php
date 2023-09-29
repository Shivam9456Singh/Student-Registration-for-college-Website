<?php 
 include 'includes/class.file.php';
 $fileget = new File();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Notifications - Gautam Group Of Colleges</title>

	<meta charset="utf-8">
	<meta content='#343a40' name='theme-color'/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<!-- viewport -->
	<!-- <meta name="viewport" content="width=device-width,initial-scale=1"> -->
	<meta name="viewport" content="width=1024px">
	<link rel="shortcut icon" type="image/png" href="assets/img/favicon.png"/>
	<!-- css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">

	<link href="https://fonts.googleapis.com/css?family=Merriweather&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<script defer src="https://use.fontawesome.com/releases/v5.0.6/js/all.js"></script>
</head>
<body>
	<div class="head-wrap">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-8">
						<div class="d-flex justify-content-center">
							<div class="img-logo">
								<a href="index.php"><img src="assets/img/logo1.png" alt="GGC Logo"></a>
							</div>
							<div class="info">
								<span>Gautam Group Of Colleges</span>
								<p>Hamirpur (H.P.)</p>
							</div>
						</div>
					</div>
					<div class="col-4">
						<form name="search" method="GET" action="search.html">	
							<div class="search-box">
						      	<div class="input-group">
								    <input type="text" class="form-control" name="search" placeholder="Search" required="">
								    <div class="input-group-append">
								      <button class="btn btn-secondary" type="submit">
								        <i class="fa fa-search"></i>
								      </button>
								    </div>
							  	</div>
					   		</div>
					   	</form>
					</div>
				</div>
			</div>
		</header>
	</div>
	<div class="slider-wrap">
		<div class="row">
			<div class="col-9">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
					  <ol class="carousel-indicators">
					    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
					    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
					  </ol>
					  <div class="carousel-inner">
					    <div class="carousel-item mh-250 active">
					      <img class="d-block w-100 h-220" src="assets/img/clgweb.webp" alt="First slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 h-220" src="assets/img/clgloc.webp" alt="Second slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 h-220" src="assets/img/fest2.webp" alt="Third slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 h-220" src="assets/img/clgview.webp" alt="Third slide">
					    </div>
					    <div class="carousel-item">
					      <img class="d-block w-100 h-220" src="assets/img/winpic.webp" alt="Third slide">
					    </div>
					  </div>
					  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
					    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
					    <span class="sr-only">Previous</span>
					  </a>
					  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
					    <span class="carousel-control-next-icon" aria-hidden="true"></span>
					    <span class="sr-only">Next</span>
					  </a>
					</div>
			</div>
			<div class="col-3">
				<div class="row">
					<div class="col-6">
						<div class="img-wrapper">
                          <img src="assets/img/hvpi2.webp" alt="Meritorious Students Receiving Gold Medals From Sh. Mohammad Hamid Ansari, Hon'ble Vice President of India" title="Meritorious Students Receiving Gold Medals From Sh. Mohammad Hamid Ansari, Hon'ble Vice President of India">
                        </div>
                        <div class="img-wrapper">
                          <img src="assets/img/principal.webp" alt="Dr. Rajneesh Gautam Principal Cum Secretary" title="Dr. Rajneesh Gautam Principal Cum Secretary">
                        </div>
					</div>
					<div class="col-6">
                        <div class="img-wrapper">
                          <img src="assets/img/hvpi1.webp" alt="Meritorious Students Receiving Gold Medals From Sh. Mohammad Hamid Ansari, Hon'ble Vice President of India" title="Meritorious Students Receiving Gold Medals From Sh. Mohammad Hamid Ansari, Hon'ble Vice President of India">
                        </div>
						<div class="img-wrapper">
							<img src="assets/img/founder.webp" alt="Shri Jai Ram Thakur, Hon'ble Chief Minister Himachal Pradesh" title="Sh. Jagdish Gautam,Founder of GGC">
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
  	<main>
		<div class="row">
			<div class="col-3">
				<div class="sidenav-wrap">
					<nav>
						<ul id="main-nav" class="list-unstyled main-ul">
							<li><a href="index.php">Home</a></li>
							<li><a href="about-us.html">About Us</a></li>
							<li><a href="vision-mission.html">Vision & Mission</a></li>
							<li><a href="founder-message.html">Founder Message</a></li>
							<li><a href="principal-message.html">Principal Message</a></li>
							<li><a href="academic.html">Academic</a>
								<ul id="submenu" class="list-unstyled">
									<li><a href="ug.html">UG</a>
										<ul id="submenu-inner" class="list-unstyled">
											 <li><a href="bsc.html">B.Sc.(MED./N-MED.)</a></li>
						              <li><a href="bcom.html">BCOM</a></li>
						              <li><a href="ba.html">BA</a></li>
									  <li><a href="bba.html">BBA</a></li>
						              <li><a href="bhm.html">BHM</a></li>
						              <li><a href="gnm.html">GNM</a></li>
						              <li><a href="bsc-nursing.html">B.Sc .Nursing</a></li>
						              <li><a href="#">Post B.Sc. Nursing</a></li>
										</ul>
									</li>
									<li><a href="pg.html">PG</a>
										<ul id="submenu-inner" class="list-unstyled">
											<li><a href="msc-botany.html">M.Sc. Botony</a></li>
						              <li><a href="msc-biotech.html">M.Sc. Biotechnology</a></li>
						              <li><a href="msc-chemistry.html">M.Sc. Chemistry</a></li>
						              <li><a href="msc-physics.html">M.Sc. Physics</a></li>
						              <li><a href="msc-mathematics.html">M.Sc. Mathematics</a></li>
						              <li><a href="msc-microbio.html">M.Sc. Microbiology</a></li>
						              <li><a href="mapolsci.html">MA Pol. Sci.</a></li>
										</ul>
									</li>
									<li><a href="professional.html">PROFESSIONAL</a>
							            <ul id="submenu-inner" class="list-unstyled">
							              <li><a href="bba.html">BBA</a></li>
							              <li><a href="bca.html">BCA</a></li>
							              <li><a href="mba.html">MBA</a></li>
							              <li><a href="pgdca.html">PGDCA</a></li>
							            </ul>
						          </li>
						           <li><a href="pharmacy.html">PARMACY</a>
							            <ul id="submenu-inner" class="list-unstyled">
							              <li><a href="bpharmacy.html">B. PARMACY</a></li>
							              <li><a href="dpharmacy.html">D. PARMACY</a></li>
							            </ul>
						          </li>
								</ul>
							</li>
							<li><a href="cells.html">Cells</a>
								<ul id="submenu" class="list-unstyled" style="width: 280px;">
									<li><a href="anti-ragging-cell.html">Anti Ragging Cell</a></li>
					          <li><a href="student-grievance-redressal-cell.html">Student Grievance Redressal Cell</a></li>
					          <li><a href="sc-st-grievance-redressal.html">SC/ST Grievance Redressal</a></li>
					          <li><a href="sexual-harassment.html">Sexual Harassment</a></li>
					          <li><a href="caste-discri.html">Caste Discrimination Committee</a></li>
					          <li><a target="_blank" href="http://mooc.org/">MOOC</a></li>
					          <li><a href="university-industrial-cell.html">University Industry Cell</a></li>
								</ul>
							</li>

							<li><a href="student-zone.html">Student Zone</a>
								<ul id="submenu" class="list-unstyled">
									<li><a href="feedback.html">Feedback</a></li>
								</ul>
							</li>
							<li><a href="gallery.php">Gallery</a></li>
							<li><a href="fee-structure.html">Fee Structure</a></li>
							<li><a href="notification.php">Notifications</a></li>
							<li><a href="faculty.html">Faculty</a></li>
							<li><a href="contact-us.html">Contact Us</a></li>
						</ul>
					</nav>
				</div>
			</div>
			<div class="col-9">
				<div class="aboutus">
					<div class="about">
						<div class="head-title">
								<h4>Notifications</h4>
								<div class="hr"></div>
						</div>
						<article class="text-justify notifi">
								<ul class="list-unstyled">
								  	 <?php $fileget->get_noticeLinks(); ?>
								  </ul>
						</article>
					</div>
				</div>
			</div>
		</div>
	</main>

<!-- footer -->
<section class="footer-link">
	<div class="container">
		<div class="row">
			<div class="col-3">
				<div class="ins-detail text-center">
					<img src="assets/img/logo1.png" style="height: 60px; width: 60px;">
					<br/>
					<a href="">Gautam Group Of Colleges</a>
					<p>Near Bus Stand Hamirpur</p>
					<p>HP 177001</p>
				</div>
			</div>
			<div class="col-3">
				<div class="links">
					<span>General Information</span>
					<hr class="full" />
					<ul class="list-unstyled">
						<li><i class="fa fa-angle-right"></i> <a href="about-us.html"> About Us</a></li>
						<li><i class="fa fa-angle-right"></i> <a href="contact-us.html"> Contact Us</a></li>
						<li><i class="fa fa-angle-right"></i> <a href="anti-ragging-cell.html"> Anti-Ragging</a></li>
						<li><i class="fa fa-angle-right"></i> <a href="faculty.html">Faculty</a></li>
						<li><i class="fa fa-angle-right"></i> <a href="feedback.html"> Feedback</a></li>
					</ul>
				</div>
			</div>
			<div class="col-3">
				<div class="links">
					<span>Quick links</span>
					<hr class="full" />
					<ul class="list-unstyled">
						<li><i class="fa fa-angle-right"></i> <a href="vision-mission.html">Vision & Mission</a></li>

						<li><i class="fa fa-angle-right"></i> <a href="notification.php">Notifications</a></li>
					</ul>
				</div>
			</div>
			<div class="col-3">
				<div class="links">
					<span>Social Contact</span>
					<hr class="full" />
					<section class="social-contact">
				            <ul class="list-inline list-social text-center">
				                <li class="social-facebook">
				                    <a target="_blank" href="https://m.facebook.com/pages/category/School/Gautam-Group-Of-Colleges-1397929340472669/"><i class="fab fa-facebook-f"></i></a>
				                </li>
				                <li class="social-insta">
				                    <a target="_blank" href="https://instagram.com/ggc_hamirpur?igshid=1pww3htnuhwj1"><i class="fab fa-instagram"></i></a>
				                </li>
				            	<li class="social-twitter">
				                    <a target="_blank" href="https://twitter.com/ggchmr?s=08"><i class="fab fa-twitter"></i></a>
				                </li>
				            </ul>
				    </section>
				</div>
			</div>
		</div>
	</div>
</section>
	<footer class="text-center">Copyright &copy; 2019 | All Rights Reserved. <span>Gautam Group Of College</span> Hamirpur (H.P.)
		<br>
	Developed By <a target="_blank" href="http://internwell.com/"> InternWell</a>
	</footer>

	<script src="assets/js/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>