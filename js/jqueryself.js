$(document).ready(function(){
	setTimeout(function(){
		$(".popup").css('display','block');
	},5000);

	$('.close').click(function(){
		$(".popup").css('display','none');
	})
	$(".navbar-toggler").click(function(){
		$("#navbarTogglerDemo01").toggle(600);
	})

	$(".menu li").hover(function(){
		$('.dropdown',this).slideToggle();
		$('.dropdown2',this).slideToggle();
	})
	
	$(".addcart").text('add to cart');
	$(".buynow").text('BUY NOW');
	
	$("#sliderrange").slider({
		range:true,
		min:100,
		max:1000,
		values:[150,500],
		slide:function(event,ui){
			$('#minvalue').val(ui.values[0]);
			$('#maxvalue').val(ui.values[1]);
		}
	});

	
})