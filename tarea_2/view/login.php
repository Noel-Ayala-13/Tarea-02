<?php
require_once '../model/conexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['nombre_usuario']) && isset($_POST['contrasena'])) {
        $nombre_usuario = $_POST['nombre_usuario'];
        $password = $_POST['contrasena'];

        try {
            $stmt = $pdo->prepare("SELECT contrasena FROM usuarios WHERE nombre_usuario = :nombre_usuario");
            $stmt->bindParam(':nombre_usuario', $nombre_usuario);
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && $password === $user['contrasena']) {
            header('Location: index.php');
        exit();
        } else {
            echo "Nombre de usuario o contraseña incorrectos.";
        }

        } catch (PDOException $e) {
            echo "Error en la consulta: " . $e->getMessage();
        }
    } else {
        echo "Por favor, ingrese su nombre de usuario y contraseña.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - Heladería</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-card {
            max-width: 900px;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            overflow: hidden;
        }
        .login-image {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
        .login-form {
            padding: 30px;
        }
        .btn-secundary {
            background-color: #FF6347;
            border-color: #FF6347;
            color: white;
        }
        .btn-secundary:hover {
            background-color: #FF4500;
            border-color: #FF4500;
        }
        .btn-space {
            margin-bottom: 15px;
        }
    </style>
</head>
<body>
    <div class="card login-card">
    <?php
    if (isset($_GET['registro']) && $_GET['registro'] === 'exitoso') {
        echo '
            <div class="alert alert-success alert-dismissible fade show" role="alert" style="width: 100%; margin: 0 auto; text-align: center; font-size: 1rem;">
                <strong>¡Registro exitoso!</strong> Por favor, inicia sesión con tus credenciales.
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        ';
    }
    ?>
        <div class="row g-0">
            <div class="col-md-6 login-form">
                <h3 class="text-center mb-4">Inicia Sesión</h3>
                <form action="../model/procesar_login.php" method="POST">
                    <div class="mb-3">
                        <label for="username" class="form-label">Nombre de Usuario:</label>
                        <input type="text" class="form-control" id="username" name="username" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Contraseña:</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-secundary w-100 btn-space">Entrar</button>
                    </div>
                </form>
                <a href="registro.php" class="btn btn-primary w-100 btn-space">Registrarse</a>
            </div>
            <div class="col-md-6">
                <img src="../img/login.jpg" alt="Helado" class="login-image">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
