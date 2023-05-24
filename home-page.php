<?php
/**
 * Template name: inicio Netflix
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package templatebase
 */


?>

<?php get_header(); ?>
<div class="container">
<div class="row" style="background-image: url('<?php echo wp_get_attachment_url(get_post_thumbnail_id ($post->ID));?>'); min-height: 100vh; background-position: center; background-size:cover;">
<div class="body-destacada">
<span class="h3-categoria text-white"><img src="assets/img/nnn.png">SERIES</span>
<h2 class="h2-titulo text-white col-sm-6"><?php echo get_the_title(); ?></h2>
<br>
<h3 class="h3-extracto text-white">
    <img src="/assets/img/top10a.png">
    <?php echo get_the_excerpt(); ?></h3>
<br>
<div class="destacada-descripcion col-sm-4 text-white"><?php the_content();?></div>
<br>
<div class="botones col-sm-9 mt-2 mb-3">
<a class="play btn btn-light col-sm-1" href="http://localhost/netflix/videos/destacada/" role="button"><i class="fa-sharp fa-solid fa-play"></i>   Play </a>
<a class="more-info btn btn-dark col-sm-2 ml-1" href="#" role="button"><i class="fa-solid fa-circle-info"></i> More  Info</a>
</div>
</div>


<div class="loop1 w-100 mt-5">
<h4 class="h4-inicio">East Asian TV Shows</h4>
    <div class="loop1-interior w-100">
	<?php include get_template_directory() . '/assets/modulos/modulo-videos/loop-videos-eastasian.php'?>
    </div>
    </div>

<div class="loop1 w-100">
<h4 class="h4-inicio mb-2">Continue Watching</h4>
<div class="loop1-interior">
<?php include get_template_directory() . '/assets/modulos/modulo-videos/loop-videos-continue.php'	?></div>
</div>

<div class="loop1">
<h4 class="h4-inicio mb-2">Feature for You Today</h4>
<div class="loop1-interior">
	<?php include get_template_directory() . '/assets/modulos/modulo-videos/loop-videos-feature.php'?></div></div>

<div class="loop1">
<h4 class="h4-inicio mb-2">Series</h4>
<div class="loop1-interior">
	<?php include get_template_directory() . '/assets/modulos/modulo-videos/loop-videos.php'?></div></div>

</div>
</div>


<div class="text-white">
 <i class="fa-brands fa-facebook-f" style="color: #ffffff;"></i>
 <i class="fa-brands fa-instagram" style="color: #ffffff;"></i>
 <i class="fa-brands fa-twitter" style="color: #ffffff;"></i>
 <i class="fa-brands fa-youtube" style="color: #ffffff;"></i>

	<div class="container futer-c">
         <div class="row futer-r">

         <div class="futer5 col"> 
        <?php if (is_active_sidebar('footer_1')) :
        dynamic_sidebar('footer_1'); endif; ?>
        </div>
       
        <div class="futer5 col"> 
        <?php if (is_active_sidebar('footer_2')) :
        dynamic_sidebar('footer_2'); endif; ?>
        </div>
      
        <div class="futer5 col"> 
        <?php if (is_active_sidebar('footer_3')) :
        dynamic_sidebar('footer_3'); endif; ?>
        </div>

        <div class="futer5 col"> 
		<?php if (is_active_sidebar('footer_4')) :
        dynamic_sidebar('footer_4'); endif; ?>
        </div>
            
         </div>
      </div>     
      <button type="button" class="btn btn-dark">Service Code</button>
</div>

<?php

get_footer();
