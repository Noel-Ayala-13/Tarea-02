<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aldodiego Heladería</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <link href="../css/estilos.css" rel="stylesheet">
</head>
<body>

    <header class="custom-header">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">
                    <img src="../img/logo.png" alt="Aldodiego" width="120">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link active fs-4" href="#">Inicio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="#nosotros">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="#productos">Productos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="#tienda">Tiendas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="#contacto">Contacto</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link fs-4" href="registro.php">Registarse</a>
                        </li>
                    </ul>
                    <form class="d-flex ms-3">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

<section class="position-relative">
    <img src="../img/helado.jpeg" alt="Helados" class="img-fluid w-100">
    <div class="position-absolute top-0 start-0 w-100 h-100 text-white text-center bg-dark bg-opacity-50 p-4 d-flex flex-column justify-content-center align-items-center rounded">
        <h2>Bienvenidos a HELADERÍA ALDODIEGO</h2>
        <p>Somos una marca Trujillana (Perú) de helados artesanales, creada en 2013. Nos caracterizamos por sabores innovadores y una experiencia única.</p>
        <a href="#nosotros" class="btn btn-primary">Conocer más</a>
    </div>
</section>

<section id="nosotros" class="nosotros py-5">
    <div class="container">
        <h2 class="text-center mb-4">Sobre Nosotros</h2>
        <div class="row align-items-center">
            <div class="col-md-6">
                <h3>Nuestra Historia</h3>
                <p>En Aldodiego Heladería, nos dedicamos a ofrecer una experiencia única en cada bocado de nuestros helados artesanales. Fundada en 2013 en la ciudad de Trujillo, Perú, nuestra misión siempre ha sido innovar con sabores frescos, naturales y exquisitos, brindando momentos dulces a nuestros clientes.</p>
            </div>
            <div class="col-md-6">
                <img id="helado_nosotros" src="../img/helado-nosotros-transformed.jpeg" alt="Nosotros" class="img-fluid rounded">
            </div>
        </div>
    </div>
</section>

<section id="productos" class="container my-5">
    <h2 class="text-center mb-4">Productos de la Semana</h2>
    <div class="row g-4">
        <div class="col-md-4">
            <div class="card producto-semana">
                <img src="../img/churros_con_leche.jpeg" class="card-img-top" alt="Churros con Leche">
                <div class="card-body text-center">
                    <h3 class="h5">Churros con Leche</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card producto-semana">
                <img src="../img/new york.jpg" class="card-img-top" alt="New York">
                <div class="card-body text-center">
                    <h3 class="h5">New York</h3>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card producto-semana">
                <img src="../img/huanchaco.jpg" class="card-img-top" alt="Huanchaco">
                <div class="card-body text-center">
                    <h3 class="h5">Huanchaco</h3>
                </div>
            </div>
        </div>
    </div>
</section>

    <section class="bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Lleva un delicioso helado a tu lado</h2>
            <div class="row g-4">
                <div class="col-md-3 col-6">
                    <div class="card text-center">
                        <img src="../img/triple choco.jpg" class="card-img-top" alt="Triple Choco">
                        <div class="card-body">
                            <h3 class="h6">Triple Choco</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card text-center">
                        <img src="../img/promocion.jpg" class="card-img-top" alt="Promoción">
                        <div class="card-body">
                            <h3 class="h6">Promoción</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card text-center">
                        <img src="../img/buen inicio.jpg" class="card-img-top" alt="Buen Inicio">
                        <div class="card-body">
                            <h3 class="h6">Buen Inicio</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card text-center">
                        <img src="../img/helado de leche.jpg" class="card-img-top" alt="Helado de Leche">
                        <div class="card-body">
                            <h3 class="h6">Helado de Leche</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card text-center">
                        <img src="../img/killed.jpg" class="card-img-top" alt="Killed">
                        <div class="card-body">
                            <h3 class="h6">Killed</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card text-center">
                        <img src="../img/husares.jpg" class="card-img-top" alt="Húsares">
                        <div class="card-body">
                            <h3 class="h6">Húsares</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card text-center">
                        <img src="../img/huanchaco.jpg" class="card-img-top" alt="Huanchaco">
                        <div class="card-body">
                            <h3 class="h6">Huanchaco</h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-6">
                    <div class="card text-center">
                        <img src="../img/dos bolas.jpg" class="card-img-top" alt="Dos Bolas">
                        <div class="card-body">
                            <h3 class="h6">Dos Bolas</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

<section id="tienda" class="tiendas py-5 bg-light">
    <div class="container">
        <h2 class="text-center mb-4">Nuestras Tiendas</h2>
        <div class="row justify-content-center">
            <div class="col-md-5">
                <div class="card">
                    <img src="../img/tienda 1.webp" class="card-img-top" alt="Tienda 1">
                    <div class="card-body text-center">
                        <h5 class="card-title">ADCO - LARCO</h5>
                        <p class="card-text">Av. Larco 193 - Urb. El Recreo, Trujillo</p>
                        <a href="https://www.google.com.pe/maps/place/Aldodiego+%26+Co+-+Larco/@-8.1165218,-79.0313822,20z/data=!4m9!1m2!2m1!1sAv.+Larco+193+Urb.+El+recreo+(Dentro+del+grifo+Pecsa)!3m5!1s0x91ad3dfeacb28e1b:0x2d90a7e7e1a75ce7!8m2!3d-8.1164684!4d-79.0313448!16s%2Fg%2F11fj9j15vn?hl=es-419&entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-primary">Ver en mapa</a>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <img src="../img/tienda 2.webp" class="card-img-top" alt="Tienda 2">
                    <div class="card-body text-center">
                        <h5 class="card-title">ADCO - HÚSARES</h5>
                        <p class="card-text">Av. Húsares de Junin 1131 Urb. La Arboleda.</p>
                        <a href="https://www.google.com.pe/maps/place/Av.+H%C3%BAsares+de+Jun%C3%ADn+1131,+Trujillo+13008/@-8.1260832,-79.0381919,17z/data=!3m1!4b1!4m6!3m5!1s0x91ad3d71f1b72983:0xf4831128d059c493!8m2!3d-8.1260885!4d-79.0356223!16s%2Fg%2F11h5sm_hkg?hl=es-419&entry=ttu&g_ep=EgoyMDI0MTExOC4wIKXMDSoASAFQAw%3D%3D" target="_blank" class="btn btn-primary">Ver en mapa</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="mb-4">
                    <h4>Información General</h4>
                    <p>Dirección: Av. Larco 193 - Trujillo, Perú</p>
                    <p>Contáctanos: info@aldodiego.com</p>
                    <p>&copy; 2024 Aldodiego Heladería. Todos los derechos reservados.</p>
                </div>
            </div>
            <div id="contacto" class="col-md-6">
                <h4>Contáctanos</h4>
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
                    }
                } catch (PDOException $e) {
                    echo "Error de conexión: " . $e->getMessage();
                }
                ?>
                <form action="index.php" method="POST">
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre" name="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Correo Electrónico</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="mensaje" name="mensaje" rows="4" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</footer>

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>

</body>
</html>
