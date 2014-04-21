<!DOCTYPE html>
<!--[if lt ie 7]>     <html class='ie ie6'>       <![endif]-->
<!--[if ie 7]>        <html class='ie ie7'>       <![endif]-->
<!--[if ie 8]>        <html class='ie ie8'>       <![endif]-->
<!--[if gt ie 8 | !(ie)]>-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
	<title>SONG-JIN</title>
	<meta charset='<?php bloginfo('charset'); ?>'>
	<meta name='author' content='SONG-JIN'>
	<meta name='description' content="I'm SONG-JIN,here is my personal blog">
	<meta name='keywords' content='HTML, CSS, JavaScript, HTML5, CSS3, NodeJS'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>
	<link rel='shortcut icon' href='<?php echo get_template_directory_uri(); ?>/img/icon.ico'>
	<link rel='pingback' href='<?php bloginfo('pingback_url'); ?>'>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/typo.css">
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url') ?>">
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
	<script type="text/javascript" src='<?php echo get_template_directory_uri(); ?>/js/main.js'></script>

	
	<?php wp_head(); ?>
	<!--[if lt IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js"></script>
		<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/ie.css">
	<![endif]-->
</head>
<body>
	<header>
		<div class='intro'>
			<a href='<?php bloginfo('url') ?>' class='logo'>
				<img src="<?php echo get_template_directory_uri(); ?>/img/pic.png">
			</a>
			<p>
				I'm <span>SONG-JIN</span>, an university student.Here is my personal blog. If you have any question, leave me a message
			</p>
		</div>
		<ul class='nav'>
			<li><a href="<?php bloginfo('url') ?>">Home</a></li>
			<li><a href="<?php bloginfo('url') ?>/archives">Archives</a></li>
			<li><a href="<?php bloginfo('url') ?>/about">About</a></li>
			<li><a href="<?php bloginfo('url') ?>/link">Links</a></li>
		</ul>
		<ul class='contact'>
			<li>
				<a href="https://github.com/song-jin">
					<img src="<?php echo get_template_directory_uri(); ?>/img/github.png">
				</a>
			</li>
			<li>
				<a href="mailto:wufashenqing@gmail.com">
					<img src="<?php echo get_template_directory_uri(); ?>/img/email.png">
				</a>
			</li>
		</ul>
	</header>
	<div id='wrapper'>
	