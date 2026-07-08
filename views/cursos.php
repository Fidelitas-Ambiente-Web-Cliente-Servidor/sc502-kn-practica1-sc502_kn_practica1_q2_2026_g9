<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cursos - TechNova Academy</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/cursos.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">

        <div class="logo">
            <h2>TechNova Academy</h2>
        </div>

        <ul class="nav-links">
            <li><a href="index.html">Inicio</a></li>
            <li><a class="active" href="cursos.html">Cursos</a></li>
            <li><a href="profesores.html">Profesores</a></li>
            <li><a href="contacto.html">Contacto</a></li>
        </ul>

    </nav>

    <!-- ENCABEZADO -->
    <section class="header-cursos">

        <h1>Catálogo de Cursos</h1>

        <p>
            Explora nuestros cursos especializados en tecnología
            y desarrollo profesional.
        </p>

    </section>

    <!-- FILTROS -->
    <section class="filtros">

        <input
            type="text"
            id="buscarCurso"
            placeholder="Buscar curso..."
        >

        <select id="filtroCategoria">
            <option value="Todos">Todas las categorías</option>
            <option value="Web">Desarrollo Web</option>
            <option value="IA">Inteligencia Artificial</option>
            <option value="Seguridad">Ciberseguridad</option>
        </select>

    </section>

    <!-- CURSOS DINÁMICOS -->
    <section>

        <div id="listaCursos" class="cursos-grid"></div>

    </section>

    <!-- FOOTER -->
    <footer>

        <h3>TechNova Academy</h3>

        <div class="social">
            <a href="#">Facebook</a>
            <a href="#">Instagram</a>
            <a href="#">LinkedIn</a>
        </div>

        <p>
            Desarrollado para Ambiente Web Cliente Servidor
            - Universidad Fidélitas
        </p>

    </footer>

    <script src="js/cursos.js"></script>

</body>

</html>