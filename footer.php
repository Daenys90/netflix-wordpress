<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package templatebase
 */

?>

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			© 1997-2023 Netflix, Inc.
			<!-- <a href="<?php echo esc_url( __( 'https://wordpress.org/', 'templatebase' ) ); ?>">
				<?php
				/* translators: %s: CMS name, i.e. WordPress. */
				printf( esc_html__( 'Proudly powered by %s', 'templatebase' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
				/* translators: 1: Theme name, 2: Theme author. */
				printf( esc_html__( 'Sitio: %1$s por %2$s.', 'base' ), 'copiado', '<a href="http://underscores.me/">Denisse Ojeda</a>' );
				?> -->
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div>

<?php wp_footer(); ?>

</body>
</html>
