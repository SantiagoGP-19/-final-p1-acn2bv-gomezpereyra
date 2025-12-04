<?php
header('Content-Type: application/json');

include_once("conexion.php");

$db = new conexion();

$busqueda = isset($_GET['q']) ? $_GET['q'] : '';

$categoria = isset($_GET['categoria']) ? $_GET['categoria'] : '';

$busqueda = addslashes($busqueda);
$categoria = addslashes($categoria);

$sql = "SELECT * FROM albuns WHERE 1=1";

$params = [];
if ($busqueda != '') {
    $sql .= " AND titulo LIKE ?";
    $params[] = "%$busqueda%";
}
if ($categoria != '' && $categoria != 'todas') {
    $sql .= " AND categoria = ?";
    $params[] = $categoria;
}

$sql .= " ORDER BY id DESC";

try {
    $stmt = $db->pdo->prepare($sql);  // Accede directamente a $this->pdo si es necesario, pero como $db es new Conexion(), usa $db->pdo
    $stmt->execute($params);
    $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($resultados);
} catch (Exception $e) {
    http_response_code(500);
    echo json_encode(['error' => 'Error al consultar la base de datos']);
}