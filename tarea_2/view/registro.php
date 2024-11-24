<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro - Heladería</title>
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
        .register-card {
            max-width: 900px;
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 15px;
            overflow: hidden;
        }
        .register-image {
            object-fit: cover;
            width: 100%;
            height: 100%;
        }
        .register-form {
            padding: 30px;
        }
        .btn-primary {
            background-color: #FF6347;
            border-color: #FF6347;
        }
        .btn-primary:hover {
            background-color: #FF4500;
            border-color: #FF4500;
        }
    </style>
</head>
<body>
    <div class="card register-card">
        <div class="row g-0">
            <div class="col-md-6 register-form">
                <h3 class="text-center mb-4">Regístrate</h3>
                <form action="../model/procesar_registro.php" method="POST">
                    <div class="mb-3">
                        <label for="nombre_usuario" class="form-label">Nombre de Usuario</label>
                        <input type="text" class="form-control" id="nombre_usuario" name="nombre_usuario" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="correo" name="correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="contrasena" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" name="contrasena" required>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary w-100">Registrarse</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <img src="../img/registro.jpg" alt="Helado" class="register-image">
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
