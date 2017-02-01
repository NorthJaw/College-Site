$('.Button').mouseenter(function(){
	
	$(this).css('opacity','1');
	
}).mouseleave(function(){
	
	$(this).css('opacity','0.5');
	
}).click(function(){
	
	$('.Button').hide();
	
	if($(this).val() === 'Login'){	
		$('#Login').show();
	}
	else if($(this).val() === 'Signup'){
		$('#Signup').show();
	}
	
});

$(window).click(function(){
	
	$('.Register').hide();
	$('.Button').show();
});

$('.Register').click(function(event){
	
	event.stopPropagation();
});

$('.Button').click(function(event){
	event.stopPropagation();
});


$('.LoginField').focusin(function(){
	
	$(this).css('background-color','#F9E79F');
}).focusout(function(){
	
	$(this).css('background-color','#fff');
});