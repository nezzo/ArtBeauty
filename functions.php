<?php

//подключаем Carbon плагин
use Carbon_Fields\Container;
use Carbon_Fields\Field;

//подключаем хлебные крошки
require_once('breadcrumbs.php');

require_once('nav_menu.php');

//подключаем функции по отправки эл. почты
require_once('mail.php');

//подключаем баннер категории
require_once('woocommerce/woocommerce-category-banner/woocommerce-category-banner.php');

//Shortcode function for displaying banner.
add_action('wcb_show_category_two_image', 'wcb_show_category_banner');
function wcb_show_category_banner() {
    global $WCB_Category_Banner;
    $WCB_Category_Banner->wcb_show_category_banner(); //disable the only show for category tag.
}


/**
     * Show subcategory thumbnails.
     *
     * @param mixed $category
     * @subpackage  Loop
     */

//меняем стили для картинок категории
add_action( 'woocommerce_before_subcategory_title', 'woocommerce_subcategory_thumbnail_banner', 2 );
remove_action( 'woocommerce_before_subcategory_title', 'woocommerce_subcategory_thumbnail', 10 );
 function woocommerce_subcategory_thumbnail_banner( $category ) {
        $small_thumbnail_size   = apply_filters( 'subcategory_archive_thumbnail_size', 'shop_catalog' );
        $dimensions             = wc_get_image_size( $small_thumbnail_size );
        $thumbnail_id           = get_woocommerce_term_meta( $category->term_id, 'thumbnail_id', true );

        if ( $thumbnail_id ) {
            $image        = wp_get_attachment_image_src( $thumbnail_id, $small_thumbnail_size );
            $image        = $image[0];
            $image_srcset = function_exists( 'wp_get_attachment_image_srcset' ) ? wp_get_attachment_image_srcset( $thumbnail_id, $small_thumbnail_size ) : false;
            $image_sizes  = function_exists( 'wp_get_attachment_image_sizes' ) ? wp_get_attachment_image_sizes( $thumbnail_id, $small_thumbnail_size ) : false;
        } else {
            $image        = wc_placeholder_img_src();
            $image_srcset = $image_sizes = false;
        }

        if ( $image ) {
            // Prevent esc_url from breaking spaces in urls for image embeds
            // Ref: https://core.trac.wordpress.org/ticket/23605
            $image = str_replace( ' ', '%20', $image );

            // Add responsive image markup if available
            if ( $image_srcset && $image_sizes ) {

                echo '<div class="img">
                <img  src="' . esc_url( $image ) . '" alt="' . esc_attr( $category->name ) . '" />
                </div>
                ';


            } else {


                echo '<div class="img">
                <img  src="' . esc_url( $image ) . '" alt="' . esc_attr( $category->name ) . '"   />
                </div>
                ';


            }
        }
    }
 
 
    //меняем стили для картинок категории
    add_action( 'woocommerce_before_subcategory_title', 'woocommerce_template_loop_category_link_open_new', 10 );
    remove_action( 'woocommerce_before_subcategory', 'woocommerce_template_loop_category_link_open', 10 );

    function woocommerce_template_loop_category_link_open_new( $category ) {
        global $WCB_Category_Banner;
        $result = $WCB_Category_Banner->getImage($category);

    echo '<a href="' . get_term_link( $category, 'product_cat' ) . '" class="overlay">';
    echo $result;

    }

    

//подключаем скрипты темы
function theme_name_script(){
    wp_enqueue_script('jquery');
    
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.min.js');

    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/libs/bootstrap/js/bootstrap.min.js');

    wp_enqueue_script('owl.carousel', get_template_directory_uri() . '/libs/owl-carousel/owl.carousel.min.js');

    wp_enqueue_script('jquery.fancybox', get_template_directory_uri() . '/libs/fancybox/jquery.fancybox.js');

    wp_enqueue_script('jquery.formstyler', get_template_directory_uri() . '/libs/formstyler/jquery.formstyler.min.js');

    wp_enqueue_script('modernizr', get_template_directory_uri() . '/js/libs/modernizr-2.6.1.min.js');

    wp_enqueue_script('main', get_template_directory_uri() . '/js/main.js');

}

