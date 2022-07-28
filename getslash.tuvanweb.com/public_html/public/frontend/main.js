 $(document).ready(function () {

  $('.c-hero .btn-01').click(function () {
    $('body, html').animate({
      scrollTop: $('.c-guide').offset().top
    }, 500);
  });


    $('.btn-career a').click(function () {
        $('.txt-detail-job').removeClass('active');
        $('.frm-popup, .btn-career').addClass('active');
    });

    $('.field-popup').click(function () {
        $('.frm-popup').removeClass('active');
        $('.success-career').addClass('active');
    });

    $('.btn-close-remove').click(function () {
        $('.btn-career, .frm-popup, .success-career').removeClass('active');
        $('.txt-detail-job').addClass('active');
    });

 
    $('.btn-menu a').click(function () {
      $('.content-menu-mobile').addClass('active');
    });
    $('.close-menu-tab a').click(function () { 
      $('.content-menu-mobile').removeClass('active');
    });

    $('.clc-tab-menu').click(function(){
      var tab_id = $(this).attr('data-tab');

      $('.clc-tab-menu').removeClass('active');
      $('.nav-mobile').removeClass('active');

      $(this).addClass('active'); 
      $("#"+tab_id).addClass('active');
    })



  // $(document).scroll(function () {
  //   const header = $('.c-header');
  //   const CLASS_FIXED = 'header-fixed';
  //   let scroll = $(this).scrollTop();
  //   let topDist = header.position();

  //   function addFixed() {
  //     header.addClass(CLASS_FIXED)
  //   }

  //   function removeFixed() {
  //     header.removeClass(CLASS_FIXED)
  //   }
  //   if (scroll > topDist.top) {
  //     addFixed() 
  //   } else {
  //     removeFixed()
  //   }
  // });

  
  $('.slider-guide-images').slick({
    asNavFor: '.slider-guide-content',
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    speed: 500,
    fade: true,
    cssEase: 'linear',
    dots: true,
  });
  $('.slider-guide-content').slick({
    asNavFor: '.slider-guide-images',
    arrows: false,
    dots: true,
    autoplay: true,
    autoplaySpeed: 3500,
  });
  $('.slider-deal').slick({
    speed: 300,
    slidesToShow: 1,
    variableWidth: true, 
    responsive: [
        {
            breakpoint: 767,
            settings: { 
                slidesToShow: 2.1,
                variableWidth: false, 
                infinite: false, 
            }
        },
        { 
            breakpoint: 575, 
            settings: {
                slidesToShow: 1.25,
                slidesToScroll: 1,
                infinite: false, 
                variableWidth: false, 
            }
        }
    ],
  });
  $('.slider-partner').slick({
    speed: 300,
    slidesToShow: 1,
    variableWidth: true,
    responsive: [
        {
            breakpoint: 767,
            settings: { 
                slidesToShow: 5.1,
                variableWidth: false, 
                infinite: false, 
            }
        },
        { 
            breakpoint: 575, 
            settings: {
                slidesToShow: 4.1,
                slidesToScroll: 1,
                infinite: false, 
                variableWidth: false, 
            }
        }
    ],
  });
  $('.slider-category').slick({
    speed: 300,
    slidesToShow: 5,
    variableWidth: true, 
    infinite: false,
    arrows: false,
    responsive: [
        {
            breakpoint: 1023,
            settings: { 
                slidesToShow: 3.1,
                variableWidth: false, 
                infinite: false, 
            }
        },
        {
            breakpoint: 767,
            settings: { 
                slidesToShow: 2.1,
                variableWidth: false, 
                infinite: false, 
            }
        },
        { 
            breakpoint: 575, 
            settings: {
                slidesToShow: 2.1,
                slidesToScroll: 1,
                infinite: false, 
                variableWidth: false, 
            }
        }
    ],

  });
  $('.slider-review').slick({
    arrows: false,
    speed: 500,
    dots: true,
    autoplay: false,
    autoplaySpeed: 3500
  });

  $('.slide-banner-qr').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    speed: 500,
    autoplay: true,
    dots: true,
    fade: true,
  });

  $('.slide-new-hot').slick({
    slidesToShow: 1.8,
    slidesToScroll: 1,
    arrows: true,
    speed: 500,
    infinite: false, 
    // autoplay: true,
    // dots: true,
    // fade: true,
    prevArrow: '<a href="javascript:void(0)" class="arr-lef"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.75 20H36.25" stroke="#9FA4B7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M11.7803 13.0303C12.0732 12.7374 12.0732 12.2626 11.7803 11.9697C11.4874 11.6768 11.0126 11.6768 10.7197 11.9697L11.7803 13.0303ZM3.75 20L3.21967 19.4697C2.92678 19.7626 2.92678 20.2374 3.21967 20.5303L3.75 20ZM10.7197 28.0303C11.0126 28.3232 11.4874 28.3232 11.7803 28.0303C12.0732 27.7374 12.0732 27.2626 11.7803 26.9697L10.7197 28.0303ZM10.7197 11.9697L3.21967 19.4697L4.28033 20.5303L11.7803 13.0303L10.7197 11.9697ZM3.21967 20.5303L10.7197 28.0303L11.7803 26.9697L4.28033 19.4697L3.21967 20.5303Z" fill="#9FA4B7"/></svg></a>',
    nextArrow: '<a href="javascript:void(0)" class="arr-right"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.75 20H36.25" stroke="#9FA4B7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M28.75 12.5L36.25 20L28.75 27.5" stroke="#9FA4B7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>',
    responsive: [
        {
            breakpoint: 1023,
            settings: { 
                slidesToShow: 1.2,
            }
        },
        {
            breakpoint: 767,
            settings: { 
                slidesToShow: 2,
            }
        },
        { 
            breakpoint: 575, 
            settings: {
                slidesToShow: 1,
                slidesToScroll: 1,
                dots: true,
            }
        }
    ],
  });

  $('.list-partner').slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: true,
    speed: 500,
    infinite: false, 
    // autoplay: true,
    // dots: true,
    // fade: true,
    prevArrow: '<a href="javascript:void(0)" class="arr-lef"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.75 20H36.25" stroke="#9FA4B7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M11.7803 13.0303C12.0732 12.7374 12.0732 12.2626 11.7803 11.9697C11.4874 11.6768 11.0126 11.6768 10.7197 11.9697L11.7803 13.0303ZM3.75 20L3.21967 19.4697C2.92678 19.7626 2.92678 20.2374 3.21967 20.5303L3.75 20ZM10.7197 28.0303C11.0126 28.3232 11.4874 28.3232 11.7803 28.0303C12.0732 27.7374 12.0732 27.2626 11.7803 26.9697L10.7197 28.0303ZM10.7197 11.9697L3.21967 19.4697L4.28033 20.5303L11.7803 13.0303L10.7197 11.9697ZM3.21967 20.5303L10.7197 28.0303L11.7803 26.9697L4.28033 19.4697L3.21967 20.5303Z" fill="#9FA4B7"/></svg></a>',
    nextArrow: '<a href="javascript:void(0)" class="arr-right"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.75 20H36.25" stroke="#9FA4B7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M28.75 12.5L36.25 20L28.75 27.5" stroke="#9FA4B7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>',
    responsive: [
        {
            breakpoint: 1023,
            settings: { 
                slidesToShow: 2.8,
            }
        },
        {
            breakpoint: 767,
            settings: { 
                slidesToShow: 2,
            }
        },
        { 
            breakpoint: 575, 
            settings: {
                slidesToShow: 2,
                slidesToScroll: 1,
            }
        }
    ],
  });

  $('.slide-feedback').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    speed: 500,
    infinite: false, 
    // autoplay: true,
    // dots: true,
    // fade: true,
    prevArrow: '<a href="javascript:void(0)" class="arr-lef"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.75 20H36.25" stroke="#9FA4B7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M11.7803 13.0303C12.0732 12.7374 12.0732 12.2626 11.7803 11.9697C11.4874 11.6768 11.0126 11.6768 10.7197 11.9697L11.7803 13.0303ZM3.75 20L3.21967 19.4697C2.92678 19.7626 2.92678 20.2374 3.21967 20.5303L3.75 20ZM10.7197 28.0303C11.0126 28.3232 11.4874 28.3232 11.7803 28.0303C12.0732 27.7374 12.0732 27.2626 11.7803 26.9697L10.7197 28.0303ZM10.7197 11.9697L3.21967 19.4697L4.28033 20.5303L11.7803 13.0303L10.7197 11.9697ZM3.21967 20.5303L10.7197 28.0303L11.7803 26.9697L4.28033 19.4697L3.21967 20.5303Z" fill="#9FA4B7"/></svg></a>',
    nextArrow: '<a href="javascript:void(0)" class="arr-right"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.75 20H36.25" stroke="#9FA4B7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M28.75 12.5L36.25 20L28.75 27.5" stroke="#9FA4B7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>',
    responsive: [
        {
            breakpoint: 1023,
            settings: { 
                slidesToShow: 1.7,
            }
        },
        {
            breakpoint: 767,
            settings: { 
                slidesToShow: 2,
            }
        },
        { 
            breakpoint: 575, 
            settings: {
                slidesToShow: 1.4,
                slidesToScroll: 1,
            }
        }
    ],
  });

  $('.list-integrated').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    speed: 500,
    infinite: false, 
    // autoplay: true,
    // dots: true,
    // fade: true,
    prevArrow: '',
    nextArrow: '',
    responsive: [
        {
            breakpoint: 767,
            settings: { 
                slidesToShow: 2,
            }
        },
        { 
            breakpoint: 575, 
            settings: {
                slidesToShow: 1.5,
                slidesToScroll: 1,
            }
        }
    ],
  });

  $('.slide-new-other').slick({
    slidesToShow: 3,
    slidesToScroll: 1,
    arrows: true,
    speed: 500,
    prevArrow: '<a href="javascript:void(0)" class="arr-lef"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.75 20H36.25" stroke="#9FA4B7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M11.7803 13.0303C12.0732 12.7374 12.0732 12.2626 11.7803 11.9697C11.4874 11.6768 11.0126 11.6768 10.7197 11.9697L11.7803 13.0303ZM3.75 20L3.21967 19.4697C2.92678 19.7626 2.92678 20.2374 3.21967 20.5303L3.75 20ZM10.7197 28.0303C11.0126 28.3232 11.4874 28.3232 11.7803 28.0303C12.0732 27.7374 12.0732 27.2626 11.7803 26.9697L10.7197 28.0303ZM10.7197 11.9697L3.21967 19.4697L4.28033 20.5303L11.7803 13.0303L10.7197 11.9697ZM3.21967 20.5303L10.7197 28.0303L11.7803 26.9697L4.28033 19.4697L3.21967 20.5303Z" fill="#9FA4B7"/></svg></a>',
    nextArrow: '<a href="javascript:void(0)" class="arr-right"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.75 20H36.25" stroke="#9FA4B7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M28.75 12.5L36.25 20L28.75 27.5" stroke="#9FA4B7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>',
    responsive: [
        {
            breakpoint: 1023,
            settings: { 
                slidesToShow: 2.1,
                infinite: false, 
            }
        },
        {
            breakpoint: 767,
            settings: { 
                slidesToShow: 2.1,
                infinite: false, 
            }
        },
        { 
            breakpoint: 575, 
            settings: {
                slidesToShow: 1.2,
                slidesToScroll: 1,
                infinite: false, 
            }
        }
    ],
  });

  $('.list-video-small').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: true,
    speed: 500,
    // infinite: false, 
    // autoplay: true,
    // dots: true,
    // fade: true,
    prevArrow: '<a href="javascript:void(0)" class="arr-lef"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.75 20H36.25" stroke="#9FA4B7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M11.7803 13.0303C12.0732 12.7374 12.0732 12.2626 11.7803 11.9697C11.4874 11.6768 11.0126 11.6768 10.7197 11.9697L11.7803 13.0303ZM3.75 20L3.21967 19.4697C2.92678 19.7626 2.92678 20.2374 3.21967 20.5303L3.75 20ZM10.7197 28.0303C11.0126 28.3232 11.4874 28.3232 11.7803 28.0303C12.0732 27.7374 12.0732 27.2626 11.7803 26.9697L10.7197 28.0303ZM10.7197 11.9697L3.21967 19.4697L4.28033 20.5303L11.7803 13.0303L10.7197 11.9697ZM3.21967 20.5303L10.7197 28.0303L11.7803 26.9697L4.28033 19.4697L3.21967 20.5303Z" fill="#9FA4B7"/></svg></a>',
    nextArrow: '<a href="javascript:void(0)" class="arr-right"><svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M3.75 20H36.25" stroke="#9FA4B7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/><path d="M28.75 12.5L36.25 20L28.75 27.5" stroke="#9FA4B7" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg></a>',
  
  });



  $('.item-tab-step').click(function(){
    var tab_id = $(this).attr('data-tab');
    $('.item-tab-step').removeClass('active');
    $('.tab-content').removeClass('active');
    $(this).addClass('active');
    $("#"+tab_id).addClass('active');
  })

  $('.tab-faq a').click(function(){
    var tab_id = $(this).attr('data-tab');
    $('.tab-faq a').removeClass('active');
    $('.content-tab-faq').removeClass('active');
    $(this).addClass('active');
    $("#"+tab_id).addClass('active');
  })


  $('.title-quesstion').click(function(){
    $('.title-quesstion').removeClass('active');
    if ( $(this).next().is( ":hidden" ) ) {
      $('.answer').slideUp('selected');
      $(this).next().slideDown('selected');
      $(this).addClass('active');
    } else {
      $(this).next().slideUp('selected');
      $(this).removeClass('active');
    };
  });



  var $fileInput = $('.file-input');
  var $droparea = $('.file-drop-area');

  // highlight drag area
  $fileInput.on('dragenter focus click', function() {
    $droparea.addClass('is-active');
  });

  // back to normal state
  $fileInput.on('dragleave blur drop', function() {
    $droparea.removeClass('is-active');
  });

  // change inner text
  $fileInput.on('change', function() {
    var filesCount = $(this)[0].files.length;
    var $textContainer = $('.filename');

    if (filesCount === 1) {
      // if single file is selected, show file name
      var fileName = $(this).val().split('\\').pop();
      $textContainer.text(fileName);
    } else {
      // otherwise show number of files
      $textContainer.text(filesCount + ' files selected');
    }
  });

  $('#you_are').on('change', function() {

      if ( this.value == 'hidethis')
      {
        $("#select-show").addClass('show-choose');
      }
      else
      {
        $("#select-show").removeClass('show-choose');
      }
    });

  if($(window).innerWidth() >= 1024){
    $(window).bind('scroll', function() {
        var navHeight = $( window ).height();
         if ($(window).scrollTop() > 1) {
             $('.c-header').addClass('fixed'); 
         }
         else {
             $('.c-header').removeClass('fixed');
         }
    });

    var prev = 0;
    var $window = $(window);
    var nav = $('.c-header, main');
    $window.on('scroll', function(){
      var scrollTop = $window.scrollTop();
      nav.toggleClass('menu_fixed', scrollTop > prev);
      prev = scrollTop;
    });

    $('.tab-step').slick({
        autoplay:false,
        arrow:false,
        vertical: true,
        // verticalSwiping: true, 
        dots: false,
        slidesToShow: 5,
        slidesToScroll: 1, 
        prevArrow: '',   
        nextArrow: '',   
        infinite: false,
        asNavFor: '.content-tab-step',
    }); 
    $('.content-tab-step').slick({
        autoplay:true,
        arrow:false,
        autoplaySpeed: 3000, 
        dots: false,
        slidesToShow: 1,
        slidesToScroll: 1, 
        fade: true,
        prevArrow: '',   
        nextArrow: '',  
        asNavFor: '.tab-step', 
    }); 
  }

  if($(window).innerWidth() <= 1023){ 
    $('.lsit-deal-hot .row').slick({
        autoplay:false,
        arrow:false,
        dots: false,
        slidesToShow: 2.3,
        slidesToScroll: 1, 
        infinite: false,
        // prevArrow: '',  
        // nextArrow: '',  
        responsive: [
          { 
              breakpoint: 767,
              settings: { 
                  slidesToShow: 2.3,
              }
          },
          { 
              breakpoint: 575, 
              settings: {
                  slidesToShow: 1.3,
                  slidesToScroll: 1
              }
          }
      ],
    }); 
    $('.lsit-cate-hot .row').slick({
        autoplay:false,
        arrow:false,
        dots: false,
        slidesToShow: 3.5,
        slidesToScroll: 1, 
        infinite: false,
        // prevArrow: '', 
        // nextArrow: '', 
        responsive: [
          {
              breakpoint: 767,
              settings: { 
                  slidesToShow: 1.6,
              }
          },
          { 
              breakpoint: 575, 
              settings: {
                  slidesToShow: 1.6,
                  slidesToScroll: 1
              }
          }
      ],
    }); 

    $('.item-tab-step').addClass('active');
    $('.lsit-partner-hot .row').slick({
        autoplay:false,
        arrow:false,
        dots: false,
        slidesToShow: 2.1,
        slidesToScroll: 1, 
        infinite: false,
        // prevArrow: '', 
        // nextArrow: '', 
        responsive: [
          {
              breakpoint: 767,
              settings: { 
                  slidesToShow: 2.3,
              }
          },
          { 
              breakpoint: 575, 
              settings: {
                  slidesToShow: 1.3,
                  slidesToScroll: 1
              }
          }
      ],
    }); 

    $('.content-tab-step').slick({
      asNavFor: '.tab-step',
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      speed: 500,
      fade: true,
      cssEase: 'linear',
      dots: false,
      infinite: false,
    });
    $('.tab-step').slick({
      asNavFor: '.content-tab-step',
      arrows: false,
      dots: true,
      autoplay: false,
      autoplaySpeed: 3500,
      slidesToShow: 1.2,
      infinite: false,
      responsive: [
          {
              breakpoint: 767,
              settings: { 
                  slidesToShow: 1,
              }
          }
      ],
    });

    $('.list-payment .row').slick({
        autoplay:false,
        arrow:false,
        dots: true,
        slidesToShow: 2.2,
        slidesToScroll: 1, 
        infinite: false,
        prevArrow: '',   
        nextArrow: '',   
        responsive: [
          { 
              breakpoint: 767, 
              settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1, 
              }
          }
      ],
    }); 

    $('.file-drop-area a span').text('Tải lên từ máy tính bảng');
  }

  if($(window).innerWidth() <= 767){
    $('.file-drop-area a span').text('Tải lên từ điện thoại');
    $('.c-footer .title-nav').click(function () {
      $(this).toggleClass('active');
      $(this).next().slideToggle(200);
    });
  }


  $(".data-popup").click(function (argument) {
    var address = $(this).data('address');
    var title = $(this).data('title');
    var offers = $(this).data('offers');
    var content = $(this).data('content');
    var type = $(this).data('type');
    var department = $(this).data('department');
    $('.typejob').text(type);
    $('.department').text(department);
    $('.address').text(address);
    $('.offers').text(offers);
    $('.postion_popup').val(title);
    $('.txt-title-job').text(title);
    $('.txt-detail-job').html(content);
})
});


