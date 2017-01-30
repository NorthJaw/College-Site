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
		$('#Signup1').show();
	}
	
});

$('#Login').mouseleave(function(){
	
	$('#Login').hide();
	$('.Button').show();
});

$('#Signup1').mouseleave(function(){
	
	$('#Signup1').hide();
	$('.Button').show();
});

$('#Signup2').mouseenter(function(){
	
	$('.Button').hide();
})

$('#Signup2').mouseleave(function(){
	
	$('#Signup2').hide();
	$('.Button').show();
});

$('.Text').focusin(function(){
	
	$(this).css('background-color','#F9E79F');
}).focusout(function(){
	
	$(this).css('background-color','#fff');
});


$('#NextButton').click(function(){
	
	$('#Signup1').hide();
	$('#Signup2').show();
});