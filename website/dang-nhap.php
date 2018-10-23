<?php
session_start();

?>
<?php
//Gọi file connection.php ở bài trước
require_once("includes/connection.php");
	// Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
if (isset($_POST["btn_submit"])) {
	// lấy thông tin người dùng
	$username = $_POST["username"];
	$password = $_POST["password"];
	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt
	//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	$username = strip_tags($username);
	$username = addslashes($username);
	$password = strip_tags($password);
	$password = addslashes($password);
	if ($username == "" || $password =="") {
		echo "username hoặc password bạn không được để trống!";
	}else{
		$sql = "select * from users where username = '$username' and password = '$password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			echo "tên đăng nhập hoặc mật khẩu không đúng !";
		}else{
			// Lấy ra thông tin người dùng và lưu vào session
			while ( $data = mysqli_fetch_array($query) ) {
	    		$_SESSION["user_id"] = $data["id"];
				$_SESSION['username'] = $data["username"];
				$_SESSION["email"] = $data["email"];
				$_SESSION["fullname"] = $data["fullname"];
				$_SESSION["is_block"] = $data["is_block"];
				$_SESSION["permision"] = $data["permision"];
	    	}

                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
			header('Location: trangchu.php');
		}
	}
}
?>

<!DOCTYPE html>
<html lang="vi">
<head>
<meta charset="utf-8">
<meta property="og:url" content="http://khoahoc.fedu.vn/login"/>
<meta property="og:type" content="website"/>
<!-- Mobile Specific Metas
================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
<!--[if lt IE 9]>
<script src="http://khoahoc.fedu.vn/assets/js/html5shiv.js"></script>
<script src="http://khoahoc.fedu.vn/assets/js/respond.min.js"></script>
<![endif]-->
<link rel="apple-touch-icon" href="https://storage.googleapis.com/hachium/users/b7c9e200416d4e81dbd3f36733159276/1530194767960.png">
<link rel="icon" href="https://storage.googleapis.com/hachium/users/b7c9e200416d4e81dbd3f36733159276/1526662019197.png" type="image/x-icon"/>
<!-- Bootstrap -->
<link rel="stylesheet" href="http://khoahoc.fedu.vn/assets/css/bootstrap.min.css">
<!-- Responsive styles-->
<link rel="stylesheet" href="http://khoahoc.fedu.vn/assets/css/responsive.css">
<!-- FontAwesome -->
<link rel="stylesheet" href="http://khoahoc.fedu.vn/assets/css/font-awesome.min.css">

<!--DEFAULT ADDED COMMON STYLE-->
		<link rel="stylesheet" href="http://khoahoc.fedu.vn/assets/fonts/Raleway/font-face.css">
<link rel="stylesheet" href="http://khoahoc.fedu.vn/assets/fonts/Alegreya/font-face.css">
<link rel="stylesheet" href="http://khoahoc.fedu.vn/assets/fonts/Lato/font-face.css">
<link rel="stylesheet" href="http://khoahoc.fedu.vn/assets/fonts/Merriweather/font-face.css">
<link rel="stylesheet" href="http://khoahoc.fedu.vn/assets/fonts/Proxima/font-face.css">
<link rel="stylesheet" href="http://khoahoc.fedu.vn/assets/fonts/SourceSansPro/font-face.css">
<!-- Animation -->
<link rel="stylesheet" href="http://khoahoc.fedu.vn/assets/css/animate.css">

