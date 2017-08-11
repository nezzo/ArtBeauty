 <?php get_header();?>
<style>
  h1.page-title{
    display:none;
  }
 
  .btn {
    float: right;
    margin-right: -40px;

}
/*откл. сортировку по товару*/
  form.woocommerce-ordering{
    display:none;
  }
  
  .product.card {
   height: 485px;
  }
  
  .product.card .inner {
     height: 470px;
  }
  
  nav.woocommerce-pagination{
    width:100%;
  }

</style>

 <section class="breadcrumbs">
    <div class="container">
       <?php if( function_exists('kama_breadcrumbs') ) kama_breadcrumbs(); ?>
    </div>
</section>
<section id="page">
    <div class="container">
   <?php if(!empty(is_product_category())){ ?>                       
    <div class="section-title line"><span> <?php woocommerce_page_title();?></span></div>
    <?php }
      elseif(!empty(is_product())){
        ?>
      <div class="section-title line"><span> <?php the_title();?></span></div> 
        <?php
      }else{
        ?>
      <div class="section-title line"><span><?php woocommerce_page_title();?></span></div> 
      <?php
      }
      ?>
      <div class="row">
         <?php woocommerce_content(); ?>
      </div>
    </div>
  </section>
 <?php get_footer();?>
