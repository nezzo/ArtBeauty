 <?php
/*
Template Name: Шаблон страницы "Новости и новинки"
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
      <div class="section-title line"><span><?php the_title(); ?></span></div>
 <?php
// запрос
$wpb_all_query = new WP_Query(array('post_type'=>'post', 'post_status'=>'publish', 'posts_per_page'=>-1)); ?>
 

<?php if ( $wpb_all_query->have_posts() ) : ?>
  <!-- the loop -->
  <?php while ( $wpb_all_query->have_posts() ) : $wpb_all_query->the_post(); ?>


 

    <div class="new-list-item">
            <div class="inner">
              <div class="top">
                <div class="img">
                  <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('medium'); ?></a>
                </div>
                <div class="date btn"><?php the_date("j F"); ?></div>
              </div>
              <div class="content">
                <a href="<?php the_permalink(); ?>" class="name"><?php the_title(); ?></a>
                <p>Уважаемые коллеги, партнеры, клиенты!</p>
                <div class="more">
                   <?php the_excerpt(); ?>
                </div>
              </div>
            </div>
          </div>



  <?php endwhile; ?>
  <!-- end of the loop -->
 
  <?php wp_reset_postdata(); ?>

<?php else : ?>
  <p><?php _e( 'Извините, нет записей, соответствуюших Вашему запросу.' ); ?></p>
<?php endif; ?>

<?php the_posts_pagination(); ?>

<!--
  <ul class="pagination">
        <li>
          <a href="#" aria-label="Previous">
            <span aria-hidden="true">&#10094;</span>
          </a>
        </li>
        <li class="active"><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li>
          <a href="#" aria-label="Next">
            <span aria-hidden="true">&#10095;</span>
          </a>
        </li>
      </ul>
 !-->
    
    </div>
  </section>
  <?php get_footer();?>