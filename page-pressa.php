<?php
/*
Template Name: Шаблон страницы "ПРЕССА"
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
      <div class="section-title line"><span>Пресса</span></div>
      <div class="pressa-blocks">
        

         <?php
         $pressa = carbon_get_the_post_meta( 'crb_pdf_pressa_template' );
 
 
         //массивы для сортировки
         $date = array();
  
        for($i=0; $i<count($pressa); $i++){

           $date[$i] = array(
            "date"  =>  strtotime($pressa[$i]['date']),
            "image" =>  $pressa[$i]["image" ],
            "pdf"   =>  $pressa[$i]["pdf"]
             );
           }


          if(!empty($date)){

            foreach( $date AS $k => $v ){
  
            $final[$v['date']] = $v; 
            }

             ksort($final);
            $final = array_reverse($final);

          foreach($final AS $items){
  

            
          ?>
            <div class="pressa-block">
            <div class="img">  
            <a href="<?= !empty($items['pdf']) ? $items['pdf']: '#' ?>" target="_blank"><img src="<?=$items['image']?>" alt=""></a>
            </div>
            </div>

         <?php
            }
          }
 
      ?>
      

      </div>
    </div>
  </section>
  <?php get_footer();?>