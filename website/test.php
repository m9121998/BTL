
<!DOCTYPE html>
<!--[if IE 6]>
<html id="ie6" lang="vi" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if IE 7]>
<html id="ie7" lang="vi" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if IE 8]>
<html id="ie8" lang="vi" prefix="og: http://ogp.me/ns#">
<![endif]-->
<!--[if !(IE 6) | !(IE 7) | !(IE 8)  ]><!-->
<html lang="vi" prefix="og: http://ogp.me/ns#">
<!--<![endif]-->
<head>


<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '216154075592068');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=216154075592068&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->





<meta name="google-site-verification" content="NhgTvQOc7Wd14q0m7NVA0E38aWasX1tyAeqyiOC4iy8" />
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-PX83MHB');</script>
<!-- End Google Tag Manager -->
	<meta charset="UTF-8" />

	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link rel="pingback" href="http://fedu.vn/xmlrpc.php" />

		<!--[if lt IE 9]>
	<script src="http://fedu.vn/wp-content/themes/Divi/js/html5.js" type="text/javascript"></script>
	<![endif]-->

	<script type="text/javascript">
		document.documentElement.className = 'js';
	</script>

	<title>34- THỰC HÀNH THIẾT KẾ DỮ LIỆU VỚI SQL QUA BÀI TẬP - Fedu</title>

<!-- Recent Posts Widget With Thumbnails: Could not open the CSS file! Print inline CSS instead: -->
<style type='text/css'>.rpwwt-widget ul { list-style: outside none none; margin-left: 0; margin-right: 0; padding-left: 0; padding-right: 0; }
.rpwwt-widget ul li { overflow: hidden; margin: 0 0 1.5em; }
.rpwwt-widget ul li:last-child { margin: 0; }
.rpwwt-widget ul li img { display: inline; float: left; margin: .3em .75em .75em 0; }
#rpwwt-recent-posts-widget-with-thumbnails-2 img { width: 75px; height: 50px; }
#rpwwt-recent-posts-widget-with-thumbnails-3 img { width: 75px; height: 50px; }
#rpwwt-recent-posts-widget-with-thumbnails-4 img { width: 75px; height: 75px; }
#rpwwt-recent-posts-widget-with-thumbnails-5 img { width: 75px; height: 75px; }
</style>

<!-- This site is optimized with the Yoast SEO plugin v8.1.2 - https://yoast.com/wordpress/plugins/seo/ -->
<link rel="canonical" href="http://fedu.vn/khoa-hoc/lap-trinh-thiet-ke-web/34-thuc-hanh-thiet-ke-du-lieu-voi-sql-qua-bai-tap/" />
<meta property="og:locale" content="vi_VN" />
<meta property="og:type" content="article" />
<meta property="og:title" content="34- THỰC HÀNH THIẾT KẾ DỮ LIỆU VỚI SQL QUA BÀI TẬP - Fedu" />
<meta property="og:description" content="Đối tượng sẽ học khóa này là: &#8211; Người bắt đầu học về backend cần học về dữ liệu trước khi học lập trình &#8211; Những người muốn tìm hiểu về thiết kế cơ sở dữ liệu quan hệ &#8211; Bạn sinh viên cần tìm hiểu cách phân tích và thiết kế cơ sở dữ &hellip;" />
<meta property="og:url" content="http://fedu.vn/khoa-hoc/lap-trinh-thiet-ke-web/34-thuc-hanh-thiet-ke-du-lieu-voi-sql-qua-bai-tap/" />
<meta property="og:site_name" content="Fedu" />
<meta property="og:image" content="http://fedu.vn/wp-content/uploads/2018/08/hocmysql.png" />
<meta property="og:image:width" content="1920" />
<meta property="og:image:height" content="1080" />
<meta name="twitter:card" content="summary" />
<meta name="twitter:description" content="Đối tượng sẽ học khóa này là: &#8211; Người bắt đầu học về backend cần học về dữ liệu trước khi học lập trình &#8211; Những người muốn tìm hiểu về thiết kế cơ sở dữ liệu quan hệ &#8211; Bạn sinh viên cần tìm hiểu cách phân tích và thiết kế cơ sở dữ [&hellip;]" />
<meta name="twitter:title" content="34- THỰC HÀNH THIẾT KẾ DỮ LIỆU VỚI SQL QUA BÀI TẬP - Fedu" />
<meta name="twitter:image" content="http://fedu.vn/wp-content/uploads/2018/08/hocmysql.png" />
<!-- / Yoast SEO plugin. -->

<link rel='dns-prefetch' href='//fonts.googleapis.com' />
<link rel='dns-prefetch' href='//s.w.org' />
<link rel="alternate" type="application/rss+xml" title="Dòng thông tin Fedu &raquo;" href="http://fedu.vn/feed/" />
<link rel="alternate" type="application/rss+xml" title="Dòng phản hồi Fedu &raquo;" href="http://fedu.vn/comments/feed/" />
<link rel="alternate" type="application/rss+xml" title="Fedu &raquo; 34- THỰC HÀNH THIẾT KẾ DỮ LIỆU VỚI SQL QUA BÀI TẬP Dòng phản hồi" href="http://fedu.vn/khoa-hoc/lap-trinh-thiet-ke-web/34-thuc-hanh-thiet-ke-du-lieu-voi-sql-qua-bai-tap/feed/" />
		<script type="text/javascript">
			window._wpemojiSettings = {"baseUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/72x72\/","ext":".png","svgUrl":"https:\/\/s.w.org\/images\/core\/emoji\/11\/svg\/","svgExt":".svg","source":{"concatemoji":"http:\/\/fedu.vn\/wp-includes\/js\/wp-emoji-release.min.js?ver=4.9.8"}};
			!function(a,b,c){function d(a,b){var c=String.fromCharCode;l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,a),0,0);var d=k.toDataURL();l.clearRect(0,0,k.width,k.height),l.fillText(c.apply(this,b),0,0);var e=k.toDataURL();return d===e}function e(a){var b;if(!l||!l.fillText)return!1;switch(l.textBaseline="top",l.font="600 32px Arial",a){case"flag":return!(b=d([55356,56826,55356,56819],[55356,56826,8203,55356,56819]))&&(b=d([55356,57332,56128,56423,56128,56418,56128,56421,56128,56430,56128,56423,56128,56447],[55356,57332,8203,56128,56423,8203,56128,56418,8203,56128,56421,8203,56128,56430,8203,56128,56423,8203,56128,56447]),!b);case"emoji":return b=d([55358,56760,9792,65039],[55358,56760,8203,9792,65039]),!b}return!1}function f(a){var c=b.createElement("script");c.src=a,c.defer=c.type="text/javascript",b.getElementsByTagName("head")[0].appendChild(c)}var g,h,i,j,k=b.createElement("canvas"),l=k.getContext&&k.getContext("2d");for(j=Array("flag","emoji"),c.supports={everything:!0,everythingExceptFlag:!0},i=0;i<j.length;i++)c.supports[j[i]]=e(j[i]),c.supports.everything=c.supports.everything&&c.supports[j[i]],"flag"!==j[i]&&(c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&c.supports[j[i]]);c.supports.everythingExceptFlag=c.supports.everythingExceptFlag&&!c.supports.flag,c.DOMReady=!1,c.readyCallback=function(){c.DOMReady=!0},c.supports.everything||(h=function(){c.readyCallback()},b.addEventListener?(b.addEventListener("DOMContentLoaded",h,!1),a.addEventListener("load",h,!1)):(a.attachEvent("onload",h),b.attachEvent("onreadystatechange",function(){"complete"===b.readyState&&c.readyCallback()})),g=c.source||{},g.concatemoji?f(g.concatemoji):g.wpemoji&&g.twemoji&&(f(g.twemoji),f(g.wpemoji)))}(window,document,window._wpemojiSettings);
		</script>
		<meta content="Divi Child Theme v.1.0" name="generator"/><style type="text/css">
