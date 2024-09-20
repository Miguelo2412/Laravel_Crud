<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Mi Sitio Web</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/mision">Misión</a></li>
                <li><a href="/vision">Visión</a></li>
                <li><a href="/quienes-somos">Quiénes Somos</a></li>
            </ul>
        </nav>
    </header>

    <div class="sidebar">
        <h2>Barra Lateral</h2>
        <ul>
            <li><a href="https://www.op.gg/summoners/lan/TheDotBSito-LAN">Dotb</a></li>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Instagram</a></li>
        </ul>
    </div>

    <main>
        <h1>Bienvenido a Mi Sitio Web</h1>
        <p>Este es un sitio web personal desarrollado con Laravel.</p>
        <img src="ruta/de/tu/imagen.jpg" alt="Imagen de bienvenida">
    </main>

    <footer>
        <p>&copy; 2024 Mi Sitio Web. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
