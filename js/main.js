$(function() {
	 new WOW().init();


	  	$('.workprof').hover(function() {
	    $(this).find(".workhover").toggleClass('appear-background-work');
	    $(this).find(".lookfor").toggleClass('appear-text-work');
	    $(this).find(".clientprof").toggleClass('appear-text-work');
	});


$(window).scroll(function(){
		if ($(this).scrollTop() > 100) {
			$('.FixedNavigation').addClass('active');
		} else {
			$('.FixedNavigation').removeClass('active');
		}
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

	 $(".share-menu").click(function(){
	 	$(".full-sharing").toggleClass("active");
	 });

	  $("#primary").click(function(){
	 	$(".full-sharing.active").removeClass("active");
	 });
	   $(".share-cross").click(function(){
	 	$(".full-sharing.active").removeClass("active");
	 });



// 	   var postSize = $(".post").length;
// 	   $('.post').hide();
// 	   console.log(postSize);
// var postLimit = 4;
// var postDisplay = 3;
// var endPosts = false;
// $('.post:lt('+postDisplay+')').show();
// $('#loadmore').click(function () {
// 	if (postDisplay + postLimit <= postSize) {
// 		postDisplay += postLimit;
// 	}
// 	else {
// 		postDisplay = postSize;
// 		endPosts = true;
// 	}
// $('.post:lt('+postDisplay+')').show();
// 	if (endPosts) {
// 		$('#loadmore').hide();
// 	}
// });







	   var postSize = $(".post").length;
	    $('.post').hide();
	

	  
var postLimit = 8;
var postDisplay = 4;
var endPosts = false;
$('.post:lt('+postDisplay+')').show();
$(window).scroll(function(){
                    if  ($(window).scrollTop() == $(document).height() - $(window).height()){
	if (postDisplay + postLimit <= postSize) {
		postDisplay += postLimit;
	}
	else {
		postDisplay = postSize;
		endPosts = true;
	}
$('.post:lt('+postDisplay+')').show();

};
});
});








