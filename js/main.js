
//Scrool smothly anchor tags
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
      e.preventDefault();
      document.querySelector(this.getAttribute('href')).scrollIntoView({
          behavior: 'smooth'
      });
  });
});

$(window).on('load', () => {
  $('.spinner-container').fadeOut();    
});

gsap.registerPlugin(ScrollTrigger);

$(document).ready(() => {
  // let resizeId;
  let wWidth = $(window).width();
  let navState = false;
  const $header = $('.page-header');
  const $nav = $header.find('.nav');
  const $parentLi = $nav.find('.menu-item-has-children');
  const $parentLinks = $parentLi.children('a');
  const $subMenu = $parentLi.children('.sub-menu');
  let isObserver = true;
  let observer;
  // let controller = new ScrollMagic.Controller();
  let isTouch;

  if (
    !('IntersectionObserver' in window) ||
    !('IntersectionObserverEntry' in window) ||
    !('isIntersecting' in window.IntersectionObserverEntry.prototype)
  ) {
    isObserver = false;
    $('html').removeClass('is-observer');
  }

  if (isObserver) {
    observer = new IntersectionObserver(
      (entries) => {
        entries.forEach((entry) => {
          if (entry.isIntersecting) {
            entry.target.classList.add('is-visible');
            observer.unobserve(entry.target);
          }
        });
      },
      { rootMargin: '0px 0px -15% 0px' }
    );
  }

  function isTouchDevice() {
    const prefixes = ' -webkit- -moz- -o- -ms- '.split(' ');
    const mq = (query) => {
      return window.matchMedia(query).matches;
    };

    if (
      'ontouchstart' in window ||
      // eslint-disable-next-line no-undef
      (window.DocumentTouch && document instanceof DocumentTouch)
    ) {
      return true;
    }

    // include the 'heartz' as a way to have a non matching MQ to help terminate the join
    // https://git.io/vznFH
    const query = ['(', prefixes.join('touch-enabled),('), 'heartz', ')'].join(
      ''
    );
    return mq(query);
  }

  if (isTouchDevice()) {
    isTouch = true;
    $('html').addClass('is-touch');
  }

  // Returns a function, that, as long as it continues to be invoked, will not
  // be triggered. The function will be called after it stops being called for
  // N milliseconds. If `immediate` is passed, trigger the function on the
  // leading edge, instead of the trailing.
  function debounce(func, wait, immediate, ...args) {
    let timeout;
    return function () {
      const context = this;
      const later = function () {
        timeout = null;
        if (!immediate) func.apply(context, args);
      };
      const callNow = immediate && !timeout;
      clearTimeout(timeout);
      timeout = setTimeout(later, wait);
      if (callNow) func.apply(context, args);
    };
  }

  // function once(fn, context) {
  //   var result;

  //   return function() {
  //     if (fn) {
  //       result = fn.apply(context || this, arguments);
  //       fn = null;
  //     }

  //     return result;
  //   };
  // }

  // // Usage
  // var canOnlyFireOnce = once(function() {
  //   console.log('Fired!');
  // });

  function disableScrolling() {
    if ($(document).height() > $(window).height()) {
      const scrollTop = $('html').scrollTop()
        ? $('html').scrollTop()
        : $('body').scrollTop(); // Works for Chrome, Firefox, IE...
      $('html').addClass('disable-scrolling').css('top', -scrollTop);
    }
  }

  function enableScrolling() {
    const scrollTop = parseInt($('html').css('top'), 10);
    $('html').removeClass('disable-scrolling');
    $('html,body').scrollTop(-scrollTop);
  }

  function updateNav() {
    $header.removeClass('is-opened');
    $parentLi.removeClass('is-active');
    $parentLinks.attr('aria-expanded', 'false');

    if (wWidth < 1280) {
      $subMenu.slideUp();
    } else {
      $subMenu.show();
    }
  }

  //slides scale on drag
  function scaleSlideOnDrag(slides){
    $(slides).mousedown(function(){
      $(slides).each(function(){
        $(this).addClass('slides-dragged')
      })
    });

    $(document).mouseup(function(){
        $(slides).each(function(){
          $(this).removeClass('slides-dragged')
        })
    })
  }

  function handleNavTouch(e) {
    const $item = $(e.target);
    const $submenu = $item.siblings('.sub-menu');

    if ($item.parent().hasClass('is-active')) {
      $item.attr('aria-expanded', 'false').parent().removeClass('is-active');

      if (wWidth < 1280) {
        $submenu.slideUp();
      }
    } else {
      $parentLi.removeClass('is-active');
      $item.attr('aria-expanded', 'true').parent().addClass('is-active');

      if (wWidth < 1280) {
        $subMenu.slideUp();
        $submenu.slideDown();
      }
    }
  }

  function bindEvents() {
    const $subButton = $('.subnavbtn')
    const $cont = $('.js-container')

    $(document).click(function(e) {
      if (!$(e.target).is($subButton)) {
          $cont.removeClass('active')  
        }
    });

    
    // $subButton.on('click', function(){
    //   // $(this).parent().removeClass('active')
    //   $($cont).not($(this).parent()).removeClass('active');
    //   $(this).parent().toggleClass('active')
    // })

    $subButton.on('mouseenter', function(){
      // $(this).parent().removeClass('active')
      $($cont).not($(this).parent()).removeClass('active');
      $(this).parent().toggleClass('active')
    })



    $('.hamburger').on('click', () => {
      if (navState) {
        $header.removeClass('is-opened');
        enableScrolling();
      } else {
        $header.addClass('is-opened');
        disableScrolling();
      }
      navState = !navState;
    });

    $parentLinks.on('touchend', (e) => {
      e.preventDefault();
      handleNavTouch(e);
    });

    /* Navigation with tabbing */
    $(window).keyup((e) => {
      const code = e.keyCode ? e.keyCode : e.which;

      if (code === 9) {
        if ($parentLinks.filter(':focus').length) {
          handleNavTouch(e);
        } else if ($nav.find('>li>a:focus').length) {
          $parentLi.removeClass('is-active');

          if (wWidth < 1280) {
            $parentLi.children('.sub-menu').slideUp();
          }
        }
      }
    });

  }

  function initSM() {
    if (controller === null || controller === undefined) {
      // reinitialize ScrollMagic only if it is not already initialized
      controller = new ScrollMagic.Controller();
    }
  }

  const doneResizing = debounce(() => {
    const width = $(window).width();

    if (wWidth !== width) {
      wWidth = width;
    }
  }, 500);



  msieversion()

  //object fit for IE11
  function msieversion() {
    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE ");

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./)) 
    {
        let $container = $('.page-header-hero__image--img'),
        imgUrl = $container.find('img').prop('src');
        console.log(imgUrl);
        if (imgUrl) {
          $container.css('backgroundImage', 'url(' + imgUrl + ')').addClass('compat-object-fit');
          $container.find('img').hide();        
      }  
      }
      else  
      {
          return;
      }
  }




  function cursorFollow() {
    var isTouch = function() {
      if ( ( 'ontouchstart' in window ) || window.DocumentTouch && document instanceof DocumentTouch ) {
        return true;
      }
    }

    if ( ! isTouch() ) {
      var $cursor = $('.cursor');

      $(window).on('mousemove', function(e) {
        TweenLite.to($cursor, 0.3, {
          left: e.clientX,
          top: e.clientY
        });
      });

      $(document).on('mouseenter', '.draggable' , function() {
        $cursor.addClass('drag');
      });

      $(document).on('mouseenter', 'a, button, input[type="submit"], .hamburger, .clickable' , function() {
        $cursor.removeClass('drag');
        $cursor.addClass('active');
      });

      $(document).on('mouseleave', '.draggable' , function() {
        $cursor.removeClass('drag');
      });

      $(document).on('mouseleave', 'a, button, input[type="submit"], .hamburger, .clickable', function() {
        $cursor.removeClass('active');
        if ($('.draggable:hover').length != 0) {
          $cursor.addClass('drag');
      }
      });
    }
  }

  function initHero(){
    const $image = $('.page-header-hero__image img');
    const $text = $('.page-header-hero__text-container')
    const $frost = $('.page-header-hero__text-wrap')
    const $arrow = $('.page-header-hero__arrow')

    $arrow.on('click', function(){
      var n = $(window).height();
      $('html, body').animate({ scrollTop: n }, 50);
    })



    if (!$image.length) return;

    $(window).scroll(function() {
      var scroll = $(window).scrollTop();

      if(scroll <= 1000){
        let scrollNew = window.pageYOffset;
        let val = scroll / 2
        let zoom = scroll /5500        
        $image.css("transform", `translateY(${val}px) scale(${1 + zoom})`);
        
        if($(window).width() <= 768){
          $text.css("transform", `translateY( -${val  * 9}px)`);
          $frost.css("transform", `translateY( -${val  * 5}px)`);
        }
      }
    });
  }
  

  function initSlider(){
    const $wrapper = $('.news-carousel__slider-wrapper')
    const $leftBtn = $('.news-carousel__button-left');
    const $rightBtn = $('.news-carousel__button-right');
    const $allSlides = $('.news-carousel__slide-img');

    if (!$wrapper.length) return;

    $wrapper.each(function(){
      let $thisRange = $(this).find('.news-carousel__slider');
      let $thisCarousel = $(this).find('.news-carousel__slide-container');
      let $currentRange = $(this).find('.range__current')
      let $count = $(this).find('.news-carousel__slide-img')
      let $slider = $(this).find('.news-carousel__range-slider')
      let $buttons = $(this).prev().find('.news-carousel__buttons')
      console.log($count.length);

      if($(window).width() >= 900){
        $thisRange[0].max = $thisCarousel.children().length - 1
        $(this).find('.range__max').text($thisCarousel.children().length -1) 

        if($count.length <= 2){
          console.log('smaller');
          $($slider).hide()
          $($buttons).hide()
        }
      }
      else{
        $thisRange[0].max = $thisCarousel.children().length 
        $(this).find('.range__max').text($thisCarousel.children().length)

        if($count.length <= 1){
          console.log('smaller');
          $($slider).hide()
          $($buttons).hide()
        }
      } 

      $thisRange.on('input', function() {
        let rangeVal = $thisRange[0].value;  
        $($thisCarousel).slick('slickGoTo',  rangeVal -1);
        $currentRange.text(rangeVal) 
        $($thisCarousel).find(' .slick-slide[data-slick-index=' + rangeVal + 1 + ']').addClass("selected");
        console.log($('.news-carousel__slide-container .slick-slide[data-slick-index=' + rangeVal + ']'));
      });

      //get current slide and add value to range slider
      $(this).find('.news-carousel__slide-container').on('afterChange', function() {
        let dataId = parseInt($thisCarousel.find('.slick-current').attr("data-slick-index"));  
        $thisRange[0].value = dataId +1;
        console.log(dataId);
        $currentRange.text(dataId +1) 
      }); 

      $leftBtn.on('click', function(){
        let dataId = parseInt($thisCarousel.find( '.slick-current').attr("data-slick-index"));  
        $($thisCarousel).slick('slickGoTo', dataId - 1);
      });
  
      // right arrow click current slide +1
      $rightBtn.on('click', function(){
        let dataId = parseInt($thisCarousel.find( '.slick-current').attr("data-slick-index")); 
        $($thisCarousel).slick('slickGoTo', dataId + 1);
      });

      $($thisCarousel).slick({
        infinite: false,
        speed: 300,
        slidesToShow: 2,
        rows: 0,
        arrows: false,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 900, 
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    })

    scaleSlideOnDrag($allSlides)
    $('.range__current').text(1) 

  }

  function initImageRight(){
    const $carousel = $('.image-right-and-text__carousel')
    const $allSlides = $('.image-right-and-text__slide-img')

    if (!$allSlides.length) return;

    scaleSlideOnDrag($allSlides)

    setTimeout(() => { 
      console.log('refreshed');
      $($carousel).slick('refresh'); 
    }, 2000);

    $($carousel).slick({
      infinite: false,
      dots: false,
      prevArrow: false,
      nextArrow: false,
      adaptiveHeight: false,
      dots: true
    });
  }

  function initImageLeft(){
    const $carousel = $('.image-left-and-text__carousel');
    const $allSlides = $('.image-left-and-text__slide-img')

    if (!$allSlides.length) return;

    scaleSlideOnDrag($allSlides)

    setTimeout(() => { 
      console.log('refreshed');
      $($carousel).slick('refresh'); 
    }, 2000);

    $($carousel).slick({
      infinite: false,
      dots: false,
      prevArrow: false,
      nextArrow: false,
      adaptiveHeight: false,
      dots: true
    });
  }

  function initCaseStudy(){

    const $counts = $('.case-study__stat-container h1');
    const $plus = $('.case-study__stat-container h2');

    if (!$counts.length) return;

    ScrollTrigger.create({
      trigger: ".case-study__stat-container",
      start: "top bottom",
      onEnter: () => startCount()
    });
  
    function startCount(){
      $plus.hide()
      $($counts).each(function() {
        var $this = $(this),
            countTo = $this.text();
  
        $({ countNum: 1}).animate({
          countNum: countTo
        },    
        {    
          duration: 2500,
          easing:'linear',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum);
            $plus.show()
          }
        });  
      });
    }
  }

  function initCaseStudyStats(){
    const $counts = $('.case-study-stats-module__block h1');

    if (!$counts.length) return;

    ScrollTrigger.create({
      trigger: ".case-study-stats-module__block",
      start: "top bottom",
      onEnter: () => startCount()
    });

    function startCount(){
      $($counts).each(function() {
        var $this = $(this),
            countTo = $this.text();
  
        $({ countNum: 1}).animate({
          countNum: countTo
        },    
        {    
          duration: 2500,
          easing:'linear',
          step: function() {
            $this.text(Math.floor(this.countNum));
          },
          complete: function() {
            $this.text(this.countNum); 
          }
        });  
      });
    }

  }

  function initHomeSports(){
    const $carouselLeft = $('.home-page-sports__left-carousel');
    const $carouselRight = $('.home-page-sports__right-carousel');
    const $item = $('.home-page-sports-expand');

    if (!$item.length) return;

    $item.on('click', function(){     
      $($item).not($(this).parent()).removeClass('accordion-item--show');
      $(this).parent().toggleClass('accordion-item--show');
      $(this).parent().toggleClass('accordion-item--show--button');
    })

    $($carouselLeft).slick({
      infinite: false,
      dots: false,
      prevArrow: false,
      draggable: 'false',
      swipe: 'false',
      nextArrow: false,
      adaptiveHeight:true,
      dots: true
    });

    $($carouselRight).slick({
      infinite: false,
      draggable: 'false',
      swipe: 'false',
      dots: false,
      prevArrow: false,
      nextArrow: false,
      adaptiveHeight: true,
      dots: true
    });
  }

  function aboutPageTeam(){
    const $item = $('.about-page-team__accordion-item');

    if (!$item.length) return;

    $item.on('click', function(){     
      $($item).not($(this)).removeClass('about-page-team__accordion-item--show');
      $(this).toggleClass('about-page-team__accordion-item--show');
    })
  }

  function initCurrentVacancies(){
    const $accordianWrap = $('.current-vacancies__accordion-wrap')

    var request = new XMLHttpRequest()
    request.open('GET', 'https://apply.workable.com/api/v1/widget/accounts/synergysports?details=true', true)
    request.onload = function () {
      let data = JSON.parse(this.response)
    
      if (request.status >= 200 && request.status < 400) {

        data.jobs.forEach((jobs) => {
          let title = jobs.title
          let department = jobs.department ? jobs.department : 'General'
          let description = jobs.description
          let url = jobs.url                   

          $($accordianWrap).append(`
          <div class="current-vacancies__accordion-item">
          <div class="current-vacancies__accordion-item-show">
            <div class="current-vacancies__accordion-item-brand">
              <p>${department}</p>
              <h4>${title}</h4>
            </div>
            <div class="current-vacancies__accordion-item-button clickable">       
            <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35">
            <g id="plus" transform="translate(-1101.75 -6812.25)">
              <g id="Group_170" data-name="Group 170" transform="translate(1852.75 6556.25) rotate(90)">
                <g id="Ellipse_3" data-name="Ellipse 3" transform="translate(256 716)" fill="none" stroke="#0a1c2b" stroke-width="1">
                  <circle cx="17.5" cy="17.5" r="17.5" stroke="none"/>
                  <circle cx="17.5" cy="17.5" r="17" fill="none"/>
                </g>
              </g>
              <g id="Group_171" data-name="Group 171" transform="translate(-93 -39)">
                <line id="Line_179" data-name="Line 179" y2="15" transform="translate(1212.5 6861.5)" fill="none" stroke="#f83939" stroke-width="1"/>
                <line id="Line_180" data-name="Line 180" y2="15" transform="translate(1220 6869) rotate(90)" fill="none" stroke="#f83939" stroke-width="1"/>
              </g>
            </g>
          </svg>
            </div>
          </div>
          <div class="current-vacancies__accordion-item-hidden">
          ${description}
          <a class="btn" href="${url}">
          <p>APPLY</p>
          <div class="btn-ani-wrap">
            <svg class="btn-crc-left" width="19" height="35" viewBox="0 0 4.617 9.26">
              <path d="M38.282,94.752a4.5,4.5,0,0,0-.018,9" transform="translate(-33.666 -94.62)" fill="none" stroke="#0a1c2b" stroke-width="0.264"></path>
            </svg>
            <svg class="btn-arrow" width="50px" height="16px" viewBox="0 0 13.535 2.876">
              <g>
                <line x2="13.346" transform="translate(0 1.344)" fill="none" stroke="red" stroke-miterlimit="10" stroke-width="0.265"></line>
                <path d="M10.107-119.568l1.344,1.344-1.344,1.344" transform="translate(1.896 119.568)" fill="none" stroke="red" stroke-miterlimit="10" stroke-width="0.265"></path>
              </g>
            </svg>
            <svg class="btn-crc-right" width="19" height="35" viewBox="0 0 4.689 9.261">
              <path d="M38.258,94.752a4.5,4.5,0,1,1-.021,9" transform="translate(-38.235 -94.62)" fill="none" stroke="#0a1c2b" stroke-width="0.264"></path>
            </svg>
          </div></a>
          </div>
        </div>`)})
        getClickable()

      } else {
        console.log('error')
      }
    }

    request.send()

    function getClickable(){
      const $item = $('.current-vacancies__accordion-item');
      const $hidden = $('.current-vacancies__accordion-item-hidden')
      const $seeAll = $('.js-current-vacancies-expand-all')
      $($accordianWrap.children()).slice(3).hide();

      $seeAll.on('click', function(){
        console.log($accordianWrap.children());
        $($accordianWrap.children()).slice(3).show();
        $($seeAll).hide()
      })

      $item.on('click', function(){    
        $('.current-vacancies__accordion-item-hidden').not($(this.lastElementChild)).removeClass('active')
        $($item).not($(this)).removeClass('current-vacancies__accordion-item--show');
        $(this).toggleClass('current-vacancies__accordion-item--show');
        $(this.lastElementChild).toggleClass('active');
      }) 
    }
  }

  function  loadMorePosts(){
    const $btn = $('.news-feed__load-more');

    $btn.on('click', function(){
      $('.news-feed__inner').css({"max-height": "none"})
      $btn.hide();
    })
  }
  

  function initSportsList(){
    const $all = $('.sports-element-svg')
    const $dots = $('.sports-element-svg--dot')
    const $curveRight = $('.curve-right')
    const $curveLeft = $('.curve-left')
    const $arrows = $('.sports-element-svg--arrow')
    const $cards = $('.sports-animated-list__item-container')

    if (!$all.length) return;

    changer($cards, 'opacity', "0.2", "1", true, -125)
    changer($dots, 'fill', "white", "red", true, 0)
    changer($curveRight, 'stroke-dashoffset', '351', '0', false, -100)
    changer($curveRight, 'stroke', 'white', '#0A1C2B', false, -100)
    changer($curveLeft, 'stroke-dashoffset', '351', '0', false, -100)
    changer($curveLeft, 'stroke', 'white', '#0A1C2B', false, -100)
    changer($('.curve-left'), 'stroke-dashoffset', '-351', '0', false, 0)
    changer($('.curve-left'), 'stroke', 'white', '#0A1C2B', false, 0)
    changer($all, 'stroke', 'white', '#0A1C2B', false, 0)
    changer($all, 'stroke-dashoffset', '351', '0', false, 0)
    changer($arrows, 'stroke', 'white', '#0A1C2B', false, 150)
    

    function changer(el, cssProp, fromVal, toVal, remove, offset){

      $(window).scroll(function(){
        let scrollPos = $(document).scrollTop();
        let wHeight = $( window ).height()/1.6;

        if(scrollPos <= 1000){
          return
        } 
        el.each(function(){
          let scrollPositonEl = $(this).offset();
          let top = scrollPositonEl.top
  
          // element is in view
          if ((scrollPos + offset) >= (top - wHeight)) {
            $(this).css(cssProp, toVal)        
          }

          if((scrollPos + offset) >= (top - (wHeight/2))){

            if(remove == true){
              $(this).css(cssProp, fromVal)  
            }
          }

          // element is down
          if ((scrollPos + offset) <= (top - wHeight)) {
            $(this).css(cssProp, fromVal)        
          }
        })
      });
    }
  }

  function salesforceFormSubmit(){
    const btn = $('.js-huddle-btn-sales')
    const form = $('#js-sales-force-submit')

    $(btn).on('click', function(e){
      $(form).submit();
    })
  }

  function initWhatWeDo(){
    console.log('here');
    const $items = $('.what-we-do__item')
    

    $items.on('mouseover', function(){
      $(this).addClass('active')
      $(this).find('.what-we-do__item-inner').addClass('active')
    })

    $items.on('mouseout', function(){
      $(this).removeClass('active')
      $(this).find('.what-we-do__item-inner').removeClass('active')
    })
  }

  /* FUNCTION CALLS */
  /* ============= */
  bindEvents();
  initSlider();
  initCaseStudy();
  initImageRight();
  initImageLeft();
  initHomeSports();
  aboutPageTeam();
  initSportsList();
  initCaseStudyStats();
  cursorFollow();
  initHero();
  initCurrentVacancies();
  loadMorePosts();
  salesforceFormSubmit();
  initWhatWeDo();

  if (isObserver) {
    $('.js-visibility').each((i, el) => {
      observer.observe(el);
    });
  }

  $(window).on('scroll', () => {});

  $(window).on('load', () => {});

  $(window).on('resize', doneResizing);
});


