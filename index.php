 <?php
/*
Template Name: Шаблон страницы "Главная"
*/
?>
 <?php get_header();?>
  <section id="banner">
    <div class="owl-banner owl-carousel">
      <?php
       // var_dump(carbon_get_theme_option( 'crb_media_item_slide_index' ));
        $image = carbon_get_theme_option( 'crb_media_item_slide_index' );

        for($i=0; $i<count($image); $i++){

          if(!empty($image[$i]['image'])){
          ?>
              <div class='item'>
              <a href="<?= !empty($image[$i]['url']) ? $image[$i]['url']: '#' ?>"><img src='<?=$image[$i]['image']?>' alt=''></a>
            </div>

         <?php
          }

        }
     
      ?>
    </div>
  <div class="clearfix"></div>
</section>
 

  <section id="home-about">
    <div class="container">
      <div class="info">
        <div class="inner">
          <div class="row">
            <div class="col-md-4 col-sm-5 col-xs-6">
              <div class="img-block">
                <img src="<?php bloginfo('template_url') ?>/img/home-img1.jpg" alt="" class="img-responsive">
                <div class="title">
                  <h2>Институт красоты <small>Арт эт Ботэ</small></h2>
                  <a href="about.html" class="btn">подробнее</a>
                </div>
              </div>
            </div>
            <div class="col-md-8">
              <div class="text">
                <p>Институт красоты Арт эт Ботэ основан в 2010 году. На сегодняшний день центр выпустил более 5000 профессиональных мастеров в области индустрии красоты. Наши выпускники работают в престижных СПА-центрах и Салонах Красоты в России, Казахстане, Белоруссии, Украине, Кипре, США, Чехии, Словении, Хорватии, Австрии, Италии, Испании, Турции, а также в странах Латинской Америки.</p>
                <p>Философией Института является поиск мировых бьюти-новинок и эксклюзивных техник в области красоты и здоровья. Так в 2013 году наша компания «взорвала» мировую LASH-индустрию выходом в свет новой технологии «Ламинирование ресниц», а в 2014 году – «Ламинирование бровей».</p>
                <p>В этом году мастера ногтевого сервиса и специалисты-подологи по достоинству оценили поистине новое имя в педикюре «Calluspeeling».</p>
                <p>А для лешмейкеров у нас особое событие - презентация инновационных средств для технологии "ламинирование ресниц".</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="home-block">
    <div class="container">
      <div class="section-title line"><span>ОБРАЗОВАНИЕ</span></div>
      <div class="row">
        <div class="col-md-3 col-sm-6">
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
            <div class="name">ОПЫТ</div>
            <div class="text">Более 7 лет в области образования</div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-block">
            <div class="hex">
              <span></span>
              <div class="hexagon">
                <figure class="hexagon-inset front">
                  <div class="hexagon-content">
                    <i class="icon-prestige"></i>
                  </div>
                </figure>
                <figure class="hexagon-inset back">
                  <div class="hexagon-content">
                    <i class="icon-prestige"></i>
                  </div>
                </figure>
              </div>
            </div>
            <div class="name">ПРЕСТИЖНО</div>
            <div class="text">Лучший образовательный центр 2015 года</div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-block">
            <div class="hex">
              <span></span>
              <div class="hexagon">
                <figure class="hexagon-inset front">
                  <div class="hexagon-content">
                    <i class="icon-guarantee"></i>
                  </div>
                </figure>
                <figure class="hexagon-inset back">
                  <div class="hexagon-content">
                    <i class="icon-guarantee"></i>
                  </div>
                </figure>
              </div>
            </div>
            <div class="name">ГАРАНТИРОВАНО</div>
            <div class="text">Трудоустройство</div>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="service-block">
            <div class="hex">
              <span></span>
              <div class="hexagon">
                <figure class="hexagon-inset front">
                  <div class="hexagon-content">
                    <i class="icon-requirement"></i>
                  </div>
                </figure>
                <figure class="hexagon-inset back">
                  <div class="hexagon-content">
                    <i class="icon-requirement"></i>
                  </div>
                </figure>
              </div>
            </div>
            <div class="name">ВОСТРЕБОВАННО</div>
            <div class="text">Самые современные и инновационные программы</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="home-block">
    <div class="container">
      <div class="section-title line"><span>ПРОДУКЦИЯ</span></div>
      <div class="col-md-3 col-sm-6">
        <div class="service-block">
          <div class="hex">
            <span></span>
            <div class="hexagon">
              <figure class="hexagon-inset front">
                <div class="hexagon-content">
                  <i class="icon-quality"></i>
                </div>
              </figure>
              <figure class="hexagon-inset back">
                <div class="hexagon-content">
                  <i class="icon-quality"></i>
                </div>
              </figure>
            </div>
          </div>
          <div class="name">КАЧЕСТВО</div>
          <div class="text">Вся продукция сертифицирована</div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="service-block">
          <div class="hex">
            <span></span>
            <div class="hexagon">
              <figure class="hexagon-inset front">
                <div class="hexagon-content">
                  <i class="icon-exclusive"></i>
                </div>
              </figure>
              <figure class="hexagon-inset back">
                <div class="hexagon-content">
                  <i class="icon-exclusive"></i>
                </div>
              </figure>
            </div>
          </div>
          <div class="name">ЭКСКЛЮЗИВНО</div>
          <div class="text">Эксклюзивная представленность в ведущих СПА отелях мира</div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="service-block">
          <div class="hex">
            <span></span>
            <div class="hexagon">
              <figure class="hexagon-inset front">
                <div class="hexagon-content">
                  <i class="icon-popular"></i>
                </div>
              </figure>
              <figure class="hexagon-inset back">
                <div class="hexagon-content">
                  <i class="icon-popular"></i>
                </div>
              </figure>
            </div>
          </div>
          <div class="name">ПОПУЛЯРНОСТЬ</div>
          <div class="text">Пресса, блогеры и ТВ-эксперты рекомендуют нас</div>
        </div>
      </div>
      <div class="col-md-3 col-sm-6">
        <div class="service-block">
          <div class="hex">
            <span></span>
            <div class="hexagon">
              <figure class="hexagon-inset front">
                <div class="hexagon-content">
                  <i class="icon-distribution"></i>
                </div>
              </figure>
              <figure class="hexagon-inset back">
                <div class="hexagon-content">
                  <i class="icon-distribution"></i>
                </div>
              </figure>
            </div>
          </div>
          <div class="name">ДИСТРИБЬЮТОРСКАЯ СЕТЬ</div>
          <div class="text">Насчитывает более 40 партнеров</div>
        </div>
      </div>
    </div>
  </section>

  <section class="home-block">
    <div class="container">
      <div class="section-title line"><span>УСЛУГИ</span></div>
      <div class="col-md-4 col-sm-4">
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
          <div class="text">Индивидуальный подход к каждому клиенту</div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
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
          <div class="text">Процедуры от международных преподавателей</div>
        </div>
      </div>
      <div class="col-md-4 col-sm-4">
        <div class="service-block">
          <div class="hex">
            <span></span>
            <div class="hexagon">
              <figure class="hexagon-inset front">
                <div class="hexagon-content">
                  <i class="icon-price"></i>
                </div>
              </figure>
              <figure class="hexagon-inset back">
                <div class="hexagon-content">
                  <i class="icon-price"></i>
                </div>
              </figure>
            </div>
          </div>
          <div class="text">Антикризисные цены Высокий уровень сервиса и качества услуг</div>
        </div>
      </div>
    </div>
  </section>

  <section class="call-block">
    <div class="container">
      <div class="inner">
        <div class="row">
          <div class="col-md-6">
            <div class="text">
              <p>Индустрия красоты развивается бешенными темпами.</p>
              <p>Новые технологии, направления, продукты появляются практически каждый день во всем мире.</p>
              <p>Хотите идти в ногу со временем, быть всегда в тренде и круговороте самых горячих новинок?</p>
              <p>Команда Art et beaute приглашает Вас окунуться в мир красоты и современных технологий вместе с нами</p>
            </div>
          </div>
          <div class="col-md-6">
            <form>
              <div class="title">оставить заявку</div>
              <div class="form-group">
                <input type="name" class="form-control" placeholder="Ваше имя" required>
              </div>
              <div class="form-group">
                <input type="tel" class="form-control" placeholder="Телефон" required>
              </div>
              <button class="btn">оставить заявку</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="programms">
    <div class="container">
      <div class="section-title line">
        <span>ПОПУЛЯРНЫЕ ПРОГРАММЫ</span>
        <a href="<?=get_post(22)->post_name;?>" class="btn pull-right">все программы</a>
      </div>
      <div class="owl-programms owl-carousel">
          <?php
            //получаем ID страницы из мета пост
              function getIDPage(){
                global $wpdb;

                    $mas = array();
                    $mas_id = array();
                    $idPostmassiv = array();

                     
                      $getIDPageMassiv = $wpdb->get_results("SELECT post_id FROM $wpdb->postmeta WHERE meta_key = '_crb_popular_program_kurs'  ");
                   

                    
                    //удаляем из таблицы "Программы и курсы" страницу если ее нету в страницах вордпресса (при удалении 
                    //страницы нужно удалить ее из корзины)
                    for($i = 0; $i<count($getIDPageMassiv); $i++){
                      $mas[$i] = $getIDPageMassiv[$i]->post_id;

                        if(!empty($mas[$i])){
                          $mas_id[$i] = $wpdb->get_results("SELECT ID FROM $wpdb->posts WHERE ID = $mas[$i] ");

                       $idPostmassiv[$i] = $mas_id[$i][0]->ID;
                        }

                      
                    }

                   return $idPostmassiv;

                  }

                 $id = getIDPage();

 
              for($s = 0; $s<count($id); $s++){

                //если добавлено в популярные программы то выводим в слайдер
                $get_postID = get_post_meta($id[$s],'_crb_popular_program_kurs');

                if(!empty($get_postID[0])){
                      $get_postID = $get_postID[0];
                }else{
                  $get_postID = "";
                }

                //получаем стоимость курса
                $get_postPRICE = get_post_meta($id[$s],'_crb_price_new_kurs');

                if(!empty($get_postPRICE[0])){
                      $get_postPRICE = $get_postPRICE[0];
                }else{
                  $get_postPRICE = 0;
                }

                //получаем каринку курса
                $get_postIMAGE = get_post_meta($id[$s],'_crb_image_kurs');

                if(!empty($get_postIMAGE[0])){
                      $get_postIMAGE = $get_postIMAGE[0];
                }else{
                  $get_postIMAGE = "";
                }
                  
                //проверяем вкл ли популярные программы в курсе
                 if(!empty($get_postID)){
                     
                     ?>
                    <div class="item">
                    <div class="programm">
                      <div class="inner">
                    <div class='name'><a href="<?=get_post($id[$s])->post_name;?>"><?=get_post($id[$s])->post_title;?></a></div>
                    <div class="price">СТОИМОСТЬ КУРСА — <span><?=$get_postPRICE;?></span></div>
                     <div class="img"><img src="<?=$get_postIMAGE;?>" alt=""></div>
                    <div class="social">
                      <a href="#"><i class="icon-vk"></i></a>
                      <a href="#"><i class="icon-fb"></i></a>
                    </div>
                    <a href="#" class="btn" data-toggle="modal" data-target="#subscribe" onclick="getTextModal('<?=get_post($id[$s])->post_title;?>')">записаться</a>
                    </div>
                </div>
              </div>
              <?php
             }
            }

            ?>
 
      </div>
    </div>
  </section>

  <section id="question">
    <div class="container">
      <div class="question-block">
        <div class="title">ВОЗНИКЛИ ВОПРОСЫ? НАШИ КОНСУЛЬТАНТЫ ПОМОГУТ </div>
        <a href="#" class="btn" data-toggle="modal" data-target="#ask">задать вопрос</a>
      </div>
    </div>
  </section>

  <section id="partners">
    <div class="container">
      <div class="section-title">партнеры</div>
      <div class="owl-carousel owl-partner">
        <?php
         $image = carbon_get_theme_option( 'crb_media_item_slide_index_partner' );

        for($i=0; $i<count($image); $i++){

          if(!empty($image[$i]['image'])){
          ?>
              <div class='item'>
              <a href="<?= !empty($image[$i]['url']) ? $image[$i]['url']: '#' ?>"><img src='<?=$image[$i]['image']?>' alt=''></a>
 			</div>

         <?php
          }

        }
     
      ?>
      </div>
    </div>
  </section>

