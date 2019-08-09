function validateRfc() {
	var strCorrecta;
	strCorrecta = document.getElementById("rfc").value;
		
	if (strCorrecta.length == 12){
	var valid = '^(([A-Z]|[a-z]){3})([0-9]{6})((([A-Z]|[a-z]|[0-9]){3}))';
	}else{
	var valid = '^(([A-Z]|[a-z]|\s){1})(([A-Z]|[a-z]){3})([0-9]{6})((([A-Z]|[a-z]|[0-9]){3}))';
	}
	var validRfc=new RegExp(valid);
	var matchArray=strCorrecta.match(validRfc);
	if (strCorrecta != "") {
		if (matchArray==null) {
			alertify.log("Formato de RFC incorrecto");
			document.getElementById('btnSave').disabled=true;
			return false;
		}
		else
		{
			document.getElementById('btnSave').disabled=false;
			return true;
		}	
    }
    
    document.getElementById('btnSave').disabled=false;
}

function validateAlphanumeric(value, field){
	var patt = new RegExp(/^[a-zA-ZÀ-ÿ0-9\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ0-9\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ0-9\u00f1\u00d1]+$/g);
	var matchArray=value.match(patt);
	if (value != "") {
	    if (matchArray==null) {
			alertify.log("El campo " + field + " solo acepta letras y números");
			document.getElementById('btnSave').disabled=true;
			return false;
		} else{
			document.getElementById('btnSave').disabled=false;
			return true;
		}	
    }
    
    document.getElementById('btnSave').disabled=false;
}

function validateText(value, field){
	var patt = new RegExp(/^[a-zA-ZÀ-ÿ\u00f1\u00d1]+(\s*[a-zA-ZÀ-ÿ\u00f1\u00d1]*)*[a-zA-ZÀ-ÿ\u00f1\u00d1]+$/g);
	var matchArray=value.match(patt);
	if (value != "") {
	    if (matchArray==null) {
			alertify.log("El campo " + field + " solo acepta letras");
			document.getElementById('btnSave').disabled=true;
			return false;
		} else{
			document.getElementById('btnSave').disabled=false;
			return true;
		}	
    }
    
    document.getElementById('btnSave').disabled=false;
}

function validateZipCode(value, field){
	var patt = new RegExp(/^[0-9\s]+$/g);
	var matchArray=value.match(patt);
	if (value != "") {
	    if (matchArray==null || value.length != 5) {
			alertify.log("El campo " + field + " no tiene formato de Codigo Postal");
			document.getElementById('btnSave').disabled=true;
			return false;
		} else{
			document.getElementById('btnSave').disabled=false;
			return true;
		}	
    }
    
    document.getElementById('btnSave').disabled=false;
}

function validateNumber(value, field){
	var patt = new RegExp(/^[0-9\s]+$/g);
	var matchArray=value.match(patt);
	if (value != "") {
	    if (matchArray==null) {
			alertify.log("El campo " + field + " solo acepta números");
			document.getElementById('btnSave').disabled=true;
			return false;
		} else{
			document.getElementById('btnSave').disabled=false;
			return true;
		}	
    }
    
    document.getElementById('btnSave').disabled=false;
}

function validateEmail(value, field){
	var patt = new RegExp(/^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i);
	var matchArray=value.match(patt);
	if (value != "") {
	    if (matchArray==null) {
			alertify.log("El campo " + field + " no cuenta con el formato de correo");
			document.getElementById('btnSave').disabled=true;
			return false;
		} else{
			document.getElementById('btnSave').disabled=false;
			return true;
		}	
	} 
    
    document.getElementById('btnSave').disabled=false; 
    
}

function isNotBlank(value, field){
    if (value == "") {
        alertify.log("El campo " + field + " es obligatorio");
        document.getElementById('btnSave').disabled=true; 
        return false;
    }
}