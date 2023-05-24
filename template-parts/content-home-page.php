<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package templatebase
 */

?>
<?php echo get_the_title();?>

<!-- contenido -->

   <?php templatebase_post_thumbnail();?>
      
   <article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
        <p><?php echo get_the_excerpt();?></p>
        <h1><?php echo get_the_title();?></h1>
        
        <?php the_content();?>
    






        
    <!-- #post-<?php the_ID(); ?> --><?php get_footer();?> 








