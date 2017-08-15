var eventoClick = new ClassSearchDinamy();

$(document).ready(function(){
	var v_Height = screen.height - 195;

	$('#form-content-search-user').css({'width':'1255px','height':'550px'});

	$(".form-content-search").css({'height':''+v_Height+'px','top':'52px','position':'relative'});

	$(".form-article-search").css({'height':''+(v_Height-100)+'px','top':'-4px','position':'relative'});

	$(".form-content-toolt-search").css({'height':''+(v_Height+36)+'px','top':'35px'})

	$(".form-toolt-hide-show").css({'height':''+(v_Height+33)+'px','top':'35px'});

	$(".form-search-agenda").css({'height':''+(v_Height)+'px'});

	$("#TooltsSearch").css({'top':'52px'});

	$("#TooltsSearchShowHide").css({'top':'52px'});

	$("div[id^=targetItem]").click(function(){
	   		eventoClick.Target($(this));
	   });

	$("button[id=btnEdit]").click(function(){
	   		alert('Hola ' +$(this).attr('id'));
	   });
	$("button[id=btnMore]").click(function(){
	   		alert('Hola ' +$(this).attr('id'));
	   });
	$("button[id=btnDisable]").click(function(){
	   		alert('Hola ' +$(this).attr('id'));
	   });
	$("button[id=btnSearch]").click(function(){
	   		alert('Hola ' +$(this).attr('id'));
	   });
	$("button[id=btnShowToolts]").click(function(){
	   		eventoClick.tooltSearchShow();
	   });

	/*$("button[id=btnEdit]").tooltip();
    $("button[id=btnMore]").tooltip();
    $("button[id=btnDisable]").tooltip();*/

setInterval(console.clear(),100);

$(document).ready(function(){

	$("#search").keydown(function(event){
		var data = $("#search").val();
		if($("#search").val() == ""){
			console.clear();
		}	
		eventoClick.search(data);
		
	}); 
});
});



function ClassSearchDinamy(){
	
	this.Target = function(id){
		return id;		
	}

	this.search = function(data){

		console.log(data);
	}

	this.tooltSearchShow = function(){
		if ($("#TooltsSearch").css('display') == 'none') {			
			$("#btnShowToolts").css({'transform':'rotate(180deg)'});
			$("#TooltsSearch").fadeIn();
			$("#TooltsSearch").css({'left':'25px'});	

		}else{			
			$("#btnShowToolts").css({'transform':'rotate(0deg)'});
			$("#TooltsSearch").fadeOut();
			
		}
	}

	this.hexc = function(colorval) {
    var parts = colorval.match(/^rgb\((\d+),\s*(\d+),\s*(\d+)\)$/);
    delete(parts[0]);
    for (var i = 1; i <= 3; ++i) {
        parts[i] = parseInt(parts[i]).toString(16);
        if (parts[i].length == 1) parts[i] = '0' + parts[i];
    }
    color = '#' + parts.join('');

    return color;
	}
}
