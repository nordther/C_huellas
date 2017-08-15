var btn_login = new Login();
var colorTarger = "#6C6C6C";

$(document).ready(function(){
	$("#content-login-user").css({'display':'none'});	

	$("a[id=nav_btn_login]").click(function(){
		btn_login.showFormLoginUser();
	});

	$("button[id=btn-submit-user").mouseover(function(){
		if($("#btn-submit-user").hasClass('input-content-submit')){
			$("#btn-submit-user").removeClass("input-content-submit");
			$("#btn-submit-user").addClass("input-content-submit-hover").fadeIn("slow");
		}   
	});
	$("button[id=btn-submit-user").mouseout(function(){
		if($("#btn-submit-user").hasClass('input-content-submit-hover')){
			$("#btn-submit-user").removeClass("input-content-submit-hover");
			$("#btn-submit-user").addClass("input-content-submit").fadeIn("slow");

		}  
	});

	$("button[id=btn-submit-user]").click(function(){
		btn_login.showFormLoginPass();
	});

     /*$("button[id=btnLoginForm]").click(function(){
     	btn_login.loginFormFunction();
     });*/       
    
});

function Login(){
	this.showFormLoginUser = function(){
		if($('#content-login-user').css('display') == 'none'){
			$("#content-login-user").fadeIn(500);
			$("#content-login-user").css({'display':'block'});
			$("#targetLoginUsers").fadeIn();
			$("#targetLoginUsers").css({'background-color':''+colorTarger+''});
		}else{
			$("#content-login-user").fadeOut(500);
			$("#targetLoginUsers").css({'background-color':'#4B4B4B'});
			
		}

	}
	/*this.loginFormFunction = function(){
		var token = $("input[name=_token]").val();
		var port = '8000';
		var route = "http://localhost:"+port+"/login";
		var user = $("input[name=v_formUserNickEmail").val();
		var pass = $("input[name=v_formUserPass").val();

		$.ajax({
			url:route,
			headers:{'X-CSRF-TOKEN':token},
			type:"POST",
			dataType:'json',
			data:{
				v_formUserNickEmail:user,
				v_formUserPass:pass},

				success:function(){
					window.location.href = "http://localhost:"+port+"/Admin"; 
				}
		});
	}*/	

}

