'use strict';

window.addEventListener('load', function () {
	load();


});


//load content 
function load(){
	document.body.classList.add('show');
	var preloader = document.querySelector('#preloader');

	preloader.classList.add('hide');
	setTimeout(function(){
		preloader.remove();
	}, 2000);
}


//parallax
$(window).scroll(function() {
	var top = $(this).scrollTop();
	var sec_1 = $('.hero').height();
	//console.log(top - sec_1);
	if ($(window).width() > 1100) {
		$('.desktop .about__content').css({
			'transform': 'translate(0,'+ (top - sec_1)/8 +'px)'
		});
		$('.desktop .about__img').css({
			'top': -(top - sec_1)/4
		});
	}
});

'use strict';

window.addEventListener('load', function () {
  swiperSlider();
  //getMensory();


/*swiper slider*/
function swiperSlider() {
 // == hero slider
 runSliderHero();
 function runSliderHero(){
  var herosliderRun = new Swiper ('.heroSlider', {
    effect:'fade',
    slidesPerView:1,
    slidesPerGroup:1,
    speed: 1500,
    //initialSlide:1,
    loop: true,
    autoplay: {
      delay: 5000,
      disableOnInteraction: false,
    },
    navigation: {
      nextEl: '.hero-arr-next',
      prevEl: '.hero-arr-prev',
    },
    pagination: {
      el: '.hero-swiper-pagination',
      type: 'bullets',
      clickable: true,
    },
  });
 };

 // == recipes slider
 runSliderRecipes();
 function runSliderRecipes(){
  var resipesliderRun = new Swiper ('.recipeSlider', {
    slidesPerView: 3,
    slidesPerColumn: 2,
    //slidesPerGroup:2,
    speed: 1500,
    //initialSlide:1,
    //loop: true,
    navigation: {
      nextEl: '.recipes-arr-next',
      prevEl: '.recipes-arr-prev',
    },
    breakpoints: {
      1100: {
        slidesPerView: 2,
        slidesPerColumn: 2,
        //slidesPerGroup:2,
      },
      768: {
        slidesPerView: 2,
        slidesPerColumn: 2,
        slidesPerGroup:1,
        pagination: {
          el: '.recipes-swiper-pagination',
          type: 'bullets',
          clickable: true,
        },
      },
      640: {
        slidesPerView: 1,
        slidesPerColumn: 2,
        slidesPerGroup:1,
        pagination: {
          el: '.recipes-swiper-pagination',
          type: 'bullets',
          clickable: true,
        },
      },
    },
  });
 };


 // == product slider
 runSliderProduct();
 function runSliderProduct(){
  var productsliderRun = new Swiper ('.productSlider', {
    slidesPerView:2,
    slidesPerGroup:1,
    speed: 1000,
    //initialSlide:1,
    navigation: {
      nextEl: '.product-arr-next',
      prevEl: '.product-arr-prev',
    },
    breakpoints: {
      480: {
        slidesPerView:1,
      },
    },
  });
 };

}


});


//# sourceMappingURL=common.js.map
