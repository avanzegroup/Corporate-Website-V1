$(document).ready(function(e){


var currentIndex = 0,
  items = $('.slider div'),
  itemAmt = items.length;

function cycleItems() {
  var item = $('.slider div').eq(currentIndex);
  items.hide();

	$(item).children('h2').animate({left: '80px'}, 800);
	$(item).children('h4').animate({left: '90px'}, 1000);
  item.css('display','inline-block');
}

var autoSlide = setInterval(function() {
	$('.loader').animate({width: '100%'}, 5000, function(e){
		$('.loader').css('width', '0px');
			});

  currentIndex += 1;
  if (currentIndex > itemAmt - 1) {
    currentIndex = 0;
  }
  cycleItems();
}, 5000);

$('.next').click(function() {
  clearInterval(autoSlide);
  currentIndex += 1;
  if (currentIndex > itemAmt - 1) {
    currentIndex = 0;
  }
  cycleItems();
});

$('.prev').click(function() {
  clearInterval(autoSlide);
  currentIndex -= 1;
  if (currentIndex < 0) {
    currentIndex = itemAmt - 1;
  }
  cycleItems();
});



$(function(){
  // vars for testimonials carousel
  var $txtcarousel = $('#testimonial-list');
  var txtcount = $txtcarousel.children().length;
  var wrapwidth = (txtcount * 415) + 415; // 400px width for each testimonial item
  $txtcarousel.css('width',wrapwidth);
  var animtime = 750; // milliseconds for clients carousel
 
  // prev & next btns for testimonials
  $('#prv-testimonial').on('click', function(){
    var $last = $('#testimonial-list li:last');
    $last.remove().css({ 'margin-left': '-415px' });
    $('#testimonial-list li:first').before($last);
    $last.animate({ 'margin-left': '0px' }, animtime); 
  });
  
  $('#nxt-testimonial').on('click', function(){
    var $first = $('#testimonial-list li:first');
    $first.animate({ 'margin-left': '-415px' }, animtime, function() {
      $first.remove().css({ 'margin-left': '0px' });
      $('#testimonial-list li:last').after($first);
    });  
  });


  // vars for clients list carousel
  // http://stackoverflow.com/questions/6759494/jquery-function-definition-in-a-carousel-script
  var $clientcarousel = $('#clients-list');
  var clients = $clientcarousel.children().length;
  var clientwidth = (clients * 140); // 140px width for each client item 
  $clientcarousel.css('width',clientwidth);
  
  var rotating = true;
  var clientspeed = 1800;
  var seeclients = setInterval(rotateClients, clientspeed);
  
  $(document).on({
    mouseenter: function(){
      rotating = false; // turn off rotation when hovering
    },
    mouseleave: function(){
      rotating = true;
    }
  }, '#clients');
  
  function rotateClients() {
    if(rotating != false) {
      var $first = $('#clients-list li:first');
      $first.animate({ 'margin-left': '-140px' }, 600, function() {
        $first.remove().css({ 'margin-left': '0px' });
        $('#clients-list li:last').after($first);
      });
    }
  }
});



	/*	
	ul_slider($('.slider').children('.sld').first());*/

	function ul_slider(Objett)
	{
		$(Objett).slideDown(1000);
		$(Objett).children('h2').animate({left: '80px'}, 800);
		$(Objett).children('h4').animate({left: '90px'}, 1000);
		$(Objett).children('h2').animate({left: '70px'}, 300);
		$(Objett).children('h4').animate({left: '80px'}, 600);

		$('.loader').animate({width: '100%'}, 5000, function(e){


			$(Objett).children('h2').animate({left: '80px'}, 600);
			$(Objett).children('h2').animate({left: '-750px'}, 200);
			$(Objett).children('h4').animate({left: '98px'}, 800);
			$(Objett).children('h4').animate({left: '-750px'}, 300, function(){
				$(Objett).slideUp(1000);
				$('.loader').css('width', '0px');

				if(Objett.next().hasClass('sld'))
				{
					ul_slider(Objett.next());
				}
				else
				{
					ul_slider($('.slider').children('.sld').first());
				}


			});

		});


	};
	



if ($('#back-to-top').length) {
    var scrollTrigger = 100, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('#back-to-top').addClass('show');
            } else {
                $('#back-to-top').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}
});


$(function(){



    $('#back-to-bottom').on('click', function (e) {
        e.preventDefault();
        

          var tscroll = $(window).scrollTop();

  if(tscroll==0)
  {
    tscroll =0;
  }
  else
  {
    tscroll = tscroll;
  }
    tscroll = tscroll + 150;
        $('html, body').animate({
            scrollTop: tscroll
        }, 200);


    });



});

$(function(){
    $('.handle').on('click', function(){
    

    $('.nav-links').slideToggle('700');
    
  });
});





(function($) {
$.fn.menumaker = function(options) {  

 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);

 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 1040;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);

