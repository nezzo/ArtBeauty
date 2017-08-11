<?php
/*
Template Name: Шаблон страницы "ПРОДУКЦИЯ"
*/
?>
 <?php get_header();?>
 <?php
#TODO по ид категории выводим все данные (заголовок страницы, товар)

 ?>
 <section id="page">
    <div class="container">
      <div class="section-title line"><span>Продукция MAVEX</span></div>
      <div class="production">
        <div class="row">
        <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); 
         //var_dump(the_content());
        ?>
           <!-- 
          здесь формирование вывода постов,
          где работают теги шаблона относящиеся к the loop, например, the_title()
          -->
        <?php endwhile; ?>
        <?php endif; ?>


          <div class="col-md-4 col-sm-6">
            <div class="product card">
              <div class="inner">
                <a href="kartochka.html" class="title">Активная углеродная сыворотка</a>
                <a href="kartochka.html" class="image"><img src="img/product-image1.jpg" alt=""></a>
                <div class="btn-line">
                  <div class="price left-text"><span>8100<small> руб.</small></span></div>
                  <a href="kartochka.html" class="btn">подробнее</a>
                </div>
              </div>
            </div>
          </div>


           
        </div>
      </div>
    </div>
  </section>
<?php get_footer();?>