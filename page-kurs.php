 <?php
/*
Template Name: Шаблон страницы "Курс"
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
          
      <div class="section-title line"><span><?=the_title()?></span></div>
      <div class="kurs">
        <div class="content">
          <?php the_content();?>
        <?php endwhile; ?>
        <?php endif; ?>
        
        <div class="day">
             <?php while ( have_posts() ) : the_post(); ?>
             <?php echo carbon_get_the_post_meta( 'crb_block_programm_kurs' ); ?> 

             <!-- your usual WordPress Loop code here -->
             <?php endwhile; ?>
        </div>
            
          <div class="title">СТОИМОСТЬ КУРСА: <?php echo carbon_get_the_post_meta( 'crb_price_new_kurs' ); ?></div>
            <div class="btn-line">
                <?php
            if(!empty(carbon_get_the_post_meta( 'crb_distant_study_kurs' ))){
              ?>
                <div class="left-text">Можно обучаться дистанционно</div>
                <?php
                  }
              ?>

                <a href="#" class="btn" data-toggle="modal" data-target="#subscribe">записаться</a>
              </div>

              

           <div class="quote">
            <div class="inner"><?=carbon_get_the_post_meta( 'crb_prepod_kurs' )?></div>
          </div>


        </div>
      </div>
    </div>
  </section>
<?php get_footer();?>