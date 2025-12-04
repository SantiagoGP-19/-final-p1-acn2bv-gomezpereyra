<?php
header('Content-Type: application/json');
include_once("conexion.php");
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $titulo = $_POST['title'] ?? '';
    $artista = $_POST['artist'] ?? '';
    $categoria = $_POST['categoria'] ?? '';
    $descripcion = $_POST['descripcion'] ?? '';
    $imagen = !empty($_POST['imagen']) ? $_POST['imagen'] : 'https://picsum.photos/seed/default/400/250';
    $anio = !empty($_POST['anio']) ? $_POST['anio'] : date('Y');
    if ($titulo === '' || $categoria === '' || $descripcion === '') {
        echo json_encode(['status' => 'error', 'message' => 'Faltan datos obligatorios']);
        exit;
    }
try {
    $db = new conexion();

    $sql = "INSERT INTO `albuns` (`Id`, `titulo`, `artista`, `categoria`, `descripcion`, `url`, `anio`) VALUES (NULL, ?, ?, ?, ?, ?, ?)";
    $db->insertar($sql, [$titulo, $artista, $categoria, $descripcion, $imagen, $anio]);

    echo json_encode(['status' => 'success', 'message' => 'Álbum guardado correctamente']);
} catch (Exception $e) {
    echo json_encode(['status' => 'error', 'message' => 'Error en la base de datos']);
}
}
