 <?php
/*
Template Name: Шаблон страницы "LVL"
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
       <div class="nouveau">
        <div class="content">
         <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
             <?php echo the_content();?>
        <?php endwhile; ?>
        <?php endif; ?>
         </div>
      </div>
    </div>
  </section>

  <section class="nouveau-block1">
    <div class="container">
      <div class="call">
        <form>
          <div class="title">записаться на курс инновационного ламинирования ресниц</div>
          <div class="row">
            <div class="col-md-6">
              <div class="form-group">
                <input type="name" class="form-control" placeholder="Ваше имя">
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Телефон">
              </div>
              <div class="form-group">
                <input type="email" class="form-control" placeholder="E-mail">
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <textarea class="form-control" placeholder="Вопрос" rows="6"></textarea>
              </div>
            </div>
          </div>
          <div class="btn-line">
            <button class="btn">оставить заявку</button>
          </div>
        </form>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="img"><img src="<?php bloginfo('template_url') ?>/img/nouveau-img3.jpg" alt=""></div>
        </div>
        <div class="col-md-6">
          <h3>Как видим, обновленная упаковка несет в себе исключительно положительные изменения. Главное, к ним хорошо приспособиться.</h3>
          <p>Желаем вам исключительно положительных впечатлений от новой упаковки препаратов LVL!</p>
          <div class="btn-line mini">
            <div class="left-text">Приобрести возможно</div>
            <a href="#" class="btn">здесь</a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="nouveau-block2">
    <div class="container">
      <div class="section-title line"><span>ГДЕ ПРОЙТИ ОБУЧЕНИЕ НОВОЙ ТЕХНОЛОГИИ И ПРИОБРЕСТИ ПРЕПАРАТЫ LVL?</span></div>
      <p>Препараты коллагенирования ресниц можно приобрести только в официальных центрах Nouveau Beauty&Lashes, указанных на сайте в разделе <a href="contacts.html"> контакты</a></p>
      <p>Головной офис <strong>ПРЕДСТАВИТЕЛЯ</strong> расположен в Москве. </p>
      <p>Для всех переаттестованных студентов, имеющих британский диплом, предоставляется постоянная <strong>5%</strong> скидка на препараты.</p>
    </div>
  </section>

  <section class="call-block nouveau-block3">
    <div class="container">
      <div class="inner">
        <div class="row">
          <div class="col-md-6">
            <div class="text">
              <p><strong>ВНИМАНИЕ!</strong> <br> ТОЛЬКО 1 ИЮЛЯ <br> ПЕРЕАТТЕСТАЦИЯ МАСТЕРОВ ЛАМИНИРОВАНИЯ РЕСНИЦ LVL <br> MARRIOT AURORA HOTEL</p>
              <p><strong>В ПРОГРАММЕ:</strong><br> КОЛЛАГЕНИРОВАНИЕ РЕСНИЦ SVS DESIGN BROWS</p>
              <p><small>Организатор: Art et Beaute</small><small>Спикеры: Столяров, Бриджит</small></p>
            </div>
          </div>
          <div class="col-md-6">
            <form>
              <div class="title">ОСТАВИТЬ ЗАЯВКУ НА КОНФЕРЕНЦИЮ</div>
              <div class="form-group">
                <input type="name" class="form-control" placeholder="Ваше имя" required="">
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Телефон" required="">
              </div>
              <button class="btn">оставить заявку</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="nouveau-block4">
    <div class="container">
      <div class="section-title line"><span>СОТРУДНИЧЕСТВО</span></div>
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <form>
            <div class="checkbox">
              <label for="kollagen">
                <input type="checkbox" name="become" id="kollagen">
                Я ХОЧУ СТАТЬ ТРЕНЕРОМ КОЛЛАГЕНИРОВАНИЯ РЕСНИЦ
              </label>
            </div>
            <div class="checkbox">
              <label for="lashes">
                <input type="checkbox" name="become" id="lashes">
                Я ХОЧУ СТАТЬ ТРЕНЕРОМ NOUVEAU LASHES
              </label>
            </div>
            <div class="checkbox">
              <label for="britan">
                <input type="checkbox" name="become" id="britan">
                Я ХОЧУ ПРОЙТИ ПЕРЕАТТЕСАЦИЮ И ПОЛУИТЬ БРИТАНСКИЙ ДИПЛОМ
              </label>
            </div>
            <div class="title">оставить заявку</div>
            <div class="form-group">
              <input type="name" class="form-control" placeholder="Ваше имя">
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" placeholder="Телефон">
            </div>
            <div class="form-group">
              <input type="email" class="form-control" placeholder="E-mail">
            </div>
            <div class="form-group">
              <textarea class="form-control" placeholder="Вопрос" rows="6"></textarea>
            </div>
            <div class="btn-line">
              <button class="btn">оставить заявку</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <section class="nouveau-block5">
    <div class="container">
      <p><strong>Специалисты Nouveau Lashes понимают ценность ваших ресниц. Именно поэтому все наши технологи прошли обучение по самым высоким техническим стандартам. Это значит, что вы можете быть спокойны и уверены, что во время наших процедур ваши ресницы находятся в самых надежных руках. </strong></p>
      <div class="owl-carousel owl-partner">
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner1.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner2.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner3.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner4.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner5.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner6.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner7.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner8.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner9.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner10.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner11.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner12.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner13.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner14.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner15.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner16.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner17.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner18.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner19.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner20.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner21.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner22.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/nouveau-partner23.png" alt=""></a>
        </div>
      </div>
    </div>
  </section>
 <?php get_footer();?>