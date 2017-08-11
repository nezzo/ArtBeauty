 <?php
/*
Template Name: Шаблон страницы "ДИСТАНЦИОННОЕ ОБУЧЕНИЕ"
*/
?>
 <?php get_header();?>
 <section class="breadcrumbs">
    <div class="container">
       <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
    </div>
</section>

  <section id="page" class="study">
    <div class="container">
      <div class="section-title line"><span><?php the_title(); ?></span></div>
     </div>  


     <?php
     global $wpdb;
      
                     //получаем все страницы
                      //получаем все посты  где вкл. дист. обучение
                      $masCatId = array();
                      $getIDPageMassiv = $wpdb->get_results("SELECT post_id FROM $wpdb->postmeta WHERE meta_key = '_crb_distant_study_kurs' AND  meta_value = 'yes'");

                      for($i = 0; $i<count($getIDPageMassiv); $i++){
                        $masCatId[$i] = $getIDPageMassiv[$i]->post_id;
 
                      }


                      //получаем массив рубрик в которых вкл. дист. обучение
                      $massDetaID = array();
                      for($s = 0; $s<count($masCatId); $s++){
                         //$massDetaID[$s] = $masCatId[$s]; 

                        $getIDPageMassivSS = $wpdb->get_results("SELECT meta_value FROM $wpdb->postmeta WHERE meta_key = '_crb_select_cat_kurs' AND  post_id = $masCatId[$s] ");

                        $massDetaID[$s] = $getIDPageMassivSS[0]->meta_value;
                      }
                      

                      
                //убераем повторение в элементе массива
                $massCleanCat =  array_unique($massDetaID);


                //по id  рубрики получаем id  поста
                function getIDPostCat($id){

                  global $wpdb;
                      
                      //получаем все посты по ид рубрики
                      $masCatId = array();
                      $getIDPageMassiv = $wpdb->get_results("SELECT post_id FROM $wpdb->postmeta WHERE meta_key = '_crb_select_cat_kurs' AND  meta_value = $id ");

                      for($i = 0; $i<count($getIDPageMassiv); $i++){
                        $masCatId[$i] = $getIDPageMassiv[$i]->post_id;
 
                      }

                      return $masCatId;

                }
                 
                 foreach($massCleanCat as $CatMass){
                  $masIDpost = getIDPostCat($CatMass);
 
                ?>
    
                 <div class="distance-block">
                <div class="container">

                  <h2><?=get_cat_name($CatMass);?></h2>
                  <div class="owl-programms owl-carousel">

                    <?php foreach ($masIDpost as $postID){

                      // делаем проверку, что бы в слайдер попадали только вкл. дист. обучение
                      if(!empty(get_post_meta($postID, '_crb_distant_study_kurs')[0])){

                        ?>  
                    <div class="item">
                      <div class="programm">
                        <div class="inner">
                          <div class="name"><?=get_post($postID)->post_title?></div>
                          <div class="price">СТОИМОСТЬ КУРСА — <span><?php echo get_post_meta($postID, '_crb_price_new_kurs')[0];?></span></div>
                          <div class="img">
                            <img src="
                            <?php
                             if(!empty(get_post_meta($postID, '_crb_image_kurs')[0])){
                              echo get_post_meta($postID, '_crb_image_kurs')[0];
                            }

                              ?>" alt="">
 
                           <?php
                           if(!empty(get_post_meta($postID, '_crb_prisent_kurs')[0])){
 
                            switch (get_post_meta($postID, '_crb_prisent_kurs')[0]){
                              case "new":
                               echo "<div class='new btn'>«NEW»</div>";
                              break;

                              case "prisent":
                               echo "<div class='new btn'>подарок</div>";
                              break;
                            }

                            }
                            ?>
                            <div class="overlay">
                              <a href="<?=get_post($postID)->post_name?>" class="btn">ПРОГРАММА КУРСА</a>
                            </div>
                          </div>
                          <div class="social">
                            <a href="#"><i class="icon-vk"></i></a>
                            <a href="#"><i class="icon-fb"></i></a>
                          </div>
                          <a href="#" class="btn" data-toggle="modal" data-target="#subscribe">записаться</a>
                        </div>
                      </div>
                    </div>
                    <?php
                    }
                      }
                    ?>

                  </div>
                </div>
              </div>
          <?php
             }
          ?>


</section>
 <?php get_footer();?>