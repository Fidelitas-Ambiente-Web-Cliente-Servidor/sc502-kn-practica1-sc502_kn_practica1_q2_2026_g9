<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profesores - TechNova Academy</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/profesores.css">
</head>

<body>

    <!-- NAVBAR -->
    <nav class="navbar">

        <div class="logo">
            <h2>TechNova Academy</h2>
        </div>

        <ul class="nav-links">
            <li><a href="index.html">Inicio</a></li>
            <li><a href="cursos.html">Cursos</a></li>
            <li><a class="active" href="profesores.html">Profesores</a></li>
            <li><a href="contacto.html">Contacto</a></li>
        </ul>

    </nav>

    <!-- ENCABEZADO -->
    <section class="header-profesores">

        <h1>Nuestro Equipo de Profesores</h1>

        <p>
            Conoce a los profesionales que imparten nuestros cursos
            y ayudan a formar el talento tecnológico del futuro.
        </p>

    </section>

    <!-- PROFESORES DINÁMICOS -->
    <section>

        <div id="listaProfesores" class="profesores-grid"></div>

    </section>

    <!-- MISIÓN Y VISIÓN -->
    <section class="mision-vision">

        <div class="mision">

            <h2>Misión</h2>

            <p>
                Brindar educación tecnológica de calidad,
                desarrollando habilidades prácticas para el mercado laboral.
            </p>

        </div>

        <div class="vision">

            <h2>Visión</h2>

            <p>
                Ser la academia líder en formación tecnológica
                e innovación digital en Latinoamérica.
            </p>

        </div>

    </section>

    <!-- MODAL -->
    <div id="modalProfesor" class="modal">

        <div class="modal-contenido">

            <span id="cerrarModal">&times;</span>

            <img id="modalFoto" src="" alt="Profesor">

            <h2 id="modalNombre"></h2>

            <p id="modalEspecialidad"></p>

            <p id="modalDescripcion"></p>

            <p id="modalCorreo"></p>

            <p id="modalCursos"></p>

        </div>

    </div>

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

    <script src="js/profesores.js"></script>

</body>

</html>