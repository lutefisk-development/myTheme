<!doctype html>
	<html lang="en">
		<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<title><?php bloginfo('name'); ?></title>
		
		<?php wp_head(); ?>
		</head>
		<body>

		<nav class="navbar navbar-expand-lg navbar-light bg-light">
			<main class="container">
				<a class="navbar-brand" href="/"><?php bloginfo('name'); ?></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<?php
					wp_nav_menu([
						'theme_location' => 'main-menu',
						'container_class' => 'collapse navbar-collapse', // wrapping div class
						'container_id' => 'navbarNav', // wrapping div id
						'menu_class' => 'navbar-nav ml-auto',  // ul class
						'walker' => new bs4Navwalker(),
					]);
				?>
			</main>
		</nav>

	