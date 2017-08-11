 <?php
/*
Template Name: Шаблон страницы "Услуги"
*/
?>
 <?php get_header();?>

 <section class="breadcrumbs">
    <div class="container">
       <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
    </div>
</section>
 <section id="page" class="services">

<?php
 
    
  
  $kab_id = array();
  $kab = carbon_get_theme_option( 'crb_options_name_kab_procedyru' );
 

  #TODO  ко всем подобным и не подобным страницам насчет модального окна с  данными. Модальное окно нужно засунуть в цикл, где в имя id="" засунуть ид поста и в кнопку вызова подставить этот ид поста и тогда подтянет нужное нам  модальное окно для отправки почты. +  в модальное окно подставить данные нужны для заполнения (имя и  цену)
  
 
 //создаем массив с имени кабинета и присваиваем ид 
for($i = 0; $i<count($kab); $i++ ){

     $kab_id[$i] =  array(
      'id' => md5($kab[$i]['crb_options_name_kab']),
      'name' => $kab[$i]['crb_options_name_kab']
      );
}



 //функция которая  получает ид  поста по кабинету
function getIDPage($id){
  global $wpdb;

 
$getIDPage = array();
  
  $getIDPageMassiv = $wpdb->get_results("SELECT post_id FROM $wpdb->postmeta 
                               WHERE meta_value = '$id' ");
 
 for($i = 0; $i<count($getIDPageMassiv); $i++){
    $getIDPage[$i] = $getIDPageMassiv[$i]->post_id;

 }
 
 return $getIDPage;

 }

 //в цикле выводим сколько кабинетов (со страницами не пустые) и генерим внутри цикл со страницами
for($s = 0; $s<count($kab_id); $s++){
  $default_attr = array(
  'class' => "img-responsive",
);
    $idPOST = getIDPage($kab_id[$s]['id']);
    $name = $kab_id[$s]['name'];

    //что бы не выводило пустых категорий в услугах
    if(!empty($idPOST)){
 ?>
    <div class="service-block1">
      <div class="container">
        <div class="section-title line"><span><?= $name?></span></div>
 
        <?php foreach ($idPOST as $id) {?>
        <div class="service-list-item">
          <div class="inner">
            <div class="row">
              <div class="col-md-4 col-sm-5">
                <a href="<?= get_post($id)->post_name;?>"><?php echo get_the_post_thumbnail( $id, array(350,260),$default_attr); ?></a>
              </div>
              <div class="col-md-8">
                <div class="text">
                  <a href="<?=get_post($id)->post_name;?>" class="title"><?= get_post($id)->post_title;?></a>
                   <?php if (!empty(get_post_meta($id,'_crb_kab_desc')[0])){echo get_post_meta($id,'_crb_kab_desc')[0]; };?> 
                  <div class="btn-line">
                    <div class="price left-text">стоимость <span><?=get_post_meta($id, '_crb_price')[0];?></span></div>
                    <a href="#" class="btn" data-toggle="modal" data-target="#zapis" onclick="getTextModal('<?= get_post($id)->post_title;?>')">записаться</a>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>
        </div>
         <?php 
          }
        ?>
       </div>
    </div>
    <?php
    }

    }
 ?>
 

  </section>
  <script>
//подставляем в форму данные
 function getTextModal(name){
  jQuery( document ).ready(function (){
    jQuery('#zapis .nameType').val(name);
 });

 }
</script>

  <div class='modal fade' id='zapis' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true' style='display: none;'>
    <div class='modal-dialog'>
      <section class='modal-container'>
        <div class='inner'>
          <button type='button' class='close' data-dismiss='modal' aria-label='Close'><i class='icon-close'></i></button>
          <div class='title'>ЗАПИСАТЬСЯ НА ПРОЦЕДУРУ</div>
          <p class='text-center'>Пожалуйста заполните данную форму для записи на процедуру</p>
          <form>
             
            <div class='form-group'>
              <input type='name' value=" " class='form-control nameType' required>
             </div>
            <div class='form-group'>
              <input type='name' class='form-control' required>
              <label class='control-label'>Ваше имя <span>*</span></label>
            </div>
            <div class='form-group'>
              <input type='name' class='form-control' required>
              <label class='control-label'>Желаемая дата</label>
            </div>
            <div class='form-group'>
              <select data-placeholder='Желаемое время'>
                <option selected disabled></option>
                <option>9:30</option>
                <option>10:00</option>
                <option>10:30</option>
                <option>11:00</option>
              </select>
              <label class='control-label'>Желаемое время</label>
            </div>
            <div class='form-group'>
              <input type='tel' class='form-control' required>
              <label class='control-label'>Телефон <span>*</span></label>
            </div>
            <div class='form-group'>
              <input type='email' class='form-control'>
              <label class='control-label'>E-mail</label>
            </div>
            <div class='form-group'>
              <input type='text' class='form-control'>
              <label class='control-label'>Комментарий</label>
            </div>
            <div class='btn-line'>
              <button type='submit' class='btn'>записаться</button>
            </div>
          </form>
        </div>
      </section>
    </div>
  </div>
  
  <?php get_footer();?>