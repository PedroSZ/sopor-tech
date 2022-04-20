// Validamos y activamos el Permiso para Notificar
// Validamos y activamos el Permiso para Notificar
if(Notification.permission!=="granted") {
	Notification.requestPermission();

}


window.onload = f1;
function f1(){

	var sol = document.getElementById("solucion").value;
	if(sol == "Nuevo"){
		var notificacion = new Notification("Tienes nuevos reportes por atender !"/*, {icon: 'img/gmail.png', body: 'Abrir Bandeja de Gmail.' }*/);

console.log(sol);

}else{
	console.log("no hay notificaciones nuevas");
}

}
