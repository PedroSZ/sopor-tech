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
