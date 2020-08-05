jQuery(document).ready(function(a){a(".button-consultation").on("click",function(b)
{
	b.preventDefault();
	a(".popup-consultation").fadeIn()
}
);
a(".popup-close").on("click",function(b){b.preventDefault();
	a(".popup-consultation").fadeOut()
}
);

a(".button-design").on("click",function(b){b.preventDefault();

	a(".popup-design").fadeIn()
}
);

a(".popup-close").on("click",function(b){b.preventDefault();

	a(".popup-design").fadeOut()
}
)

$('.gift-btn').on('click', function(event) {
	event.preventDefault();
	$('.popup-gift').fadeIn();
	$('.gift-btn').fadeOut();
});
$('.popup-close').on('click', function(event) {
	event.preventDefault();
	$('.popup-gift').fadeOut();
});

$("input[name=phone]").mask("+7 (999) 999-99-99");

$(function(){$("#accordion").accordion({heightStyle:"content"})});


}
);


$(document).ready(function () {

	var link = $('.menu-link');
	var link_active = $('.menu-link_active');
	var menu = $('.mobile-menu');
	var nav_link = $('.mobile-menu a');

	link.click(function () {
		link.toggleClass('menu-link_active');
		menu.toggleClass('menu_active');
	});

	nav_link.click(function () {
		link.removeClass('menu-link_active');
		menu.removeClass('menu_active');
	});
	
});


$(document).ready(function () {

	function setCookie(visit, value, days) {  // функция, которая сохраняет наши cookie
		let expires = "";
		if (days) {
			let date = new Date();
			date.setTime(date.getTime() + (days*24*60*60*1000));   
			expires = "; expires=" + date.toUTCString();
		}
		document.cookie = visit + "=" + (value || "")  + expires + "; path=/"; // сохраняем наши cookie в браузере
	}                                                                         

	function getCookie(visit) {              // получаем сохраненные cookie из браузера
		let nameCok = visit + "=";
		let Ke = document.cookie.split(';');
		for(let i=0; i < Ke.length; i++) {   // расшифровываем наши cookie с помощью скрипта
			let c = Ke[i];
			while (c.charAt(0)==' ') c = c.substring(1,c.length);
			if (c.indexOf(nameCok) == 0) return c.substring(nameCok.length,c.length);
		}
		return null;
	}

	function eraseCookie(visit) {   
		document.cookie = visit+'=; Max-Age=-99999999;';  
	}

	let Gift = $(".gift-btn");    
	let VisitNum = getCookie('visit');


	if (VisitNum == null){
		Gift.addClass("active");
		setCookie('visit', '1', 99);
	}

});

