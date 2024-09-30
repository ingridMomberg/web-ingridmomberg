<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ancho-del-dispositivo, escala-inicial=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=ancho-del-dispositivo, escala-inicial=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../css/estilo.css">
    <title>Sobre mí</title>
</head>

<body>
    <header>
        <a href="../index.php">
            <img src="../imagenes/Logo.png" alt="" width="150px" height="50px" class="logo">
        </a>
        <nav class="navigation">
            <a href="index.php">Sobre mí</a>
            <a href="../trabajos/index.php">Trabajos</a>
            <a href="../contacto/index.php" class="btn-talk">Contáctame</a>
        </nav>

        <header class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../index.php">
                <img src="../imagenes/Logo.png" alt="Logotipo" width="150px" height="50px" class="logo">
            </a>
            <!-- Botón de menú hamburguesa -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alternar navegación">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menú desplegable -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Sobre mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../trabajos/index.php">Trabajos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" href="../contacto/index.php">Contáctame</a>
                    </li>
                </ul>
            </div>
        </header>
    </header>

    <section class="home"></section>

    <section class="sobremi">
        <h1>Sobre mí</h1>
        <div class="perfil">
            <img src="../imagenes/yo.jpeg" alt="Mi foto" width="200px" height="200px" class="perfil-foto">
            <div class="info">
                <h1>Sobre mí</h1>
                <h2>Nombre y apellido</h2>
                <p>Soy Ingrid Momberg</p>
                <h2>De donde soy</h2>
                <p>Soy de Patagonia, Argentina</p>
                <h2>A qué me dedico</h2>
                <p>Me dedico a animación, diseño e ilustraciones</p>
                <h2>Habilidades</h2>
                <ul>
                    <li>Animación tradicional</li>
                    <li>Animación por cut-out</li>
                    <li>Motion Graphics</li>
                    <li>Ilustración tradicional y digital</li>
                </ul>
            </div>
        </div>
    </section>
</body>
</html>