$(document).ready(function(){ 
	var nav = $('#header');   
	$(window).scroll(function () { 
		if ($(this).scrollTop() > 300) { 
			nav.addClass("menu-fixo"); 
			
		} else { 
			nav.removeClass("menu-fixo"); 
		} 
	});  
});

//BXSLIDER
$(document).ready(function(){
  $('.slider').bxSlider({
  	auto: true,
  	controls: false,
  	pager:false,
  });
});

$(document).ready(function(){

    $(".btn-filter").click(function(){
        var value = $(this).attr('data-filter');
        
        if(value == "all")
        {
            $('.filter').show('1000');

        }
        else
        {
          $(".filter").not('.'+value).hide('1000');
          $('.filter').filter('.'+value).show('1000');
            
        }
    });

    $(".btn-filter").click(function(){
    	$(this).addClass('active').siblings().removeClass('active');
    });
});

$('.owl-carousel').owlCarousel({
    rtl:true,
    loop:true,
    margin:20,
    autoplay:true,
    autoplayTimeout:1000,
    autoplayHoverPause:true,
    responsiveClass:true,
    responsive:{
        0:{
            items:1,
            nav:true
        },
        600:{
            items:3,
            nav:false
        },
        1000:{
            items:5,
            nav:true,
            loop:false
        }
    }
})
$('.dropdown-submenu > a').on("click", function(e) {
    var submenu = $(this);
    $('.dropdown-submenu .dropdown-menu').removeClass('show');
    submenu.next('.dropdown-menu').addClass('show');
    e.stopPropagation();
});

$('.dropdown').on("hidden.bs.dropdown", function() {
    // hide any open menus when parent closes
    $('.dropdown-menu.show').removeClass('show');
});

