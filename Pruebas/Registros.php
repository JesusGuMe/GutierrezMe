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
$consultaSql = "select * from fmateria";
$consulta = $con -> prepare($consultaSql);
$consulta -> execute();

echo '<table border = "1">';
echo '<tr>';
echo '<th id="clave">Clave</th>';
echo '<th id="titulo">Titulo</th>';
echo '<th id="carrer">Carrera</th>';
echo '<th id="nombEsc">Nombre Escuela</th>';
echo '<th id="City">Ciudad</th>';
echo '<th id="Est">Estado</th>';
echo '<th id="Country">Pais</th>';
echo '<th id="sem">Semestre</th>';
echo '<th id="grup">Grupos</th>';
echo '<th id="students">Alumnos</th>';
echo '</tr>';
while($extraido = mysqli_fetch_array($consultaSql))
{
    echo '<tr>';
    echo '<td>'.$extraido['clave'].'</td>';
    echo '<td>'.$extraido['titulo'].'</td>';
    echo '<td>'.$extraido['carrer'].'</td>';
    echo '<td>'.$extraido['nombEsc'].'</td>';
    echo '<td>'.$extraido['City'].'</td>';
    echo '<td>'.$extraido['Est'].'</td>';
    echo '<td>'.$extraido['Country'].'</td>';
    echo '<td>'.$extraido['sem'].'</td>';
    echo '<td>'.$extraido['grup'].'</td>';
    echo '<td>'.$extraido['students'].'</td>';
    echo '</tr>';
}


mysqli_close($con);
echo '</table>';
} catch(PDOException $e) {
    echo "Error de consulta a la base de datos";
    echo $e->getMessage();
}
?>
