<!-- This is a Blog Post -->
<div class="col-md-6 col-lg-4 mb-4">
	<section class="card">
		<?php if(has_post_thumbnail()) : ?>
			<a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('post-thumbnail', ['class' => 'card-img-top img-fluid']); ?></a>
		<?php endif; ?>	
		<article class="card-body">
			<h5 class="card-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>

			<div class="card-text">
				<?php the_excerpt(); ?>
			</div>
		</article>
			<div class="card-footer">
				<summary class="text-small"><small class="text-muted">
					<?php
						printf(__('Post Created: %s by %s in %s', 'mytheme'),
						get_the_date(),
						get_the_author_posts_link(),
						get_the_category_list(', '));
					?>
				</small></summary>
			</div>
	</section>
</div>
<!-- End of Blog Post -->