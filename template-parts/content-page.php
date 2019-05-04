<?php
/**
 * The template used for displaying page content in page.php
 *
 * @package sparkling-child
 */
?>

<?php
if ( is_page_template( 'page-fullwidth.php' ) ) {
	the_post_thumbnail(
		'sparkling-featured-fullwidth', array(
			'class' => 'single-featured',
		)
	);
} else {
	the_post_thumbnail(
		'sparkling-featured', array(
			'class' => 'single-featured',
		)
	);
}
?>

<div class="post-inner-content">
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <?php if ( !is_front_page() ) { ?>  
    <header class="entry-header page-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header><!-- .entry-header -->
    <?php } ?>
	
	<div class="entry-content">
		<?php
			the_content();
			wp_link_pages(
				array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'sparkling' ),
					'after'  => '</div>',
				)
			);
		?>

	<?php
	  // Checks if this is homepage to enable homepage widgets
	if ( is_front_page() ) :
		get_sidebar( 'home' );
	  endif;
	?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
</div>
