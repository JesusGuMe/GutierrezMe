<?php
$registro['Titulo']     ='Programación Web';
$registro['idClave']    ='BCD2022';
$registro['carrera']    ='Ingeniería en Sistemas Computacionales';
$registro['nomEscuela'] ='TECNM CAMPUS NUEVO LAREDO';
$registro['grupos']     ='3';
$registro['alumnos']    ='20';
$registro['ciudad']     ='Nuevo Laredo';
$registro['estado']     ='Tamaulipas';
$registro['pais']       ='Mexico';
$registroJson = json_encode($registro);
echo $registroJson;
?>