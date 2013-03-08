/* Author: 

*/// Allows you to use the $ shortcut.  Put all your code  inside this wrapper
jQuery(document).ready(function(e){e("li.dropdown > a").addClass("dropdown-toggle");e("li.dropdown > a").attr("data-toggle","dropdown");e("a.dropdown-toggle").append('<b class="caret"></b>');e("#lifestream").lifestream({limit:1,list:[{service:"facebook_page",user:"54557413386"}]});e(".bethel-menu-toggle").click(function(){e(".bethel-menu .nav").slideToggle()});e("a.close-menu").click(function(){e(".bethel-menu .nav").slideUp()})});