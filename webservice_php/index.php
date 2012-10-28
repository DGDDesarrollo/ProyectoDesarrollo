<?PHP
ob_start(); 

$_SESSION['usuario'] = null;

function sql($query){
    //echo $query;
    $db_conn = ocilogon("android", "android", "//127.0.0.1/orcl"); //EN LOS DOS PRIMEROS CAMPOS PONES EL USUARIO Y LA CONTRASEÑA RESPECTIVAMENTE
	$parsed = ociparse($db_conn, $query);
    ociexecute($parsed);
	ocilogoff($db_conn);
	return $parsed;
  }
  
function buscar_usuario($email, $pass){
	$ins = "SELECT * FROM USUARIO WHERE email='".$email."' and password='".$pass."'";
	//echo $ins;
	$query = sql($ins);
	$data=array();
	while ($row=oci_fetch_assoc($query))
	{
		$data=array_merge($data,array($row));
	}
	if (count($data) == 0)
		return false;
	return true;
 }
  
function registrar_usuario($nombre, $email, $pass){
	$existe = buscar_usuario($email, $pass);
	if ($existe == false){
		$ins = "INSERT INTO USUARIO(ID, NOMBRE, PASSWORD, EMAIL) VALUES (USUARIO_SEQ.NEXTVAL,'".$nombre."','".$pass."','".$email."')";
		$query = sql($ins);
		$_SESSION['usuario'] = $email;
	}
	$data=array("registro" => !($existe));
	echo "[".json_encode($data)."]";
}

function iniciar_sesion ($email, $pass) {
	if (buscar_usuario($email, $pass)){
		$_SESSION['usuario'] = $email;
		ver_notas($email);
	}
	else
		echo "[".json_encode (array("ERROR" => "El email y el password no coinciden."))."]";
}

function ver_notas ($email) {
	$query = sql("SELECT NOTA.ID,TITULO FROM NOTA, USUARIO WHERE NOTA.FK_USUARIO = USUARIO.ID AND EMAIL = '".$email."' ORDER BY FECHA_CREACION");
	$data=array();
	while ($row=oci_fetch_assoc($query)) {
		$data=array_merge($data,array($row));
	}
	echo json_encode($data);
}

function crear_nota ($email, $titulo_url, $fecha, $texto_url) {
    $titulo = urldecode($titulo_url); 
    $texto = urldecode($texto_url); 
	$query = sql("INSERT INTO NOTA VALUES (NOTA_SEQ.NEXTVAL, '".$titulo."','".$texto."',TO_DATE('".$fecha."', 'DD/MM/YYYY'),
					(SELECT ID FROM USUARIO WHERE EMAIL = '".$email."'))");
	$data=array("creo" => TRUE);
	$nueva = array($data);
	echo json_encode($nueva);
}

function abrir_nota ($id) {
	$query = sql("SELECT * FROM NOTA WHERE ID = ".$id);
	$data=array();
	while ($row=oci_fetch_assoc($query)) {
		$data=array_merge($data,array($row));
	}
	echo json_encode($data);	
}

function modificar_nota ($id, $titulo_url, $texto_url) {
    $titulo = urldecode($titulo_url); 
    $texto = urldecode($texto_url); 
	$query = sql("UPDATE NOTA SET TITULO = '".$titulo."', TEXTO = '".$texto."' WHERE ID = ".$id);
}

function eliminar_nota ($id) {
	try {
		$query = sql("DELETE FROM NOTA WHERE ID = ".$id);
		
		if (oci_num_rows($query) > 0)
			$data=array("respuesta" => TRUE);
		else
			$data=array("respuesta" => TRUE);
	}
	catch (Exception $e){
		$data=array("respuesta" => TRUE);
	}
	echo json_encode ($data);
}

if(isset($_GET['funcion'])){
	$compara = $_GET['funcion'];
	switch($compara){
		case "registrar_usuario":
			registrar_usuario($_GET["nombre"], $_GET["email"], $_GET["pass"]);
			break;
		case "iniciar_sesion":
			iniciar_sesion($_GET["email"], $_GET["pass"]);
			break;
		case "crear_nota":
			crear_nota($_GET["email"], $_GET["titulo"], $_GET["fecha"], $_GET["texto"]);
			break;
		case "ver_notas":
			ver_notas($_GET["email"]);
			break;
		case "abrir_nota":
			abrir_nota($_GET["id"]);
			break;
		case "modificar_nota":
			modificar_nota($_GET["id"], $_GET["titulo"], $_GET["texto"]);
			break;
		case "eliminar_nota":
			eliminar_nota($_GET["id"]);
			break;
	}
}

$var = ob_get_clean();
file_put_contents('out.txt',$var,FILE_APPEND);
echo $var;