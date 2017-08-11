  <?php
/*
Template Name: Шаблон страницы "Вакансия"
*/
?> 
 <?php get_header();?>
 <section class="breadcrumbs">
    <div class="container">
       <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
    </div>
</section>

  <section id="page" class="vacancy-page">
    <div class="container">
      <div class="section-title line"><span>ВАКАНСИИ</span></div>
      <div class="vacancies">
        <div class="item">
          <div class="title">требуется мастер ногтевого сервиса</div>
          <div class="text">
            <p>график работы 2/2</p>
            <p>с 10 до 21.00</p>
            <p>заработная плата - обсуждается на собеседовании</p>
          </div>
        </div>
        <div class="item">
          <div class="title">требуется мастер - тренер ногтевого сервиса</div>
          <div class="text">
            <p>график работы сменный</p>
            <p>заработная плата - обсуждается на собеседовании</p>
          </div>
        </div>
        <div class="item">
          <div class="title">требуется преподавать на базовый make - up курс</div>
          <div class="text">
            <p>график работы сменный</p>
            <p>заработная плата - обсуждается на собеседовании</p>
          </div>
        </div>
      </div>
    </div>
  </section>
<?php get_footer();?>