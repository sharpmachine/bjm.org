/* Author: 

*/// Allows you to use the $ shortcut.  Put all your code  inside this wrapper
jQuery(document).ready(function(e){e("#lifestream").lifestream({limit:1,list:[{service:"facebook_page",user:"54557413386"}]});e(".bethel-menu-toggle").click(function(){e(".bethel-menu .nav").slideToggle();e(".chevron").toggleClass("chevron-rotate")});e("a.close-menu").click(function(){e(".bethel-menu .nav").slideUp()});e("#myCarousel").carousel();e("#myCarousel .item:first-child").addClass("active");e("#myCarousel .dots:first-child").addClass("active");e("#qa-Carousel").carousel();e("#qa-Carousel .item:first-child").addClass("active");e("#searchform input[type=text]").attr("placeholder","Search");e(".donate-materials input.wpcf7-email").attr("placeholder","Email");e(".donate-materials input.material-list").attr("placeholder","List materials to be donated")});