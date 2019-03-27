<?php if ( get_header_image() ) : ?>
	<div id="site-header">
		<img src="<?php header_image(); ?>" class="img-fluid" width="<?php echo absint( get_custom_header()->width ); ?>" height="<?php echo absint( get_custom_header()->height ); ?>" alt="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>">
	</div>
<?php endif; ?>