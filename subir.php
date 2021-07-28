<?php
$ftp_server="127.0.0.1";
$ftp_usuario="perla";
$ftp_password="12345";
$con_id=ftp_connect($ftp_server); /*conexion con el servidor*/
$lr=ftp_login($con_id, $ftp_usuario, $ftp_password);
if((!$con_id)||(!$lr)){
    echo 'No se pudo conectar';
    exit;
}else{
echo 'Conexión exitosa';
/*Variables para subir un archivo*/
$temp=explode(".", $_FILES['archivo']['name']);
$source_file=$_FILES['archivo']['tmp_name'];
$destino="archivos";
$nombre=$_FILES["archivo"]['name'];
$subio=ftp_put($con_id, $destino.'/'.$nombre, $source_file, FTP_BINARY);

if($subio){
    echo "Archivo subido correctamente";
    header("Location: verarchivos.php");
}else{
    echo 'Ha ocurrido un error';

}
}


?>