<!-- Flexslider -->
<link rel="stylesheet" href="http://khoahoc.fedu.vn/assets/css/flexslider.css">
<!-- Style Swicther -->
<!-- Template styles-->
<link rel="stylesheet" href="http://khoahoc.fedu.vn/assets/css/style.css">


		<style>
		/* Global styles
================================================== */
				html *:not(i){
				font-family: "SourceSansPro";
		}
				i{
				font-family: FontAwesome !important;
		}

		a{
				color: #2a75ab;
		}

		a.read-more:hover{
				color: #327cbc;
		}


		/* Typography
		/* Typography
		================================================== */

		.btn.btn-primary, .btn.btn-primary:active, .btn.btn-primary:link, .btn.btn-primary:visited{
				position: relative;
				border: none;
				/*border: 2px solid #2a75ab;*/
		}

		.btn.btn-primary:before{
				content: "";
				position: absolute;
				top: 0px;
				left: 0px;
				width: 100%;
				height: 100%;
				border-radius: 50px;
				display: none;
		}
		.btn.btn-primary:hover:before{
				display: block;
				background-color: black;
				opacity: 0.1;
		}
		.btn.btn-primary.solid{
				background: #2a75ab;
		}
		/*.btn.btn-primary.solid:hover{
				background: none;
		}*/
		ul.circle li:before{
				color: #2a75ab;
		}

		ul.check-list li i{
				color: #2a75ab;
		}

		blockquote {
				border-left: 5px solid #2a75ab;
		}


		/* Header area
		================================================== */

		/*-- Header --*/
		.header{
				border-top: 5px solid #2a75ab;
		}

		/*-- Logo --*/

		.navbar-brand{
				background: #2a75ab;
		}

		/*-- Main navigation --*/

		ul.navbar-nav > li:hover > a,
		ul.navbar-nav > li.active > a{
				color: #2a75ab;
		}

		.navbar-toggle{
				background: #2a75ab;
		}


		/* Common styles
		================================================== */

		.heading:hover .title-icon{
				color: #2a75ab;
		}

		h2.entry-title a:hover{
				color: #2a75ab;
		}

		/* Icon pentagon */

		.icon-pentagon{
				background: none repeat scroll 0 0 #2a75ab;
		}

		.icon-pentagon:before{
				border-bottom: 10px solid #2a75ab;
		}

		.icon-pentagon:after {
				border-top: 10px solid #2a75ab;
		}

		.service-icon:before {
				border-bottom: 30px solid #2a75ab;
		}

		.service-icon:after {
				border-top: 30px solid #2a75ab;
		}

		/* Carousel controller */

		.ts-carousel-controller .left:hover,
		.ts-carousel-controller .right:hover,
		.owl-controls .owl-prev:hover,
		.owl-controls .owl-next:hover{
				background: #2a75ab;
		}

		/* Input form */

		.form-control:focus{
				border: 1px solid #2a75ab !important;
		}

		/* Flex Slider */

		.portfolio-slider .flex-direction-nav a:hover,
		.second-slider .flex-direction-nav a:hover {
				background: #2a75ab;
		}

		/* Pagination */

		.pagination>.active>a, .pagination>.active>a:hover,
		.pagination>li>a:hover{
				background: #2a75ab;
		}

		/* Header area
		================================================== */

		/*-- Header --*/

		.header{
				border-top: 5px solid #2a75ab;
		}

		ul.navbar-nav > li:hover > a,
		ul.navbar-nav > li.active > a{
				color: #2a75ab;
		}

		.navbar-toggle{
				background: #2a75ab;
		}


		/* Header area - 2
		================================================== */

		/*-- Header bgnone fixed --*/

		.header-bgnone{
				background: #2a75ab;
		}


		/* Slideshow
		================================================== */

		/*-- Main slide --*/

		#main-slide .carousel-indicators li.active,
		#main-slide .carousel-indicators li:hover {
				background-color: #2a75ab;
		}

		#main-slide .carousel-control i:hover{
				background: #2a75ab;
		}


		/* Portfolio
		================================================== */

		.isotope-nav ul li a{
				border: 1px solid #2a75ab;
		}

		.isotope-nav ul a.active,
		.isotope-nav ul a:hover{
				background: #2a75ab;
		}

		/* About us
		================================================== */

		/* Featured Tab */

		.featured-tab .nav-tabs>li.active>a{
				background: #2a75ab;
		}

		.featured-tab .nav-tabs>li.active>a:after{
				border-left-color: #2a75ab;
		}

		.featured-tab .nav-tabs>li>a:hover{
				background: #2a75ab;
				color: #fff;
		}
		.featured-tab .nav-tabs>li>a:hover:after{
				border-left-color: #2a75ab;
		}

		/* Pricing table
		================================================== */

		.plan.featured .plan-price{
				background: #2a75ab;
		}
		.plan.featured .plan-price:after{
				border-top-color: #2a75ab;
		}

		/* Testimonial
		================================================== */

		.testimonial-slide .testimonial-text:before{
				color: #2a75ab;
		}

		.testimonial-slide .testimonial-text:after{
				color: #2a75ab;
		}

		.testimonial-slide.owl-theme .owl-controls .owl-page.active span{
				background: #2a75ab;
		}

		/* Recent Post
		================================================== */

		.post-img-overlay a:hover{
				background: #2a75ab;
		}

		/* Clients
		================================================== */

		.clients{
				background-color: #2a75ab;
		}

		/* Footer
		================================================== */
		.copyright-info a:hover{
				color: #2a75ab;
		}

		.footer .copyright-info a{
				color: #2a75ab;
		}

		.footer li a{
				color: #fff;
		}

		#back-to-top .btn.btn-primary:hover{
				background: #2a75ab;
		}

		/* Blog Item page
		================================================== */

		.post-meta a:hover{
				color: #2a75ab;
		}

		.author-url span a:hover{
				color: #2a75ab;
		}

		.comments-counter a:hover{
				color: #2a75ab;
		}

		.comments-list .comment-reply:hover{
				color: #2a75ab;
		}

		/*-- Blog sidebar --*/

		.widget-tab h4.entry-title a:hover{
				color: #2a75ab;
		}

		.widget-tags ul > li a:hover{
				background: #2a75ab;
		}

		/* Landing page
		================================================== */

		.landing-header.header-bgnone ul.navbar-nav > li:hover > a,
		.landing-header.header-bgnone ul.navbar-nav > li.active > a {
				color: #2a75ab;
		}

		.features-content .features-icon{
				color: #2a75ab;
		}

		.landing_facts{
				background: #2a75ab;
		}

		.landing-tab .nav-tabs>li.active{
				border-right: 5px solid #2a75ab;
		}

		.landing-tab .nav-tabs>li.active>a i{
				color: #2a75ab;
		}

		.landing-tab .nav-tabs>li>a:hover{
				color: #2a75ab !important;
		}

		.landing-tab .tab-pane i.big{
				color: #2a75ab;
		}

		.app-gallery.owl-theme .owl-controls .owl-page.active span{
				background: #2a75ab;
		}

		.landing_page_clients{
				background: #2a75ab;
		}


		.course:hover{
				cursor: pointer;
				border: 1px solid #2a75ab;
		}

		.course:hover .course-title span{
				color: #2a75ab;
		}
		.course-price span{
				color: #2a75ab;
				font-size: 15px;
				font-weight: 500;
				line-height: 60px;
				border-color: #2a75ab;
		}
		.course-complete{
				color: #2a75ab;
		}
		.dropdown img{
				cursor: pointer;
		}
		a.category-href:hover, a.category-header-href:hover, .active-category, .profile-menu-item:hover a, .profile-menu-item.active a{
				color: #2a75ab !important;
		}
		.profile-menu-item.active{
				border-left: 2px solid #2a75ab !important;
				margin-left: -2px;
		}
		.main-header-item:hover, .main-header-item.active{
				border-bottom: 2px solid #2a75ab !important;
		}
		.img-avatar-content i{
				background-color: #2a75ab !important;
		}
		.ribbon-membership span{
				background-color: #2a75ab !important;
		}
		.ribbon-membership::before, .ribbon-membership::after{
				border-color: #2a75ab !important;
		}
