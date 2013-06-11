 // main.js
$(document).ready(function() {

	// $('.dropdown-toggle').dropdown();

	$('body')
    .ajaxStart(function() {
        $(this).hide();
    })
    .ajaxStop(function() {
        $(this).show();
    })
;

(function(){
  var ua = navigator.userAgent,
    isMobileWebkit = /WebKit/.test(ua) && /Mobile/.test(ua);

  // if (isMobileWebkit) {
  //   $('html').addClass('mobile');
  // } else 
    $('html').addClass('mobile');
$('.navigation').hide();

if(document.outerWidth >500) {
	// console.log(window.outerHeight)
$('.slide').css('height', window.outerHeight);
// console.log($('.slide').css('height'));
$('.navigation').show();
  $(function(){
    var iScrollInstance;


	    if (isMobileWebkit) {
	     // iScrollInstance = new iScroll('wrapper');

	      $('#scroller').stellar({
	        scrollProperty: 'transform',
	        positionProperty: 'transform',
	        horizontalScrolling: false,
	        verticalOffset: 150
	      });
	    } else {
	      $.stellar({
	        horizontalScrolling: false,
	        verticalOffset: 150
	      });
	    }
	  });

	if(!isMobileWebkit){
		firstflash = '<object data="img/salad-videoSM.swf" height="240" width="427"></object><img src="img/glare.png" width="429px" height="336px" data-stellar-ratio="1" data-stellar-vertical-offset="0"alt="">';
		$('[role="can-your-menu-do-this"] h1').after(firstflash);

		Secondflash = '<object data="img/7featureditems.swf" height="334" width="425"></object><img src="img/inner-shadow.png" width="429px" height="336px" data-stellar-ratio="1" data-stellar-vertical-offset="0"alt="">';
		$('[role="drive-revenue"] h1').after(Secondflash);

		lastSessionImages = ' <img src="img/red_crayon.png" width="300px" height="150px" data-stellar-ratio="4" data-stellar-vertical-offset="0"alt=""><img src="img/mug.png" width="245px" height="250px" data-stellar-ratio="2" data-stellar-vertical-offset="0"alt=""><img src="img/blue_crayon.png" width="300px" height="87px" data-stellar-ratio="3" data-stellar-vertical-offset="0"alt=""><img src="img/newspaper.png" width="300px" height="266px" data-stellar-ratio="5" data-stellar-vertical-offset="0"alt="">';
		$('[role="child-play"] h1').after(lastSessionImages);

		ccd = '<img src="img/credit-card.png" width="100px" height="143px" data-stellar-ratio="4" alt="">';
		$('[role="freedom-and-convenience"] h1').after(ccd);

		check = '<img src="img/guest-check.png" width="351px" height="220px" data-stellar-ratio="4" alt=""> ';
		$('[role="the-need-for-speed"] img').after(check);
	}

var scroller = new Scroller(render, {
		scrollingX: false,
		snapping: true
	});
	
	
	// Setup Scroller

	var rect = container.getBoundingClientRect();

	scroller.setPosition(rect.left+container.clientLeft, rect.top+container.clientTop);
	scroller.setDimensions(container.clientWidth, container.clientHeight, content.offsetWidth, content.offsetHeight);
	scroller.setSnapSize(container.clientHeight, container.clientHeight);
	
	// Event Handler
	
	if ('ontouchstart' in window) {
		
		container.addEventListener("touchstart", function(e) {
			// Don't react if initial down happens on a form element
			if (e.target.tagName.match(/input|textarea|select/i)) {
				return;
			}
			
			scroller.doTouchStart(e.touches, e.timeStamp);
			e.preventDefault();
		}, false);

		document.addEventListener("touchmove", function(e) {
			scroller.doTouchMove(e.touches, e.timeStamp);
		}, false);

		document.addEventListener("touchend", function(e) {
			scroller.doTouchEnd(e.timeStamp);
		}, false);
		
	} else {
		
		var mousedown = false;

		container.addEventListener("mousedown", function(e) {
			// Don't react if initial down happens on a form element
			if (e.target.tagName.match(/input|textarea|select/i)) {
				return;
			}
			
			scroller.doTouchStart([{
				pageX: e.pageX,
				pageY: e.pageY
			}], e.timeStamp);

			mousedown = true;
		}, false);

		document.addEventListener("mousemove", function(e) {
			if (!mousedown) {
				return;
			}

			scroller.doTouchMove([{
				pageX: e.pageX,
				pageY: e.pageY
			}], e.timeStamp);

			mousedown = true;
		}, false);

		document.addEventListener("mouseup", function(e) {
			if (!mousedown) {
				return;
			}

			scroller.doTouchEnd(e.timeStamp);

			mousedown = false;
		}, false);
		
	}



}

})();

	// navigation bar always top :)
	// $(document).scroll(function() {
	// 	// If has not activated (has no attribute "data-top"
	// 	if (!$('.menu').attr('data-top')) {
	// 		// If already fixed, then do nothing
	// 		if ($('.menu').hasClass('menu-fixed')) return;
	// 		// Remember top position
	// 		var offset = $('.menu').offset()
	// 		$('.menu').attr('data-top', offset.top);
	// 	}

	// 	if ($('.menu').attr('data-top') - $('.menu').outerHeight() <= $(this).scrollTop()) $('.menu').addClass('menu-fixed');
	// 	else $('.menu').removeClass('menu-fixed');
	// });

	$(document).scroll(function() {
		// console.log(window.scrollY + " < " + ($(window).height()/3));
		
		if (!$('.goBackUp').is(':visible') ) 
			$(".goBackUp").show();

		if (window.scrollY < ($(window).height()/3))
			$(".goBackUp").hide();
	});

	$(".goBackUp").click(function() {
		var JumpTo = parseInt(0, 10);
		$("html, body").animate({
			scrollTop: "" + JumpTo + "px"
		}, "slow",function(){$(".goBackUp").hide();});

	});

	$(".menu").hover(function() {
		if (500 > window.outerWidth) {
			$('.menu ul').addClass("menu-isHover")
		} else {
			$('.menu ul').removeClass("menu-isHover")
		}
	}, function() {
		$(this).removeClass("menu-isHover")
	});


	$('.menu li').click(function() {
		if ($(this).find('.dropdown').is(":hidden")) {
			$(this).find('.dropdown').slideDown("fast");
			} else {
			$(this).find('.dropdown').slideUp("fast");
			}
	});
});