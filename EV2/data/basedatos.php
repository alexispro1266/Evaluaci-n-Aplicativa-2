<?php
$db = new mysqli('localhost','cursos', 'alexis1266', 'EvApli2');
if(!$db){
    echo 'Error al conectra la Base de datos';
    exit;
}