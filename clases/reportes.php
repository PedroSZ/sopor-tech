<?php
$mes = $_POST['FiltarMes'];
echo $mes;
//******NUEVO REPORTE
include_once 'db.php';
class Reportes extends DB {
	private $id;
	private $falla_de_equipo;
	private $fecha;
	private $nombre;
	private $departamento;
	private $descripcion;
	private $solucion;

	//stters and getters ***********************************************
	public function setId($id){ $this->id = $id; }
	public function setFalla($falla_de_equipo){ $this->falla_de_equipo = $falla_de_equipo; }
	public function setFecha($fecha){ $this->fecha = $fecha; }
	public function setNombre($nombre){ $this->nombre = $nombre; }
	public function setDepartamento($departamento){ $this->departamento = $departamento; }
	public function setDescripcion($descripcion){ $this->descripcion = $descripcion; }
	public function setSolucion($solucion){ $this->solucion = $solucion; }


	public function getId(){ return $this->id; }
	public function getFalla(){ return $this->falla_de_equipo; }
	public function getFecha(){ return $this->fecha; }
	public function getNombre(){ return $this->nombre; }
	public function getDepartamento(){ return $this->departamento; }
	public function getDescripcion(){ return $this->descripcion; }
	public function getSolucion(){ return $this->solucion; }

	//******************************************************************

  public function guardar() {
		$sql = "INSERT INTO reportes (falla_de_equipo, fecha, nombre, departamento, descripcion, solucion) VALUES(:falla, :fecha, :nombre, :departamento, :descripcion, :solucion)";
		$query = $this->connect()->prepare($sql);
		$query->execute([
			'falla' => $this->falla_de_equipo,
			'fecha' => $this->fecha,
			'nombre' => $this->nombre,
			'departamento' => $this->departamento,
			'descripcion' => $this->descripcion,
			'solucion' => $this->solucion]);
	}




/*
	public function listar(){
		$query = $this->connect()->prepare('SELECT * FROM reporte');
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}
*/

	public function listarDetalles(){
		$query = $this->connect()->prepare(' select * from reportes where solucion = "Nuevo"');
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function listarInforme(){
		$query = $this->connect()->prepare(' select * from reportes');
		$query->execute();
		return $query->fetchAll(PDO::FETCH_ASSOC);
	}

	public function listarInformeMensual($mes){
		$query = $this->connect()->prepare('SELECT * FROM reportes WHERE MONTH(fecha) = :FiltarMes');
		$query->execute(['FiltarMes' => $mes]);
		return $query->fetch(PDO::FETCH_ASSOC);
	}

/*public function listarInformeMensual(){

	$query = $this->connect()->prepare(' select * from reportes where MONTH(fecha) = 5 ORDER BY fecha ASC');
		$query->execute();
	return $query->fetchAll(PDO::FETCH_ASSOC);
}*/


	/*public function eliminar($codigo){
			$query = $this->connect()->prepare('DELETE FROM estudiante WHERE curp = :user');
			$query->execute(['user' => $codigo]);
		}*/






/*	public function consultarEstudiante($codigo){
		$query = $this->connect()->prepare('select estudiante.curp, estudiante.nombre as estudiantenom, estudiante.apellidos as estudianteapell, estudiante.carrera, estudiante.grado, estudiante.grupo, taller.id, taller.nombre as tallernom, reporte.clave as reporteclave, reporte.titulo, reporte.descripcion, instructor.nombre as nombreinst, instructor.apellidos as apellidosinst, instructor.email as emailist, instructor.telefono as telefonoinst, docente_supervisor.nombre as supervisornom, docente_supervisor.apellidos as supervisorapell, docente_supervisor.email as supervisormail, docente_supervisor.telefono as supervisortel
  from estudiante
  inner join reporte on estudiante.curp = reporte.reportado
  inner join estudiante_por_taller on estudiante.curp = estudiante_por_taller.estudiante
  inner join taller on estudiante_por_taller.taller = taller.id
  inner join instructor on taller.instructor = instructor.clave
  inner join docente_supervisor on taller.supervisor = docente_supervisor.rfc where estudiante = :user');
		$query->execute(['user' => $codigo]);
		return $query->fetch(PDO::FETCH_ASSOC);
	}*/

/*	public function autor_reporte($codigo){
		$query = $this->connect()->prepare('SELECT * from reporte where reportado = :user');
		$query->execute(['user' => $codigo]);
		return $query->fetch(PDO::FETCH_ASSOC);
	}*/
//eliminar por estudiante
/*
	public function eliminar($reportado){
		$query = $this->connect()->prepare('DELETE FROM reporte WHERE reportado = :user');
		$query->execute(['user' => $reportado]);
	}
//eliminar por supevisor
	public function eliminarRep($autor){
		$query = $this->connect()->prepare('DELETE FROM reporte WHERE autor = :user');
		$query->execute(['user' => $autor]);
	}
*/
	public function consultarCodigo($codigo){
		$query = $this->connect()->prepare('SELECT * FROM reportes WHERE id = :user');
		$query->execute(['user' => $codigo]);
		return $query->fetch(PDO::FETCH_ASSOC);
	}
/*
	public function eliminar($codigo){
		$query = $this->connect()->prepare('DELETE FROM estudiante WHERE curp = :user');
		$query->execute(['user' => $codigo]);
	}
*/
	public function actualizar(){

		$sql = "UPDATE reportes SET solucion = :solucion	WHERE id = :id";
		$query = $this->connect()->prepare($sql);
		$query->execute([
			'id' => $this->id,
			'solucion' => $this->solucion]);
	}


}

?>
