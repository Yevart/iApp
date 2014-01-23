jQuery.noConflict();

jQuery(document).ready(function($){

	// функция высчитывает позицию текста по вертикали внутри кнопки ответа
	var answervalign = function() {
		$(".answer").each(function(){
			var answerah = $("a",this).height();
			var answersh = $("a span",this).height();
			if ((answerah-answersh) > 0) {
				$("a span",this).css("margin-top",((answerah-answersh)/2-1)+"px");	
			}
		});
	}
	answervalign();

	var bodyheight = function() {
		$("html").css("height","");
		var winh = $(window).height();
		var doch = $("body").height();
		//alert(" "+winh+" / "+doch+" ");
		if (winh > doch) {
			$("html").css("height",winh+"px");
		}

	}
	bodyheight();

	
	$(window).load(function(){
		answervalign();
		bodyheight();
	});
	$(window).resize(function(){
		answervalign();
		bodyheight();
	});

	// для печати
	$(".print-button a").click(function(a){
		a.preventDefault();
		window.print();
	});
	
	
	// скрипт проверяет, заполнены ли поля формы пользователя. если нет, выводит ошибки, если да - отправляет форму.
	$(".userform .submit input").click(function(a){
		a.preventDefault();
		var status = "1";
		if ($(".userform .firstname input").val().length < "2") {
			$(".userform .firstname .error").fadeIn();
			status = "0";
		}
		if ($(".userform .surname input").val().length < "2") {
			$(".userform .surname .error").fadeIn();
			status = "0";
		}
		if ($(".userform .email input").val().length < "2") {
			$(".userform .email .error").fadeIn();
			status = "0";
		}
		if (status == "1") {
			$(".userform form").submit();
		}
	});
	
	//скрипт проверяет, если заполнено поле формы, добавляет к нему зеленую галочку
	$(".userform .firstname input, .userform .surname input, .userform .email input").blur(function(){
		if ($(this).val().length > "2") {
			$(this).addClass("ok");
		}
	});
	
	// если показана подсказка об ошибке, при фокусе на соответствующем поле скрывать её.
	$(".userform input").focus(function(){
		$("+.error",this).fadeOut();
	});



	//предзагрузка изображений для состояний кнопок. заменить пути после загрузки на сервер !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
	var preloadImages = function() {
	 for(var i = 0; i < arguments.length; i++) {
	  jQuery("<img>").attr("src", arguments[i]);
	 }
	};
	 preloadImages(
	  './images/button-bg-active.png',
	  './images/button-bg-hover.png',
	  './images/button-previous-active.png',
	  './images/button-previous-hover.png',
	  './images/button-start-active.png',
	  './images/button-start-hover.png',
	  './images/button-print-active.png',
	  './images/button-print-hover.png'
	 );



	$(".answer a, .print-button a").mousedown(function(){ $(this).addClass("active"); });
	$(".answer a, .print-button a").mouseup(function(){ $(this).removeClass("active"); });
	$(".answer a span, .print-button a span").mousedown(function(){	$(this).parent("a").addClass("active"); });	
	$(".answer a span, .print-button a span").mouseup(function(){ $(this).parent("a").removeClass("active"); });
	$(".userform .submit input").mousedown(function(){	$(this).addClass("active"); });	
	$(".userform .submit input").mouseup(function(){ $(this).removeClass("active"); });




	//действия с вопросами
	$(window).load(function(){
		//задаем классы, которые анимируют появление элементов вопроса
		$("#question1").addClass("visible");
	});
	$(".answer a, .prevquestion a").click(function(q){
		q.preventDefault();
		//вычисляет полосу прогресса
		$(".percent").animate({width:"+=10px"},100);
		
		//удаляем анимирующие классы
		a = $(".question:visible");
		a.hide().removeClass("visible");

		
		//УДАЛИТЬ при изменении логики - этот скрипт проверяет, если был активен первый вопрос, то выводить второй и наоборот
		if (a.attr("id") == "question1") {
			$("#question2").show();
			answervalign();
			t = setTimeout(function(){$("#question2").addClass("visible");},300);
		} else {
			$("#question1").show();
			answervalign();
			t = setTimeout(function(){$("#question1").addClass("visible");},300);
		}
		
	});


});