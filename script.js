$(document).ready(function() {
	var clicks = 0;
	var paper = Raphael(document.getElementById("notepad"), 1200, 400);
	var id=0;

	function removeCircle(){
		if (paper.getById(id)!= null){
			paper.getById(id).remove();
		 };
	};

	$("#button").click(function(){
		removeCircle();
		var radius = $("#radius").val();
		var stroke = $(".hash").text()+$("#stroke").val();
		var strokewidth = $("#stroke-width").val();
		clicks++;
		var circle = paper.circle(450, 200, radius);
		circle.attr({
			"stroke":stroke,
			"stroke-width":strokewidth,
		});
		id=circle.id;
	});

	$("#notepad").click(function(e){
		var cursorX= e.offsetX;
		var cursorY=e.offsetY;
		var anim= Raphael.animation({cx:cursorX, cy:cursorY}, 300);
		paper.getById(id).animate(anim);
	});

	$('#stroke').colpick({
		layout:'hex',
		submit:0,
		colorScheme:'dark',
		onChange:function(hsb,hex,rgb,el,bySetColor) {
			$(".color").css('background-color','#'+hex);
			if(!bySetColor) $(el).val(hex);
		}
	}).keyup(function(){
		$(this).colpickSetColor(this.value);
	});

});