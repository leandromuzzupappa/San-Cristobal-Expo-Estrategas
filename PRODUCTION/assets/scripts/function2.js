$(document).ready(function(){
	var users = [],
	shuffled = [],
	loadout = $("#loadout"),
	insert_times = 30,
	duration_time = 10000;
	$("#roll").click(function(){
		users = [];
		var lines = $('textarea').val().trim().split(', ');
		console.log(lines);
		if(lines.length < 2){
			$("#msgbox").slideToggle(100);
			setTimeout(function() {
				  $("#msgbox").slideToggle(100);
			}, 3000);
			return false;
		}
		for(var i = 0;i < lines.length;i++){
			if(lines[i].length > 0){
				users.push(lines[i]);
			}
		}
		$("#roll").attr("disabled",true);
		var scrollsize = 0,
		diff = 0;
		$(loadout).html("");
		$("#log").html("");
		loadout.css("left","100%");
		if(users.length < 10){
			insert_times = 20;
			duration_time = 5000;
		}else{
			insert_times = 10;
			duration_time = 10000;
		}
		for(var times = 0; times < insert_times;times++){
			shuffled = users;
			shuffled.shuffle();
			for(var i = 0;i < users.length;i++){
				loadout.append('<td><div class="roller"><div>'+shuffled[i]+'</div><div class="circle"></div></div></td>');
				scrollsize = scrollsize + 200;
			}
		}
		
		
		diff = Math.round(scrollsize /2);
		diff = randomEx(diff - 300,diff + 300);
		$( "#loadout" ).animate({
			left: "-="+diff
		},  duration_time, function() {
			$("#roll").attr("disabled",false);
			$('#loadout').children('td').each(function () {
				var center = window.innerWidth / 2;

				if($(this).offset().left < center && $(this).offset().left + 185 > center){
					$('#topbox').hide();
					var text = $(this).children().text();
					$("#log").append("<div class=\"ganador\"><div class=\"img text-center\"><img src=\"./assets/images/ganador.png\" alt=\"\" class=\"img-fluid\"></div><div class=\"linea\"><hr></div><div class=\"nombre\"><h4>"+text+"</h4></div>");
				}
				
				
			});
		});
	});
	Array.prototype.shuffle = function(){
		var counter = this.length, temp, index;
		while (counter > 0) {
			index = (Math.random() * counter--) | 0;
			temp = this[counter];
			this[counter] = this[index];
			this[index] = temp;
		}
	}
	function randomEx(min,max)
	{
		return Math.floor(Math.random()*(max-min+1)+min);
	}
});
