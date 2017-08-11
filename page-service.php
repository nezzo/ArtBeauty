<?php
/*
Template Name: Шаблон страницы "Cтраницa процедур"
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
    <?php if ( have_posts() ) :  while ( have_posts() ) : the_post(); ?>
      <div class="section-title line"><span><?php the_title(); ?></span></div>
      <div class="service">
         <?php the_content(); ?>
        <?php endwhile; ?>
        <?php endif; ?>
        <div class="content">
        <div class="btn-line">
            <a href="#" class="btn" data-toggle="modal" data-target="#zapis">записаться</a>
          </div>
      </div>
 
      </div>
    </div>
  </section>
   <div class="modal fade" id="zapis" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <section class="modal-container">
        <div class="inner">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
          <div class="title">ЗАПИСАТЬСЯ НА ЛАМИНИРОВАНИЕ РЕСНИЦ YUMI LASHES</div>
          <p class="text-center">Пожалуйста заполните данную форму для записи на тренинг</p>
          <form>
            <div class="form-group">
              <select data-placeholder="Название процедуры *">
                <option selected disabled></option>
                <option>Мастер (стаж более 1 000 процедур)</option>
                <option>ТОП мастер (тренер)</option>
              </select>
              <label class="control-label">Название процедуры <span>*</span></label>
            </div>
            <div class="form-group">
              <input type="name" class="form-control" required>
              <label class="control-label">Ваше имя <span>*</span></label>
            </div>
            <div class="form-group">
              <input type="name" class="form-control" required>
              <label class="control-label">Желаемая дата</label>
            </div>
            <div class="form-group">
              <select data-placeholder="Желаемое время">
                <option selected disabled></option>
                <option>9:30</option>
                <option>10:00</option>
                <option>10:30</option>
                <option>11:00</option>
              </select>
              <label class="control-label">Желаемое время</label>
            </div>
            <div class="form-group">
              <input type="tel" class="form-control" required>
              <label class="control-label">Телефон <span>*</span></label>
            </div>
            <div class="form-group">
              <input type="email" class="form-control">
              <label class="control-label">E-mail</label>
            </div>
            <div class="form-group">
              <input type="text" class="form-control">
              <label class="control-label">Комментарий</label>
            </div>
            <div class="btn-line">
              <button type="submit" class="btn">записаться</button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>
<?php get_footer();?>
  
