<!-- This is a Blog Post -->
<section class="row">
	<?php if(has_post_thumbnail()) : ?>
		<figure class="col-sm-3">
			<?php the_post_thumbnail('post-thumbnail', ['class' => 'img-fluid']); ?>
		</figure>
	<?php endif; ?>	
	<article class="col-sm">
		<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
		<summary>Post Created: <?php echo get_the_date(); ?> by <?php the_author_posts_link(); ?> in <?php the_category(); ?></summary>

		<?php the_excerpt(); ?>
	</article>
</section>
<hr>
<!-- End of Blog Post -->