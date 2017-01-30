$('.Button').mouseenter(function(){
	
	$(this).css('opacity','1');
	
}).mouseleave(function(){
	
	$(this).css('opacity','0.5');
	
}).click(function(event){
	
	$('.Button').hide();
	
	if($(this).val() === 'Login'){	
		$('#Login').show();
	}
	else if($(this).val() === 'Signup'){
		$('#Signup').show();
	}
	event.stopPropagation();
	
});

$(window).click(function(){
	
	$('#Login').hide();
});


$('.Text').focusin(function(){
	
	$(this).css('background-color','#F9E79F');
}).focusout(function(){
	
	$(this).css('background-color','#fff');
});