</style><style>
		#skype-info p img{
				margin: 15px !important;
		}
		#facebook-info a{
				font-size: 28px;
				color: #3b5998;
				margin: 14px;
		}

		#powered-by{
				padding-top: 20px;
		}

		.wrap-footer-custom-link a.footer-link{
				color: #fff;
		}
		.wrap-footer-custom-link a.footer-link:hover{
				color: #2a75ab;
		}

		/*ribbon*/
		.box{
				/*box-shadow: 0 0 15px rgba(0,0,0,.1);*/
				box-shadow: 0px 0px 15px 1px rgba(0,0,0,.1);
		}
		.ribbon {
				width: 90px;
				height: 90px;
				overflow: hidden;
				position: absolute;
		}
		.ribbon::before,
		.ribbon::after {
				position: absolute;
				z-index: 0;
				content: '';
				display: block;
				border: 5px solid #E7505A;
		}
		.ribbon span {
				position: absolute;
				display: block;
				width: 150px;
				padding: 1px 0;
				z-index: 10;
				background-color: #E7505A;
				box-shadow: 0 5px 10px rgba(0,0,0,.1);
				color: #fff;
				font-weight: 700;
				font-size: 12px;
				text-shadow: 0 1px 1px rgba(0,0,0,.2);
				text-transform: uppercase;
				text-align: center;
		}
		.ribbon-rest span{
				background-color: #2a75ab;
		}
		.ribbon-rest::before,
		.ribbon-rest::after {
				border-color: #2a75ab;
		}
		.ribbon-warning span{
				background-color: orange;
		}
		.ribbon-warning::before,
		.ribbon-warning::after {
				border-color: orange;
		}

		/* top right*/
		.ribbon-top-right {
				top: -6px;
				right: 7px;
		}
		.ribbon-top-right::before,
		.ribbon-top-right::after {
				border-top-color: transparent;
				border-right-color: transparent;
		}
		.ribbon-top-right::before {
				top: 0;
				left: 0;
		}
		.ribbon-top-right::after {
				bottom: 0;
				right: 0;
		}
		.ribbon-top-right span {
				left: -20px;
				top: 24px;
				transform: rotate(45deg);
		}
		.navbar-collapse .navbar-nav.navbar-right:last-child{
				margin-right: 0px !important;
		}

