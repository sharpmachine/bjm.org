/* Author: 

*/

// Allows you to use the $ shortcut.  Put all your code  inside this wrapper
jQuery(document).ready(function($) {
	
	// // Forces WordPress to place nice with dropdowns
 	$("li.dropdown > a").addClass('dropdown-toggle');
	$("li.dropdown > a").attr('data-toggle','dropdown');
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
	 
	 // $('#house-of-generals').carousel();

	 $('#qa-Carousel .item:first-child').addClass('active');

	 $("#searchform input[type=text]").attr('placeholder','Search');

	 $(".donate-materials input.wpcf7-email").attr('placeholder','Email');

	 $(".donate-materials input.material-list").attr('placeholder','List materials to be donated');

	 $('.filter a').tooltip();

});