// $(document).ready(function(){
//   $('#sendUrl').click(function(){
//     function getId(url) {
//     var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
//     var match = url.match(regExp);

//     if (match && match[2].length == 11) {
//         return match[2];
//     } else {
//         return 'error';
//     }
//   }
//     var videoId = $('#url').val();
//     var myId = getId(videoId);

//     $('#videoSrc').html(myId);
//     $('#myVideo').html('<iframe src="https://www.youtube.com/embed/' + myId + '?rel=0&enablejsapi=1&autoplay=1=1&mute=1"></iframe>'); 
//   })

//     setTimeout(function(){
//       $('#sendUrl').click();
//     }, 10);

// }); 
 

console.clear();

"use strict";
const iframeVideoPlugin = { // Iframe Video On Scroll
    init() {
        this.videoEls = Array.from(document.querySelectorAll(
            'iframe[src*="facebook.com/plugins/video"], ' +
            'iframe[src*="youtube.com"], ' +
            'iframe[src*="vimeo.com"], ' +
            'iframe[src*="dailymotion.com"], ' +
            'iframe[src*="hurriyet.com.tr/video"], ' +
            'iframe[src*="twitch.tv"]'
        )); // select supported iframe Nodes and convert them into ordinary Array (so we can push more elements on the fly)

        this.videoElsTwitter = this.videoElsTwitter || []; // twitter elements are pushed into this array
        Array.prototype.push.apply(this.videoEls, this.videoElsTwitter); // twitter nodeList array is appended to Iframe NodeList array
        this.fraction = 0.25; // VideoArea fraction to decide whether video is in ViewPort or not
        this.waiting = false;
        this.waitingThreshold = 500; // increses performance upon onScroll
        this.notSupportedVideosRegex = '(facebook.com)|(twitch.tv)'; // not-supported video iframes will be handled by an another method
        this.autoStartRegex = /(autostart=true)|(autoplay=1)|(autoPlay)/g; // auto-play parameters regEx, different video platforms uses different parameter

        // Parsing and categorizing the iframes videos
        if (this.videoEls.length > 0) {
            Array.prototype.forEach.call(this.videoEls, videoEl => {

                if (videoEl.src.search(this.notSupportedVideosRegex) > 0) { // check if supported or not supported video
                    if (videoEl.src.search('twitch.tv') > 0 && videoEl.src.search('autoplay=true') < 0) { // twitch exception
                        videoEl.classList.add('playing');
                    }
                    this.notSupportedVideosClickDetect(videoEl);
                } else if (videoEl.src.search(this.autoStartRegex) > 0) {
                    videoEl.classList.add('playing');
                    videoEl.classList.add('rhd-auto-play');
                    videoEl.src = videoEl.src.replace(this.autoStartRegex, 'autostart=false');
                    videoEl.onload = () => {
                        videoEl.classList.remove('playing');
                        this.scrollHandler();
                    }
                }
            });

            // Remove listeners -- in case init() is called multiple times, the previously attached events have to be removed.
            window.removeEventListener('scroll', this.scrollHandler);
            window.removeEventListener('resize', this.scrollHandler); // OPTIONAL
            window.removeEventListener('load', this.scrollHandler); // OPTIONAL

            // Add listeners
            window.addEventListener('scroll', this.scrollHandler, false);
            window.addEventListener('resize', this.scrollHandler, false); // OPTIONAL
            window.addEventListener('load', this.scrollHandler, false); // OPTIONAL
        }
    },

    scrollHandler: () => { // this method is attached to Window by Arrow Function; so it can be removed safely by .removeEventListener()
        if (iframeVideoPlugin.waiting) {
            return;
        }
        iframeVideoPlugin.waiting = true;
        clearTimeout(iframeVideoPlugin.endScrollHandle);
        iframeVideoPlugin.scrollHandlerHelper();
        setTimeout(() => {
            iframeVideoPlugin.waiting = false;
        }, iframeVideoPlugin.waitingThreshold);
        iframeVideoPlugin.endScrollHandle = setTimeout(() => {
            iframeVideoPlugin.scrollHandlerHelper();
        }, iframeVideoPlugin.waitingThreshold);
    },

    scrollHandlerHelper() {
        Array.prototype.forEach.call(this.videoEls, videoEl => {
            this.isInViewPort(videoEl);
        });
    },

    notSupportedVideosClickDetect(videoEl) {
        videoEl.addEventListener('mouseenter', function () {
            videoEl.classList.add('iframe-hovered');
        });
        videoEl.addEventListener('mouseleave', function () {
            videoEl.classList.remove('iframe-hovered');
            window.focus();
        });
        window.addEventListener('blur', this.notSupportedVideosWindowBlurHandler, false);
        window.focus();
    },

    notSupportedVideosStopPlaying(videoEl) {
        if (videoEl.src.search('twitch.tv') > 0 && videoEl.src.search('autoplay') < 0) {
            videoEl.src = videoEl.src + '&autoplay=false';
        } else {
            videoEl.src = videoEl.src;
        }
        videoEl.classList.remove('playing');
    },

    notSupportedVideosWindowBlurHandler() {
        var hoveredIframes = document.querySelector('.iframe-hovered');
        if (hoveredIframes) {
            hoveredIframes.classList.add('playing');
        }
    },

    messageFn(action, src) {
        if (src.search("vimeo") > 0) { // case for Vimeo
            return JSON.stringify({
                method: action
            });
        } else if (src.search("youtube") > 0) { // case for youTube
            return JSON.stringify({
                event: 'command',
                func: action + 'Video'
            });
        } else { // case for other video services (hurriyet videos, dailymotion etc..)
            return action;
        }
    },

    isInViewPort(videoEl) {
        let percentVisible = this.fraction,
            elemRect = videoEl.getBoundingClientRect(),
            elemTop = elemRect.top,
            elemBottom = elemRect.bottom,
            elemHeight = elemRect.height,
            overhang = elemHeight * (1 - percentVisible),

            isVisible = (elemTop >= -overhang) && (elemBottom <= window.innerHeight + overhang);

        if (isVisible) { // video is in the ViewPort, play it
            if (!videoEl.classList.contains('playing') && videoEl.src.search(this.notSupportedVideosRegex) < 0) {
                videoEl.classList.add('playing');
                if (videoEl.classList.contains('rhd-auto-play')) {
                    videoEl.contentWindow.postMessage(this.messageFn('play', videoEl.src), '*');
                }
            }
        } else { // video is outside the ViewPort, pause
            if (videoEl.classList.contains('playing')) {
                if (videoEl.src.search(this.notSupportedVideosRegex) > 0) { // stop only not supported iframes
                    this.notSupportedVideosStopPlaying(videoEl);
                } else if (videoEl.classList.contains('rhd-twitter-video')) { // stop only twitter videos
                    videoEl.classList.remove('playing');
                    let isVideoIframeInIframe = videoEl.contentDocument.querySelector('iframe');
                    if (isVideoIframeInIframe) { // if twitter video is playing
                        let iframeSrc = isVideoIframeInIframe.src;
                        iframeSrc = iframeSrc.split('?')[0];
                        isVideoIframeInIframe.src = iframeSrc;
                    }
                } else { // pause supported iframes
                    videoEl.classList.remove('playing');
                    videoEl.contentWindow.postMessage(this.messageFn('pause', videoEl.src), '*');
                }
            }
        }
    },
};

