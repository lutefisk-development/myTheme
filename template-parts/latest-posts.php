<?php
	// Hamta de 3 senaste blogginläggen, oavsätt kategori
	$latest_post_query = new WP_Query([
		'post_type' => 'post',
		'posts_per_page' => 3,
	]);

	if($latest_post_query->have_posts()) {
		?>
			<h2>Latest Posts</h2>
			<div class="card-group">
				<div class="row">
					<?php
						while($latest_post_query->have_posts()) {
							$latest_post_query->the_post();
							get_template_part('template-parts/content', 'excerpt');
						}
					?>
				</div>
			</div>
		<?php

		// Reset post data
		wp_reset_postdata();
	}

	// Skapa en card-group och för varje blogginlägg kalla på template-parts/content-excerpt för att visa inlägget
	?>