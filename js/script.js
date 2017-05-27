
var acciones = {
	onReady: function(){
		$('select').change(function() {
		    var selected = $(this).val();
		    if (selected==1){
		    	$( "#search" ).show();
		    }
		    else{
		    	if(selected==0){
		    		$( "#search" ).hide();
		    	}else{
		    		$( "#search" ).hide();
		    	}
		    }
		    $.ajax({
		    	url: "../display.php",
				type: "GET",
				data:{
					"getData": true,
					"selected": selected
				},
				beforeSend: function () {
					$("#imagenes").html("Procesando, espere por favor...");
			    },
			    success:  function (response) {
			    	$("#imagenes").html(response);
			    }
		    })
		    .done(function(data, textStatus, jqXHR){
		    	if(console && console.log){
		    		console.log( "La solicitud se ha completado correctamente." );
				}
			})
			.fail(function (jqXHR, textStatus, errorThrown) {
				if ( console && console.log ) {
					console.log( "La solicitud a fallado: " +  textStatus);
				}
			});
		});
		$( "#usr" ).keypress(function() {
			var input = $(this).val();
			if (input.length>0){
				console.log(input);
				 $.ajax({
			        url: "../display.php",
			        type: "GET",
			        data:{
			        	"searching": true,
			        	"input": input
			        },
			        beforeSend: function () {
		                $("#imagenes").html("Procesando, espere por favor...");
		            },
		            success:  function (response) {
		                $("#imagenes").html(response);
		            }
			    })
			    .done(function(data, textStatus, jqXHR){
			    	if(console && console.log){
			    		console.log( "La solicitud se ha completado correctamente." );
			    	}
			    })
			    .fail(function (jqXHR, textStatus, errorThrown) {
			    	if ( console && console.log ) {
			    		console.log( "La solicitud a fallado: " +  textStatus);
			    	}
			    });
			}
		});
		$(window).scroll(acciones.makeItShrink());
	    $.ajax({
	        url: "../display.php",
	        type: "GET",
	        data:{
	        	"getData": true
	        },
	        beforeSend: function () {
                $("#imagenes").html("Procesando, espere por favor...");
            },
            success:  function (response) {
                $("#imagenes").html(response);
            }
	    })
	    .done(function(data, textStatus, jqXHR){
	    	if(console && console.log){
	    		console.log( "La solicitud se ha completado correctamente." );
	    	}
	    })
	    .fail(function (jqXHR, textStatus, errorThrown) {
	    	if ( console && console.log ) {
	    		console.log( "La solicitud a fallado: " +  textStatus);
	    	}
	    });
	},
	makeItShrink: function(){
		if ($(document).scrollTop() > 50) {
			$('header').addClass('shrink');
			
		} else {
			$('header').removeClass('shrink');
		}
	}
}

$(document).ready(acciones.onReady);