img.wp-smiley,
img.emoji {
	display: inline !important;
	border: none !important;
	box-shadow: none !important;
	height: 1em !important;
	width: 1em !important;
	margin: 0 .07em !important;
	vertical-align: -0.1em !important;
	background: none !important;
	padding: 0 !important;
}
</style>
<link rel='stylesheet' id='cpsh-shortcodes-css'  href='http://fedu.vn/wp-content/plugins/column-shortcodes//assets/css/shortcodes.css?ver=1.0' type='text/css' media='all' />
<link rel='stylesheet' id='contact-form-7-css'  href='http://fedu.vn/wp-content/plugins/contact-form-7/includes/css/styles.css?ver=5.0.4' type='text/css' media='all' />
<link rel='stylesheet' id='elusive-style-css'  href='http://fedu.vn/wp-content/plugins/widget-icon/assets/elusive/css/elusive-webfont.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-style-css'  href='http://fedu.vn/wp-content/plugins/widget-icon/assets/font-awesome/css/font-awesome.min.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='widget-icon-front-style-css'  href='http://fedu.vn/wp-content/plugins/widget-icon/css/widget-icon-front.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='wgdr-css'  href='http://fedu.vn/wp-content/plugins/woocommerce-google-dynamic-retargeting-tag/public/css/wgdr-frontend.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='photoswipe-css'  href='http://fedu.vn/wp-content/plugins/woocommerce/assets/css/photoswipe/photoswipe.css?ver=3.4.5' type='text/css' media='all' />
<link rel='stylesheet' id='photoswipe-default-skin-css'  href='http://fedu.vn/wp-content/plugins/woocommerce/assets/css/photoswipe/default-skin/default-skin.css?ver=3.4.5' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-layout-css'  href='http://fedu.vn/wp-content/plugins/woocommerce/assets/css/woocommerce-layout.css?ver=3.4.5' type='text/css' media='all' />
<link rel='stylesheet' id='woocommerce-smallscreen-css'  href='http://fedu.vn/wp-content/plugins/woocommerce/assets/css/woocommerce-smallscreen.css?ver=3.4.5' type='text/css' media='only screen and (max-width: 768px)' />
<link rel='stylesheet' id='woocommerce-general-css'  href='http://fedu.vn/wp-content/plugins/woocommerce/assets/css/woocommerce.css?ver=3.4.5' type='text/css' media='all' />
<style id='woocommerce-inline-inline-css' type='text/css'>
.woocommerce form .form-row .required { visibility: visible; }
</style>
<link rel='stylesheet' id='wp-pagenavi-css'  href='http://fedu.vn/wp-content/plugins/wp-pagenavi/pagenavi-css.css?ver=2.70' type='text/css' media='all' />
<link rel='stylesheet' id='select2-css'  href='http://fedu.vn/wp-content/plugins/woocommerce/assets/css/select2.css?ver=3.4.5' type='text/css' media='all' />
<link rel='stylesheet' id='yith-wcaf-css'  href='http://fedu.vn/wp-content/plugins/yith-woocommerce-affiliates/assets/css/yith-wcaf.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='owl-carousel-css'  href='http://fedu.vn/wp-content/themes/Divi-child/css/owl.carousel.min.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='owl-theme-css'  href='http://fedu.vn/wp-content/themes/Divi-child/css/owl.theme.min.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='font-awesome-css'  href='http://fedu.vn/wp-content/plugins/js_composer/assets/lib/bower/font-awesome/css/font-awesome.min.css?ver=5.4.2' type='text/css' media='all' />
<style id='font-awesome-inline-css' type='text/css'>
[data-font="FontAwesome"]:before {font-family: 'FontAwesome' !important;content: attr(data-icon) !important;speak: none !important;font-weight: normal !important;font-variant: normal !important;text-transform: none !important;line-height: 1 !important;font-style: normal !important;-webkit-font-smoothing: antialiased !important;-moz-osx-font-smoothing: grayscale !important;}
</style>
<link rel='stylesheet' id='bootstrap-css'  href='http://fedu.vn/wp-content/themes/Divi-child/css/grid12.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='libs-style-css'  href='http://fedu.vn/wp-content/themes/Divi-child/css/libs.css?ver=4.8.2' type='text/css' media='all' />
<link rel='stylesheet' id='divi-fonts-css'  href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800&#038;subset=latin,latin-ext' type='text/css' media='all' />
<link rel='stylesheet' id='divi-style-css'  href='http://fedu.vn/wp-content/themes/Divi-child/style.css?ver=3.0.51' type='text/css' media='all' />
<link rel='stylesheet' id='upw_theme_standard-css'  href='http://fedu.vn/wp-content/plugins/ultimate-posts-widget/css/upw-theme-standard.min.css?ver=4.9.8' type='text/css' media='all' />
<link rel='stylesheet' id='et-shortcodes-css-css'  href='http://fedu.vn/wp-content/themes/Divi/epanel/shortcodes/css/shortcodes.css?ver=3.0.51' type='text/css' media='all' />
<link rel='stylesheet' id='fancybox-css'  href='http://fedu.vn/wp-content/plugins/easy-fancybox/fancybox/jquery.fancybox.1.3.21.min.css' type='text/css' media='screen' />
<link rel='stylesheet' id='et-shortcodes-responsive-css-css'  href='http://fedu.vn/wp-content/themes/Divi/epanel/shortcodes/css/shortcodes_responsive.css?ver=3.0.51' type='text/css' media='all' />
<link rel='stylesheet' id='magnific-popup-css'  href='http://fedu.vn/wp-content/themes/Divi/includes/builder/styles/magnific_popup.css?ver=3.0.51' type='text/css' media='all' />
<link rel='stylesheet' id='dashicons-css'  href='http://fedu.vn/wp-includes/css/dashicons.min.css?ver=4.9.8' type='text/css' media='all' />
<style id='dashicons-inline-css' type='text/css'>
[data-font="Dashicons"]:before {font-family: 'Dashicons' !important;content: attr(data-icon) !important;speak: none !important;font-weight: normal !important;font-variant: normal !important;text-transform: none !important;line-height: 1 !important;font-style: normal !important;-webkit-font-smoothing: antialiased !important;-moz-osx-font-smoothing: grayscale !important;}
</style>
<link rel='stylesheet' id='enlighter-local-css'  href='http://fedu.vn/wp-content/plugins/enlighter/resources/EnlighterJS.min.css?ver=3.8' type='text/css' media='all' />
<link rel='stylesheet' id='bsf-Defaults-css'  href='http://fedu.vn/wp-content/uploads/smile_fonts/Defaults/Defaults.css?ver=4.9.8' type='text/css' media='all' />
<script type='text/javascript' src='http://fedu.vn/wp-includes/js/jquery/jquery.js?ver=1.12.4'></script>
<script type='text/javascript' src='http://fedu.vn/wp-includes/js/jquery/jquery-migrate.min.js?ver=1.4.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_add_to_cart_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","i18n_view_cart":"Xem gi\u1ecf h\u00e0ng","cart_url":"http:\/\/fedu.vn\/thanh-toan\/","is_cart":"","cart_redirect_after_add":"yes"};
/* ]]> */
</script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/woocommerce/assets/js/frontend/add-to-cart.min.js?ver=3.4.5'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/js_composer/assets/js/vendors/woocommerce-add-to-cart.js?ver=5.4.2'></script>
<link rel='https://api.w.org/' href='http://fedu.vn/wp-json/' />
<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://fedu.vn/xmlrpc.php?rsd" />
<link rel="wlwmanifest" type="application/wlwmanifest+xml" href="http://fedu.vn/wp-includes/wlwmanifest.xml" />
<meta name="generator" content="WordPress 4.9.8" />
<meta name="generator" content="WooCommerce 3.4.5" />
<link rel='shortlink' href='http://fedu.vn/?p=11513' />
<link rel="alternate" type="application/json+oembed" href="http://fedu.vn/wp-json/oembed/1.0/embed?url=http%3A%2F%2Ffedu.vn%2Fkhoa-hoc%2Flap-trinh-thiet-ke-web%2F34-thuc-hanh-thiet-ke-du-lieu-voi-sql-qua-bai-tap%2F" />
<link rel="alternate" type="text/xml+oembed" href="http://fedu.vn/wp-json/oembed/1.0/embed?url=http%3A%2F%2Ffedu.vn%2Fkhoa-hoc%2Flap-trinh-thiet-ke-web%2F34-thuc-hanh-thiet-ke-du-lieu-voi-sql-qua-bai-tap%2F&#038;format=xml" />
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '129250604427556');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=129250604427556&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code --><script type="text/javascript">
	window._wp_rp_static_base_url = 'https://wprp.zemanta.com/static/';
	window._wp_rp_wp_ajax_url = "http://fedu.vn/wp-admin/admin-ajax.php";
	window._wp_rp_plugin_version = '3.6.4';
	window._wp_rp_post_id = '11513';
	window._wp_rp_num_rel_posts = '4';
	window._wp_rp_thumbnails = true;
	window._wp_rp_post_title = '34-+TH%E1%BB%B0C+H%C3%80NH+THI%E1%BA%BET+K%E1%BA%BE+D%E1%BB%AE+LI%E1%BB%86U+V%E1%BB%9AI+SQL+QUA+B%C3%80I+T%E1%BA%ACP';
	window._wp_rp_post_tags = [];
	window._wp_rp_promoted_content = true;
