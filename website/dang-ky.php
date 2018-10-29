<?php require_once("includes/connection.php"); ?>
<?php
	if (isset($_POST["btn_submit"])) {
		//lấy thông tin từ các form bằng phương thức POST
		$username = $_POST["username"];
		$password = $_POST["pass"];
		$name = $_POST["name"];
		$email = $_POST["email"];
		//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
		if ($username == "" || $password == "" || $name == "" || $email == "") {
			echo "bạn vui lòng nhập đầy đủ thông tin";
		}else{
			$sql = "INSERT INTO users(username, password, fullname, email, createdate ) VALUES ( '$username', '$password', '$name', '$email', now())";
			// thực thi câu $sql với biến conn lấy từ file connection.php
			mysqli_query($conn,$sql);
			echo "chúc mừng bạn đã đăng ký thành công";
		}
	}

?>

<!DOCTYPE html>
<html lang="vi">
<head>

		<meta name="viewport"
					content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="msapplication-tap-highlight" content="no">
		<meta property="og:type" content="website">
		<meta name="author" content="Fedu.vn"/>
		<meta property="og:site_name" content="Fedu.vn"/>
		<title>Fedu.vn</title>
		<link rel="shortcut icon" href="favicon.ico">
		<link rel="manifest" id="my-manifest-placeholder">


				 <link rel="apple-touch-icon" href="https://storage.googleapis.com/hachium/users/b7c9e200416d4e81dbd3f36733159276/1530194767960.png">


		<meta property="og:title" content=""/>

		<meta property="og:description"
					content=""/>

				<meta property="og:image"
					content="https://storage.googleapis.com/hachium/users/b7c9e200416d4e81dbd3f36733159276/1526662019197.png"/>
				 <link rel="icon" href="https://storage.googleapis.com/hachium/users/b7c9e200416d4e81dbd3f36733159276/1526662019197.png" type="image/x-icon"/>

		<meta name="keywords" content="">


		<link href="http://khoahoc.fedu.vn/assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">

		<link href="http://khoahoc.fedu.vn/assets/css/animate.css" rel="stylesheet" type="text/css">

		<link href="http://khoahoc.fedu.vn/assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">

		<link href="http://khoahoc.fedu.vn/assets/css/owl.carousel.min.css" rel="stylesheet" type="text/css">

		<link href="http://khoahoc.fedu.vn/liquid/themes/theme_default/assets/libraries/bootstrap-select/bootstrap-select.min.css" rel="stylesheet" type="text/css">

		<link href="http://khoahoc.fedu.vn/liquid/themes/theme_default/assets/libraries/metisMenu/metisMenu.css" rel="stylesheet" type="text/css">

		<link href="http://khoahoc.fedu.vn/liquid/themes/theme_default/assets/css/style.css" rel="stylesheet" type="text/css">

		<link href="http://khoahoc.fedu.vn/assets/fonts/SourceSansPro/font-face.css" rel="stylesheet" type="text/css">

		<link href="http://khoahoc.fedu.vn/assets/fonts/SanFrancisco/font-face.css" rel="stylesheet" type="text/css">

		<link href="https://fonts.googleapis.com/css?family=Alegreya|Anton|Lato|Montserrat|Open+Sans|Oswald|Raleway|Roboto|Source+Sans+Pro" rel="stylesheet" type="text/css">

		<link href="http://khoahoc.fedu.vn/liquid/themes/theme_default/assets/css/header.css" rel="stylesheet" type="text/css">

		<link href="http://khoahoc.fedu.vn/liquid/themes/theme_default/assets/css/featured_courses.css" rel="stylesheet" type="text/css">

		<link href="http://khoahoc.fedu.vn/liquid/themes/theme_default/assets/css/sign_up.css" rel="stylesheet" type="text/css">

		<link href="http://khoahoc.fedu.vn/liquid/themes/theme_default/assets/css/footer.css" rel="stylesheet" type="text/css">

		<script src="http://khoahoc.fedu.vn/assets/js/jquery.min.js"></script>
		<script src="http://khoahoc.fedu.vn/assets/js/bootstrap.min.js"></script>
		<style>
				.theme-background, .header-bgnone, .navbar-toggle, .ribbon-membership span, .btn.btn-primary.solid, .pagination>.active>a, .pagination>.active>a:hover, .pagination>li>a:hover  {
						background: #2a75ab !important;
				}
				.ribbon-membership::before, .ribbon-membership::after {
						border-color: #2a75ab !important;
				}
				.theme-color, ul.navbar-nav > li.active > a, .pagination li a,  ul.navbar-nav > li > a:hover {
						color: #2a75ab;
				}
				#course_content .lecture:hover{
						color: #2a75ab;
						background: ;
				}

				#payment .pricing-enroll{
						background: #2a75ab;
						border: #2a75ab;
				}
				#payment .pricing.active{
						background: ;
				}
				.price{
						color: #2a75ab !important;
				}

				html *:not(i) {
						font-family: SourceSansPro , sans-serif;
				}
				body{
						font-size: 16px;
				}

				#featured_courses .course.hachium:hover {
						border: 1px solid #2a75ab;
				}
				#footer .footer-link.hachium:hover{
						color: #2a75ab !important;
				}
				@media (max-width: 768px){
						#header{
								background: #2a75ab;
						}
				}
		</style>
		<style id="edit-style">

		</style>
