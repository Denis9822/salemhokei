$(document).ready(function() { // вся магия после загрузки страницы


   $('#modal_form').appendTo("body");
    function show_modal(){
      // $('#myModal').modal();

		$('#overlay').fadeIn(400, // сначала плавно показываем темную подложку
		 	function(){ // после выполнения предъидущей анимации
				$('#modal_form')
					.css('display', 'flex') // убираем у модального окна display: none;
					.animate({opacity: 1, top: '25%'}, 200); // плавно прибавляем прозрачность одновременно со съезжанием вниз
		});



    }




	$('a#go').click( function(event){ // ловим клик по ссылки с id="go"
		event.preventDefault(); // выключаем стандартную роль элемента
		$('#overlay').fadeIn(400, // сначала плавно показываем темную подложку
		 	function(){ // после выполнения предъидущей анимации
				$('#modal_form')
					.css('display', 'block') // убираем у модального окна display: none;
					.animate({opacity: 1, top: '40%'}, 200); // плавно прибавляем прозрачность одновременно со съезжанием вниз
		});

        $('#overlay2').fadeIn(400, // сначала плавно показываем темную подложку
            function(){ // после выполнения предъидущей анимации
                $('#modal_form4')
                    .css('display', 'block') // убираем у модального окна display: none;
                    .animate({opacity: 1, top: '40%'}, 200); // плавно прибавляем прозрачность одновременно со съезжанием вниз
            });
	});


	/* Закрытие модального окна, тут делаем то же самое но в обратном порядке */
	$('#modal_close, #overlay, #overlay2').click( function clos_modal(){ // ловим клик по крестику или подложке
		$('#modal_form')
			.animate({opacity: 0, top: '45%'}, 200,  // плавно меняем прозрачность на 0 и одновременно двигаем окно вверх
				function(){ // после анимации
					$(this).css('display', 'none'); // делаем ему display: none;
					$('#overlay').fadeOut(400); // скрываем подложку
				}
			);
			$('#modal_form2').animate({opacity: 0, top: '50%'}, 200,	function(){
					$(this).css('display', 'none');
					$('#overlay').fadeOut(400);
				}
			);
			$('#modal_form3').animate({opacity: 0, top: '50%'}, 200,	function(){
					$(this).css('display', 'none');
					$('#overlay').fadeOut(400);
				}
			);
            $('#modal_form4').animate({opacity: 0, top: '50%'}, 200,	function(){
                    $(this).css('display', 'none');
                    $('#overlay2').fadeOut(400);
                }
            );
    });


  $(window).on('load', function() {
    var pre_loader = $('#preloader');
    pre_loader.fadeOut('slow', function() {
      $(this).remove();
    });
  });



// Set delay func. time in milliseconds
    window.setTimeout(show_modal, 2000);
});




