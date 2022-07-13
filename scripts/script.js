//FUNCION PARA ESTABLECER FECHA ACTUAL EN EL INPUT
window.onload = function(){
  date = new Date();
  year = date.getFullYear();
  month = date.getMonth() + 1;
  day = date.getDate();
  var hoy = year + "-" + month + "-" + day;
  document.getElementById("fecha_hoy").value=hoy;
};

//FUCION PARA AGREGAR NUEVO VALOR AL CONBOBOX
function getComboA(selectObject) {
  var value = selectObject.value; //VALUE OBTIENE EL VALOR SELECIONADO DEL COMBOBOX
  if(value == "OTRO"){//COMPARAMOS SI SE SELECCIONO LA OPCION "OTRO"
    var nuevaFalla = prompt('AGREGAR TIPO DE RPORTE -> EJEMPLO:', 'MI LICENCIA DE ECXEL EXPIRO');//CREAMOS UN ALERT TIPO PROMPT PARA INGRESAR EL NUEVO VALOR Y LO GUARDAMOS EN LA VARIABLE nuevaFalla
      const option = document.createElement('option');//CREAMOS LA NUEVA OPCION PARA EL COMBO
      nuevaFalla = nuevaFalla.toUpperCase();  //convertir a myusculas cualquier texto en la variable nuevaFalla
      document.getElementById("fallas").appendChild(option);//AGREGAMOS MEDIANTE LA FUCCION appendChild LA NUEVA OPCION AL LISTADO DEL COMBOBOX
      document.getElementById('fallas').options[document.getElementById('fallas').selectedIndex].text=nuevaFalla;//HACEMOS QUE SE SELECCIONE POR DEFAUL EL NUEVO ELEENTO AGREGADO
      console.log(nuevaFalla);//LO VEMOS EN CONSOLA SOLO PARA HACER PRUEBAS
  }else{
      console.log(value);
  };
}
//FUNCION PARA
function countChars(obj){
    var maxLength = 250;
    var strLength = obj.value.length;
    var charRemain = (maxLength - strLength);

    if(charRemain < 0){
        document.getElementById("charNum").innerHTML = '<span style="color: red;">You have exceeded the limit of '+maxLength+' characters</span>';
    }else{
        document.getElementById("charNum").innerHTML = 'aún puedes escribir '+ charRemain + ' letras.';
    }
}
//AQUI INICIA LA VALIDACION DE LOS CAMPOS DEL FORMULARIO
function validar(){
	var txtDepartamento = document.getElementById("departamento").value;
	var txtNombre = document.getElementById("nombre").value;
	var txtFallas = document.getElementById("fallas").value;
	var txtDescripcion = document.getElementById("charNum2").value;


	if (txtDepartamento == null || txtDepartamento.length == 0 ){
      	alert("Tiene que elegir un Departamento");
      	document.getElementById('departamento').focus();
      	return false;
   	}
   	if (txtNombre == null || txtNombre.length == 0 ){
      	alert("Tiene que escribir un nombre");
      	document.getElementById('nombre').focus();
      	return false;
   	}
   	if (txtFallas == null || txtFallas.length == 0 ){
      	alert("Por favor indica un tipo de reporte");
      	document.getElementById('fallas').focus();
      	return false;
   	}
		if (txtDescripcion == null || txtDescripcion.length == 0 ){
			alert("Por favor escriba una breve descripcion del problema que presenta");
			document.getElementById('charNum2').focus();
			return false;
		}

}
