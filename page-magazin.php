<?php
/*
Template Name: Шаблон страницы "МАГАЗИН"
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
      <div class="section-title line"><span>Шоу-рум</span></div>
      <div class="row">
        <div class="col-md-4">
          <div class="shop">
            <div class="inner">
              <div class="img"><img src="<?php bloginfo('template_url') ?>/img/nouveau-logo4.png" alt=""></div>
              <a href="production.html" class="overlay"><img src="<?php bloginfo('template_url') ?>/img/shop-img1.jpg" alt=""><span class="name">продукция MAVEX для лица, рук и ног</span></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="shop">
            <div class="inner">
              <div class="img"><img src="<?php bloginfo('template_url') ?>/img/nouveau-logo1.png" alt=""></div>
              <a href="production.html" class="overlay"><img src="<?php bloginfo('template_url') ?>/img/shop-img2.jpg" alt=""><span class="name">продукция для ламинирования ресниц</span></a>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="shop">
            <div class="inner">
              <div class="img">
                <div class="owl-carousel owl-img">
                  <div class="item"><img src="<?php bloginfo('template_url') ?>/img/nouveau-logo2.png" alt="" class="img-responsive"></div>
                  <div class="item"><img src="<?php bloginfo('template_url') ?>/img/extend-logo.png" alt="" class="img-responsive"></div>
                  <div class="item"><img src="<?php bloginfo('template_url') ?>/img/express-logo.png" alt="" class="img-responsive"></div>
                </div>
              </div>
              <a href="production.html" class="overlay"><img src="<?php bloginfo('template_url') ?>/img/shop-img3.jpg" alt=""><span class="name">продукция для наращивания ресниц</span></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
 <?php get_footer();?>
