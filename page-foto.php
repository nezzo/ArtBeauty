 <?php
/*
Template Name: Шаблон страницы "ФОТОГАЛЕРЕЯ"
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
      <div class="section-title line"><span><?=the_title();?></span></div>
      <div class="gallery">
        <div class="row">
          <?php
            $massImage = carbon_get_the_post_meta( 'crb_image_fotogallery' ); 

             for($i = 0; $i<count($massImage); $i++) {
              
            ?>

          <div class="col-md-3 col-sm-4 col-xs-6">
            <div class="foto">
              <div class="img">
                <div class="front"><img src="<?=$massImage[$i]["crb_image_fotogallery_image"]?>" width="260" height="260" alt=""></div>
                <div class="back">
                  <div class="name"><?=$massImage[$i]["crb_image_fotogallery_name"]?></div>
                  <a href="<?=$massImage[$i]["crb_image_fotogallery_image"]?>" class="btn fancybox" title="<?php echo  $i+1 ."/".count($massImage)?>"
                   data-fancybox-group="foto">все фото</a>
                </div>
              </div>
            </div>
          </div>
          <?php
            }
          ?>

        </div>
      </div>
    </div>
  </section>
<?php get_footer();?>