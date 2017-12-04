$(".host").click(
	function(){
		var a = '#' + this.id;
		$(a + ' + div').toggleClass('vanish');
		$(a + ' .fa-plus').toggleClass('fa-minus');
	}
);
