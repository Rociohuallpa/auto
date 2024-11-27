<?php

class auto {
    public $conexion;
    public $marca, $modelo, $color;

    public function __construct($conexion, $marca = null, $modelo = null, $color = null) {
        $this->conexion = $conexion;
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->color = $color;
    }

    // Registrar un auto
    public function registrar() {
        $sql = "INSERT INTO `auto`( `marca`, `modelo`, `color`) VALUES ('$this->marca','$this->modelo', '$this->color')";
        return mysqli_query($this->conexion, $sql);
    }

    // Obtener todos los autos
    public static function obtenerTodos($conexion) {
        $sql = "SELECT * FROM auto";
        return mysqli_query($conexion, $sql);
    }
  
    public function actualizar($id) {
        $sql = "UPDATE `auto` SET marca ='$this->marca', modelo ='$this->modelo', color='$this->color' WHERE id=$id";
        return mysqli_query($this->conexion, $sql);
    }
 
    // Eliminar un auto
    public static function eliminar($conexion, $id) {
        $sql = "DELETE FROM `auto` WHERE id=$id";
        return mysqli_query($conexion, $sql);
    }
}
?>