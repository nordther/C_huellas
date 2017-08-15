/*$(document).ready(function(){

// Consultar de forma estándar el permiso
Notification.permission
// Pedimos permiso (el navegador nos preguntará)
Notification.requestPermission();

var title = "exito";
var extra = {
	"icon": "../../img/icon/nav/about.png",
	"body": "Prueba de notificaciones"
};

new Notification( title, extra);

});*/

$(document).ready(function(){
	var actionClassDinamyForm =  new classGuiMain();
	$("#v_frmCrtUs_typeusers").change(function(){
		actionClassDinamyForm.showFormAssistan();
	});

	/*$("#v_frmCrtUs_checklessjob_yea").click(function(){
		alert($("#v_frmCrtUs_checklessjob_yea").val());
	});
	$("#v_frmCrtUs_checklessjob_not").click(function(){
		alert($("#v_frmCrtUs_checklessjob_not").val());
	});*/

	//form-user-sistem
	if ($("#v_frmCrtUs_typeusers").val() == "1") {
		$("#form-user-sistem").show();
		$("#form-user-beneficier").hide();
		$("#form-user-profesor").hide();
		
	}

});

function classGuiMain(){
	this.showFormAssistan = function(){
		if ($("#v_frmCrtUs_typeusers").val() == "1") {
			$("#form-user-sistem").show();
			$("#form-user-beneficier").hide();
			$("#form-user-profesor").hide();
		}
		if ($("#v_frmCrtUs_typeusers").val() == "2") {
			$("#form-user-sistem").hide();
			$("#form-user-beneficier").show();
			$("#form-user-profesor").hide();
		}
		if ($("#v_frmCrtUs_typeusers").val() == "3") {
			$("#form-user-sistem").hide();
			$("#form-user-beneficier").hide();
			$("#form-user-profesor").show();
		}
		if ($("#v_frmCrtUs_typeusers").val() == "4") {
			$("#form-user-sistem").hide();
			$("#form-user-beneficier").hide();
			$("#form-user-profesor").hide();
		}
		if ($("#v_frmCrtUs_typeusers").val() == "5") {
			$("#form-user-sistem").hide();
			$("#form-user-beneficier").hide();
			$("#form-user-profesor").hide();
		}
	}
} 