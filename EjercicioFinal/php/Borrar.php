<?php

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
$consultaSql = "delete from fmateria where idClave=".$idClave;
$consulta = $con -> prepare($consultaSql);
$consulta -> execute();
$consulta->closeCursor();
echo "DATOS ELIMINADOS CORRECTAMENTE";
} catch(PDOException $e) {
    echo "Error, el ID INTRODUCIDO NO EXISTE EN LA TABLA";
    echo $e->getMessage();
}


?>
