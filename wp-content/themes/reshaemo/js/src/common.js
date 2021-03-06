/* Чтобы максимально обезопасить себя от конфликтов,
 можно перевести JQuery в «неконфликтный» режим
 и использовать другой шорткод.
 Применяем «$j» вместо дефолтного «$».
 Стандартный шорткод «$», например, может конфликтовать
 с Prototype. */
/*var $j = jQuery.noConflict();*/


/* Owl Carousel */
$(document).ready(function(){
  $('.owl-carousel').owlCarousel({
    navigation:true,
    navigationText : ["&#xe079;","&#xe080;"],    
    loop:true,
    margin:20,
    dots:false,
    autoplay:true,
    autoplayHoverPause:true,
    autoplayTimeout:1800,
    smartSpeed:900,
    responsiveClass:true,
    navText:["<i class='fa fa-angle-left fa-2x'></i>","<i class='fa fa-angle-right fa-2x'></i>"],
    responsive:{
        0:{
            items:1,
            nav:true,
            loop: true
        },
        576:{
            items:2,
            nav:true,
            loop: true
        },
        768:{
            items:2,
            nav:true,
            loop: true
        },
        992:{
            items:3,
            nav:true,
            loop:true
        },
        1200:{
            items:4,
            nav:true,
            loop:true
        }
    }
  });

    var isFirefox = typeof InstallTrigger !== 'undefined';
    console.log(isFirefox);
    if (isFirefox)
    {
      // действия для браузера Mozilla Firefox (обеспечение кроссбраузерности)
      jQuery('form.mainpf legend legend').css('paddingTop', '1rem');
      jQuery('form.wpcf7-form legend').css('paddingTop', '1rem');     
      jQuery('form.mainpf input.form-control').css('marginBottom', '11px');
      jQuery('form.wpcf7-form input.wpcf7-form-control').css('marginBottom', '10.5px');
      jQuery('.aside-catalogue').css('marginTop', '47px');
    }


});