</style>

												<!-- Facebook Pixel Code -->
		<script>
				!function (f, b, e, v, n, t, s) {
						if (f.fbq)return;
						n = f.fbq = function () {
								n.callMethod ?
										n.callMethod.apply(n, arguments) : n.queue.push(arguments)
						};
						if (!f._fbq) f._fbq = n;
						n.push = n;
						n.loaded = !0;
						n.version = '2.0';
						n.queue = [];
						t = b.createElement(e);
						t.async = !0;
						t.src = v;
						s = b.getElementsByTagName(e)[0];
						s.parentNode.insertBefore(t, s)
				}(window,
						document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
				fbq('init', '219807885288641'); // Insert your pixel ID here.
				fbq('track', 'PageView');
		</script>
		<noscript>
				<img height="1" width="1" style="display:none"
						 src="https://www.facebook.com/tr?id=219807885288641&ev=PageView&noscript=1"/>
		</noscript>
		<!-- DO NOT MODIFY -->
		<!-- End Facebook Pixel Code -->

<meta name="author" content="Fedu.vn">
<meta property="og:title" content="Fedu.vn" />
<meta name="format-detection" content="telephone=no">
<meta name="msapplication-tap-highlight" content="no">

<title>Fedu.vn</title>

<link href="http://khoahoc.fedu.vn/assets/css/custom/page.css" rel="stylesheet" type="text/css">

<style>
		input.input-lg {
				background-color: white;
				height: 48px;
				border-radius: 6px;
				padding-left: 10px;
				border: 1px solid;
				border-color: #ccc;
				margin: 10px 0px;
		}
		input.input-lg::-webkit-input-placeholder{
				color: #555;
		}


		#form-section .form-group{
				margin-top: 30px;
		}

		.btn.btn-primary{
				color: #fff;
		}
		.btn.btn-primary:hover{
				color: #323232;
		}

		.btn-login{
				width: 100%;
				font-size: 16px;
				font-weight: bold;
				margin-top: 5px;
				margin-bottom: 20px;
		}

		#login-section{
				background-color: #fff;
				box-shadow: 0 8px 20px #e3e7ea;
				border-radius: 6px;
				text-align: center;
				margin-top: 60px;
				margin-bottom: 60px;
				padding: 50px 110px;
		}
		@media (max-width: 768px ) {
				#login-section{
						padding: 16px;
				}

		}
		.alert{
				text-align: left;
				padding: 10px;
				font-size: 14px;
		}

		section{
				padding: 80px 0px;
		}
