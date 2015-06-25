$(document).ready(function() {
	var clicks = 0;
	var paper = Raphael(300, 250, 900, 400);
	var id=0;

	function removeCircle(){
		if (paper.getById(id)!= null){
			paper.getById(id).remove();
		 };
	};

	$("#button").click(function(){
		removeCircle();
		var radius = $("#radius").val();
		var stroke = $("#stroke").val();
		var strokewidth =$("#stroke-width").val();
		clicks++
		var circle = paper.circle(450, 200, radius);
		circle.attr({
			"stroke":stroke,
			"stroke-width":strokewidth,
		});
		id=circle.id;
	});
	$('#stroke').colpick({
	layout:'hex',
	submit:0,
	colorScheme:'dark',
	onChange:function(hsb,hex,rgb,el,bySetColor) {
		$(el).css('border-color','#'+hex);
		// Fill the text box just if the color was set using the picker, and not the colpickSetColor function.
		if(!bySetColor) $(el).val("#"+hex);
	}
}).keyup(function(){
	$(this).colpickSetColor(this.value);
});
	
});