const loadJS = (source, callback) => { // Fn to load JS files and append to <head></head>
    let scriptEl = document.createElement('script'),
        head = document.getElementsByTagName('head')[0];
    scriptEl.async = 1;
    scriptEl.defer = 1;
    scriptEl.onload = scriptEl.onreadystatechange = function (_, isAbort) {
        if (isAbort || !scriptEl.readyState || /loaded|complete/.test(scriptEl.readyState)) {
            scriptEl.onload = scriptEl.onreadystatechange = null;
            scriptEl = undefined;
            if (!isAbort) {
                if (callback) callback();
            }
        }
    };
    scriptEl.src = source;
    head.appendChild(scriptEl);
};

const checkInstagramEmbed = () => {
    let instagramEl = document.querySelectorAll('.instagram-media');

    if (instagramEl.length > 0) {
        if (typeof (window.instgrm) !== 'undefined') {
            window.instgrm.Embeds.process();
        } else {
            loadJS('https://www.instagram.com/embed.js');
        }
    }
};

const twitterCallback = () => {
    twttr.events.bind('rendered', (event) => {
        if (event.target.classList.contains('twitter-video')) {
            let twitterVideoIframe = event.target.querySelector('iframe');
            twitterVideoIframe.classList.add('rhd-twitter-video');
            iframeVideoPlugin.videoElsTwitter.push(twitterVideoIframe); // push the Twitter element
            iframeVideoPlugin.init(); // re-init the iframe scroll watcher, because a new twitter element has added
        }
    }
                     );
};

const checkTwitterEmbed = () => {
    let twitterEls = document.querySelectorAll('.twitter-video, .twitter-tweet');

    if (twitterEls.length > 0) {
        if (typeof (window.twttr) !== 'undefined') {
            window.twttr.widgets.load();
        } else {
            loadJS('https://platform.twitter.com/widgets.js', twitterCallback);
        }
    }
};

document.addEventListener("DOMContentLoaded", () => {
    checkInstagramEmbed();
    checkTwitterEmbed();
    iframeVideoPlugin.init();
});

