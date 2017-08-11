<!DOCTYPE html>
<!--[if IE 7 ]>    <html lang="ru" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="ru" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="ru" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html lang="ru" class="no-js">
<!--<![endif]-->

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="description" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title><?php bloginfo('name');?></title>

  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri() ?>/img/favicon/favicon.ico" type="image/x-icon">
  <link rel="apple-touch-icon" href="<?php bloginfo('template_url') ?>/img/favicon/apple-touch-icon.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php bloginfo('template_url') ?>/img/favicon/apple-touch-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php bloginfo('template_url') ?>/img/favicon/apple-touch-icon-114x114.png">

  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/libs/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/libs/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/libs/fancybox/jquery.fancybox.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/libs/formstyler/jquery.formstyler.css">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/fonts.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri() ?>/css/media.css">
  
  <?php wp_head();?>
</head>



<body>

  <header>
    <div class="container">
      <a href="<?php echo home_url();?>" class="logo"><img src="<?php bloginfo('template_url') ?>/img/logo.png" alt=""></a>
      <nav>
        <a href="#" class="menu-toggle"><span class="bar"></span></a>
        <?php wp_nav_menu(array('theme_location'=>'menuHeader', 'menu_id'=>'menu', 'walker' => new WP_Bootstrap_Navwalker() ));?>


        <!--<ul id="menu">
          <li><a href="about.html"><i class="icon-home"></i> О нас</a>
            <ul class="dropdown">
              <li><a href="filosofiya.html">Философия</a></li>
              <li><a href="sotrudnichestvo.html">Сотрудничество</a></li>
              <li><a href="pressa.html">Пресса</a></li>
              <li><a href="foto.html">Фотогаллерея</a></li>
            </ul>
          </li>
          <li><a href="services.html"><i class="icon-services"></i> Услуги</a></li>
          <li>
            <a href="magazin.html"><i class="icon-production"></i> Продукция</a>
            <ul class="dropdown">
              <li><a href="#">MAVEX</a></li>
              <li><a href="#">NOUVEAU LVL</a></li>
              <li><a href="#">NOUVEAU SVS</a></li>
              <li><a href="#">NOUVEAU EXPRESS</a></li>
              <li><a href="#">NOUVEAU EXTEND</a></li>
              <li><a href="#">МАГАЗИН</a></li>
            </ul>
          </li>
          <li><a href="study.html"><i class="icon-study"></i> Обучение</a>
            <div class="dropdown mega">
              <div class="row">
                <div class="col-sm-4">
                  <div class="title">ДЛЯ НАЧИНАЮЩИХ</div>
                  <ul>
                    <li><a href="#">Brow-стилист</a></li>
                    <li><a href="#">Ламинирование ресниц и бровей</a></li>
                    <li><a href="#">Наращивание ресниц. Базовый уровень</a></li>
                  </ul>
                  <div class="title">ПОВЫШЕНИЯ КВАЛИФИКАЦИИ</div>
                  <ul>
                    <li><a href="#">BOTOX для ресниц и бровей</a></li>
                    <li><a href="#">Повышение квалификации ламинирования ресниц и бровей Yumi Lashes&Brows</a></li>
                    <li><a href="#">Объемное наращивание ресниц 2D, 3D</a></li>
                  </ul>
                  <div class="title">ПЕРМАНЕНТНЫЙ МАКИЯЖ</div>
                  <ul>
                    <li><a href="#">МИКРОБЛЕЙДИНГ И МИКРОШЕЙДИНГ (волосковая и теневая техника микропигментирования бровей)</a></li>
                    <li><a href="#">МИКРОШЕЙДИНГ (теневая техника Light Tap)</a></li>
                    <li><a href="#">МИКРОШЕЙДИНГ ВЕК и ГУБ</a></li>
                  </ul>
                  <div class="title">MAKE-UP</div>
                  <ul>
                    <li><a href="#">Сам себе визажист</a></li>
                    <li><a href="#">Базовый курс макияжа</a></li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <div class="title">МАНИКЮР И ПЕДИКЮР</div>
                  <ul>
                    <li><a href="#">Мастер маникюра</a></li>
                    <li><a href="#">Мастер маникюра и педикюра</a></li>
                    <li><a href="#">SPA уходы и Calluspeeling</a></li>
                    <li><a href="#">Аппаратные технологии в маникюре и педикюре</a></li>
                    <li><a href="#">Ламинирование ногтей - YumiNails</a></li>
                  </ul>
                  <div class="title">ЭСТЕТИКА ТЕЛА</div>
                  <ul>
                    <li><a href="#">Депиляция и Шугаринг</a></li>
                    <li><a href="#">Депиляция</a></li>
                    <li><a href="#">Шугаринг</a></li>
                    <li><a href="#">БОНУС! «Тридинг (депиляция нитью)»</a></li>
                  </ul>
                  <div class="title">ОБЩАЯ ИНФОРМАЦИЯ</div>
                  <ul>
                    <li><a href="#">Программы и цены</a></li>
                    <li><a href="#">Расписание</a></li>
                    <li><a href="#">Отзывы</a></li>
                    <li><a href="#">Приглашаем моделей</a></li>
                    <li><a href="#">Дистанционное обучение</a></li>
                    <li><a href="#">Запись на обучение</a></li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <div class="curve-block">
                    <a href="#" class="img"><img src="<?php bloginfo('template_url') ?>/img/menu-img.jpg" alt="" class="img-responsive"></a>
                    <a href="#" class="text">КУРСЫ <span>"LASHMAKER"</span></a>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li><a href="news.html"><i class="icon-news"></i> Новости и новинки</a></li>
          <li><a href="contacts.html"><i class="icon-phone"></i> Контакты </a></li>
        </ul>!-->
      </nav>
      <a href="#" class="social-toggle"><span><i class="icon-social"></i> мы в соц.сети</span></a>
      <div class="social-block">
        <div class="row">
          <div class="col-sm-4">
            <div class="title"><i class="icon-vk"></i>в контакте</div>
            <div class="link"><a href="https://vk.com/yumilashes">vk.com/yumilashes</a></div>
            <div class="link"><a href="https://vk.com/id199650054">vk.com/id199650054</a></div>
            <div class="link"><a href="https://vk.com/lvlofficial">vk.com/lvlofficial</a></div>
            <div class="link"><a href="https://vk.com/mavex">vk.com/mavex</a></div>
          </div>
          <div class="col-sm-4 long">
            <div class="title"><i class="icon-fb"></i>фейсбук</div>
            <div class="link"><a href="https://facebook.com/kursykrasoty/">www.facebook.com/kursykrasoty/</a></div>
            <div class="link"><a href="https://facebook.com/mavexrussia/">www.facebook.com/mavexrussia/</a></div>
          </div>
          <div class="col-sm-4">
            <div class="title"><i class="icon-instagram"></i>инстаграм</div>
            <div class="link"><a href="https://www.instagram.com/lvl_lashes_official">lvl_lashes_official</a></div>
            <div class="link"><a href="https://www.instagram.com/artetbeaute_official">artetbeaute_official</a></div>
            <div class="link"><a href="https://www.instagram.com/mavex_russia">mavex_russia</a></div>
          </div>
        </div>
      </div>
    </div>
  </header>
  
