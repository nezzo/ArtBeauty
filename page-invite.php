  <?php
/*
Template Name: Шаблон страницы "ПРИГЛАШАЕМ МОДЕЛЕЙ"
*/
?> 
 <?php get_header();?>
 <section class="breadcrumbs">
    <div class="container">
       <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
    </div>
</section>
 <section id="page" class="invite">
    <div class="container">
      <div class="section-title line"><span>Приглашаем моделей</span></div>
      <div class="invite-block">
        <div class="inner">
          <div class="row">
            <div class="col-md-6">
              <div class="image">
                <img src="<?php bloginfo('template_url') ?>/img/invite-img.jpg" alt="">
                <div class="title">Оставьте заявку на <span>желаемую процедуру</span></div>
                <a href="#" class="btn" data-toggle="modal" data-target="#models">оставить заявку</a>
              </div>
            </div>
            <div class="col-md-6">
              <div class="right">
                <div class="title">Профессиональный учебный центр, которому требуются модели для практической отработки.</div>
                <div class="text">
                  <p>Все процедуры абсолютно бесплатные и атравматичные.</p>
                  <p>Оставьте заявку на желаемую процедуру и менеджер с Вами свяжется или перезвоните по тел: <br><a href="tel:84951110045">8 495 111 00 45</a>
                    <a href="#"><img src="<?php bloginfo('template_url') ?>/img/call.png" alt=""> 8 903 796 76 07</a>
                  </p>
                </div>
                <div class="title">ВНИМАНИЕ!</div>
                <div class="text">
                  <p>Наш учебно-методический центр проводит обучение на постоянной основе с ведущими технологами!</p>
                </div>
                <div class="text">
                  <p>Весь процесс проходит под контролем тренера-профессионала, который по окончанию обучения исправляет все недочеты и вы уходите с идеальными ресницами или бровями!</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <footer>
    <div class="container">
      <div class="top">
        <div class="row">
          <div class="col-md-3 col-sm-4">
            <div class="list">
              <div class="title">О нас</div>
              <ul>
                <li><a href="sotrudnichestvo.html">Сотрудничество</a></li>
                <li><a href="vacansiya.html">Вакансии</a></li>
                <li><a href="pressa.html">Пресса</a></li>
                <li><a href="foto.html">Фотогалерея</a></li>
                <li><a href="video.html">Видео</a></li>
                <li><a href="contacts.html">Контакты</a></li>
              </ul>
            </div>
            <div class="list">
              <div class="title">Услуги</div>
              <ul>
                <li><a href="service.html">Кабинет маникюра</a></li>
                <li><a href="service.html">Кабинет lashmaker</a></li>
                <li><a href="service.html">Кабинет косметолога</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="list">
              <div class="title">Обучение</div>
              <ul>
                <li><a href="study.html">Программы и цены</a></li>
                <li><a href="#">Расписание</a></li>
                <li><a href="reviews.html">Отзывы</a></li>
                <li><a href="invite.html">Приглашаем моделей</a></li>
                <li><a href="distance.html">Дистанционное обучение</a></li>
                <li><a href="#">Запись на обучение</a></li>
                <li><a href="#">Комплексные программы</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="list">
              <div class="title">Продукция</div>
              <ul>
                <li><a href="production.html">Mavex</a></li>
                <li><a href="nouveau.html">Noveau lashes</a></li>
                <li><a href="magazin.html">Магазин</a></li>
                <li><a href="deliver.html">Доставка и оплата</a></li>
                <li><a href="garantiya.html">Гарантия</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-12">
            <div class="title">Контактная информация</div>
            <div class="footer-contact">
              <address>
                <p><img src="img/map.png" alt="">Москва, ул. Свободы, дом 99 корп. 1</p>
                <p><a href="tel:84951110045">8-495-111-00-45</a></p>
                <p><img src="img/call.png" alt=""><a href="tel:89037967607">8-903-796-76-07</a></p>
              </address>
              <div class="social">
                <a href="#" class="social-toggle btn" data-toggle="modal" data-target="#social"><i class="icon-social"></i> мы в соц.сети</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="bottom">
        <div class="pull-left">
          <div class="copy">Art et Beaute ©2017</div>
        </div>
        <div class="pull-right">
          <div class="created">Создание сайта - <a href="http://webpult.pro" target="_blank">“ВебПульт”</a> <span>/</span> Продвижение сайта - <a href="#" target="_blank">РА "Профит"</a></div>
        </div>
      </div>
    </div>
  </footer>

  <div class="modal fade" id="models" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <section class="modal-container">
        <div class="inner">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
          <div class="title">ВАША ЗАЯВКА НА УЧАСТИЕ</div>
          <p class="text-center">Чтобы стать моделью, отправьте нам информацию о себе</p>
          <form>
            <div class="form-group">
              <input type="name" class="form-control">
              <label class="control-label">Имя</label>
            </div>
            <div class="form-group">
              <input type="tel" class="form-control">
              <label class="control-label">Телефон</label>
            </div>
            <div class="form-group">
              <input type="email" class="form-control">
              <label class="control-label">E-mail</label>
            </div>
            <div class="form-group">
              <label>Вас интересует:</label>
              <div class="row">
                <div class="col-sm-4">
                  <div class="checkbox">
                    <label for="look">
                      <input type="checkbox" name="interested" id="look">
                      Моделирование взгляда
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="checkbox">
                    <label for="body">
                      <input type="checkbox" name="interested" id="body">
                      Эстетика тела
                    </label>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="checkbox">
                    <label for="nail">
                      <input type="checkbox" name="interested" id="nail">
                      Ногтевой сервис
                    </label>
                  </div>
                </div>
              </div>
            </div>
            <div class="btn-line">
              <button type="submit" class="btn">отправить</button>
            </div>
          </form>
        </div>
      </section>
  </div>
</div>
 <?php get_footer();?>