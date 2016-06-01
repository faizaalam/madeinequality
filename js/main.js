$(function() {
	 new WOW().init();


	  	$('.workprof').hover(function() {
	    $(this).find(".workhover").toggleClass('appear-background-work');
	    $(this).find(".lookfor").toggleClass('appear-text-work');
	    $(this).find(".clientprof").toggleClass('appear-text-work');
	});


$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.sticky-nav').addClass('active');
		} else {
			$('.sticky-nav').removeClass('active');
		}
	});
$( ".post:nth-child(odd)" ).addClass( "wow fadeInRight" );
$( ".post:nth-child(even)" ).addClass( "wow fadeInLeft" );

$('.tlt').textillate({ 
  in: {                         
    effect: 'fadeInLeft',                         
                         
    },
                                                   
    out: {                       
    effect: 'fadeOut',                          
                                
    sync: true                            
    },                          
    loop: true 
});


    $(".burger-menu.mobile").click(function(){
        $(".overlay").fadeToggle(200);
       $(".burger-menu.mobile").toggleClass('btn-open');
    });

$('.overlay').on('click', function(){
    $(".overlay").fadeToggle(200);   
    $(".burger-menu.mobile").removeClass('btn-open').addClass('btn-close');
    open = false;
});



});


	 // $(".share-menu").click(function(){
	 // 	$(".post-full.sharing").toggleClass("active");
	 // });

	 //  $("#primary").click(function(){
	 // 	$(".post-full.sharing").removeClass("active");
	 // });






