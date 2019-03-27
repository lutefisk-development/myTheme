<nav class="navbar navbar-expand-lg navbar-light bg-light">
	<main class="container">
		<a class="navbar-brand" href="/">
			<?php mt_the_custom_logo(); ?>
		</a>

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