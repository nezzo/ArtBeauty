<?php
/*
Template Name: Шаблон страницы "Видео"
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
      <div class="section-title line"><span><?= the_title();?></span></div>
      <div class="videos">
        <div class="row">
           <?php
             // var_dump(carbon_get_theme_option( 'crb_video_template' ));
              $video = carbon_get_the_post_meta( 'crb_video_template' );

              for($i=0; $i<count($video); $i++){

                if(!empty($video[$i]['name'])){
                ?>
                   <div class="col-md-4 col-sm-6">
                  <div class="video">
                 <iframe width="560" height="315" src="<?=!empty($video[$i]['url']) ? $video[$i]['url']: '#' ?>" frameborder="0" allowfullscreen></iframe> 
 
                 <p>"<?=$video[$i]['name']?></p>
                       </div>
                </div>

               <?php
                }

              }
           
            ?>
 
            
          
        </div>
      </div>
    </div>
  </section>
 <?php get_footer();?>