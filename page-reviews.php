  <?php
/*
Template Name: Шаблон страницы "Отзывы"
*/
?> 
 <?php get_header();?>
 <section class="breadcrumbs">
    <div class="container">
       <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
    </div>
</section>
  <section id="page">
    <div class="container">
    <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
      <div class="section-title line"><span><?php the_title(); ?></span></div>
      <div class="review">
        <div class="text">
           <?php the_content();?>
        </div>
      </div>
      <?php endwhile; ?>
    <?php endif; ?>
    </div>
  </section>

  <section id="review-block">
    <div class="container">
      <img src="<?php bloginfo('template_url') ?>/img/reviews.jpg" alt="" class="img-responsive">
      <!--	Здесь плагин для отзывы http://cackle.me/ -->
    </div>
  </section>
<?php get_footer();?>