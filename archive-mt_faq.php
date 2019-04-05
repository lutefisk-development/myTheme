<?php
	get_header();
?>

<article class="container" id="main">
	<h1><?php _e('Frequently Asked Questions: ', 'mytheme'); ?></h1>
	<?php if(have_posts()) : ?>
		<div class="accordion" id="accordionFAQ">
		<?php while (have_posts()) : the_post(); ?>
			<div class="card">
				<div class="card-header">
					<h2 class="mb-0">
						<button class="btn btn-link" type="button" data-toggle="collapse" data-target="#faq-<?php the_ID(); ?>">
							<?php the_title(); ?>
						</button>
					</h2>
				</div>
				<div id="faq-<?php the_ID(); ?>" class="collapse" data-parent="#accordionFAQ">
					<div class="card-body">
						<?php the_content(); ?>
					</div>
				</div>
			</div>
		<?php endwhile; ?>
			<?php get_template_part('template-parts/posts-pagination'); ?>
		<?php else : ?>
			<p><em><?php _e('Sorry, no FAQs found.', 'mytheme')?></em></p>
	<?php endif; ?>
</article>

<?php
	get_footer();