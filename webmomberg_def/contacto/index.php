<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilo.css">
    <script src="../script.js/main.js"></script>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="../css/estilo.css">
        <script src="../script.js/main.js"></script>
        <title>Contacto</title>
    </head>
    
    <title>Contacto</title>
</head>
<body>
    <header>
        <a href="../index.php">
            <img src="../imagenes/Logo.png" alt="" width="150px" height="50px" class="logo"> 
        </a>
        <nav class="navigation">
            <a href="../sobremi/index.php">Sobre mi</a>
            <a href="../trabajos/index.php">Trabajos</a>
            <a href="index.php" class="btn-talk">Contáctame</a>
        </nav>
        <div class="hamburger">
            <span class="bar"></span>
            <span class="bar"></span>
            <span class="bar"></span>
        </div>
        <header class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="../index.php">
                <img src="../imagenes/Logo.png" alt="Logo" width="150px" height="50px" class="logo">
            </a>
            <!-- Botón de menú hamburguesa -->
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Menú desplegable -->
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="../sobremi/index.php">Sobre mí</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../trabajos/index.php">Trabajos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary text-white" href="index.php">Contáctame</a>
                    </li>
                </ul>
            </div>
        </header>
    </header>

    <form action="procesar_contacto.php" method="POST" id="contactForm">
    <h2>Contacto</h2>
    <div class="input-group">
        <label for="name">Nombre</label>
        <input type="text" name="name" id="name" placeholder="Nombre" required>
        <label for="email">Email</label>
        <input type="email" name="email" id="email" placeholder="Email" required>
        <label for="message">Mensaje</label>
        <textarea name="message" id="message" cols="30" rows="5" placeholder="Mensaje" required></textarea>
        <div class="form-txt">
            <a href="#">Política de privacidad</a>
            <a href="#">Términos y condiciones</a>
        </div>
        <input type="submit" value="Enviar">
    </div>
</form>

    <section class="home"></section>

    <!-- Validación JavaScript -->
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const form = document.getElementById('contactForm');

            form.addEventListener('submit', function(event) {
                let isValid = true;
                const name = document.getElementById('name').value.trim();
                const email = document.getElementById('email').value.trim();
                const message = document.getElementById('message').value.trim();

                // Validar nombre
                if (name === '') {
                    alert('Por favor ingrese su nombre.');
                    isValid = false;
                }

                // Validar email
                if (email === '') {
                    alert('Por favor ingrese su email.');
                    isValid = false;
                } else if (!validateEmail(email)) {
                    alert('Por favor ingrese un email válido.');
                    isValid = false;
                }

                // Validar mensaje
                if (message === '') {
                    alert('Por favor ingrese su mensaje.');
                    isValid = false;
                }

                if (!isValid) {
                    event.preventDefault();
                }
            });

            function validateEmail(email) {
                const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                return re.test(String(email).toLowerCase());
            }
        });
    </script>

</body>
</html>
