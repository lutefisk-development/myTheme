<?php
	// Hamta de 3 senaste blogginläggen, oavsätt kategori
	
	// $categoryItems = get_the_category(get_the_ID());
	
	// $categoryIds = [];

	// foreach($categoryItems as $categoryItem) {
	// 	array_push($categoryIds, $categoryItem->cat_ID);
	// }

	
	$categoryIds = wp_get_post_categories(get_the_ID());
	$latest_post_query = new WP_Query([
		// 'post_type' => 'post',
		'posts_per_page' => 3,
		'post__not_in' => [get_the_ID()],
		'category__in' => $categoryIds

	]);

	if($latest_post_query->have_posts()) {
		?>
			<h2><?php _e('Latest Related Posts', 'mytheme'); ?></h2>
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