</script>
<link rel="stylesheet" href="http://fedu.vn/wp-content/plugins/wordpress-23-related-posts-plugin/static/themes/vertical-m.css?version=3.6.4" />
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />		<style id="theme-customizer-css">
													.woocommerce #respond input#submit, .woocommerce-page #respond input#submit, .woocommerce #content input.button, .woocommerce-page #content input.button, .woocommerce-message, .woocommerce-error, .woocommerce-info { background: #1e73be !important; }
			#et_search_icon:hover, .mobile_menu_bar:before, .mobile_menu_bar:after, .et_toggle_slide_menu:after, .et-social-icon a:hover, .et_pb_sum, .et_pb_pricing li a, .et_pb_pricing_table_button, .et_overlay:before, .entry-summary p.price ins, .woocommerce div.product span.price, .woocommerce-page div.product span.price, .woocommerce #content div.product span.price, .woocommerce-page #content div.product span.price, .woocommerce div.product p.price, .woocommerce-page div.product p.price, .woocommerce #content div.product p.price, .woocommerce-page #content div.product p.price, .et_pb_member_social_links a:hover, .woocommerce .star-rating span:before, .woocommerce-page .star-rating span:before, .et_pb_widget li a:hover, .et_pb_filterable_portfolio .et_pb_portfolio_filters li a.active, .et_pb_filterable_portfolio .et_pb_portofolio_pagination ul li a.active, .et_pb_gallery .et_pb_gallery_pagination ul li a.active, .wp-pagenavi span.current, .wp-pagenavi a:hover, .nav-single a, .posted_in a { color: #1e73be; }
			.et_pb_contact_submit, .et_password_protected_form .et_submit_button, .et_pb_bg_layout_light .et_pb_newsletter_button, .comment-reply-link, .form-submit .et_pb_button, .et_pb_bg_layout_light .et_pb_promo_button, .et_pb_bg_layout_light .et_pb_more_button, .woocommerce a.button.alt, .woocommerce-page a.button.alt, .woocommerce button.button.alt, .woocommerce-page button.button.alt, .woocommerce input.button.alt, .woocommerce-page input.button.alt, .woocommerce #respond input#submit.alt, .woocommerce-page #respond input#submit.alt, .woocommerce #content input.button.alt, .woocommerce-page #content input.button.alt, .woocommerce a.button, .woocommerce-page a.button, .woocommerce button.button, .woocommerce-page button.button, .woocommerce input.button, .woocommerce-page input.button, .et_pb_contact p input[type="checkbox"]:checked + label i:before { color: #1e73be; }
			.footer-widget h4 { color: #1e73be; }
			.et-search-form, .nav li ul, .et_mobile_menu, .footer-widget li:before, .et_pb_pricing li:before, blockquote { border-color: #1e73be; }
			.et_pb_counter_amount, .et_pb_featured_table .et_pb_pricing_heading, .et_quote_content, .et_link_content, .et_audio_content, .et_pb_post_slider.et_pb_bg_layout_dark, .et_slide_in_menu_container, .et_pb_contact p input[type="radio"]:checked + label i:before { background-color: #1e73be; }
									a { color: #00a9a6; }
													#top-header, #et-secondary-nav li ul { background-color: #1e73be; }


							#main-footer { background-color: #f2f2f2; }
											#main-footer .footer-widget h4 { color: #1e73be; }
							.footer-widget li:before { border-color: #1e73be; }



		@media only screen and ( min-width: 981px ) {
																																																				.et-fixed-header#top-header, .et-fixed-header#top-header #et-secondary-nav li ul { background-color: #1e73be; }

					}
					@media only screen and ( min-width: 1350px) {
				.et_pb_row { padding: 27px 0; }
				.et_pb_section { padding: 54px 0; }
				.single.et_pb_pagebuilder_layout.et_full_width_page .et_post_meta_wrapper { padding-top: 81px; }
				.et_pb_section.et_pb_section_first { padding-top: inherit; }
				.et_pb_fullwidth_section { padding: 0; }
			}

		@media only screen and ( max-width: 980px ) {
																				}
		@media only screen and ( max-width: 767px ) {
														}
	</style>




	<style id="module-customizer-css">
			</style>

	<link rel="shortcut icon" href="http://fedu.vn/wp-content/uploads/2018/05/ICON-01.png" />	<noscript><style>.woocommerce-product-gallery{ opacity: 1 !important; }</style></noscript>

<!-- WooCommerce Facebook Integration Begin -->

<script type='text/javascript'>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
</script>

<script>
fbq('init', '219807885288641', "219807885288641", {
    "agent": "woocommerce-3.4.5-1.9.0"
});

fbq('track', 'PageView', {
    "source": "woocommerce",
    "version": "3.4.5",
    "pluginVersion": "1.9.0"
});

document.addEventListener('DOMContentLoaded', function() {
  jQuery && jQuery(function($){
    $('body').on('added_to_cart', function(event) {
      // Ajax action.
      $.get('?wc-ajax=fb_inject_add_to_cart_event', function(data) {
        $('head').append(data);
      });
    });
  });
}, false);

</script>
<!-- DO NOT MODIFY -->
<!-- WooCommerce Facebook Integration end -->

<!-- Facebook Pixel Code -->
<noscript>
<img height="1" width="1" style="display:none" alt="fbpx"
src="https://www.facebook.com/tr?id=219807885288641&ev=PageView&noscript=1"/>
</noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->
    <meta name="generator" content="Powered by WPBakery Page Builder - drag and drop page builder for WordPress."/>
<!--[if lte IE 9]><link rel="stylesheet" type="text/css" href="http://fedu.vn/wp-content/plugins/js_composer/assets/css/vc_lte_ie9.min.css" media="screen"><![endif]--><noscript><style type="text/css"> .wpb_animate_when_almost_visible { opacity: 1; }</style></noscript><style type="text/css">
	.et_fullscreen_slider .et_pb_slides,
	.et_fullscreen_slider .et_pb_slide,
	.et_fullscreen_slider .et_pb_container {
	    min-height: 100% !important;
	    height: 100% !important;
	}

	.et_pb_more_button
	{
		display: none !important;
	}
	.et_pb_slide_content
	{
		height: 100px;
	}

</style>






</head>
<body class="product-template-default single single-product postid-11513 woocommerce woocommerce-page woocommerce-no-js et_pb_button_helper_class et_fixed_nav et_show_nav et_cover_background et_pb_gutter windows et_pb_gutters3 et_primary_nav_dropdown_animation_fade et_secondary_nav_dropdown_animation_fade et_pb_footer_columns4 et_header_style_left et_right_sidebar et_divi_theme chrome wpb-js-composer js-comp-ver-5.4.2 vc_responsive">

<script>
  window.fbAsyncInit = function() {
    FB.init({
      appId            : '115700545682365',
      autoLogAppEvents : true,
      xfbml            : true,
      version          : 'v2.11'
    });
  };

  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "https://connect.facebook.net/en_US/sdk.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>



<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PX83MHB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<div id="page-container">



		<header id="main-header" data-height-onload="66">
			<div class="container clearfix et_menu_container">
							<div class="logo_container">
					<span class="logo_helper"></span>
					<a href="http://fedu.vn/">
						<img src="http://fedu.vn/wp-content/uploads/2018/06/LogoOfficial-01.png" alt="Fedu" id="logo" data-height-percentage="54" />
					</a>
				</div>
				<div id="et-top-navigation" data-height="66" data-fixed-height="40">
											<nav id="top-menu-nav">
						<ul id="top-menu" class="nav"><li id="menu-item-76" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home menu-item-76"><a href="http://fedu.vn/">Trang chủ</a></li>
<li id="menu-item-1249" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-children current_page_parent menu-item-1249"><a href="http://fedu.vn/khoa-hoc/">Khóa học</a>
<ul class="sub-menu">
	<li id="menu-item-1250" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat current-product-ancestor current-menu-parent current-product-parent menu-item-1250"><a href="http://fedu.vn/khoa-hoc/lap-trinh-thiet-ke-web/">Lập trình &#8211; Thiết kế web</a></li>
	<li id="menu-item-10534" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-10534"><a href="http://fedu.vn/khoa-hoc/combo-khoa-hoc-lap-trinh-web/">Combo Khóa Học Lập Trình Web</a></li>
	<li id="menu-item-1251" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1251"><a href="http://fedu.vn/khoa-hoc/thiet-ke-do-hoa/">Thiết kế đồ họa</a></li>
	<li id="menu-item-10533" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-10533"><a href="http://fedu.vn/khoa-hoc/combo-khoa-hoc-do-hoa/">Combo Khóa Học Đồ Họa</a></li>
	<li id="menu-item-1252" class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-1252"><a href="http://fedu.vn/khoa-hoc/tin-hoc-van-phong/">Tin học văn phòng</a></li>
</ul>
</li>
<li id="menu-item-261" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-261"><a href="http://fedu.vn/project/">Dự án học viên</a></li>
<li id="menu-item-284" class="mega-menu menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-284"><a href="http://fedu.vn/thu-vien-hoc-tap/">Thư viện học tập</a>
<ul class="sub-menu">
	<li id="menu-item-608" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-608"><a href="http://fedu.vn/thu-vien-hoc-tap/office-tin-hoc-van-phong/">Tin học văn phòng</a>
	<ul class="sub-menu">
		<li id="menu-item-609" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-609"><a href="http://fedu.vn/thu-vien-hoc-tap/office-tin-hoc-van-phong/excel/">Excel</a></li>
		<li id="menu-item-610" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-610"><a href="http://fedu.vn/thu-vien-hoc-tap/office-tin-hoc-van-phong/power-point/">Power Point</a></li>
		<li id="menu-item-611" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-611"><a href="http://fedu.vn/thu-vien-hoc-tap/office-tin-hoc-van-phong/word/">Word</a></li>
	</ul>
</li>
	<li id="menu-item-607" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-607"><a href="http://fedu.vn/thu-vien-hoc-tap/thiet-ke-do-hoa/">Thiết kế đồ họa</a>
	<ul class="sub-menu">
		<li id="menu-item-618" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-618"><a href="http://fedu.vn/thu-vien-hoc-tap/thiet-ke-do-hoa/photoshop/">Photoshop</a></li>
		<li id="menu-item-615" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-615"><a href="http://fedu.vn/thu-vien-hoc-tap/thiet-ke-do-hoa/adobe-ilustrator/">Adobe Ilustrator</a></li>
		<li id="menu-item-613" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-613"><a href="http://fedu.vn/thu-vien-hoc-tap/thiet-ke-do-hoa/adobe-animate/">Adobe Animate</a></li>
		<li id="menu-item-612" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-612"><a href="http://fedu.vn/thu-vien-hoc-tap/thiet-ke-do-hoa/adobe-after-efect/">Adobe After Efect</a></li>
		<li id="menu-item-614" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-614"><a href="http://fedu.vn/thu-vien-hoc-tap/thiet-ke-do-hoa/adobe-experience/">Adobe Experience</a></li>
		<li id="menu-item-616" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-616"><a href="http://fedu.vn/thu-vien-hoc-tap/thiet-ke-do-hoa/adobe-lightroom/">Adobe Lightroom</a></li>
		<li id="menu-item-617" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-617"><a href="http://fedu.vn/thu-vien-hoc-tap/thiet-ke-do-hoa/adobe-muse/">Adobe Muse</a></li>
	</ul>
</li>
	<li id="menu-item-606" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-has-children menu-item-606"><a href="http://fedu.vn/thu-vien-hoc-tap/lap-trinh-web/">Lập trình web</a>
	<ul class="sub-menu">
		<li id="menu-item-622" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-622"><a href="http://fedu.vn/thu-vien-hoc-tap/lap-trinh-web/front-end/html5/">HTML5</a></li>
		<li id="menu-item-621" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-621"><a href="http://fedu.vn/thu-vien-hoc-tap/lap-trinh-web/front-end/css/">CSS</a></li>
		<li id="menu-item-620" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-620"><a href="http://fedu.vn/thu-vien-hoc-tap/lap-trinh-web/front-end/bootstrap/">Bootstrap</a></li>
		<li id="menu-item-623" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-623"><a href="http://fedu.vn/thu-vien-hoc-tap/lap-trinh-web/front-end/jquery/">jquery</a></li>
		<li id="menu-item-624" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-624"><a href="http://fedu.vn/thu-vien-hoc-tap/lap-trinh-web/front-end/json/">Json</a></li>
		<li id="menu-item-619" class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-619"><a href="http://fedu.vn/thu-vien-hoc-tap/lap-trinh-web/back-end/php/">php</a></li>
	</ul>
</li>
</ul>
</li>
<li id="menu-item-1853" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-1853"><a href="http://khoahoc.fedu.vn/kich-hoat-khoa-hoc">Kích hoạt khóa học</a></li>
<li id="menu-item-231" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-231"><a href="http://khoahoc.fedu.vn/login">Đăng nhập lớp học</a></li>
</ul>						</nav>

					<a href="http://fedu.vn/gio-hang/" class="et-cart-info">
				<span></span>
			</a>


					<div id="et_mobile_nav_menu">
				<div class="mobile_nav closed">
					<span class="select_page">Chọn trang</span>
					<span class="mobile_menu_bar mobile_menu_bar_toggle"></span>
				</div>
			</div>				</div> <!-- #et-top-navigation -->
			</div> <!-- .container -->
			<div class="et_search_outer">
				<div class="container et_search_form_container">
					<form role="search" method="get" class="et-search-form" action="http://fedu.vn/">
					<input type="search" class="et-search-field" placeholder="Tìm kiếm &hellip;" value="" name="s" title="Tìm:" />					</form>
					<span class="et_close_search_field"></span>
				</div>
			</div>
		</header> <!-- #main-header -->

		<div id="et-main-area"><style type="text/css">
    .tab_fixed
{
    position: fixed;
    top: 0px;
    left: 0px;
    right: 0px;
    background: #efefef;
    width: 100%;
    z-index: 99999;
}

</style>
    <div id="main-content">

        <div class="container">
            <div id="content-area" class="clearfix archive-course">

                    <div class="breadcrumb">
                        <!-- Breadcrumb NavXT 6.1.0 -->
<span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Fedu." href="http://fedu.vn" class="home"><span property="name">Trang chủ</span></a><meta property="position" content="1"></span> &gt; <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to Khóa học." href="http://fedu.vn/khoa-hoc/" class="post post-product-archive"><span property="name">Khóa học</span></a><meta property="position" content="2"></span> &gt; <span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage" title="Go to the Lập trình - Thiết kế web Danh mục archives." href="http://fedu.vn/khoa-hoc/lap-trinh-thiet-ke-web/" class="taxonomy product_cat"><span property="name">Lập trình - Thiết kế web</span></a><meta property="position" content="3"></span> &gt; <span property="itemListElement" typeof="ListItem"><span property="name">34- THỰC HÀNH THIẾT KẾ DỮ LIỆU VỚI SQL QUA BÀI TẬP</span><meta property="position" content="4"></span>                    </div>





<div id="product-11513" class="post-11513 product type-product status-publish has-post-thumbnail product_cat-lap-trinh-thiet-ke-web first instock sale shipping-taxable purchasable product-type-simple">
	<h1 class="product_title entry-title" style="margin-bottom: 15px;">34- THỰC HÀNH THIẾT KẾ DỮ LIỆU VỚI SQL QUA BÀI TẬP</h1>
		<p class="single-trainer"><span>Giảng viên:</span> Nguyễn Đức Việt</p>




<div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 0; transition: opacity .25s ease-in-out;">

	<figure class="woocommerce-product-gallery__wrapper">

		<div data-thumb="http://fedu.vn/wp-content/uploads/2018/08/hocmysql-100x100.png" class="woocommerce-product-gallery__image"><a href="http://fedu.vn/wp-content/uploads/2018/08/hocmysql.png"><img width="510" height="287" src="http://fedu.vn/wp-content/uploads/2018/08/hocmysql-510x287.png" class="attachment-shop_single size-shop_single wp-post-image" alt="" title="hocmysql" data-caption="" data-src="http://fedu.vn/wp-content/uploads/2018/08/hocmysql.png" data-large_image="http://fedu.vn/wp-content/uploads/2018/08/hocmysql.png" data-large_image_width="1920" data-large_image_height="1080" srcset="http://fedu.vn/wp-content/uploads/2018/08/hocmysql-510x287.png 510w, http://fedu.vn/wp-content/uploads/2018/08/hocmysql-300x169.png 300w, http://fedu.vn/wp-content/uploads/2018/08/hocmysql-768x432.png 768w, http://fedu.vn/wp-content/uploads/2018/08/hocmysql-1024x576.png 1024w, http://fedu.vn/wp-content/uploads/2018/08/hocmysql-1080x608.png 1080w" sizes="(max-width: 510px) 100vw, 510px" /></a></div>	</figure>

	</div>

	<div class="summary entry-summary" id="course_btn">

		    <p>Học phí (mua 1 lần học trọn đời) tại FEDU</p>
    <p class="price"><del><span class="woocommerce-Price-amount amount">699,000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></del> <ins><span class="woocommerce-Price-amount amount">399,000&nbsp;<span class="woocommerce-Price-currencySymbol">&#8363;</span></span></ins></p>
    <p style="margin-bottom: 15px;">Học phí chỗ khác: 699,000 &#8363;</p>
       <div class="more_course" id="">

    <p>Học đến khi thành thạo thì thôi</p>
    <p>Hoàn lại học phí nếu không hài lòng</p>
    <p>Lưu ý: Hình thức học của Fedu là học ONLINE, chúng tôi không mở lớp dạy trực triếp hoặc offline. Học viên vui lòng cân nhắc trước khi đăng ký</p>
    </div>


	<form class="cart" method="post" enctype='multipart/form-data'>
		<div style="display: none;">	<div class="quantity">
		<label class="screen-reader-text" for="quantity_5bd53f4309253">Số lượng</label>
		<input
			type="number"
			id="quantity_5bd53f4309253"
			class="input-text qty text"
			step="1"
			min="1"
			max=""
			name="quantity"
			value="1"
			title="SL"
			size="4"
			pattern="[0-9]*"
			inputmode="numeric"
			aria-labelledby="" />
	</div>
	</div>
		<button type="submit" name="add-to-cart" style="width: 100%; border: none; cursor: pointer;" value="11513" class="course-btn" id="">Đăng ký khóa học</button>

			</form>


    <div class="more_course">
                     <p><span>Thời lượng</span>: 30 giờ học</p>
                        <p><span>Bài học</span>: 40+ bài</p>
                </div>
        <div class="fb-like" data-href="http://fedu.vn/khoa-hoc/lap-trinh-thiet-ke-web/34-thuc-hanh-thiet-ke-du-lieu-voi-sql-qua-bai-tap/" data-layout="button" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>

	</div><!-- .summary -->


	<div class="woocommerce-tabs wc-tabs-wrapper">
		<ul class="tabs wc-tabs" role="tablist">
							<li class="description_tab" id="tab-title-description" role="tab" aria-controls="tab-description">
					<a href="#tab-description">Giới thiệu khóa học</a>
				</li>
							<li class="course_content_tab_tab" id="tab-title-course_content_tab" role="tab" aria-controls="tab-course_content_tab">
					<a href="#tab-course_content_tab">Nội dung bài học</a>
				</li>
							<li class="course_usp_tab_tab" id="tab-title-course_usp_tab" role="tab" aria-controls="tab-course_usp_tab">
					<a href="#tab-course_usp_tab">Lợi ích khóa học</a>
				</li>
							<li class="trainer_infomation_tab_tab" id="tab-title-trainer_infomation_tab" role="tab" aria-controls="tab-trainer_infomation_tab">
					<a href="#tab-trainer_infomation_tab">Thông tin giảng viên</a>
				</li>
							<li class="reviews_tab" id="tab-title-reviews" role="tab" aria-controls="tab-reviews">
					<a href="#tab-reviews">Đánh giá (0)</a>
				</li>
					</ul>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description">

  <h2>Giới thiệu khóa học</h2>

<table dir="ltr" border="1" cellspacing="0" cellpadding="0">
<tbody>
<tr>
<td colspan="2" rowspan="1" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;Đối tượng sẽ học khóa này là: \n- Người bắt đầu học về backend cần học về dữ liệu trước khi học lập trình\n- Những người muốn tìm hiểu về thiết kế cơ sở dữ liệu quan hệ \n- Bạn sinh viên cần tìm hiểu cách phân tích và thiết kế cơ sở dữ liệu cho một ứng dụng web\n- Những bạn chưa thiết kế cơ sở dữ liệu lần nào&quot;}">Đối tượng sẽ học khóa này là:<br />
&#8211; Người bắt đầu học về backend cần học về dữ liệu trước khi học lập trình<br />
&#8211; Những người muốn tìm hiểu về thiết kế cơ sở dữ liệu quan hệ<br />
&#8211; Bạn sinh viên cần tìm hiểu cách phân tích và thiết kế cơ sở dữ liệu cho một ứng dụng web<br />
&#8211; Những bạn chưa thiết kế cơ sở dữ liệu lần nào</td>
</tr>
<tr>
<td colspan="2" rowspan="1" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;- Khóa học theo hướng thực hành, \&quot;cầm tay chỉ việc\&quot;, hướng dẫn từ phần cài đặt, các câu lệnh T-SQL thao tác thế nào, cách thiết kế các bảng dữ liệu theo chức năng của ứng dụng, cách sử dụng công cụ trên giao diện phpmyadmin, thực hành qua dữ liệu của web thực tế.&quot;}">&#8211; Khóa học theo hướng thực hành, &#8220;cầm tay chỉ việc&#8221;, hướng dẫn từ phần cài đặt, các câu lệnh T-SQL thao tác thế nào, cách thiết kế các bảng dữ liệu theo chức năng của ứng dụng, cách sử dụng công cụ trên giao diện phpmyadmin, thực hành qua dữ liệu của web thực tế.</td>
</tr>
<tr>
<td colspan="2" rowspan="1" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;- Khóa học gồm 4 phần chính, phần 1 hướng dẫn cài đặt và giới thiệu cơ sở dữ liệu, phần 2 hướng dẫn học câu lệnh sql, phần 3 thực hành phân tích và hiểu bản chất dữ liệu của website bán hàng, phần 4 thực hành phân tích và dựng dữ liệu của website zing.vn.\n- Ý nghĩa của phần học dữ liệu giúp học viên có kiến thức nền tảng về thiết kế dữ liệu quan hệ, một phần không thể thiếu trong lập trình ứng dụng và lập trình backend. &quot;}">&#8211; Khóa học gồm 4 phần chính, phần 1 hướng dẫn cài đặt và giới thiệu cơ sở dữ liệu, phần 2 hướng dẫn học câu lệnh sql, phần 3 thực hành phân tích và hiểu bản chất dữ liệu của website bán hàng, phần 4 thực hành phân tích và dựng dữ liệu của website zing.vn.<br />
&#8211; Ý nghĩa của phần học dữ liệu giúp học viên có kiến thức nền tảng về thiết kế dữ liệu quan hệ, một phần không thể thiếu trong lập trình ứng dụng và lập trình backend.</td>
</tr>
<tr>
<td colspan="2" rowspan="1" data-sheets-value="{&quot;1&quot;:2,&quot;2&quot;:&quot;- Sau khi học xong bạn có thể thiết kế được cơ sở dữ liệu cho các website thông dụng như website tin tức và website bán hàng. \n- Đọc và hiểu được các bảng dữ liệu của một website.\n- Phân tích dữ liệu và thiết lập quan hệ dữ liệu cho một ứng dụng &quot;}">&#8211; Sau khi học xong bạn có thể thiết kế được cơ sở dữ liệu cho các website thông dụng như website tin tức và website bán hàng.<br />
&#8211; Đọc và hiểu được các bảng dữ liệu của một website.<br />
&#8211; Phân tích dữ liệu và thiết lập quan hệ dữ liệu cho một ứng dụng</td>
</tr>
</tbody>
</table>
			</div>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--course_content_tab panel entry-content wc-tab" id="tab-course_content_tab" role="tabpanel" aria-labelledby="tab-title-course_content_tab">
				<table class="table">
<thead>
<tr>
<th class="section-title">Giới thiệu và cài đặt</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">001- Giới thiệu cơ sở dữ liệu</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">002- Cài đặt mysql</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
</tbody>
</table>
<table class="table">
<thead>
<tr>
<th class="section-title">002 &#8211; Các khái niệm cơ bản các kiểu cơ sở các kiểu table</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">003- Các khái niệm cơ bản về bảng dữ liệu</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">004- Các kiểu dữ liệu và kiểu table thông dụng trong MySQL</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
</tbody>
</table>
<table class="table">
<thead>
<tr>
<th class="section-title">003 &#8211; Các câu lệnh T &#8211; SQL</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">005- Tạo cơ sở dữ liệu</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">006- Câu lệnh tạo bảng và khoá chính</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">007- Thao tác với cơ sở dữ liệu bằng giao diện đồ hoạ</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
</tbody>
</table>
<table class="table">
<thead>
<tr>
<th class="section-title">004 &#8211; Thực hành phân tích và thiết kế dữ liệu cho web bán hàng</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">008- Ba cách sử dụng câu lệnh thêm mới dữ liệu</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">009- Giới thiệu bài tập thực hành tạo dữ liệu cho website bán hàng cơ bản</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">010- Giới thiệu về khoá ngoại</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">011- Áp dụng khoá ngoại để tạo bảng chi tiết đơn hàng</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
</tbody>
</table>
<table class="table">
<thead>
<tr>
<th class="section-title">005- Thực hành các câu lệnh SQL</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">012- Thực hành thao tác với ngôn ngữ SQL</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">013- Cách thay đổi bảng mã unicode cho dữ liệu</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">014- Thực hành câu lệnh SQL insert</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">015- Cách sao lưu di chuyển dữ liệu</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">016- Cách truy vấn dữ liệu trên một bảng với các toán tử điều kiện</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">017- Cách truy vấn dữ liệu nhiều bảng</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
</tbody>
</table>
<table class="table">
<thead>
<tr>
<th class="section-title">006 &#8211; Thực hành thao tác với khóa ngoại trong dữ liệu web bán hàng</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">018- 4 cách truy vấn sử dụng khoá ngoại</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">019- Kết nối hai bảng sử dụng cú pháp INNER JOIN &#8211; ON</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">020- Phân biệt LEFT JOIN, RIGHT JOIN, INNER JOIN qua bài tập</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">021- Cách đặt alias cho các bảng và cột dữ liệu</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">022- Cách nối dữ liệu hai cột với nhau trong bảng kết quả</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
</tbody>
</table>
<table class="table">
<thead>
<tr>
<th class="section-title">007 &#8211; Các hàm SQL thông dụng</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">023- Cách định dạng ngày tháng</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">024- Hàm cắt nội dung text</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">025- Câu lệnh sửa dữ liệu</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">026- Câu lệnh xoá dữ liệu</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
</tbody>
</table>
<table class="table">
<thead>
<tr>
<th class="section-title">008 &#8211; Thực hành phân tích và thiết kế dữ liệu cho website zing.vn</th>
</tr>
</thead>
<tbody>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">027- Thực hành kiến thức SQL qua bài tập thực hành thiết kế dữ liệu zing.vn</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">028- Phân tích dữ liệu cho danh mục tin hai cấp</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">029- Hoàn hoàn thiện phần bảng dữ liệu</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">030- Tạo bảng</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">031- Đánh chỉ mục và cách tạo ràng buộc dữ liệu dựa trên khoá ngoại</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">032- Cách thao tác nhanh với giao diện phpmyadmin</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">033- Vai trò của truy vấn dữ liệu trong qui trình lập trình web</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">034- Truy vấn dữ liệu menu đa cấp</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">035- Truy vấn dữ liệu phần tin nổi bật</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">036- Truy vấn 3 tin mới</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">037- In danh sách tin</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">038- Truy vấn dữ liệu cho khối multimedia</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">039- Truy vấn dữ liệu danh mục</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">040- Truy vấn khối dữ liệu danh mục</span></div>
<div class="col-md-3 col-ld-3 col-xs-4 col-sm-4"></div>
</div>
</td>
</tr>
<tr>
<td>
<div class="title-container tttt">
<div class="col-md-9 col-ld-9 col-xs-8 col-sm-8 lecture-title"><span class="lecture-icon"><i class="fa fa-book"></i> </span><span class="lecture-name">041- Hoàn thiện truy vấn dữ liệu của trang tin</span></div>
</div>
</td>
</tr>
</tbody>
</table>
			</div>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--course_usp_tab panel entry-content wc-tab" id="tab-course_usp_tab" role="tabpanel" aria-labelledby="tab-title-course_usp_tab">
				<p>Xây dựng được hệ thống dữ liệu một cách bài bản</p>
<p>Hiểu được khái niệm cơ bản về bảng dữ liệu</p>
<p>Xử dụng thành thạo các câu lệnh thông dụng trong SQL</p>
<p>Hiểu được khóa ngoại là gì, thao tác với khóa ngoại trong dữ liệu website bán hàng</p>
			</div>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--trainer_infomation_tab panel entry-content wc-tab" id="tab-trainer_infomation_tab" role="tabpanel" aria-labelledby="tab-title-trainer_infomation_tab">
				<p>– Nguyễn Đức Việt sinh năm 1986, tốt nghiệp Đại học Bách khoa, khoa Công nghệ thông tin. Anh hiện đang là Giảng viên Thiết kế web.</p>
<p>– Với 8 năm kinh nghiệm giảng dạy, anh đã có hàng nghìn học viên đã tốt nghiệp và làm việc trong lĩnh vực thiết kế, đặc biệt là thiết kế web chuyên nghiệp. Ngoài ra anh còn tham gia rất nhiều dự án web cho FPT và các dự án Freelance khác về thiết kế web dựa trên ngôn ngữ lập trình mã nguồn mở, PHP, .NET</p>
<p>– Anh đã tham gia hiệu đính và dịch rất nhiều đầu sách về thiết kế web cho hệ thống thư viện đại học FPT.</p>
<p>– Ngoài ra anh còn tham gia rất nhiều dự án web cho FPT, dạy các shortcourse cho người đi làm và các dự án Freelance khác về thiết kế web dựa trên ngôn ngữ lập trình mã nguồn mở.</p>
			</div>
					<div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews">
				<div id="reviews" class="woocommerce-Reviews">
	<div id="comments">
		<h2 class="woocommerce-Reviews-title">Đánh giá</h2>


			<p class="woocommerce-noreviews">Chưa có đánh giá nào.</p>

			</div>


		<div id="review_form_wrapper">
			<div id="review_form">
					<div id="respond" class="comment-respond">
		<span id="reply-title" class="comment-reply-title">Hãy là người đầu tiên nhận xét &ldquo;34- THỰC HÀNH THIẾT KẾ DỮ LIỆU VỚI SQL QUA BÀI TẬP&rdquo; <small><a rel="nofollow" id="cancel-comment-reply-link" href="/khoa-hoc/lap-trinh-thiet-ke-web/34-thuc-hanh-thiet-ke-du-lieu-voi-sql-qua-bai-tap/#respond" style="display:none;">Hủy</a></small></span>			<form action="http://fedu.vn/wp-comments-post.php" method="post" id="commentform" class="comment-form">
				<p class="comment-notes"><span id="email-notes">Email của bạn sẽ không được hiển thị công khai.</span> Các trường bắt buộc được đánh dấu <span class="required">*</span></p><div class="comment-form-rating"><label for="rating">Đánh giá của bạn</label><select name="rating" id="rating" aria-required="true" required>
							<option value="">Xếp hạng&hellip;</option>
							<option value="5">Rất tốt</option>
							<option value="4">Tốt</option>
							<option value="3">Trung bình</option>
							<option value="2">Không tệ</option>
							<option value="1">Rất tệ</option>
						</select></div><p class="comment-form-comment"><label for="comment">Nhận xét của bạn&nbsp;<span class="required">*</span></label><textarea id="comment" name="comment" cols="45" rows="8" aria-required="true" required></textarea></p><p class="comment-form-author"><label for="author">Tên&nbsp;<span class="required">*</span></label> <input id="author" name="author" type="text" value="" size="30" aria-required="true" required /></p>
<p class="comment-form-email"><label for="email">Email&nbsp;<span class="required">*</span></label> <input id="email" name="email" type="email" value="" size="30" aria-required="true" required /></p>
<p class="form-submit"><input name="submit" type="submit" id="submit" class="submit" value="Gửi đi" /> <input type='hidden' name='comment_post_ID' value='11513' id='comment_post_ID' />
<input type='hidden' name='comment_parent' id='comment_parent' value='0' />
</p>			</form>
			</div><!-- #respond -->
				</div>
		</div>


	<div class="clear"></div>
</div>
			</div>
				<table border="1" width="100%" bordercolor="#efefef">
			<tr>
				<td width="50%"><b>34- THỰC HÀNH THIẾT KẾ DỮ LIỆU VỚI SQL QUA BÀI TẬP</b></td>
				<td width="20%"><b>399,000 đ</b></td>
				<td><a href="#course_btn" class="course-btn" style="width: 100%; display: block; padding-top: 10px; padding-bottom: 10px; text-align: center;">ĐĂNG KÝ NGAY</a></td>
			</tr>
		</table>
	</div>


	<section class="related products">

		<h2>Khóa học liên quan</h2>

		<ul class="products columns-3">
			<div class="et_pb_column et_pb_column_4_4  et_pb_column_17">
                    <div class="et_pb_blog_grid_wrapper">

                        <div class="et_pb_blog_grid clearfix et_pb_module et_pb_bg_layout_light" data-columns="2">


				 <div class="column size-1of3">
                                        <article id="post-11441" class="et_pb_post post-11441 product type-product status-publish has-post-thumbnail product_cat-lap-trinh-thiet-ke-web first instock sale shipping-taxable purchasable product-type-simple">

                                                                                                <a href="http://fedu.vn/khoa-hoc/lap-trinh-thiet-ke-web/30-html-css-co-ban/">
                                                        <img src="http://fedu.vn/wp-content/uploads/2018/07/HTML-và-CSS-cơ-bản.png" alt='30 &#8211; HTML CSS cơ bản' width='1080' height='675' />                                                    </a>
                                                                                                <div class="content-archive">
                                                                                                                                                <h3 class="entry-title"><a href="http://fedu.vn/khoa-hoc/lap-trinh-thiet-ke-web/30-html-css-co-ban/">30 &#8211; HTML CSS cơ bản</a></h2>

                                                <p class="course-label"><a href="http://fedu.vn/khoa-hoc/lap-trinh-thiet-ke-web/" rel="tag">Lập trình - Thiết kế web</a></p>


                                                <p class="course-trainer">Nguyễn Đức Việt</p>
                                                <hr class="line-course"/>
                                                <p class="loop-price">
                                                <del>699,000 &#8363;</del><ins>399,000 &#8363;</ins>                                                </p>
                                                                                    </div>
                                        </article> <!-- .et_pb_post -->
                                        </div>


				 <div class="column size-1of3">
                                        <article id="post-2482" class="et_pb_post post-2482 product type-product status-publish has-post-thumbnail product_cat-lap-trinh-thiet-ke-web  instock sale shipping-taxable purchasable product-type-simple">

                                                                                                <a href="http://fedu.vn/khoa-hoc/lap-trinh-thiet-ke-web/hoc-cach-su-dung-git-github-cho-lap-trinh-va-thiet-ke-website/">
                                                        <img src="http://fedu.vn/wp-content/uploads/2017/07/Git.png" alt='11: Học cách sử dụng Git &amp; github cho lập trình và thiết kế website' width='1080' height='675' />                                                    </a>
                                                                                                <div class="content-archive">
                                                                                                                                                <h3 class="entry-title"><a href="http://fedu.vn/khoa-hoc/lap-trinh-thiet-ke-web/hoc-cach-su-dung-git-github-cho-lap-trinh-va-thiet-ke-website/">11: Học cách sử dụng Git &amp; github cho lập trình và thiết kế website</a></h2>

                                                <p class="course-label"><a href="http://fedu.vn/khoa-hoc/lap-trinh-thiet-ke-web/" rel="tag">Lập trình - Thiết kế web</a></p>


                                                <p class="course-trainer">Nguyễn Đức Việt </p>
                                                <hr class="line-course"/>
                                                <p class="loop-price">
                                                <del>599,000 &#8363;</del><ins>199,000 &#8363;</ins>                                                </p>
                                                                                    </div>
                                        </article> <!-- .et_pb_post -->
                                        </div>


				 <div class="column size-1of3">
                                        <article id="post-11187" class="et_pb_post post-11187 product type-product status-publish has-post-thumbnail product_cat-lap-trinh-thiet-ke-web product_tag-reactjs product_tag-redux last instock sale shipping-taxable purchasable product-type-simple">

                                                                                                <a href="http://fedu.vn/khoa-hoc/lap-trinh-thiet-ke-web/029-hoc-lap-trinh-react-js-va-redux-tu-dau-tao-ung-dung-fullstack-voi-node-js-react-js/">
                                                        <img src="http://fedu.vn/wp-content/uploads/2018/04/1523814765709-1080x675.png" alt='029- Học lập trình React js và Redux từ đầu, tạo ứng dụng fullstack với Node JS + React JS' width='1080' height='675' />                                                    </a>
                                                                                                <div class="content-archive">
                                                                                                                                                <h3 class="entry-title"><a href="http://fedu.vn/khoa-hoc/lap-trinh-thiet-ke-web/029-hoc-lap-trinh-react-js-va-redux-tu-dau-tao-ung-dung-fullstack-voi-node-js-react-js/">029- Học lập trình React js và Redux từ đầu, tạo ứng dụng fullstack với Node JS + React JS</a></h2>

                                                <p class="course-label"><a href="http://fedu.vn/khoa-hoc/lap-trinh-thiet-ke-web/" rel="tag">Lập trình - Thiết kế web</a></p>


                                                <p class="course-trainer">Nguyễn Đức Việt</p>
                                                <hr class="line-course"/>
                                                <p class="loop-price">
                                                <del>699,000 &#8363;</del><ins>399,000 &#8363;</ins>                                                </p>
                                                                                    </div>
                                        </article> <!-- .et_pb_post -->
                                        </div>
			<div class="clearfix"></div>						 </div>

                        </div></div>
		</ul>

	</section>


</div><!-- #product-11513 -->
<script>
fbq('track', 'ViewContent');
</script>


                        <div class="fb-comments" data-href="http://clouddemy.edu.vn/" data-width="100%" data-numposts="10"></div>
                                </div> <!-- #content-area -->
        </div> <!-- .container -->
    </div> <!-- #main-content -->




			<footer id="main-footer">


<div class="container">
	<div id="footer-widgets" class="clearfix">
	<div class="footer-widget"><div id="text-7" class="fwidget et_pb_widget widget_text"><h4 class="title"><i style="padding-right: 10px; vertical-align: inherit;" class="elusive icon-home"></i>THÔNG TIN FEDU</h4>			<div class="textwidget"><ul>
<li><a href="http://fedu.vn/gioi-thieu/">Giới thiệu</a></li>
<li><a href="http://fedu.vn/tin-tuc">Tin tức</a></li>
<li><a href="http://fedu.vn/cau-hoi-thuong-gap/">Câu hỏi thường gặp</a></li>
<li><a href="http://fedu.vn/tuyen-dung/">Tuyển dụng</a></li>
<li><a href="http://fedu.vn/tin-tuc/chinh-sach-hoc-tap/">Chính sách học tập</a></li>
<li><a href="http://fedu.vn/lien-he/">Liên hệ</a></li>
<li><a href="http://fedu.vn/affiliate/">Affiliates</a></li>
<li><a href="http://fedu.vn/tai-khoan">Tài khoản</a></li>
</ul>
<p><a href="//www.dmca.com/Protection/Status.aspx?ID=0c778192-1bd1-4982-9ac2-cf18d02130fc" title="DMCA.com Protection Status" class="dmca-badge"> <img src="//images.dmca.com/Badges/dmca_protected_sml_120m.png?ID=0c778192-1bd1-4982-9ac2-cf18d02130fc" alt="DMCA.com Protection Status"></a> <script src="//images.dmca.com/Badges/DMCABadgeHelper.min.js"> </script></p>
</div>
		</div> <!-- end .fwidget --></div> <!-- end .footer-widget --><div class="footer-widget"><div id="text-6" class="fwidget et_pb_widget widget_text"><h4 class="title"><i style="padding-right: 10px; vertical-align: inherit;" class="elusive icon-group"></i>GROUP FACEBOOK</h4>			<div class="textwidget"><ul>
<li><a href="https://www.facebook.com/groups/107584456406418/?ref=group_header">Học thiết kế qua bài tập thực hành</a></li>
<li><a href="https://www.facebook.com/groups/1283666168335006/">Cùng học lập trình web Back-end&amp;Front-end</a></li>
<li><a href="https://www.facebook.com/groups/952717101497959/">Hỗ trợ học tin học văn phòng</a></li>
</ul>
</div>
		</div> <!-- end .fwidget --></div> <!-- end .footer-widget --><div class="footer-widget"><div id="lc_taxonomy-3" class="fwidget et_pb_widget widget_lc_taxonomy"><div id="lct-widget-product_cat-container" class="list-custom-taxonomy-widget"><h4 class="title"><i style="padding-right: 10px; vertical-align: inherit;" class="elusive icon-th-list"></i>KHÓA HỌC</h4><ul id="lct-widget-product_cat">	<li class="cat-item cat-item-108"><a href="http://fedu.vn/khoa-hoc/lap-trinh-thiet-ke-web/" >Lập trình &#8211; Thiết kế web</a> (18)
</li>
	<li class="cat-item cat-item-109"><a href="http://fedu.vn/khoa-hoc/thiet-ke-do-hoa/" >Thiết kế đồ họa</a> (10)
</li>
	<li class="cat-item cat-item-141"><a href="http://fedu.vn/khoa-hoc/combo-khoa-hoc-lap-trinh-web/" >Combo Khóa Học Lập Trình Web</a> (6)
</li>
	<li class="cat-item cat-item-140"><a href="http://fedu.vn/khoa-hoc/combo-khoa-hoc-do-hoa/" >Combo Khóa Học Đồ Họa</a> (3)
</li>
	<li class="cat-item cat-item-939"><a href="http://fedu.vn/khoa-hoc/hoc-thiet-ke-do-hoa-theo-level/" >Học thiết kế đồ họa theo Level</a> (3)
</li>
	<li class="cat-item cat-item-110"><a href="http://fedu.vn/khoa-hoc/tin-hoc-van-phong/" >Tin học văn phòng</a> (2)
</li>
	<li class="cat-item cat-item-935"><a href="http://fedu.vn/khoa-hoc/uncategorized/" >Uncategorized</a> (0)
</li>
	<li class="cat-item cat-item-940"><a href="http://fedu.vn/khoa-hoc/pha-che/" >Pha chế</a> (0)
</li>
</ul></div></div> <!-- end .fwidget --></div> <!-- end .footer-widget --><div class="footer-widget"><div id="text-8" class="fwidget et_pb_widget widget_text"><h4 class="title"><i style="padding-right: 10px; vertical-align: inherit;" class="elusive icon-comment-alt"></i>THƯ VIỆN HỌC TẬP</h4>			<div class="textwidget"><div class='content-column one_half'><ul>
<li><a href="http://fedu.vn/thu-vien-hoc-tap/lap-trinh-web/front-end/html5/">Html 5</a></li>
<li><a href="http://fedu.vn/thu-vien-hoc-tap/lap-trinh-web/front-end/css3/">Css 3</a></li>
<li><a href="#">Javascrip</a></li>
<li><a href="#">Jquery</a></li>
<li><a href="#">Bootstrap</a></li>
<li><a href="#">Mysql</a></li>
<li><a href="http://fedu.vn/thu-vien-hoc-tap/lap-trinh-web/back-end/php/">PHP</a></li>
<li><a href="#">WordPress</a></li>
<li><a href="#">Angular</a></li>
</ul></div><div class='content-column one_half last_column'><ul>
<li><a href="http://fedu.vn/thu-vien-hoc-tap/thiet-ke-do-hoa/photoshop/">Photoshop</a></li>
<li><a href="http://fedu.vn/thu-vien-hoc-tap/thiet-ke-do-hoa/adobe-ilustrator/">Illustrator</a></li>
<li><a href="#">After Effects</a></li>
<li><a href="#">Animate</a></li>
<li><a href="http://fedu.vn/thu-vien-hoc-tap/thiet-ke-do-hoa/adobe-lightroom/">Lightrom</a></li>
<li><a href="http://fedu.vn/thu-vien-hoc-tap/thiet-ke-do-hoa/adobe-stock/">Adobe Stock</a></li>
<li><a href="http://fedu.vn/thu-vien-hoc-tap/office-tin-hoc-van-phong/word/">Word</a></li>
<li><a href="http://fedu.vn/thu-vien-hoc-tap/office-tin-hoc-van-phong/excel/">Excel</a></li>
<li><a href="http://fedu.vn/thu-vien-hoc-tap/office-tin-hoc-van-phong/power-point/">Powerpoint</a></li>
</ul></div><div class='clear_column'></div></p>
</div>
		</div> <!-- end .fwidget --></div> <!-- end .footer-widget --><div class="footer-widget last"><div id="text-5" class="et_pb_widget widget_text"><h4 class="widgettitle"><i style="padding-right: 3px; vertical-align: middle;" class="font-awesome icon-facebook-sign"></i>TƯƠNG TÁC VỚI FEDU</h4>			<div class="textwidget"><div class="fb-page" data-href="https://www.facebook.com/fedu.vn/" data-small-header="true" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-width="500"></div>
<p><script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.7&appId=307477792684519";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script></p>
</div>
		</div> <!-- end .et_pb_widget --></div> <!-- end .footer-widget -->	</div> <!-- #footer-widgets -->
</div>	<!-- .container -->







				<div id="footer-bottom">

					<div class="container clearfix">

				<ul class="et-social-icons">

	<li class="et-social-icon et-social-facebook">
		<a href="#" class="icon">
			<span>Facebook</span>
		</a>
	</li>
	<li class="et-social-icon et-social-twitter">
		<a href="#" class="icon">
			<span>Twitter</span>
		</a>
	</li>
	<li class="et-social-icon et-social-google-plus">
		<a href="#" class="icon">
			<span>Google</span>
		</a>
	</li>
	<li class="et-social-icon et-social-rss">
		<a href="http://fedu.vn/feed/" class="icon">
			<span>RSS</span>
		</a>
	</li>

</ul><div id="footer-info">Copyright © 2017 Fedu. All rights reserved.</div>
					</div>	<!-- .container -->

				</div>

			</footer> <!-- #main-footer -->

		</div> <!-- #et-main-area -->






	</div> <!-- #page-container -->





        <!-- START Google Code for Dynamic Retargeting -->
		<script type="text/javascript">
			var google_tag_params = {
				ecomm_prodid: "11513",
				ecomm_category: ["L\u1eadp tr\u00ecnh - Thi\u1ebft k\u1ebf web"],
				ecomm_pagetype: 'product',
				ecomm_totalvalue: 399000
			};
		</script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var google_conversion_id = 853881412;
            var google_custom_params = window.google_tag_params;
            var google_remarketing_only = true;
            /* ]]> */
        </script>
        <script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">
        </script>
        <noscript>
            <div style="display:inline;">
                <img height="1" width="1" style="border-style:none;" alt=""
                     src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/853881412/?value=0&guid=ON&script=0"/>
            </div>
        </noscript>
        <!-- END Google Code for Dynamic Retargeting -->

		<script type="application/ld+json">{"@context":"https:\/\/schema.org\/","@type":"Product","@id":"http:\/\/fedu.vn\/khoa-hoc\/lap-trinh-thiet-ke-web\/34-thuc-hanh-thiet-ke-du-lieu-voi-sql-qua-bai-tap\/","name":"34- TH\u1ef0C H\u00c0NH THI\u1ebeT K\u1ebe D\u1eee LI\u1ec6U V\u1edaI SQL QUA B\u00c0I T\u1eacP","image":"http:\/\/fedu.vn\/wp-content\/uploads\/2018\/08\/hocmysql.png","description":"\u0110\u1ed1i t\u01b0\u1ee3ng s\u1ebd h\u1ecdc kh\u00f3a n\u00e0y l\u00e0: - Ng\u01b0\u1eddi b\u1eaft \u0111\u1ea7u h\u1ecdc v\u1ec1 backend c\u1ea7n h\u1ecdc v\u1ec1 d\u1eef li\u1ec7u tr\u01b0\u1edbc khi h\u1ecdc l\u1eadp tr\u00ecnh - Nh\u1eefng ng\u01b0\u1eddi mu\u1ed1n t\u00ecm hi\u1ec3u v\u1ec1 thi\u1ebft k\u1ebf c\u01a1 s\u1edf d\u1eef li\u1ec7u quan h\u1ec7 - B\u1ea1n sinh vi\u00ean c\u1ea7n t\u00ecm hi\u1ec3u c\u00e1ch ph\u00e2n t\u00edch v\u00e0 thi\u1ebft k\u1ebf c\u01a1 s\u1edf d\u1eef li\u1ec7u cho m\u1ed9t \u1ee9ng d\u1ee5ng web - Nh\u1eefng b\u1ea1n ch\u01b0a thi\u1ebft k\u1ebf c\u01a1 s\u1edf d\u1eef li\u1ec7u l\u1ea7n n\u00e0o - Kh\u00f3a h\u1ecdc theo h\u01b0\u1edbng th\u1ef1c h\u00e0nh, \"c\u1ea7m tay ch\u1ec9 vi\u1ec7c\", h\u01b0\u1edbng d\u1eabn t\u1eeb ph\u1ea7n c\u00e0i \u0111\u1eb7t, c\u00e1c c\u00e2u l\u1ec7nh T-SQL thao t\u00e1c th\u1ebf n\u00e0o, c\u00e1ch thi\u1ebft k\u1ebf c\u00e1c b\u1ea3ng d\u1eef li\u1ec7u theo ch\u1ee9c n\u0103ng c\u1ee7a \u1ee9ng d\u1ee5ng, c\u00e1ch s\u1eed d\u1ee5ng c\u00f4ng c\u1ee5 tr\u00ean giao di\u1ec7n phpmyadmin, th\u1ef1c h\u00e0nh qua d\u1eef li\u1ec7u c\u1ee7a web th\u1ef1c t\u1ebf. - Kh\u00f3a h\u1ecdc g\u1ed3m 4 ph\u1ea7n ch\u00ednh, ph\u1ea7n 1 h\u01b0\u1edbng d\u1eabn c\u00e0i \u0111\u1eb7t v\u00e0 gi\u1edbi thi\u1ec7u c\u01a1 s\u1edf d\u1eef li\u1ec7u, ph\u1ea7n 2 h\u01b0\u1edbng d\u1eabn h\u1ecdc c\u00e2u l\u1ec7nh sql, ph\u1ea7n 3 th\u1ef1c h\u00e0nh ph\u00e2n t\u00edch v\u00e0 hi\u1ec3u b\u1ea3n ch\u1ea5t d\u1eef li\u1ec7u c\u1ee7a website b\u00e1n h\u00e0ng, ph\u1ea7n 4 th\u1ef1c h\u00e0nh ph\u00e2n t\u00edch v\u00e0 d\u1ef1ng d\u1eef li\u1ec7u c\u1ee7a website zing.vn. - \u00dd ngh\u0129a c\u1ee7a ph\u1ea7n h\u1ecdc d\u1eef li\u1ec7u gi\u00fap h\u1ecdc vi\u00ean c\u00f3 ki\u1ebfn th\u1ee9c n\u1ec1n t\u1ea3ng v\u1ec1 thi\u1ebft k\u1ebf d\u1eef li\u1ec7u quan h\u1ec7, m\u1ed9t ph\u1ea7n kh\u00f4ng th\u1ec3 thi\u1ebfu trong l\u1eadp tr\u00ecnh \u1ee9ng d\u1ee5ng v\u00e0 l\u1eadp tr\u00ecnh backend. - Sau khi h\u1ecdc xong b\u1ea1n c\u00f3 th\u1ec3 thi\u1ebft k\u1ebf \u0111\u01b0\u1ee3c c\u01a1 s\u1edf d\u1eef li\u1ec7u cho c\u00e1c website th\u00f4ng d\u1ee5ng nh\u01b0 website tin t\u1ee9c v\u00e0 website b\u00e1n h\u00e0ng. - \u0110\u1ecdc v\u00e0 hi\u1ec3u \u0111\u01b0\u1ee3c c\u00e1c b\u1ea3ng d\u1eef li\u1ec7u c\u1ee7a m\u1ed9t website. - Ph\u00e2n t\u00edch d\u1eef li\u1ec7u v\u00e0 thi\u1ebft l\u1eadp quan h\u1ec7 d\u1eef li\u1ec7u cho m\u1ed9t \u1ee9ng d\u1ee5ng","sku":"","offers":[{"@type":"Offer","price":"399000","priceSpecification":{"price":"399000","priceCurrency":"VND","valueAddedTaxIncluded":"false"},"priceCurrency":"VND","availability":"https:\/\/schema.org\/InStock","url":"http:\/\/fedu.vn\/khoa-hoc\/lap-trinh-thiet-ke-web\/34-thuc-hanh-thiet-ke-du-lieu-voi-sql-qua-bai-tap\/","seller":{"@type":"Organization","name":"Fedu","url":"http:\/\/fedu.vn"}}]}</script><style type="text/css" id="et-builder-page-custom-style">
				 .et_pb_section { background-color: ; }
			</style>
<!-- Root element of PhotoSwipe. Must have class pswp. -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

	<!-- Background of PhotoSwipe. It's a separate element as animating opacity is faster than rgba(). -->
	<div class="pswp__bg"></div>

	<!-- Slides wrapper with overflow:hidden. -->
	<div class="pswp__scroll-wrap">

		<!-- Container that holds slides.
		PhotoSwipe keeps only 3 of them in the DOM to save memory.
		Don't modify these 3 pswp__item elements, data is added later on. -->
		<div class="pswp__container">
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
			<div class="pswp__item"></div>
		</div>

		<!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
		<div class="pswp__ui pswp__ui--hidden">

			<div class="pswp__top-bar">

				<!--  Controls are self-explanatory. Order can be changed. -->

				<div class="pswp__counter"></div>

				<button class="pswp__button pswp__button--close" aria-label="Đóng (Esc)"></button>

				<button class="pswp__button pswp__button--share" aria-label="Chia sẻ"></button>

				<button class="pswp__button pswp__button--fs" aria-label="Bật/tắt chế độ toàn màn hình"></button>

				<button class="pswp__button pswp__button--zoom" aria-label="Phóng to/ thu nhỏ"></button>

				<!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
				<!-- element will get class pswp__preloader--active when preloader is running -->
				<div class="pswp__preloader">
					<div class="pswp__preloader__icn">
						<div class="pswp__preloader__cut">
							<div class="pswp__preloader__donut"></div>
						</div>
					</div>
				</div>
			</div>

			<div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
				<div class="pswp__share-tooltip"></div>
			</div>

			<button class="pswp__button pswp__button--arrow--left" aria-label="Ảnh trước (mũi tên trái)"></button>

			<button class="pswp__button pswp__button--arrow--right" aria-label="Ảnh tiếp (mũi tên phải)"></button>

			<div class="pswp__caption">
				<div class="pswp__caption__center"></div>
			</div>

		</div>

	</div>

</div>
	<script type="text/javascript">
		var c = document.body.className;
		c = c.replace(/woocommerce-no-js/, 'woocommerce-js');
		document.body.className = c;
	</script>
	<script type='text/javascript' src='http://fedu.vn/wp-content/themes/Divi/includes/builder/scripts/frontend-builder-global-functions.js?ver=3.0.51'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wpcf7 = {"apiSettings":{"root":"http:\/\/fedu.vn\/wp-json\/contact-form-7\/v1","namespace":"contact-form-7\/v1"},"recaptcha":{"messages":{"empty":"H\u00e3y x\u00e1c nh\u1eadn r\u1eb1ng b\u1ea1n kh\u00f4ng ph\u1ea3i l\u00e0 robot."}}};
/* ]]> */
</script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/contact-form-7/includes/js/scripts.js?ver=5.0.4'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/woocommerce/assets/js/zoom/jquery.zoom.min.js?ver=1.7.21'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/js_composer/assets/lib/bower/flexslider/jquery.flexslider-min.js?ver=5.4.2'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe.min.js?ver=4.1.1'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/woocommerce/assets/js/photoswipe/photoswipe-ui-default.min.js?ver=4.1.1'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_single_product_params = {"i18n_required_rating_text":"Vui l\u00f2ng ch\u1ecdn m\u1ed9t m\u1ee9c \u0111\u00e1nh gi\u00e1","review_rating_required":"yes","flexslider":{"rtl":false,"animation":"slide","smoothHeight":true,"directionNav":false,"controlNav":"thumbnails","slideshow":false,"animationSpeed":500,"animationLoop":false,"allowOneSlide":false},"zoom_enabled":"1","zoom_options":[],"photoswipe_enabled":"1","photoswipe_options":{"shareEl":false,"closeOnScroll":false,"history":false,"hideAnimationDuration":0,"showAnimationDuration":0},"flexslider_enabled":"1"};
/* ]]> */
</script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/woocommerce/assets/js/frontend/single-product.min.js?ver=3.4.5'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/woocommerce/assets/js/jquery-blockui/jquery.blockUI.min.js?ver=2.70'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/woocommerce/assets/js/js-cookie/js.cookie.min.js?ver=2.1.4'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var woocommerce_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%"};
/* ]]> */
</script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/woocommerce/assets/js/frontend/woocommerce.min.js?ver=3.4.5'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var wc_cart_fragments_params = {"ajax_url":"\/wp-admin\/admin-ajax.php","wc_ajax_url":"\/?wc-ajax=%%endpoint%%","cart_hash_key":"wc_cart_hash_456f23a784194ce7ba0868c12f0acc8d","fragment_name":"wc_fragments_456f23a784194ce7ba0868c12f0acc8d"};
/* ]]> */
</script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/woocommerce/assets/js/frontend/cart-fragments.min.js?ver=3.4.5'></script>
<script type='text/javascript' src='http://fedu.vn/wp-includes/js/jquery/ui/core.min.js?ver=1.11.4'></script>
<script type='text/javascript' src='http://fedu.vn/wp-includes/js/jquery/ui/datepicker.min.js?ver=1.11.4'></script>
<script type='text/javascript'>
jQuery(document).ready(function(jQuery){jQuery.datepicker.setDefaults({"closeText":"\u0110\u00f3ng","currentText":"H\u00f4m nay","monthNames":["Th\u00e1ng M\u1ed9t","Th\u00e1ng Hai","Th\u00e1ng Ba","Th\u00e1ng T\u01b0","Th\u00e1ng N\u0103m","Th\u00e1ng S\u00e1u","Th\u00e1ng B\u1ea3y","Th\u00e1ng T\u00e1m","Th\u00e1ng Ch\u00edn","Th\u00e1ng M\u01b0\u1eddi","Th\u00e1ng M\u01b0\u1eddi M\u1ed9t","Th\u00e1ng M\u01b0\u1eddi Hai"],"monthNamesShort":["Th1","Th2","Th3","Th4","Th5","Th6","Th7","Th8","Th9","Th10","Th11","Th12"],"nextText":"Ti\u1ebfp theo","prevText":"Quay v\u1ec1","dayNames":["Ch\u1ee7 Nh\u1eadt","Th\u1ee9 Hai","Th\u1ee9 Ba","Th\u1ee9 T\u01b0","Th\u1ee9 N\u0103m","Th\u1ee9 S\u00e1u","Th\u1ee9 B\u1ea3y"],"dayNamesShort":["CN","T2","T3","T4","T5","T6","T7"],"dayNamesMin":["C","H","B","T","N","S","B"],"dateFormat":"dd\/mm\/yy","firstDay":1,"isRTL":false});});
</script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/woocommerce/assets/js/select2/select2.full.min.js?ver=4.0.3'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var yith_wcaf = {"labels":{"select2_i18n_matches_1":"One result is available, press enter to select it.","select2_i18n_matches_n":"%qty% results are available, use up and down arrow keys to navigate.","select2_i18n_no_matches":"Kh\u00f4ng t\u00ecm th\u1ea5y k\u1ebft qu\u1ea3 ph\u00f9 h\u1ee3p","select2_i18n_ajax_error":"T\u1ea3i th\u1ea5t b\u1ea1i","select2_i18n_input_too_short_1":"Vui l\u00f2ng nh\u1eadp 1 ho\u1eb7c nhi\u1ec1u k\u00fd t\u1ef1","select2_i18n_input_too_short_n":"Vui l\u00f2ng nh\u1eadp %qty% ho\u1eb7c nhi\u1ec1u k\u00fd t\u1ef1","select2_i18n_input_too_long_1":"Vui l\u00f2ng x\u00f3a 1 k\u00fd t\u1ef1","select2_i18n_input_too_long_n":"Vui l\u00f2ng x\u00f3a %qty%  k\u00fd t\u1ef1","select2_i18n_selection_too_long_1":"B\u1ea1n ch\u1ec9 c\u00f3 th\u1ec3 ch\u1ecdn 1 s\u1ea3n ph\u1ea9m","select2_i18n_selection_too_long_n":"B\u1ea1n c\u00f3 th\u1ec3 ch\u1ecdn %qty% s\u1ea3n ph\u1ea9m","select2_i18n_load_more":"T\u1ea3i nhi\u1ec1u k\u1ebft qu\u1ea3 h\u01a1n&hellip;","select2_i18n_searching":"T\u00ecm ki\u1ebfm&hellip;","link_copied_message":"Url copied"},"ajax_url":"http:\/\/fedu.vn\/wp-admin\/admin-ajax.php","search_products_nonce":"2fbf146d16","set_referrer_nonce":"e7a9822e6b"};
/* ]]> */
</script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/yith-woocommerce-affiliates/assets/js/yith-wcaf.min.js?ver=4.9.8'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/themes/Divi-child/js/owl.carousel.min.js?ver=4.9.8'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/themes/Divi-child/js/custom.js?ver=1'></script>
<script type='text/javascript' src='http://fedu.vn/wp-includes/js/comment-reply.min.js?ver=4.9.8'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/themes/Divi/includes/builder/scripts/jquery.mobile.custom.min.js?ver=3.0.51'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/themes/Divi/js/custom.js?ver=3.0.51'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/easy-fancybox/fancybox/jquery.fancybox.1.3.21.min.js'></script>
<script type='text/javascript'>
var fb_timeout, fb_opts={'overlayShow':true,'hideOnOverlayClick':true,'showCloseButton':true,'margin':20,'centerOnScroll':false,'enableEscapeButton':true,'autoScale':true };
if(typeof easy_fancybox_handler==='undefined'){
var easy_fancybox_handler=function(){
jQuery('.nofancybox,a.wp-block-file__button,a.pin-it-button,a[href*="pinterest.com/pin/create"],a[href*="facebook.com/share"],a[href*="twitter.com/share"]').addClass('nolightbox');
/* IMG */
var fb_IMG_select='a[href*=".jpg"]:not(.nolightbox,li.nolightbox>a),area[href*=".jpg"]:not(.nolightbox),a[href*=".jpeg"]:not(.nolightbox,li.nolightbox>a),area[href*=".jpeg"]:not(.nolightbox),a[href*=".png"]:not(.nolightbox,li.nolightbox>a),area[href*=".png"]:not(.nolightbox),a[href*=".webp"]:not(.nolightbox,li.nolightbox>a),area[href*=".webp"]:not(.nolightbox)';
jQuery(fb_IMG_select).addClass('fancybox image');
var fb_IMG_sections=jQuery('.gallery,.wp-block-gallery,.tiled-gallery');
fb_IMG_sections.each(function(){jQuery(this).find(fb_IMG_select).attr('rel','gallery-'+fb_IMG_sections.index(this));});
jQuery('a.fancybox,area.fancybox,li.fancybox a').each(function(){jQuery(this).fancybox(jQuery.extend({},fb_opts,{'transitionIn':'elastic','easingIn':'easeOutBack','transitionOut':'elastic','easingOut':'easeInBack','opacity':false,'hideOnContentClick':false,'titleShow':true,'titlePosition':'over','titleFromAlt':true,'showNavArrows':true,'enableKeyboardNav':true,'cyclic':false}))});};
jQuery('a.fancybox-close').on('click',function(e){e.preventDefault();jQuery.fancybox.close()});
};
var easy_fancybox_auto=function(){setTimeout(function(){jQuery('#fancybox-auto').trigger('click')},1000);};
jQuery(easy_fancybox_handler);jQuery(document).on('post-load',easy_fancybox_handler);
jQuery(easy_fancybox_auto);
</script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/easy-fancybox/js/jquery.easing.1.4.1.min.js'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/easy-fancybox/js/jquery.mousewheel.3.1.13.min.js'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/themes/Divi/includes/builder/scripts/jquery.fitvids.js?ver=3.0.51'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/js_composer/assets/lib/waypoints/waypoints.min.js?ver=5.4.2'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/themes/Divi/includes/builder/scripts/jquery.magnific-popup.js?ver=3.0.51'></script>
<script type='text/javascript'>
/* <![CDATA[ */
var et_pb_custom = {"ajaxurl":"http:\/\/fedu.vn\/wp-admin\/admin-ajax.php","images_uri":"http:\/\/fedu.vn\/wp-content\/themes\/Divi\/images","builder_images_uri":"http:\/\/fedu.vn\/wp-content\/themes\/Divi\/includes\/builder\/images","et_frontend_nonce":"61e47930d4","subscription_failed":"L\u00e0m \u01a1n, ki\u1ec3m tra \u0111\u1ed3ng d\u01b0\u1edbi ch\u1eafc ch\u1eafn \u0111\u1ec3 c\u00e1c \u00f4ng g\u00f5 \u0111\u00fang th\u00f4ng tin.","et_ab_log_nonce":"85af7bff12","fill_message":"Xin vui l\u00f2ng, \u0111i\u1ec1n v\u00e0o c\u00e1c l\u0129nh v\u1ef1c sau \u0111\u00e2y:","contact_error_message":"Xin h\u00e3y s\u1eeda nh\u1eefng l\u1ed7i sau:","invalid":"Kh\u00f4ng h\u1ee3p l\u1ec7 email","captcha":"Captcha","prev":"Tr\u01b0\u1edbc","previous":"Tr\u01b0\u1edbc","next":"Ti\u1ebfp theo","wrong_captcha":"B\u1ea1n \u0111\u00e3 nh\u1eadp sai s\u1ed1 captcha.","is_builder_plugin_used":"","ignore_waypoints":"yes","is_divi_theme_used":"1","widget_search_selector":".widget_search","is_ab_testing_active":"","page_id":"11513","unique_test_id":"","ab_bounce_rate":"5","is_cache_plugin_active":"no","is_shortcode_tracking":""};
/* ]]> */
</script>
<script type='text/javascript' src='http://fedu.vn/wp-content/themes/Divi/includes/builder/scripts/frontend-builder-scripts.js?ver=3.0.51'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/enlighter/resources/mootools-core-yc.js?ver=3.8'></script>
<script type='text/javascript' src='http://fedu.vn/wp-content/plugins/enlighter/resources/EnlighterJS.min.js?ver=3.8'></script>
<script type='text/javascript' src='http://fedu.vn/wp-includes/js/wp-embed.min.js?ver=4.9.8'></script>
<script type="text/javascript">/* <![CDATA[ */EnlighterJS_Config = {"selector":{"block":"pre.EnlighterJSRAW","inline":"code.EnlighterJSRAW"},"language":"generic","theme":"enlighter","indent":2,"hover":"hoverEnabled","showLinenumbers":true,"rawButton":true,"infoButton":true,"windowButton":true,"rawcodeDoubleclick":false,"grouping":true,"cryptex":{"enabled":false,"email":"mail@example.tld"}};!function(){var a=function(a){var b="Enlighter Error: ";console.error?console.error(b+a):console.log&&console.log(b+a)};return window.addEvent?"undefined"==typeof EnlighterJS?void a("Javascript Resources not loaded yet!"):"undefined"==typeof EnlighterJS_Config?void a("Configuration not loaded yet!"):void window.addEvent("domready",function(){EnlighterJS.Util.Init(EnlighterJS_Config.selector.block,EnlighterJS_Config.selector.inline,EnlighterJS_Config)}):void a("MooTools Framework not loaded yet!")}();;/* ]]> */</script>



<script type="text/javascript">

jQuery('.et-cart-info>span').append('(<i style="font-style: normal;">0</i>)');

jQuery(document).ready(function()

{

	jQuery('.et_pb_slide').css('cursor', 'pointer');

	jQuery('.et_pb_slide').click(function(){

		var link_slider = jQuery(this).find('.et_pb_more_button').attr('href');

		window.location.href=link_slider;

	});




		jQuery('body').removeClass('et_fixed_nav');

		var height_offset_tab = jQuery('.woocommerce-tabs').offset().top - (jQuery('.woocommerce-tabs').height())/2;



		jQuery(window).scroll(function()

		{

		    var scroll = jQuery(window).scrollTop();



			  if (scroll >= height_offset_tab)

			  {

			  		if (!jQuery('.wc-tabs').parents().hasClass('tab_fixed'))

			  		{

			  			jQuery('.tabs.wc-tabs').wrap('<div class="tab_fixed"><div class="container"></div></div>');

			  			jQuery('.wc-tabs').append('<span class="tab_register" style="margin-left: 10px;"><a href="#course_btn" class="course-btn" style="font-size: 15px;">Đăng ký khóa học</a></span>');

			  		}



			  }

			  else

			  {

			  		if (jQuery('.wc-tabs').parents().hasClass('tab_fixed'))

			  		{

			  			jQuery('.tabs.wc-tabs').unwrap();

			  			jQuery('.tab_register').remove();

			  		}



			  }

		});




});

</script>

<script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-5854c195709acbb6"></script>

<div id="fb-root"></div>

<script>(function(d, s, id) {

  var js, fjs = d.getElementsByTagName(s)[0];

  if (d.getElementById(id)) return;

  js = d.createElement(s); js.id = id;

  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.10&appId=307477792684519";

  fjs.parentNode.insertBefore(js, fjs);

}(document, 'script', 'facebook-jssdk'));</script>

<script>

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){

  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),

  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)

  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');



  ga('create', 'UA-101721581-1', 'auto');

  ga('send', 'pageview');



