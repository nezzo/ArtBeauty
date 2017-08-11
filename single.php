 <?php get_header();?>
 <section class="breadcrumbs">
    <div class="container">
       <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
    </div>
</section>

  <section id="page">
    <div class="container">
    <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
      <div class="section-title line"><span><?php the_title();?></span></div>
      <div class="new">
        <div class="detail">
         <div class="date"><?php the_date("j F Y"); ?></div>
          <div class="divider"></div>
          <div class="social">
            <a href="#"><i class="icon-vk"></i></a>
            <a href="#"><i class="icon-fb"></i></a>
          </div>
        </div>
        <div class="content">
            <?php the_content();?>
        </div>

        <?php 
        $on = carbon_get_the_post_meta( 'crb_show_zayavka' ); 

        if(!empty($on)){
          ?>
            <a href="#" class="btn" data-toggle="modal" data-target="#zayavka">оставить заявку на конференцию</a>
          <div class="modal fade" id="zayavka" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
            <div class="modal-dialog">
              <section class="modal-container">
                <div class="inner">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
                  <div class="title">ВАША ЗАЯВКА НА УЧАСТИЕ</div>
                  <p class="text-center">Пожалуйста заполните данную форму для записи на конференцию</p>
                  <form>
                    <div class="form-group">
                      <input type="name" class="form-control" required>
                      <label class="control-label">Имя</label>
                    </div>
                    <div class="form-group">
                      <input type="tel" class="form-control" required>
                      <label class="control-label">Телефон</label>
                    </div>
                    <div class="form-group">
                      <input type="email" class="form-control">
                      <label class="control-label">E-mail</label>
                    </div>
                    <div class="form-group">
                      <input type="text" class="form-control">
                      <label class="control-label">Ваш комментарий</label>
                    </div>
                    <div class="btn-line">
                      <button type="submit" class="btn">отправить</button>
                    </div>
                  </form>
                </div>
              </section>
            </div>
          </div>
        <?php

                }

                ?>

      </div>
        <?php endwhile; ?>
        <?php endif; ?>

    </div>
  </section>
 <?php get_footer();?>