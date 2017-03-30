<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
"http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>

<body>
    <nav class="navbar navbar-default navbar-static-top" id="header_nav">
		<div class="container">
			<div class="navbar-header">
				<!-- <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-area" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button> -->
				<?php if(is_front_page()): ?>
				<a class="navbar-brand"><?php bloginfo('name'); ?></a>
				<?php else: ?>
				<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><?php bloginfo('name'); ?></a>
				<?php endif; ?>
			</div>
			<div class="collapse navbar-collapse" id="navbar-collapse-area">
				<ul class="nav navbar-nav navbar-right">
					<!-- <li><a href="#">About</a></li> -->
					<!-- <li><a href="#">Contact</a></li> -->
				</ul>
			</div>
		</div>
	</nav>