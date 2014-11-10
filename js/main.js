$(document).ready(function(){
	$("#submit").click(function(){
		var name = $("#name").val();
		var email = $("#email").val();
		var lada = $('#lada').val();
		var phone = $('#phone').val();
		var zip = $("#cp").val();
		var place = $('#place').val();
		// Returns successful data submission message when the entered information is stored in database.
		var dataString = 'name1='+ name + '&email1='+ email + '&lada1='+ lada + '&phone1='+ phone + '&zip1=' + zip + '&place1=' + place;
		if(name==''||email==''||lada==''||phone==''||zip == '' || place == '') {
			alert("Ingresa Todos los Datos");
		}else{
			// AJAX Code To Submit Form.
			$.ajax({
				type: "POST",
				url: "php/script.php",
				data: dataString,
				cache: false,
				success: function(result){
					//
					if (result == 'Ingresa un Teléfono Real') {
						window.location.href ="index.php"	
					}else if(result == '¡Este email ya ha sido registrado!'){
						alert(result);
						window.location.href ="index.php"	
					}else if (result == 'gracias'){
						window.location.href = "gracias_p.php"
					}else{
						window.location.href = "gracias.php"
					}
				}	
			});
		}
	return false;
	});
	



	/*$('#nombre').bind('keypress', function(e) {
	    if($('#nombre').val().length == 0){
	        var k = e.which;
	        var ok = k >= 65 && k <= 90 || // A-Z
	            k >= 97 && k <= 122 || // a-z
	            k >= 48 && k <= 57; // 0-9
	        
	        if (!ok){
	            e.preventDefault();
	        }
	    }
	}); 
	$("#lada").keydown(function(event) {
	   	// Allow only backspace and delete
	   	if ( event.keyCode == 46 || event.keyCode == 8 ) {
	   		// let it happen, don't do anything
	   	}
	   	else {
	   		// Ensure that it is a number and stop the keypress
	   		if (event.keyCode < 48 || event.keyCode > 57 ) {
	   			event.preventDefault();	
	   		}	
	   	}
	});
	$('#lada').bind('keypress', function(e) {
	    if($('#lada').val().length == 0){
	        var k = e.which;
	        var ok = k >= 65 && k <= 90 || // A-Z
	            k >= 97 && k <= 122 || // a-z
	            k >= 48 && k <= 57; // 0-9
	        
	        if (!ok){
	            e.preventDefault();
	        }
	    }
	}); 
	$("#tel").keydown(function(event) {
	   	// Allow only backspace and delete
	   	if ( event.keyCode == 46 || event.keyCode == 8 ) {
	   		// let it happen, don't do anything
	   	}
	   	else {
	   		// Ensure that it is a number and stop the keypress
	   		if (event.keyCode < 48 || event.keyCode > 57 ) {
	   			event.preventDefault();	
	   		}	
	   	}
	});
	$('#tel').bind('keypress', function(e) {
	    if($('#tel').val().length == 0){
	        var k = e.which;
	        var ok = k >= 65 && k <= 90 || // A-Z
	            k >= 97 && k <= 122 || // a-z
	            k >= 48 && k <= 57; // 0-9
	        
	        if (!ok){
	            e.preventDefault();
	        }
	    }
	    $("#cp").keydown(function(event) {
	       	// Allow only backspace and delete
	       	if ( event.keyCode == 46 || event.keyCode == 8 ) {
	       		// let it happen, don't do anything
	       	}
	       	else {
	       		// Ensure that it is a number and stop the keypress
	       		if (event.keyCode < 48 || event.keyCode > 57 ) {
	       			event.preventDefault();	
	       		}	
	       	}
	    });
	    $('#cp').bind('keypress', function(e) {
	        if($('#cp').val().length == 0){
	            var k = e.which;
	            var ok = k >= 65 && k <= 90 || // A-Z
	                k >= 97 && k <= 122 || // a-z
	                k >= 48 && k <= 57; // 0-9
	            
	            if (!ok){
	                e.preventDefault();
	            }
	        }
	    }); 
	});*/

	
	$("#slider1").responsiveSlides({
		speed: 800
	});
	$("#num_one").click(function() {
		$('.text_num_one').slideDown('slow',function(){
			$(this).css('display','block');
		});
		$('.text_num_two').slideUp('slow',function(){
			$(this).css('display','hidden');
		});
		$('.text_num_three').slideUp('slow',function(){
			$(this).css('display','hidden');
		});
	});


	$("#num_two").click(function() {
		$('.text_num_one').slideUp('slow',function(){
			$(this).css('display','hidden');
		});
		$('.text_num_two').slideDown('slow',function(){
			$(this).css('display','block');
		});
		$('.text_num_three').slideUp('slow',function(){
			$(this).css('display','hidden');
		});
	});


	$("#num_three").click(function() {
		$('.text_num_one').slideUp('slow',function(){
			$(this).css('display','hidden');
		});
		$('.text_num_three').slideDown('slow',function(){
			$(this).css('display','block');
		});
		$('.text_num_two').slideUp('slow',function(){
			$(this).css('display','hidden');
		});
	});
	$('a[href^="#"]').on('click',function (e) {
		    e.preventDefault();

		    var target = this.hash;
		    $target = $(target);

		    $('html, body').stop().animate({
		        'scrollTop': $target.offset().top
		    }, 900, 'swing', function () {
		        window.location.hash = target;
		    });
		});

	var colorOrig1 = $(".circle_red").css('background');
    $(".circle_red").hover(
    function() {
        //mouse over
        $(this).css('background', '#d9a39d')
    }, function() {
        //mouse out
        $(this).css('background', colorOrig1)
    });

    var colorOrig2 = $(".circle_yellow").css('background');
    $(".circle_yellow").hover(
    function() {
        //mouse over
        $(this).css('background', '#E3D195')
    }, function() {
        //mouse out
        $(this).css('background', colorOrig2)
    });
    var colorOrig3 = $(".circle_blue").css('background');
    $(".circle_blue").hover(
    function() {
        //mouse over
        $(this).css('background', '#B4D7D8')
    }, function() {
        //mouse out
        $(this).css('background', colorOrig3)
    });

});