//подключаем  файлы woocommerce к своем шаблону
add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
    add_theme_support( 'woocommerce' );
}



//меняем стили для товара в категории 
add_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title_new_product', 9 );

if ( ! function_exists( 'woocommerce_template_loop_product_title' ) ) {

    /**
     * Show the product title in the product loop. By default this is an H2.
     */
    function woocommerce_template_loop_product_title_new_product() {

        //удаляем стандартный хук
        remove_action( 'woocommerce_shop_loop_item_title', 'woocommerce_template_loop_product_title', 10 );

        echo '<div class="title">' . get_the_title() . '</div>';


    }
}




//удаляем в карточке товара add_to_cart
remove_action( 'woocommerce_single_product_summary', 'woocommerce_template_single_add_to_cart', 30 );


// переделываем структуру блока категорий в магазине 
add_filter( 'product_cat_class', 'filter_product_cat_class', 10, 3 ); 
function filter_product_cat_class( $classes, $class, $category ) { 
    $classes   = is_array( $class ) ? $class : array_map( 'trim', explode( ' ', $class ) );
  return array_unique( array_filter( $classes ) );
}; 



function woocommerce_default_product_tabs( $tabs = array() ) {
        global $product, $post;

        // Description tab - shows product content
        if ( $post->post_content ) {
            $tabs['description'] = array(
                'title'    => __( 'Description', 'woocommerce' ),
                'priority' => 10,
                'callback' => 'woocommerce_product_description_tab',
            );
        }

        // Additional information tab - shows attributes
        if ( $product && ( $product->has_attributes() || apply_filters( 'wc_product_enable_dimensions_display', $product->has_weight() || $product->has_dimensions() ) ) ) {
            $tabs['additional_information'] = array(
                'title'    => __( 'Additional informations', 'woocommerce' ),
                'priority' => 20,
                'callback' => 'woocommerce_product_additional_information_tab',
            );
        }

        // Reviews tab - shows comments
        if ( comments_open() ) {
            $tabs['reviews'] = array(
                'title'    => sprintf( __( 'Reviews (%d)', 'woocommerce' ), $product->get_review_count() ),
                'priority' => 30,
                'callback' => 'comments_template',
            );
        }

        return $tabs;
    }

 

//подключаем скрипты
add_action( 'wp_enqueue_scripts', 'theme_name_script' );


//Миниатюры
add_theme_support('post-thumbnails');


