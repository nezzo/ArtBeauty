<style>
	.btn {
    float:none !important;
 	}
 </style>
<?php
/**
 * Single Product Price, including microdata for SEO
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/single-product/price.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @author  WooThemes
 * @package WooCommerce/Templates
 * @version 3.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

global $product;

?>
<div class="btn-line">
<div class="price left-text">стоимость 
<span><?php echo $product->get_price_html(); ?></span>
</div>
<a href="#"  class="btn" data-toggle="modal" data-target="#zakaz">заказать</a>
</div>
<div class="modal fade" id="zakaz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <section class="modal-container">
        <div class="inner">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="icon-close"></i></button>
          <div class="title">заказать</div>
          <form class="form-horizontal">
            <div class="form-group">
              <label class="col-md-3">Количество</label>
              <div class="col-md-9">
                <input type="number" class="form-control" min="1" value="1">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3">Цена</label>
              <div class="col-md-9">
                <div class="form-control">5 400 руб</div>
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3">Имя</label>
              <div class="col-md-9">
                <input type="name" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3">Телефон</label>
              <div class="col-md-9">
                <input type="tel" class="form-control">
              </div>
            </div>
            <div class="form-group">
              <label class="col-md-3">E-mail</label>
              <div class="col-md-9">
                <input type="email" class="form-control">
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