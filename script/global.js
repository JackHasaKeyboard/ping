$(document).ready(function(){

	$.fn.startTick = function() {
		$('#wrap').append('<div class="wave"></div>');
		
		$('.wave').animate({
			'height' : '360px',
			'width' : '360px',
			'margin-top' : '-168px',
			'margin-left' : '-158px',
			'opacity' : '0'
		}, 1000);

		$('.dots').animate({
			'opacity' : '1'
		}, 1000);

	}

	$.fn.stopTick = function() {
		clearInterval(count);
	}

	$('#logo').mouseenter(function(){
		count = window.setInterval(function(){ 
			$.fn.startTick();
		}, 1000);
	});

	$('#logo').mouseleave(function(){
		window.clearInterval(count);
	});

	var back = ['white', 'black', 'white'];

	for(var i = 0; i < 170; i++) {
		var randOpac = back[Math.floor(Math.random() * back.length)];

		$('.dots').append('<div class="loc '+ randOpac +'"></div>');

	}

	$('#mapRot').hide();

	$('#togMap').click(function(){
		$('#mapRot').toggle();
	});

	var audio = document.getElementsByTagName("audio")[0];

	var kkeys = [], konami = "38,38,40,40,37,39,37,39,66,65,13";

	$(document).keydown(function(e) {

		kkeys.push( e.keyCode );

		if ( kkeys.toString().indexOf( konami ) >= 0 ) {
			$(document).unbind('keydown',arguments.callee);
			audio.play();

		kkeys = [];
		}

	});

});