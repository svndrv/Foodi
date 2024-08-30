<?php 

session_start();

require "../config/conexion.php";
require "../model/platos.php";

$platos = new Platos();

$option = '';
$id = '';
$name = '';
$ingredients = '';
$preparation = '';
$type = '';
$calories = '';
$id_user = '';
$query = '';

if(isset($_POST['option'])){ $option = $_POST['option']; }else{ $option = "";};
if(isset($_POST['id'])){ $id = $_POST['id']; }else{ $id = "";};
if(isset($_POST['name'])){ $name = $_POST['name']; }else{ $name = "";};
if(isset($_POST['ingredients'])){ $ingredients = $_POST['ingredients']; }else{ $ingredients = "";};
if(isset($_POST['preparation'])){ $preparation = $_POST['preparation']; }else{ $preparation = "";};
if(isset($_POST['type'])){ $type = $_POST['type']; }else{ $type = "";};
if(isset($_POST['calories'])){ $calories = $_POST['calories']; }else{ $calories = "";};
if(isset($_POST['id_user'])){ $id_user = $_POST['id_user']; }else{ $id_user = "";};

switch($option){   
    case 'search':
        echo json_encode($platos->buscar_platos_por_nombre($name));
        break;

    default:
        echo json_encode($platos->obtener_platos());
        break;
}


   

?>