//HeadMenu
register_nav_menu("menuHeader","Меню в шапке");
 
  
//подключаем хлебные крошки
function kama_breadcrumbs( $sep = ' » ', $l10n = array(), $args = array() ){
    $kb = new Kama_Breadcrumbs;
    echo $kb->get_crumbs( $sep, $l10n, $args );
}

 
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    require_once( 'carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}


add_filter('woocommerce_product_additional_information_heading', 'isa_product_additional_information_heading');
 
function isa_product_additional_information_heading() {
    echo '';
}





//добавляем комплексно картинку и ссылку в слайдер на главную
add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options_slider' );
function crb_attach_theme_options_slider() {
    
    Container::make( 'theme_options', 'Опции слайдера' )
        ->add_fields( array(
             Field::make( 'complex', 'crb_media_item_slide_index' )
        ->add_fields( 'slider_index_page', array(
            Field::make( 'image', 'image' )
            ->set_value_type( 'url' ),
            Field::make( 'text', 'url' ),
        ) )
    ) );

}


//добавляем опцию "Кабинет процедур" где будет указываться название кабинета, а на странице будет селект с этими кабинетами
add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options_procedyru' );
function crb_attach_theme_options_procedyru() {
    
    Container::make( 'theme_options', 'Кабинет Процедур' )
        ->add_fields( array(
             Field::make( 'complex', 'crb_options_name_kab_procedyru' )
        ->add_fields( 'options_kab_procedyru', array(
             Field::make( 'text','crb_options_name_kab','name' ),
        ) )
    ) );

}

//добавляем цену в шаблон "Cтраницa процедур"
add_action( 'carbon_fields_register_fields', 'crb_attach_price_procedyru' );
function crb_attach_price_procedyru() {
 
 // получаем имена кабинетов и формируем select
 $kab = carbon_get_theme_option( 'crb_options_name_kab_procedyru' );

$kab_massiv = array();
 for($i = 0; $i<count($kab); $i++){
    $kab_massiv[md5($kab[$i]["crb_options_name_kab"])] = $kab[$i]["crb_options_name_kab"];
 }

    Container::make( 'post_meta', 'Цена' )
    ->show_on_template ( 'page-service.php' )
    ->add_fields( array(
        Field::make('text','crb_price', 'price'),
        Field::make( 'select', 'crb_select_kabinet', 'Выбрать Кабинет' )
         ->add_options($kab_massiv),
         Field::make('textarea','crb_kab_desc', 'Описание'),
    ));

}
 




//добавляем комплексно картинку и ссылку в партнеры на главную
add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options_slider_partner' );
function crb_attach_theme_options_slider_partner() {
    
    Container::make( 'theme_options', 'Опции партнеры' )
        ->add_fields( array(
             Field::make( 'complex', 'crb_media_item_slide_index_partner' )
        ->add_fields( 'slider_index_page_partner', array(
            Field::make( 'image', 'image' )
            ->set_value_type( 'url' ),
            Field::make( 'text', 'url' ),
        ) )
    ) );

}



//добавляем комплексно настройку полей в footere menu
add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options_footer_menu' );
function crb_attach_theme_options_footer_menu() {
    
    Container::make( 'theme_options', 'Нижнее меню' )
        ->add_fields( array(
             Field::make( 'complex', 'crb_media_item_slide_footer_menu' )
        ->add_fields( 'menu1', array(
           Field::make( 'text', 'name' ),
             Field::make( 'text', 'url' ),
        ) )
        ->add_fields( 'menu2', array(
             Field::make( 'text', 'name' ),
             Field::make( 'text', 'url' ),
        ) )

        ->add_fields( 'menu3', array(
          Field::make( 'text', 'name' ),
             Field::make( 'text', 'url' ),
        ) )

        ->add_fields( 'menu4', array(
           Field::make( 'text', 'name' ),
             Field::make( 'text', 'url' ),
        ) )



    ) );

}




//добавляем видео (ссылку и название) в шаблон
add_action( 'carbon_fields_register_fields', 'crb_attach_video_template' );
function crb_attach_video_template() {
    
    Container::make('post_meta', 'Добавить видео на страницу')
    ->show_on_template ( 'video.php' )
        ->add_fields( array(
             Field::make( 'complex', 'crb_video_template' )
        ->add_fields( 'video', array(
           Field::make( 'text', 'name' ),
             Field::make( 'text', 'url' ),
        ) )
 
    ) );

}

//добавляем картинку в фотогалерею
add_action( 'carbon_fields_register_fields', 'crb_attach_image_fotogallery' );
function crb_attach_image_fotogallery() {
    
    Container::make('post_meta', 'Добавить картинки в фотогалерею')
    ->show_on_template ( 'page-foto.php' )
        ->add_fields( array(
             Field::make( 'complex', 'crb_image_fotogallery' )
        ->add_fields( 'image', array(
           Field::make( 'image', 'crb_image_fotogallery_image', 'Изображение' )
            ->set_value_type( 'url' ),
            Field::make( 'text', 'crb_image_fotogallery_name', 'Имя' )
             
        ) )
 
    ) );

}




//добавляем pdf файл и изображение в шаблон "ПРЕССА"
add_action( 'carbon_fields_register_fields', 'crb_attach_pdf_pressa_template' );
function crb_attach_pdf_pressa_template() {
    
    Container::make('post_meta', 'Добавить pdf и обложку')
    ->show_on_template ( 'page-pressa.php' )
        ->add_fields( array(
             Field::make( 'complex', 'crb_pdf_pressa_template' )
        ->add_fields( 'pdf_pressa', array(
             Field::make( 'file', 'pdf' )
             ->set_value_type( 'url' ),
             Field::make( 'image', 'image' )
             ->set_value_type( 'url' ),
             Field::make('text', 'date')
            ->set_default_value(date("H:i d-m-Y"))
              


        ) )
 
    ) );

}

//добавляем картинку в пункт "Обучение"
add_action( 'carbon_fields_register_fields', 'setImageMenu' );

function  setImageMenu(){
    Container::make( 'nav_menu_item', 'Menu Settings' )
    ->add_fields( array(
        Field::make( 'image', 'crb_image_nav_menu', 'Изображение' ),
    ));
}

//добавляем галочку в записи (выводить или нет функцию по  оставить заявку на конференцию)
add_action( 'carbon_fields_register_fields', 'crb_post_meta_zayavka' );
function crb_post_meta_zayavka() {
    Container::make( 'post_meta', __( 'Вкл. заявку', 'crb' ) )
        ->where( 'post_type', '=', 'post' )
        ->add_fields( array(
            Field::make( 'checkbox', 'crb_show_zayavka', 'On' )
            ->set_option_value( 'yes' )
        ) );
}


//доп. поля в шаблоне  страницы Курс
add_action( 'carbon_fields_register_fields', 'setNewFieldKurs' );
function setNewFieldKurs(){

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

//получаем список все рубрик
$categories = get_categories($args);

$cats = array();
 
if(!empty($categories)){
    for ($i = 0; $i<count($categories); $i++){
        $cats[$categories[$i]->cat_ID] =  $categories[$i]->name;
    }
 
}
 
 Container::make('post_meta', 'Доп. Информация по курсу')
    ->show_on_template ( 'page-kurs.php' )
        ->add_fields( array(
            Field::make( 'image', 'crb_image_kurs', 'Картинка курса' )
            ->set_value_type( 'url' ),

            Field::make( 'checkbox', 'crb_popular_program_kurs', 'Популярные программы' )
            ->set_option_value( 'yes' )
            ->set_width(50),

            Field::make( 'checkbox', 'crb_distant_study_kurs', 'Дистанционное обучение' )
            ->set_option_value( 'yes' )
            ->set_width(50),
 
            Field::make( 'radio', 'crb_hit_new_kurs', 'Лейбы программы и курсы' )
            ->add_options( array(
                'default' => 'Default',
                'hit' => 'Hit',
                'new' => 'New',
            ) )
            ->set_width(50),
            Field::make( 'radio', 'crb_prisent_kurs', 'Лейбы дистанционное обучение' )
            ->add_options( array(
                'default' => 'Default',
                'prisent' => 'Подарок',
                'new' => 'New',

                 
            ) )
            ->set_width(50),
 
            Field::make( 'select', 'crb_select_cat_kurs', 'Выбрать Категорию' )
             ->add_options( $cats ),

            Field::make( 'text', 'crb_price_old_kurs', 'Старая цена' )
            ->set_width(50),

            Field::make( 'text', 'crb_price_new_kurs', 'Новая цена' )
            ->set_width(50),

            Field::make( 'rich_text', 'crb_block_programm_kurs', 'Блок программы курса' ),

            Field::make( 'text', 'crb_prepod_kurs', 'Преподаватель' ),

        ) );
    
}

//подключаем функцию ajax для получения данных с форм популярные программы
add_action('wp_ajax_get_mail_info_popular_programm_callback', 'popular_programm');
add_action('wp_ajax_nopriv_get_mail_info_popular_programm_callback', 'popular_programm');



//подключаем ajax и скрипт для  получения данных с форм
add_action( 'wp_enqueue_scripts', 'getAjax_data', 99 );
function getAjax_data(){

    wp_enqueue_script( 'getMailAjaxJS', home_url( '/wp-content/themes/Art Beauty/js/func.js'), array('jquery'));
 	  
	  wp_localize_script('getMailAjaxJS', 'getMailAjax_object', 
		  array(
			  'url' => admin_url('admin-ajax.php'),
 		  )
	  ); 

}

//функция по обработке данных с формы  популярные программы
function popular_programm(){

//пример получения данных по ajax
$nameCategory = $_POST['category'];


// выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвращает функция
wp_die();

}
    