</style>

</head>

<body>

<div class="body-inner">

				<header class="navbar-fixed-top header2 header-bgnone" role="banner">
				<div class="container">
		<div class="row">
								<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
						</button>
						<div class="navbar-brand">
																<a href="http://khoahoc.fedu.vn/"><img class="img-responsive" src="https://storage.googleapis.com/hachium/users/b7c9e200416d4e81dbd3f36733159276/1530194767960.png" alt="logo">
								</a>
														</div>
				</div><!--/ Logo end -->
				<nav class="collapse navbar-collapse clearfix" role="navigation">
						<ul class="nav navbar-nav navbar-right">
																												<!--ALL LINK CAN BE VISIBLE WHEN LOGGING IN AND LOGGING OUT-->
																																<!--ONLY LOGGED IN CAN BE VISIBLE -->
																																<!--                            Check kiểm tra bản dào tạo nội bộ thì không cho in ra trang đăng ký-->
																														<li nav="http://fedu.vn">
																		<a class="page-scroll
																"
																																										href="http://fedu.vn"
																																																											 tabindex="-1" id="btn-sign-up">Trang chủ</a>
																</li>
																																																																<!--ALL LINK CAN BE VISIBLE WHEN LOGGING IN AND LOGGING OUT-->
																																<!--ONLY LOGGED IN CAN BE VISIBLE -->
																																														<li nav="courses">
																<a class="page-scroll" href="http://khoahoc.fedu.vn/courses"
																								 tabindex="-1">Khoá học</a>
														</li>
																																																		<!--ALL LINK CAN BE VISIBLE WHEN LOGGING IN AND LOGGING OUT-->
																																<!--ONLY LOGGED IN CAN BE VISIBLE -->
																																<!--                            Check kiểm tra bản dào tạo nội bộ thì không cho in ra trang đăng ký-->
																														<li nav="kich-hoat-khoa-hoc">
																		<a class="page-scroll
																"
																																										href="http://khoahoc.fedu.vn/kich-hoat-khoa-hoc"
																																																											 tabindex="-1" id="btn-sign-up">Kích hoạt khóa học</a>
																</li>
																																																																<!--ALL LINK CAN BE VISIBLE WHEN LOGGING IN AND LOGGING OUT-->
																																																						<!--                            Check kiểm tra bản dào tạo nội bộ thì không cho in ra trang đăng ký-->
																														<li nav="login">
																		<a class="page-scroll
																"
																																										href="http://khoahoc.fedu.vn/login"
																																																											 tabindex="-1" id="btn-sign-up">Đăng nhập</a>
																</li>
																																																										</ul>
				</nav><!--/ Navigation end -->
		</div><!--/ Row end -->
