$('.Button').mouseenter(function(){
	
	$(this).css('opacity','1');
	
}).mouseleave(function(){
	
	$(this).css('opacity','0.5');

}).click(function(){
	
	$('.Button').hide();
	
	if($(this).val() === 'Login'){	
		$('#Login').fadeIn(1000);
	}
	else if($(this).val() === 'Signup'){
		$('#Signup').fadeIn(1000);
	}

});
$(window).click(function() {
                          $('#Login').fadeOut(1000);
                           $('#Signup').fadeIn(1000);
                           $('.Button').show();
});

$('#masterdiv').click(function(event){
    event.stopPropagation();
});

/*$('#Login').mouseleave(function(){

	$('#Login').hide();
	$('#Signup').hide();
	$('.Button').show();
})              */


$('.Text').focusin(function(){
	
	$(this).css('background-color','#F9E79F');
}).focusout(function(){
	
	$(this).css('background-color','#fff');
});