</head>
<body>
<div id="page-container">



				<section id="header" class="navbar navbar-fixed-top" role="banner" data-section-id="header" style="">
		<div class="container">
						<div class="navbar-header">
								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
								</button>

								<div class="navbar-brand hachium">
										<a href="trangchu.php"><img  src="style/IMG/2.png" alt="logo" id="logo-navbar">
										</a>
								</div>

						</div>
						<nav class="collapse navbar-collapse clearfix" role="navigation">
								<ul class="nav navbar-nav navbar-right">

																<li><a href="trangchu.php" >Trang chủ</a></li>

																<li><a href="dang-nhap.php" >Đăng nhập</a></li>

																<li><a class="" href="dang-ky.php" >Đăng ký</a></li>

								</ul>
						</nav>
		</div>
</section>




				<section id="dang-ky.php" data-section-id="{{data_section_id}}">
		<div class="container main">
						<div class="sticky-center-container pinned" id="sign-up-form">
								<div class="content-box form-wrapper settings-form-wrapper">
										<div class="sign-up-form">
												<h2 class="title text-center">Đăng ký tài khoản </h2>
												<form method="post" action="dang-ky.php">

														<div class="form-group row">
																<div class="col-md-12">
																		<div class="control-input custom-input-block">
																				<label class="control-label custom-label"></label>
																				<input type="text"
																							id ="username"
																							name="username"
																							 placeholder="Username*"
																							 class="form-control custom-input" maxlength="100" name="name"
																							 type="text"
																							 required/>
																		</div>
																</div>
														</div>
														<div class="form-group row">
																<div class="col-md-12">
																		<div class="control-input custom-input-block">
																				<label class="control-label custom-label"> Email*</label>
																				<input id="email" name="email"
																							 placeholder="Email*"
																							 class="form-control custom-input" maxlength="100" name="email"
																							 type="email"
																							 required/>
																		</div>
																</div>
														</div>
													<div class="form-group row">
																<div class="col-md-12">
																		<div class="control-input custom-input-block has-error">
																				<label class="control-label custom-label">Mật khẩu*</label>
																				<input type="password" id="pass" name="pass"
																							 placeholder="Mật khẩu*"
																							 class="form-control custom-input" maxlength="30"
																							 name="password" type="password"
																							 autocomplete="off"
																							 required/>
																		</div>
																</div>
														</div>

														<div class="form-group row">
																<div class="col-md-12">
																		<div class="control-input custom-input-block has-error">
																				<label class="control-label custom-label">Họ Tên</label>
																				<input type="text" id="name" name="name"
																							 placeholder="Họ Tên"
																							 class="form-control custom-input" maxlength="30"
																							 name="confirm-password" type="password"
																							 required/>
																		</div>
																</div>
														</div>
														<div>
																<input type="hidden" name="browser">
																<input type="hidden" name="os"/>
																<input type="hidden" name="fingerprint"/>
																<input type="hidden" name="ip"/>
																<input type="hidden" name="ismobile"/>
																<input type="hidden" name="location"/>
																<input type="hidden" name="domain" value="sso.hachium.com"/>
														</div>
														<div class="text-center" id="agree-term"></div>
														<div class="button-group text-center">
																<button class="btn btn-primary solid btn-login" type="submit" name="btn_submit" value="Dang ky">Tạo tài khoản</button>
														</div>
														<br>
														<div id="login-section" class="text-center">
																<p>Bạn đã có tài khoản? <a class="theme-color" href="dang-nhap.php"> Đăng nhập </a>
																</p>
														</div>
												</form>
										</div>
								</div>
						</div>
		</div>
</section>
<script src="http://khoahoc.fedu.vn/assets/js/client.min.js"></script>

				<section id="before_footer">

</section>
<section id="footer" style="background:#292c2f; color:white;" data-section-id="footer">
		<div class="container">
				<h2 class="title hachium">VHW.VN</h2>
				<p class="description hachium">Đào Tạo Tin Học, Lập Trình</p>

						<p class="address hachium">Địa chỉ: 22 Nguyễn Văn Trỗi</p>


						<p class="phone hachium">Số điện thoại: 0979377285</p>
				<div class="custom-page text-center">

						<span class="wrap-footer-link hachium"">
								<a class="footer-link hachium" href="includes/DKSD.php" style="color:white">Điều khoản sử dụng</a>

									 &nbsp; • &nbsp;

						</span>

						<span class="wrap-footer-link hachium"">
								<a class="footer-link hachium" href="http://m.me/nddviet" style="color:white">Chat trực tiếp với giáo viên</a>

									 &nbsp; • &nbsp;

						</span>

</section>
<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="http://khoahoc.fedu.vn/assets/js/owl.carousel.min.js"></script>

<script src="http://khoahoc.fedu.vn/assets/js/wow.min.js"></script>

<script src="http://khoahoc.fedu.vn/liquid/themes/theme_default/assets/libraries/metisMenu/metisMenu.js"></script>

<script src="http://khoahoc.fedu.vn/liquid/themes/theme_default/assets/libraries/bootstrap-select/bootstrap-select.min.js"></script>

<script src="http://khoahoc.fedu.vn/liquid/themes/theme_default/assets/js/fb_messenger.js"></script>

<script src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.0"></script>

<script src="http://khoahoc.fedu.vn/liquid/themes/theme_default/assets/js/header_new_page.js"></script>

<script src="http://khoahoc.fedu.vn/liquid/themes/theme_default/assets/js/feedback.js"></script>

<script src="http://khoahoc.fedu.vn/liquid/themes/theme_default/assets/js/slideshow.js"></script>

<script src="http://khoahoc.fedu.vn/liquid/themes/theme_default/assets/js/app.js"></script>


</body>
</html>
