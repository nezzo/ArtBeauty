<?php
/*
Template Name: Шаблон страницы "О нас"
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
      <div class="section-title line"><span>Институт красоты Art et Beaute</span></div>
      <div class="about-content">
        <p><strong>Art et Beaute</strong> - это успешное сочетание инновационных технологий двух ведущих стран в области индустрии красоты — Швейцарии и Великобритании</p>
        <div class="row">
          <div class="col-md-6">
            <img src="<?php bloginfo('template_url') ?>/img/about-img1.jpg" alt="" class="img-responsive">
          </div>
          <div class="col-md-6">
            <div class="image">
              <div class="inner">
                <div class="row">
                  <div class="col-sm-5 left">
                    <img src="<?php bloginfo('template_url') ?>/img/about-img2.jpg" alt="" class="img-responsive">
                  </div>
                  <div class="col-sm-7">
                    <div class="owl-carousel owl-img">
                      <div class="item"><img src="<?php bloginfo('template_url') ?>/img/owl-img1.jpg" alt="" class="img-responsive"></div>
                      <div class="item"><img src="<?php bloginfo('template_url') ?>/img/owl-img2.jpg" alt="" class="img-responsive"></div>
                      <div class="item"><img src="<?php bloginfo('template_url') ?>/img/owl-img3.jpg" alt="" class="img-responsive"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-block1">
    <div class="container">
      <div class="section-title line"><span>В ЧИСЛЕ НАШИХ ПАРТНЕРОВ ТАКИЕ САЛОНЫ, КАК</span></div>
      <div class="owl-carousel owl-partner">
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/partner1.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/partner2.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/partner3.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/partner4.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/partner5.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/partner6.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/partner7.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/partner8.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/partner9.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/partner10.png" alt=""></a>
        </div>
        <div class="item">
          <a href="#"><img src="<?php bloginfo('template_url') ?>/img/partner11.png" alt=""></a>
        </div>
      </div>
    </div>
  </section>

  <section class="about-block2">
    <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="service-block">
            <div class="hex">
              <span></span>
              <div class="hexagon">
                <figure class="hexagon-inset front">
                  <div class="hexagon-content">
                    <i class="icon-experience"></i>
                  </div>
                </figure>
                <figure class="hexagon-inset back">
                  <div class="hexagon-content">
                    <i class="icon-experience"></i>
                  </div>
                </figure>
              </div>
            </div>
            <div class="text">Компания имеет свой собственный учебный центр по подготовке мастеров в сфере индустрии красоты. Наши выпускники работают в ведущих сетевых салонах.</div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="service-block">
            <div class="hex">
              <span></span>
              <div class="hexagon">
                <figure class="hexagon-inset front">
                  <div class="hexagon-content">
                    <i class="icon-team"></i>
                  </div>
                </figure>
                <figure class="hexagon-inset back">
                  <div class="hexagon-content">
                    <i class="icon-team"></i>
                  </div>
                </figure>
              </div>
            </div>
            <div class="text">Наша творческая и динамичная команда постоянно работает на пульсе времени, участвуя в международных выставках.</div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="service-block">
            <div class="hex">
              <span></span>
              <div class="hexagon">
                <figure class="hexagon-inset front">
                  <div class="hexagon-content">
                    <i class="icon-international"></i>
                  </div>
                </figure>
                <figure class="hexagon-inset back">
                  <div class="hexagon-content">
                    <i class="icon-international"></i>
                  </div>
                </figure>
              </div>
            </div>
            <div class="text">Благодаря лабораторным исследованиям и вниманию к деталям профессиональная косметическая продукция, разработанная в лабораториях Швейцарии опытными фармацевтами и химиками, является эталоном безопасности и качества.</div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="service-block">
            <div class="hex">
              <span></span>
              <div class="hexagon">
                <figure class="hexagon-inset front">
                  <div class="hexagon-content">
                    <i class="icon-individual"></i>
                  </div>
                </figure>
                <figure class="hexagon-inset back">
                  <div class="hexagon-content">
                    <i class="icon-individual"></i>
                  </div>
                </figure>
              </div>
            </div>
            <div class="text">Мы открыты к сотрудничеству с региональными клиентами. Мы готовы предложить Вам оптимальные условия совместной работы, которые бы учитывали наши общие коммерческие интересы. По всем вопросам с удовольствием ответим вам по телефонам, указанным на сайте, или через форму обратной связи на странице <a href="<?=get_post(54)->post_name;?>">"Бизнес с нами"</a></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="about-block3">
    <div class="container">
      <div class="text-center"><img src="<?php bloginfo('template_url') ?>/img/about-video.jpg" alt=""></div>
    </div>
  </section>

  <section class="about-block4">
    <div class="container">
      <div class="sertificates">
        <div class="row">
          <div class="col-md-6 col-md-pull-3">
            <div class="top">
              <img src="<?php bloginfo('template_url') ?>/img/about-logo.png" alt="">
              <div class="title">НАШИ НАГРАДЫ</div>
            </div>
            <div class="row">
              <div class="col-md-6 col-xs-6">
                <div class="sertificate">
                  <div class="img">
                    <img src="<?php bloginfo('template_url') ?>/img/sertificate-img2.jpg" alt="">
                    <a href="<?php bloginfo('template_url') ?>/img/sertificate2.jpg" class="fancybox" data-fancybox-group="sertificate">
                      <img src="<?php bloginfo('template_url') ?>/img/lupa.png" alt="">
                      <img src="<?php bloginfo('template_url') ?>/img/hexagon.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-md-6 col-xs-6">
                <div class="sertificate">
                  <div class="img">
                    <img src="<?php bloginfo('template_url') ?>/img/sertificate-img3.jpg" alt="">
                    <a href="<?php bloginfo('template_url') ?>/img/sertificate3.jpg" class="fancybox" data-fancybox-group="sertificate">
                      <img src="<?php bloginfo('template_url') ?>/img/lupa.png" alt="">
                      <img src="<?php bloginfo('template_url') ?>/img/hexagon.png" alt="">
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-md-push-3 col-xs-6">
            <div class="sertificate">
              <div class="img">
                <img src="<?php bloginfo('template_url') ?>/img/sertificate-img1.jpg" alt="">
                <a href="<?php bloginfo('template_url') ?>/img/sertificate1.jpg" class="fancybox" data-fancybox-group="sertificate">
                  <img src="<?php bloginfo('template_url') ?>/img/lupa.png" alt="">
                  <img src="<?php bloginfo('template_url') ?>/img/hexagon.png" alt="">
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-3 col-xs-6">
            <div class="sertificate">
              <div class="img">
                <img src="<?php bloginfo('template_url') ?>/img/sertificate-img4.jpg" alt="">
                <a href="<?php bloginfo('template_url') ?>/img/sertificate4.jpg" class="fancybox" data-fancybox-group="sertificate">
                  <img src="<?php bloginfo('template_url') ?>/img/lupa.png" alt="">
                  <img src="<?php bloginfo('template_url') ?>/img/hexagon.png" alt="">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="section-title line"><span>наши друзья</span></div>
      <div class="celebrity">
        <div class="pic">
          <img src="<?php bloginfo('template_url') ?>/img/celebriti-img1.jpg" alt="">
          <div class="overlay">
            <div class="name">ИРИНА АНТОНЕНКО</div>
            <div class="job">(мисс Россия, актриса)</div>
          </div>
        </div>
        <div class="pic">
          <img src="<?php bloginfo('template_url') ?>/img/celebriti-img2.jpg" alt="">
          <div class="overlay">
            <div class="name">ЕЛЕНА КНЯЗЕВА</div>
            <div class="job">актриса, певица</div>
          </div>
        </div>
        <div class="pic">
          <img src="<?php bloginfo('template_url') ?>/img/celebriti-img3.jpg" alt="">
          <div class="overlay">
            <div class="name">ОРНЕЛЛА МУТИ</div>
            <div class="job">(Итальянская киноактриса)</div>
          </div>
        </div>
        <div class="pic">
          <img src="<?php bloginfo('template_url') ?>/img/celebriti-img4.jpg" alt="">
          <div class="overlay">
            <div class="name">АНФИСА ЧЕХОВА</div>
            <div class="job">Телеведущая</div>
          </div>
        </div>
        <div class="pic">
          <img src="<?php bloginfo('template_url') ?>/img/celebriti-img5.jpg" alt="">
          <div class="overlay">
            <div class="name">АНЮТА РАЙ</div>
            <div class="job">Модель</div>
          </div>
        </div>
        <div class="pic">
          <img src="<?php bloginfo('template_url') ?>/img/celebriti-img6.jpg" alt="">
          <div class="overlay">
            <div class="name">КАРИНА ШЕРЕР</div>
            <div class="job">Блогер</div>
          </div>
        </div>
        <div class="pic">
          <img src="<?php bloginfo('template_url') ?>/img/celebriti-img7.jpg" alt="">
          <div class="overlay">
            <div class="name">БАР РАФАЭЛИ</div>
            <div class="job">(израильская топ-модель)</div>
          </div>
        </div>
        <div class="pic">
          <img src="<?php bloginfo('template_url') ?>/img/celebriti-img8.jpg" alt="">
          <div class="overlay">
            <div class="name">ЭВЕЛИНА БЛЕДАНС</div>
            <div class="job">Телеведущая, актриса</div>
          </div>
        </div>
        <div class="pic">
          <img src="<?php bloginfo('template_url') ?>/img/celebriti-img9.jpg" alt="">
          <div class="overlay">
            <div class="name">Екатерина Жемчужная</div>
            <div class="job">Народная артистка</div>
          </div>
        </div>
        <div class="pic">
          <img src="<?php bloginfo('template_url') ?>/img/celebriti-img10.jpg" alt="">
          <div class="overlay">
            <div class="name">MAROOMARU</div>
            <div class="job">Блогер</div>
          </div>
        </div>
        <div class="clearfix"></div>
      </div>
    </div>
  </section>
 <?php get_footer();?>