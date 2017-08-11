 <footer>
    <div class="container">
      <div class="top">
        <div class="row">
          <div class="col-md-3 col-sm-4">
            <div class="list">
            <ul>
            <?php
                  //var_dump(carbon_get_theme_option( 'crb_media_item_slide_footer_menu' ));
                $mas_menu = carbon_get_theme_option( 'crb_media_item_slide_footer_menu' );

                for($i=0; $i<count($mas_menu); $i++){

                  if(!empty($mas_menu[$i]['_type'] == "menu1")){
                  ?>
                     <li><a href="<?=$mas_menu[$i]['url']?>"><?=$mas_menu[$i]['name']?></a></li>
                  <?php
                  }

                }
            ?>
            </ul>
              </div>
            <div class="list">
               <ul>
                <?php
                  //var_dump(carbon_get_theme_option( 'crb_media_item_slide_footer_menu' ));
                $mas_menu = carbon_get_theme_option( 'crb_media_item_slide_footer_menu' );

                for($i=0; $i<count($mas_menu); $i++){

                  if(!empty($mas_menu[$i]['_type'] == "menu2")){
                  ?>
                     <li><a href="<?=$mas_menu[$i]['url']?>"><?=$mas_menu[$i]['name']?></a></li>
                  <?php
                  }

                }
            ?>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="list">
               <ul>
                <?php
                  //var_dump(carbon_get_theme_option( 'crb_media_item_slide_footer_menu' ));
                $mas_menu = carbon_get_theme_option( 'crb_media_item_slide_footer_menu' );

                for($i=0; $i<count($mas_menu); $i++){

                  if(!empty($mas_menu[$i]['_type'] == "menu3")){
                  ?>
                     <li><a href="<?=$mas_menu[$i]['url']?>"><?=$mas_menu[$i]['name']?></a></li>
                  <?php
                  }

                }
            ?>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">
            <div class="list">
               <ul>
                <?php
                  //var_dump(carbon_get_theme_option( 'crb_media_item_slide_footer_menu' ));
                $mas_menu = carbon_get_theme_option( 'crb_media_item_slide_footer_menu' );

                for($i=0; $i<count($mas_menu); $i++){

                  if(!empty($mas_menu[$i]['_type'] == "menu4")){
                  ?>
                     <li><a href="<?=$mas_menu[$i]['url']?>"><?=$mas_menu[$i]['name']?></a></li>
                  <?php
                  }

                }
            ?>
              </ul>
            </div>
          </div>
          <div class="col-md-3 col-sm-12">
            <div class="title">Контактная информация</div>
            <div class="footer-contact">
              <address>
              <?php #TODO надо будет указать ид страницы КОНТАКТЫ, что бы заработала ссылка правильно?>
                <a href="<?= get_page_link( 40 );?>"><p><img src="<?php bloginfo('template_url') ?>/img/map.png" alt="">Москва, ул. Свободы, дом 99 корп. 1</p></a>
                <p><a href="tel:84951110045">8-495-111-00-45</a></p>
                <p><img src="<?php bloginfo('template_url') ?>/img/call.png" alt=""><a href="tel:89037967607">8-903-796-76-07</a></p>
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
 
      </div>
    </div>
  </footer>
  <div class="modal fade" id="social" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <section class="modal-container">
        <div class="inner">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
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
      </section>
    </div>
  </div>

  <!--[if lt IE 9]>
		<script src="libs/html5shiv/html5shiv.min.js"></script>
		<script src="libs/respond/respond.min.js"></script>		
		<script src="js/libs/css3-mediaqueries.min.js"></script>
		<script type="text/javascript" src="js/libs/selectivizr.min.js"></script>
		<script src="js/libs/IE9.js"></script>
	<![endif]-->
  <!--[if lt IE 10]>
		<script type="text/javascript" src="js/libs/PIE.js"></script>
	<![endif]-->
 
  <?php wp_footer();?>
</body>

</html>