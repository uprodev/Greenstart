jQuery(document).ready(function ($) {

  //slider
  var swiperHome = new Swiper(".home-slider", {
    pagination: {
      el: ".home-pagination",
      clickable: true,
    },
  });

  //accordion
  $(function() {
    $(".accordion > .accordion-item.is-active").children(".accordion-panel").slideDown();
    $(document).on('click', '.accordion > .accordion-item .accordion-thumb', function (e){
      $(this).parent('.accordion-item').siblings(".accordion-item").removeClass("is-active").children(".accordion-panel").slideUp();
      $(this).parent('.accordion-item').toggleClass("is-active").children(".accordion-panel").slideToggle("ease-out");
    })
  });

  /* mob-menu*/
  $(document).on('click', '.open .open-menu a', function (e){
    e.preventDefault();

    $.fancybox.open( $('#menu-responsive'), {
      touch:false,
      autoFocus:false,
      beforeShow: function (e){
        $('html').addClass('is-menu');
      }
    });

    $('.top-line').removeClass('open');
  });

  /*close mob menu*/
  $(document).on('click', '.is-menu .open-menu a', function (e){
    e.preventDefault();

    setTimeout(function() {
      $('html').removeClass('is-menu');

    }, 10);
    $.fancybox.close($('#menu-responsive'));
    $('.top-line').addClass('open');
  });

  //cutt text on mobile
  if(window.innerWidth < 576){
    $('.line-collapse .line .wrap-text').Cuttr({
      truncate: 'letters',
      length: 170,
      readMore: true,
      readMoreBtnTag: 'a',
      readMoreText: 'Read more',
      readLessText: 'Read less',
    });
  }

  //cutt text
  $('.blog-slider .swiper-slide .wrap').Cuttr({
    truncate: 'letters',
    length: 125,
  });


  //slider
  var swiperLogo = new Swiper(".logo-slider", {
    spaceBetween: 20,
    slidesPerView: 3,
    pagination: {
      el: ".logo-pagination",
      clickable: true,
    },
  });


  //fix header
  $(".top-line").sticky({
    topSpacing:0
  });
  $(".page-img-text .tabs-menu").sticky({
    topSpacing:85
  });



  //slider
  var swiperBlog = new Swiper(".blog-slider", {
    slidesPerView: "auto",
    spaceBetween: 10,
    navigation: {
      nextEl: ".blog-next",
      prevEl: ".blog-prev",
    },
    pagination: {
      el: ".blog-pagination",
    },
    breakpoints: {
      576: {
        slidesPerView: 1,
        spaceBetween: 20,
      },
      768: {
        slidesPerView: 2,
        spaceBetween: 20,
      },
      1200: {
        slidesPerView: 3,
        spaceBetween: 38,
      },

    },
  });


  //popup
  $(".fancybox").fancybox({
    touch:false,
    autoFocus:false,
    beforeShow : function(e){
     if($('.popup-blog').length >0){
       //slider
       var swiperText = new Swiper(".text-slider", {
         slidesPerView: 1,
         spaceBetween: 10,
         autoHeight: true,
         navigation: {
           nextEl: ".text-next",
           prevEl: ".text-prev",
         },
         pagination: {
           el: ".text-pagination",
         },

       });
     }
      $(document).on('click', '.blog-slider .swiper-slide', function (e) {
        let item = $(this).index();
        swiperText.slideTo(item);
      });
    },
  });


  //select
  $('.form-map select').niceSelect();

  //scroll
  $(document).on('click', '.scroll a', function (e) {
    e.preventDefault();
    var id  = $(this).attr('href'),
      top = $(id).offset().top;
    $('body,html').animate({scrollTop: top - 100}, 1000);
  });

  //TABS

  if(window.innerWidth >991){
	 $('.tabs-menu li:first-child').addClass('is-active');
	   $('.tab-content .tab-item').hide();
  $('.tab-content .tab-item:first-child').show();
  
  $(document).on('click', '.tabs-menu li', function (e){
    e.preventDefault();
    let item = $(this),
      itemIndex = item.index() + 1;
    $(this).closest('.tabs').find('.is-active').removeClass('is-active');
    $(item).addClass('is-active')
    $(this).closest('.tabs').find('.tab-content').find('.tab-item').hide();
    $(this).closest('.tabs').find('.tab-content').find(".tab-item:nth-child(" + itemIndex +")").show()
   
	   $(".accordion > .accordion-item").removeClass('is-active');
	  $('.faq-tabs .accordion-panel').hide();
	  
  })
  }else{

	    $('.tabs-menu-mob li:first-child').addClass('is-active');
	  	   $('.tab-content .tab-item').hide();
  $('.tab-content .tab-item:first-child').show();
  
  $(document).on('click', '.tabs-menu-mob li', function (e){
    e.preventDefault();
    let item = $(this),
      itemIndex = item.index() + 1;
    $(this).closest('.tabs').find('.is-active').removeClass('is-active');
    $(item).addClass('is-active')
    $(this).closest('.tabs').find('.tab-content').find('.tab-item').hide();
    $(this).closest('.tabs').find('.tab-content').find(".tab-item:nth-child(" + itemIndex +")").show()
   
  })

  }

  //modile select
  if(!$('.form-map').length>0){
    $(document).on('click', '.nice-select', function (e){
      $(this).toggleClass('is-open');
    })
  }

  $(document).on('click', '.nice-select .option', function (e){
    let item = $(this).text();
    $(this).closest('.nice-select').find('.current').text(item);
  });

  $(document).on('click', '.service .item-title', function (e){
    e.preventDefault();
    let item = $(this).closest('.item');

    if(item.hasClass('is-open')){
      item.removeClass('is-open');
      item.find('.text').slideUp();
    }else{
      item.addClass('is-open');
      item.find('.text').slideDown();
    }
  })

  $('.tabs-menu').onePageNav();

  $('.form-map .nice-select .list  li:first-child').addClass('disabled')
});