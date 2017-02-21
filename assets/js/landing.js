$(document).ready(function(){
	$('#pro-hover').mouseenter(function(){
		$('.profile-1').addClass("pro-animate");
	});
	$('#pro-hover').mouseleave(function(){
		$('.profile-1').removeClass("pro-animate");
	});
});

$(document).ready(function(){
	$('.pro-img').mouseenter(function(){
		$('.pro-mask').addClass("show-pro-img");
		$('.pro-img-text').css('display','none');
	});
	$('.pro-img').mouseleave(function(){
		$('.pro-mask').removeClass("show-pro-img");
		$('.pro-img-text').css('display',' block');
	});
});

// $(document).ready(function(){
// 	$('.gambar-blog').mouseenter(function(this){
// 	 	$('.blog-mask').css({'display':' block','opacity':'.7'});
// 	});
// });

function maskOn(x){
	x.style.display ='block';
	x.style.opacity ='1';
}

$(document).ready(function(){
	$('body').scrollspy({target:".scrollspy",offset :50});

	$(".arrow-banner a").on('click',function(event){
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;

	 $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 800, function(){
   
        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
      });
		} //end if
	});
});

$(document).ready(function(){
	$('body').scrollspy({target:"#scrollspytabs",offset :50});

	$('.tabs li a').on('click', function(event){
		if (this.hash !== "") {
			event.preventDefault();
			var hash = this.hash;

			$('html, body').animate({
				scrollTop: $(hash).offset().top
			}, 800, function(){
				window.location.hash= hash;
			});
		}
		$("#scrollspytabs").on('activate.bs.scrollspy', function () {
               var currentSection = $(".tabs li.active").text();
               $("#spyevent").html("Current Item being viewed >> " + currentSection);
            })
	});
});

 $(document).ready(function(){
            removeSection = function(e) {
               $(e).parents("body").remove();
            
               $('[data-spy="scroll"]').each(function () {
                  var $spy = $(this).scrollspy('refresh')
               });
            }
         
            $("#scrollspytabs").scrollspy();
         
            // The event is fired when an item gets actived with the scrollspy
            $("#scrollspytabs").on('activate.bs.scrollspy', function () {
               var currentSection = $(".tabs li.active > a").text();
               $("#spyevent").html("Current Item being viewed >> " + currentSection);
            })
				
         });

 function openNav(){
 	document.getElementById('nav').style.left = '0';
 }
 function closeNav(){
 	var windowWidth = $(window).width();
 	document.getElementById('nav').style.left = '-20%';
 	if (windowWidth < 720) {
 		document.getElementById('nav').style.left = '-40%';
 	}
 }
function closeNavW(event){
 	if (event.target == document.getElementById('nav')) {
 		document.getElementById('nav').style.left = '-20%';
 	}
 }

 $(document).ready(function(){
    $('[data-toggle="tooltip"]').tooltip();
});

 function chargebattery() {
  var a;
  a = document.getElementById("charging");
  a.innerHTML = "&#xf244;";
  setTimeout(function () {
    a.innerHTML = "&#xf243;";
  }, 1000);
  setTimeout(function () {
    a.innerHTML = "&#xf242;";
  }, 2000);
  setTimeout(function () {
    a.innerHTML = "&#xf241;";
  }, 3000);
  setTimeout(function () {
    a.innerHTML = "&#xf240;";
  }, 4000);
}

$(document).ready(function(){
	var windowWidth = $(window).width();
	if (windowWidth < 720) {
		$("div").removeClass("wow fadeInRightBig fadeInLeftBig");
	} else if (windowWidth < 1000) {
		$("div").removeClass(" fadeInRightBig");
	}
});