</script>



<script>

(function($) {

    $(window).on('load resize', function() {

        $('.et_fullscreen_slider').each(function() {

            et_fullscreen_slider($(this));

        });

    });

    function et_fullscreen_slider(et_slider) {

        var et_viewport_height = $(window).height(),

            et_slider_height = $(et_slider).find('.et_pb_slider_container_inner').innerHeight(),

            $admin_bar = $('#wpadminbar'),

            $main_header = $('#main-header'),

            $top_header = $('#top-header');

        $(et_slider).height('auto');




        if ($admin_bar.length) {

            var et_viewport_height = et_viewport_height - $admin_bar.height();

        }

        if ($top_header.length) {

            var et_viewport_height = et_viewport_height - $top_header.height();

        }

        if (!$('.et_transparent_nav').length && !$('.et_vertical_nav').length) {

            var et_viewport_height = et_viewport_height - $main_header.height();

        }

        if (et_viewport_height > et_slider_height) {

            $(et_slider).height(et_viewport_height);

        }




    }

})(jQuery);

</script>

<div class="fb-customerchat" page_id="115700545682365">
</div>

<!--Start of Tawk.to Script-->
<!-- <script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/5b96231ef31d0f771d8498f5/default';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script> -->
<!--End of Tawk.to Script-->




