/* Author: 

*/

// Allows you to use the $ shortcut.  Put all your code  inside this wrapper
jQuery(document).ready(function($) {
	
	// // Forces WordPress to place nice with dropdowns
 // 	$("li.dropdown > a").addClass('dropdown-toggle');
	// $("li.dropdown > a").attr('data-toggle','dropdown');
	// $("a.dropdown-toggle").append('<b class="caret"></b>');

	 $("#lifestream").lifestream({
	 	limit: 1, 
    list:[ 
      { 
        service: "facebook_page",
        user: "54557413386"
      }
    ]
  });

	 $(".bethel-menu-toggle").click(function(){
	 	$(".bethel-menu .nav").slideToggle();
	 	$(".chevron").toggleClass("chevron-rotate");
	 });

	 $("a.close-menu").click(function(){
	 	$(".bethel-menu .nav").slideUp();
	 });

	 $('#myCarousel').carousel();

	 $('#myCarousel .item:first-child').addClass('active');

	 $('#myCarousel .dots:first-child').addClass('active');

	 $('#qa-Carousel').carousel();

	 $('#qa-Carousel .item:first-child').addClass('active');
	
});























