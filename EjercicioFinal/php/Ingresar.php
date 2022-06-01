<?php
$CLAVE=$_POST['Ic'];
$TITULO=$_POST['Ti'];
$CARRERA=$_POST['Car'];
$NOMBESCUELA=$_POST['Nom'];
$CIUDAD=$_POST['Cid'];
$ESTADO=$_POST['Est'];
$PAIS=$_POST['Ps'];
$SEMESTRE=$_POST['Sem'];
$GRUPOS=$_POST['Grp'];
$ALUMNOS=$_POST['Alumn'];

$hostname='localhost';
$database='j19100195';
$username='root';
$password='';
$port='3306';

$idClave=$_POST['par1'];
try {
    $con = new PDO("mysql:host=$hostname;dbname=$database;port=$port",$username,$password);
} catch(PDOException $e) {
    echo "Error de conexion a la base de datos";
    echo $e->getMessage();
    exit();
}

//$con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

try {
$consultaSql = " Insert into fmateria (idClave, Titulo, carrera, nomEscuela, ciudad, estado, pais, semestre, grupos, alumnos) VALUES ('$CLAVE',
'$TITULO','$CARRERA','$NOMBESCUELA','$CIUDAD','$ESTADO','$PAIS','$SEMESTRE','$GRUPOS','$ALUMNOS')";
$consulta = $con -> prepare($consultaSql);
$consulta -> execute();
$consulta->closeCursor();
echo "SE HAN INTRODUCIDO LOS DATOS DEL NUEVO REGISTRO CORRECTAMENTE";
} catch(PDOException $e) {
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}


?>
