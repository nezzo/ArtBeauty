<?php
/*
Template Name: Шаблон страницы "Обучение"
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
      <div class="section-title line"><span>ПРОГРАММЫ И КУРСЫ</span></div>

        <?php
        global $wpdb;

        //получаем все посты и страницы
        $getAllPage = $wpdb->get_results("SELECT ID FROM $wpdb->posts");

        $massivPage = array();

        for($i = 0; $i<count($getAllPage); $i++){
          $massivPage[$i] = $getAllPage[$i]->ID;
        }

        //var_dump($massivPage);

        
        $args = array(
        'type'         => 'post',
        'child_of'     => 0,
        'parent'       => '',
        'orderby'      => 'name',
        'order'        => 'ASC',
        'hide_empty'   => 0,
        'hierarchical' => 1,
        'exclude'      => '',
        'include'      => '',
        'number'       => 0,
        'taxonomy'     => 'category',
        'pad_counts'   => false,
        // полный список параметров смотрите в описании функции http://wp-kama.ru/function/get_terms
      );
      $categories = get_categories( $args );

        

  //получаем ID страницы из мета пост
  function getIDPage($id){
    global $wpdb;

        $mas = array();
        $mas_id = array();
        $idPostmassiv = array();

        if(!empty($id)){
          $getIDPageMassiv = $wpdb->get_results("SELECT post_id FROM $wpdb->postmeta WHERE meta_key = '_crb_select_cat_kurs' AND    meta_value = '$id' ");
        }

        
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
 ?>
     
        <?php
            $mas_id = array();
            for($i = 0; $i<count($categories); $i++){
  
             if( $categories[$i]->name != "Без рубрики"){
              $post = getIDPage($categories[$i]->term_id);

 
             ?>
            <div class="study-table">
               <div class="inner">
              <div class="title"><?=$categories[$i]->name ?></div>
            <table class="table">
            <tbody>
              
              <?php 
                  if(!empty($post)){
                      for($s = 0; $s<count($post); $s++){

                ?>
              <tr>
              <?php

              if(!empty(get_post_meta( $post[$s], '_crb_hit_new_kurs')[0])){

                switch(get_post_meta( $post[$s], '_crb_hit_new_kurs')[0]){
                  case "hit" :
                   
                    ?>
                    <td class="name hit"><?=get_post($post[$s])->post_title;?>
                      <div class="overlay"><a href="../<?=get_post($post[$s])->post_name;?>" class="btn">ПРОГРАММА КУРСА</a></div>
                    </td>
                  <?php
                   

                  break;
                  ?>

                  <?php
                  case "new" :
                  
                    ?>
                     <td class="name new"><?=get_post($post[$s])->post_title;?>
                      <div class="overlay"><a href="../<?=get_post($post[$s])->post_name;?>" class="btn">ПРОГРАММА КУРСА</a></div>
                    </td>
                  <?php
                   

                  break;
                  ?>

                  <?php
                  default:
                   
                    ?>
                    <td class="name"><?=get_post($post[$s])->post_title;?>
                    <div class="overlay"><a href="../<?=get_post($post[$s])->post_name;?>" class="btn">ПРОГРАММА КУРСА</a></div>
                    </td>
                  <?php
                  }
                  ?>
                <?php
                  if(!empty(get_post_meta( $post[$s], '_crb_price_new_kurs')[0])){
                ?>
                  <td class="price"><?=get_post_meta( $post[$s], '_crb_price_new_kurs')[0];?></td>
                <?php
                  }else{
                    ?>
                    <td class="price">0</td>

                    <?php

                  }
                ?>
                <td>
                  <a href="#" class="btn" data-toggle="modal" data-target="#subscribe" onclick="getTextModal('<?=get_post($post[$s])->post_title;?>')">записаться</a>
                </td>
              </tr>
              <?php
                }

                } 

               ?>
              
            </tbody>
          </table>
        </div>
      </div>
      <?php
          
            }
            }
             }
          ?>
    
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

  <div class="modal fade" id="subscribe" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <section class="modal-container">
        <div class="inner">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
          <div class="title">Записаться сейчас</div>
          <p class="text-center">Пожалуйста заполните данную форму для записи на тренинг</p>
          <form>
             <div class='form-group'>
              <input type='name' value="" class='form-control nameType' required>
             </div>


            <div class="form-group">
              <input type="name" class="form-control" required>
              <label class="control-label">Ваше имя <span>*</span></label>
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
              <label class="control-label">Ваш комментарий</label>
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