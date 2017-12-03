
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
	<head>
		<script async src="https://www.googletagmanager.com/gtag/js?id=UA-27162090-5"></script>
		<script>
		  window.dataLayer = window.dataLayer || [];
		  function gtag(){dataLayer.push(arguments);}
		  gtag('js', new Date());

		  gtag('config', 'UA-27162090-5');
		</script>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>The Gallery &mdash; Vote for the best photos from Instagram</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Rank the best photos from Instagram" />
	<meta name="keywords" content="free html5, free template, free bootstrap, html5, css3, mobile first, responsive" />
	<meta name="author" content="FREEHTML5.CO" />

  <!--
	//////////////////////////////////////////////////////

	FREE HTML5 TEMPLATE
	DESIGNED & DEVELOPED by FREEHTML5.CO

	Website: 		http://freehtml5.co/
	Email: 			info@freehtml5.co
	Twitter: 		http://twitter.com/fh5co
	Facebook: 		https://www.facebook.com/fh5co

	//////////////////////////////////////////////////////
	 -->

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<!-- Google Webfonts -->
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,100,500' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Salvattore -->
	<link rel="stylesheet" href="css/salvattore.css">
	<!-- Theme Style -->
	<link rel="stylesheet" href="css/style.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<!-- The Gallery JS -->
	<script src="thegallery.js"></script>
	<style>
			.loader {
					position: fixed;
					left: 0px;
					top: 0px;
					width: 100%;
					height: 100%;
					z-index: 9999;
					background: url('wait.gif') 50% 50% no-repeat rgb(249, 249, 249);
					opacity: .8;
			}
			#wait {
					position: fixed;
					top: 50%;
					left: 50%;
					background-color: #dbf4f7;
					background-image: url("wait.gif"); // path to your wait image
					background-repeat: no-repeat;
					z-index: 100; // so this shows over the rest of your content
					/* alpha settings for browsers */

					opacity: 0.9;
					filter: alpha(opacity=90);
					-moz-opacity: 0.9;
			}
			#loading {
					width: 100%;
					height: 100%;
					top: 0;
					left: 0;
					position: fixed;
					display: block;
					opacity: 0.7;
					background-color: #fff;
					z-index: 99;
					text-align: center;
			}
			#loading-image {
					position: absolute;
					top: 100px;
					left: 240px;
					z-index: 100;
			}
	</style>
	<link rel="apple-touch-icon" sizes="57x57" href="icon/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="icon/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="icon/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="icon/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="icon/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="icon/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="icon/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="icon/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="icon/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="icon/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="icon/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
<link rel="manifest" href="icon/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="icon/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
	</head>
	<body>

<div class='loader' id="loader" style="display: none;">
</div>

	<div id="fh5co-offcanvass">
		<a href="#" class="fh5co-offcanvass-close js-fh5co-offcanvass-close">Menu <i class="icon-cross"></i> </a>
		<h1 class="fh5co-logo"><a class="navbar-brand" href="index.php">The Gallery</a></h1>
		<ul>
			<li><a href="index.php">Home</a></li>
			<li class="active"><a href="thegallery.php">The Gallery</a></li>
			<li><a href="about.html">About</a></li>
			<li><a href="search.html">Search</a></li>
		</ul>
		<h3 class="fh5co-lead">Connect with us</h3>
		<p class="fh5co-social-icons">
			<a href="#"><i class="icon-twitter"></i></a>
			<a href="#"><i class="icon-facebook"></i></a>
			<a href="#"><i class="icon-instagram"></i></a>
			<a href="#"><i class="icon-dribbble"></i></a>
			<a href="#"><i class="icon-youtube"></i></a>
		</p>
	</div>
	<header id="fh5co-header" role="banner">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<a href="#" class="fh5co-menu-btn js-fh5co-menu-btn">Menu <i class="icon-menu"></i></a>
					<a class="navbar-brand" href="index.php">The Gallery</a>
				</div>
			</div>
		</div>
	</header>
	<!-- END .header -->
	<div id="fh5co-main">
		<div class="container">

			<div class="row">
        <div id="fh5co-board" data-columns>
					<?php
							include "getPhotoPostByPhotoLink.php";
							$mostLikedPhotoLinks = include 'getMostLikedPhotoLinks.php';
							//echo $mostLikedPhotoLinks;
							while ($row = mysqli_fetch_array($mostLikedPhotoLinks)) {
									//echo $row['qty'].$row['photoLink'];


									$result = getPhotoPostByPhotoLink($row['photoLink']);
									$photoURL = $result->graphql->shortcode_media->display_url;
									//$photoURL = $result->graphql->shortcode_media->display_resources[0]->src;
									$photoCaption = $result->graphql->shortcode_media->edge_media_to_caption->edges[0]->node->text;
									$q_likes = $result->graphql->shortcode_media->edge_media_preview_like->count;
									$q_comments= $result->graphql->shortcode_media->edge_media_to_comment->count;
									$likesPeople =$result->graphql->shortcode_media->edge_media_preview_like->edges;
									$commentsPeople = $result->graphql->shortcode_media->edge_media_to_comment->edges;
									$username=$result->graphql->shortcode_media->owner->username;
								?>


        	<div class="item">
        		<div class="animate-box">
	        		<a href="<?php echo  $photoURL; ?>" class="image-popup fh5co-board-img"
								title="<?php echo  $photoCaption; ?>"><img src="<?php echo  $photoURL ?>" alt="Free HTML5 Bootstrap template"></a>
        		</div>
        		<div class="fh5co-desc">
							<table>
								<tr>
									<td>

										<div class="qty<?php echo $row['photoLink'] ?>" >


											<p>

												<input width="60%" type="image" src="images/like.png" onclick="setLikeToPhoto('<?php echo $row['photoLink']; ?>','qty<?php echo $row['photoLink'] ?>')" style="float: left;">
												<h5><rr id="qty<?php echo $row['photoLink'] ?>"> <?php echo $row['qty'] ?></rr></h5>
											</p>
										</div>
									</td>

									<td>
										<div class="lovecolor<?php echo $row['photoLink'] ?>">
											<p>

												<input width="100%" type="image" src="images/lovecolor.png" onclick="setSuperLike('<?php echo $username; ?>','<?php echo $row['photoLink']; ?>')" style="float: rigth;">

											</p>
										</div>
									</td>
									<td>

										<div class="colors<?php echo $row['photoLink'] ?>">
											<p>
												<input width="60%" type="image" src="images/colors.png" onclick="goToSearch()"  style="float: rigth;">
											</p>
										</div>
									</td>
								</tr>
							</table>
							<strong><u>@<?php echo $username; ?></u></strong>
							<?php  echo  $photoCaption; ?>
						</div>
        	</div>
				<?php
			}
				?>
        </div>
        </div>
       </div>
	</div>

	<footer id="fh5co-footer">

		<div class="container">
			<div class="row row-padded">
				<div class="col-md-12 text-center">
					<p class="fh5co-social-icons">
						<a href="#"><i class="icon-twitter"></i></a>
						<a href="#"><i class="icon-facebook"></i></a>
						<a href="#"><i class="icon-instagram"></i></a>
						<a href="#"><i class="icon-dribbble"></i></a>
						<a href="#"><i class="icon-youtube"></i></a>
					</p>
					<p><small>&copy; The Gallery - All Rights Reserved. <br>Template designed by: <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> | </small></p>
				</div>
			</div>
		</div>
	</footer>


	<!-- jQuery -->
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<!-- Salvattore -->
	<script src="js/salvattore.min.js"></script>
	<!-- Main JS -->
	<script src="js/main.js"></script>





	</body>
</html>
