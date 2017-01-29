$('#Button input').mouseenter(function(){
	
	$(this).css('opacity','1');
	
}).mouseleave(function(){
	
	$(this).css('opacity','0.5');
	
}).click(function(){
	
	$(this).hide();
	$('#Login').show();
	
});