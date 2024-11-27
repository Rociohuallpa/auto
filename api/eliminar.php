<?php
require_once('../conexion.php');
require_once('../auto.php');

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->id)) {
    if (auto::eliminar($conexion, $data->id)) {
        echo json_encode(["message" => "auto eliminado correctamente."]);
    } else {
        echo json_encode(["message" => "Error al eliminar el auto."]);
    }
} else {
    echo json_encode(["message" => "Datos incompletos."]);
}
?>