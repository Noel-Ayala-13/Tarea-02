<?php
$host = "localhost";
$dbname = "heladeria";
$username = "root";
$password = "";

try {
    $pdo = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $nombre = $_POST['nombre'];
        $correo_electronico = $_POST['email'];
        $mensaje = $_POST['mensaje'];

        $sql = "INSERT INTO contactanos (nombre, correo_electronico, mensaje) VALUES (:nombre, :correo_electronico, :mensaje)";
        $stmt = $pdo->prepare($sql);
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo_electronico', $correo_electronico);
        $stmt->bindParam(':mensaje', $mensaje);
        $stmt->execute();
        
        header('Location: ' . $_SERVER['REQUEST_URI']);
        exit;
    }
} catch (PDOException $e) {
    echo "Error de conexión: " . $e->getMessage();
}
?>
