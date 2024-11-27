<?php
require_once('../conexion.php');
require_once('../auto.php');

$data = json_decode(file_get_contents("php://input"));

if (!empty($data->marca) && !empty($data->modelo) && !empty($data->color)) {
    $auto = new auto($conexion, $data->marca, $data->modelo, $data->color);

    if ($auto->registrar()) {
        echo json_encode(["message" => "auto registrado correctamente."]);
    } else {
        echo json_encode(["message" => "Error al registrar el auto."]);
    }
} else {
    echo json_encode(["message" => "Datos incompletos."]);
}
?>