<!-- Google Code dành cho Thẻ tiếp thị lại -->

<!--------------------------------------------------

Không thể liên kết thẻ tiếp thị lại với thông tin nhận dạng cá nhân hay đặt thẻ tiếp thị lại trên các trang có liên quan đến danh mục nhạy cảm. Xem thêm thông tin và hướng dẫn về cách thiết lập thẻ trên: http://google.com/ads/remarketingsetup

--------------------------------------------------->

<script type="text/javascript">

var google_tag_params = {

ecomm_prodid: 'REPLACE_WITH_VALUE',

ecomm_pagetype: 'REPLACE_WITH_VALUE',

ecomm_totalvalue: 'REPLACE_WITH_VALUE',

dynx_itemid: 'REPLACE_WITH_VALUE',

dynx_itemid2: 'REPLACE_WITH_VALUE',

dynx_pagetype: 'REPLACE_WITH_VALUE',

dynx_totalvalue: 'REPLACE_WITH_VALUE',

};

</script>

<script type="text/javascript">

/* <![CDATA[ */

var google_conversion_id = 853881412;

var google_custom_params = window.google_tag_params;

var google_remarketing_only = true;

/* ]]> */

</script>

<script type="text/javascript" src="//www.googleadservices.com/pagead/conversion.js">

</script>

<noscript>

<div style="display:inline;">

<img height="1" width="1" style="border-style:none;" alt="" src="//googleads.g.doubleclick.net/pagead/viewthroughconversion/853881412/?guid=ON&amp;script=0"/>

</div>

</noscript>



</body>


</html>
