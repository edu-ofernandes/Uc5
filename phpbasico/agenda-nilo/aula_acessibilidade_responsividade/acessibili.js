// JavaScript Document
// aumentar e diminuir fonte
	$(document).ready(function() {

	// aumentando a fonte
	$(".inc-font").click(function () {
		var size = $("body").css('font-size');

		size = size.replace('px', '');
		size = parseInt(size) + 2.0;

		$("body").animate({'font-size' : size + 'px'});
	});

	//diminuindo a fonte
	$(".dec-font").click(function () {
		var size = $("body").css('font-size');

		size = size.replace('px', '');
		size = parseInt(size) - 1.8;

		$("body").animate({'font-size' : size + 'px'});
	});

	// resetando a fonte
	$(".res-font").click(function () {
		$("body").animate({'font-size' : '15'});
	});

});


//contraste
function setActiveStyleSheet(title) {
var i, a, main;
for(i=0;(a=document.getElementsByTagName("link")[i]);i++)
 {
if(a.getAttribute("rel").indexOf("style") != -1 && a.getAttribute("title")) {
a.disabled = true;
if(a.getAttribute("title") == title) a.disabled = false;
     }
   }
}
