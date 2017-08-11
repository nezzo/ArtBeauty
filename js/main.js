jQuery(document).ready(function () {

  jQuery('.menu-toggle').click(function (e) {
    e.preventDefault();
    jQuery('#menu').slideToggle();
    jQuery(this).find('.bar').toggleClass('open');
  });

  jQuery('header .social-toggle').click(function (e) {
    e.preventDefault();
    jQuery(this).toggleClass('active');
    jQuery('header .social-block').toggleClass('active');
  });

  jQuery('.phil-more').click(function (e) {
    e.preventDefault();
    jQuery('.phil-content').slideToggle();
  });

  jQuery('footer .top .title').click(function () {
    if ((jQuery('footer .top').width() == "400") || (jQuery('footer .top').width() == "300")) {
      jQuery(this).next().slideToggle();
      jQuery(this).toggleClass('open');
    }
  });

  jQuery('.owl-banner').owlCarousel({
    items: 5,
    nav: false,
    dots: true,
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplaySpeed: 700,
    responsive: {
      0: {
        items: 1
      },
      400: {
        items: 2
      },
      767: {
        items: 3
      },
      991: {
        items: 4
      },
      1199: {
        items: 5
      }
    }
  });

  jQuery(".owl-programms").owlCarousel({
    items: 3,
    margin: 30,
    nav: false,
    slideBy: 3,
    dots: true,
    responsive: {
      0: {
        items: 1,
        slideBy: 1
      },
      565: {
        items: 2,
        slideBy: 2
      },
      991: {
        items: 3,
        slideBy: 3
      }
    }
  });

  jQuery(".owl-partner").owlCarousel({
    items: 4,
    margin: 10,
    nav: false,
    slideBy: 4,
    dots: true,
    responsive: {
      0: {
        items: 1,
        slideBy: 1
      },
      565: {
        items: 2,
        slideBy: 2
      },
      767: {
        items: 3,
        slideBy: 3
      },
      991: {
        items: 4,
        slideBy: 4
      }
    }
  });

  jQuery('.owl-img').owlCarousel({
    items: 1,
    nav: false,
    dots: false,
    loop: true,
    autoplay: true,
    autoplayTimeout: 4000,
    autoplaySpeed: 700
  });

  jQuery('.modal-container .form-control').keyup(function () {
    if (jQuery(this).val()) {
      jQuery(this).addClass('changed');
    } else {
      jQuery(this).removeClass('changed');
    }
  });

  jQuery('select, input:checkbox').styler();

  jQuery('.fancybox').fancybox();
 
});
