<!-- This is a Blog Post -->
<?php if(has_post_thumbnail()) : ?>
	<figure class="featured-image-wrapper">
		<?php the_post_thumbnail('featured-image', ['class' => 'img-fluid d-block mx-auto']); ?>
	</figure>
<?php endif; ?>	
<h1><?php the_title(); ?></h1>

<?php the_content(); ?>

<summary>Post Created: <?php echo get_the_date(); ?> by <?php the_author(); ?></summary>
<hr>

<!-- End of Blog Post -->