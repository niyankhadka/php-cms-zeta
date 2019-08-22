<?php ob_start(); ?>
<?php include "admin/functions.php"; ?>
<?php
                            
                $query1_value = "SELECT * FROM top_header WHERE top_header_id = 1";
                $query_select1_value = mysqli_query($connection , $query1_value);
                $rows = mysqli_fetch_assoc($query_select1_value);
                    
                    $title_text_value = $rows['title_text'];
                    $bg_title_text_value = $rows['bg_title_text'];
                    $subtitle_text_value = $rows['subtitle_text'];
                    $top_header_date = $rows['top_header_date'];
                    
                ?>
<!DOCTYPE html>
<html lang="en">
<head>
<title><?php echo  $title_text_value; ?></title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Zeta Template Project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/fontawesome-free-5.0.1/css/fontawesome-all.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">


<!--
<link rel="stylesheet" type="text/css" href="plugins/js-flickr-gallery-1.24/js-flickr-gallery.css">
<link href="plugins/colorbox/colorbox.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="styles/blog_styles.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">
-->

</head>

<body>

<div class="super_container">
	
	<!-- Header -->

	<header class="header d-flex flex-row justify-content-end align-items-center">

		<!-- Logo -->
		
		
		
		<div class="logo_container mr-auto">
			<div class="logo">
				<a href="index.php"><span><?php echo $bg_title_text_value; ?></span><?php echo $title_text_value; ?><span><?php echo $subtitle_text_value; ?></span></a>
			</div>
		</div>

		<!-- Main Navigation -->
		<nav class="main_nav justify-self-end">
			<ul class="nav_items">
				<li class="active"><a href="index.php"><span>home</span></a></li>
				<li><a href="services.html"><span>services</span></a></li>
				<li><a href="elements.html"><span>elements</span></a></li>
				<li><a href="blog.php"><span>blog</span></a></li>
				<li><a href="contact.html"><span>contact</span></a></li>
				<li><a href="admin/admin_index.php"><span>admin</span></a></li>
			</ul>
		</nav>

		<!-- Hamburger -->
		<div class="hamburger_container">
			<span class="hamburger_text">Menu</span>
			<span class="hamburger_icon"></span>
		</div>

	</header>

	<!-- Menu -->

	<div class="fs_menu_overlay"></div>
	<div class="fs_menu_container">
		<div class="fs_menu_shapes"><img src="uploads/menu_shapes.png" alt=""></div>
		<nav class="fs_menu_nav">
			<ul class="fs_menu_list">
				<li><a href="#"><span><span>H</span>Home</span></a></li>
				<li><a href="#"><span><span>S</span>Services</span></a></li>
				<li><a href="#"><span><span>E</span>Elements</span></a></li>
				<li><a href="blog.php"><span><span>B</span>Blog</span></a></li>
				<li><a href="#"><span><span>C</span>Contact</span></a></li>
				<li><a href="../admin/admin_index.php"><span><span>A</span>Admin</span></a></li>
			</ul>
		</nav>
		<div class="fs_social_container d-flex flex-row justify-content-end align-items-center">
		<ul class="fs_social">
		<?php
                            
                $query1_value = "SELECT * FROM social_links WHERE social_links_id = 1";
                $query_select1_value = mysqli_query($connection , $query1_value);
                $rows = mysqli_fetch_assoc($query_select1_value);
                    
                    $pinterest_value = $rows['pinterest'];
                    $facebook_value = $rows['facebook'];
                    $twitter_value = $rows['twitter'];
                    $dribble_value = $rows['dribble'];
                    $behance_value = $rows['behance'];
                    $linkedin_value = $rows['linkedin'];
                    $social_links_date = $rows['social_links_date'];
                    
                            if(!empty($pinterest_value)){ ?>
							<li><a href="<?php echo $pinterest_value; ?>"><i class="fab fa-pinterest trans_300"></i></a></li>
							<?php } 
                            if(!empty($facebook_value)){
                            ?>
							<li><a href="<?php echo $facebook_value; ?>"><i class="fab fa-facebook-f trans_300"></i></a></li>
							<?php } 
                            if(!empty($twitter_value)){
                            ?>
							<li><a href="<?php echo $twitter_value; ?>"><i class="fab fa-twitter trans_300"></i></a></li>
							<?php } 
                            if(!empty($dribble_value)){
                            ?>
							<li><a href="<?php echo $dribble_value; ?>"><i class="fab fa-dribbble trans_300"></i></a></li>
							<?php } 
                            if(!empty($behance_value)){
                            ?>
							<li><a href="<?php echo $behance_value; ?>"><i class="fab fa-behance trans_300"></i></a></li>
							<?php } 
                            if(!empty($linkedin_value)){
                            ?>
							<li><a href="<?php echo $linkedin_value; ?>"><i class="fab fa-linkedin-in trans_300"></i></a></li>
							<?php } ?>
		
			</ul>
		</div>
	</div>