</div>
		</header>
				<div class="margin-course-section">
		</div>

		<section>
				<div class="container">
						<div class="row">
								<div class="col-xs-12 col-sm-10 col-md-6 col-lg-6 col-xs-offset-0 col-sm-offset-1 col-md-offset-3 col-lg-offset-3" id="login-section">
										<div class="">
												<h2>Đăng nhập</h2>
										</div>
										<div class="form-group">
												<form method="POST" action="dang-nhap.php">
																												<div>
																<input type="text" name="username" placeholder="Tài Khoản" class="input-lg form-control" autofocus/>
																<input type="password" name="password" placeholder="Mật khẩu" class="input-lg form-control"/>
																<input type="hidden" name="browser">
																<input type="hidden" name="os"/>
																<input type="hidden" name="fingerprint"/>
																<input type="hidden" name="ismobile"/>
																<input type="hidden" name="ip"/>
																<input type="hidden" name="location"/>
														</div>
														<div>
																<button class="btn btn-primary solid btn-login" input type="submit" name="btn_submit" value="Đăng nhập">Đăng nhập</button>
														</div>
												</form>
										</div>
										<div>
												<p>
														<a class="btn-forgot-pw" href="http://khoahoc.fedu.vn/forgot-password">Quên mật khẩu?</a>
												</p>
												<p>

																														Nếu bạn chưa đăng ký?                                 <a href="http://khoahoc.fedu.vn/sign-up" class="btn-sign-up"> Đăng ký</a>
																										</p>
										</div>
								</div>
						</div>
				</div>
		</section>

						<footer id="footer" class="hachium footer">
		<div class="container">
				<div class="row">
						<div class="col-md-12 text-center" style="color: #f6f6f6; letter-spacing: 0.3px; line-height: 30px;">
								<div class="school-name">
										<div style="font-size: 26px;">
												Fedu.vn                    </div>
																						<div style="font-size: 13px; margin-top: -3px;">Trường Đào Tạo Tin Học, Lập Trình & Mỹ Thuật Đa Phương Tiện Fedu</div>
																		</div>
																		<div class="info-add">Địa chỉ: <span>22 Thành Công - Ba Đình - Hà Nội</span></div>
																										<div class="info-add">Điện thoại: <span>0869259562</span></div>
																										


								<ul class="info-add social-icon dark unstyled">
										<li>
																								<a target="_blank" title="Facebook" href="https://www.facebook.com/fedu.vn/"> <span
																class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
												</a>
																																				<a title="Skype" href="skype:vietnd0410?chat"> <span
																class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
												</a>
																						</li>
								</ul>

								<!--SHOW FOOTER LINK -->
																				<div class="wrap-footer-custom-link text-center">

																																																																																																				<a class="footer-link"
																																						href="http://khoahoc.fedu.vn/p/terms"
																																																				>Điều khoản sử dụng                                </a>
																<span class="space-dot">&nbsp;&bull;&nbsp;</span>
																																																																																																																		<a class="footer-link"
																																						href="http://m.me/nddviet"
																																																								target="_blank"
																																		>Chat trực tiếp với giáo viên                                </a>
																<span class="space-dot">&nbsp;&bull;&nbsp;</span>
																																																																																																																		<a class="footer-link"
																																						href="https://www.facebook.com/groups/1283666168335006/?ref=bookmarks"
																																																								target="_blank"
																																		>Facebook group hỗ trợ khóa lập trình web backend và frontend                                </a>
																<span class="space-dot">&nbsp;&bull;&nbsp;</span>
																																																																																																																		<a class="footer-link"
																																						href="http://khoahoc.fedu.vn/p/privacy"
																																																				>Chính sách riêng tư                                </a>
																<span class="space-dot">&nbsp;&bull;&nbsp;</span>
																																																																																																																		<a class="footer-link"
																																						href="https://www.facebook.com/groups/107584456406418"
																																																								target="_blank"
																																		>Facebook group hỗ trợ khóa thiết kế                                </a>
																<span class="space-dot">&nbsp;&bull;&nbsp;</span>
																																				</div>
																														</div>
				</div><!--/ Row end -->
		</div><!--/ Container end -->
</footer><!--/ Footer end -->


</div><!-- Body inner end -->
<style>
		.position-footer{
				position: fixed;
				bottom: 0;
				width:100%;
		}
</style>

</body>
</html>