<script>
//подставляем в форму данные
 function getTextModal(name){
 	jQuery( document ).ready(function (){
 		jQuery('#subscribe .nameType').val(name);
 });

 }
</script>

 <div class='modal fade' id='subscribe' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' style='display: none;'>
    <div class='modal-dialog'>
      <section class='modal-container'>
        <div class='inner'>
          <button type='button' class='close' data-dismiss='modal' aria-label='Close'><i class='icon-close'></i></button>
          <div class='title'>Записаться сейчас</div>
          <p class='text-center'>Пожалуйста заполните данную форму для записи на тренинг</p>
          <form enctype="multipart/form-data" action="#" method="post">
            <div class='form-group'>
              <input type='name' value="" class='form-control nameType' required>
             </div>
            <div class='form-group'>
              <input type='name' class='form-control name' required>
              <label class='control-label'>Ваше имя <span>*</span></label>
            </div>
            <div class='form-group'>
              <input type='tel' class='form-control tel' required>
              <label class='control-label'>Телефон <span>*</span></label>
            </div>
            <div class='form-group'>
              <input type='email' class='form-control email'>
              <label class='control-label'>E-mail</label>
            </div>
            <div class='form-group'>
              <input type='text' class='form-control comment'>
              <label class='control-label'>Ваш комментарий</label>
            </div>
            <div class='btn-line'>
              <button type='submit' class='btn  setMail'>записаться</button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>
 
  <?php get_footer();?>
