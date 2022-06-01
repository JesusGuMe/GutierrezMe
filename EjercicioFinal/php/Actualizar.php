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
$consultaSql = "UPDATE fmateria set idClave ='$CLAVE',Titulo='$TITULO',carrera='$CARRERA',nomEscuela='$NOMBESCUELA',ciudad='$CIUDAD',estado='$ESTADO',pais='$PAIS',semestre='$SEMESTRE',grupos='$GRUPOS',alumnos='$ALUMNOS' WHERE idClave=$CLAVE";
$consulta = $con -> prepare($consultaSql);
$consulta -> execute();
$consulta->closeCursor();
echo "SE HAN ACTUALIZADO LOS DATOS DEL REGISTRO";
} catch(PDOException $e) {
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}
?>
