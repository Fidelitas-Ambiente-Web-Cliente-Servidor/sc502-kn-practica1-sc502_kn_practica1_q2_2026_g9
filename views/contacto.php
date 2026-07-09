<?php require_once "views/layout/header.php"; ?>

<section class="header-contacto">

    <h1>Contáctanos</h1>

    <p>
        Estamos disponibles para responder tus consultas
        sobre nuestros cursos y programas.
    </p>

</section>

<section class="contacto-container">

    <form method="POST"
          action="index.php?controller=contacto&action=store">

        <div class="campo">
            <label>Nombre Completo</label>
            <input type="text" name="nombre" required>
        </div>

        <div class="campo">
            <label>Correo Electrónico</label>
            <input type="email" name="correo" required>
        </div>

        <div class="campo">
            <label>Mensaje</label>
            <textarea name="mensaje" rows="5" required></textarea>
        </div>

        <button type="submit">
            Enviar Mensaje
        </button>

    </form>

</section>

<section class="info-contacto">

    <h2>Información de Contacto</h2>

    <p class="subtitulo">
        Estamos para ayudarte. Puedes comunicarte con nosotros mediante cualquiera
        de los siguientes medios.
    </p>

    <div class="contacto-grid">

        <div class="contacto-card">

            <div class="icono">📍</div>

            <h3>Dirección</h3>

            <p>
                Universidad Fidélitas<br>
                San Pedro, San José<br>
                Costa Rica
            </p>

        </div>

        <div class="contacto-card">

            <div class="icono">📞</div>

            <h3>Teléfono</h3>

            <p>
                (+506) 2222-3333
            </p>

            <small>
                Lunes a Viernes<br>
                8:00 a.m. - 6:00 p.m.
            </small>

        </div>

        <div class="contacto-card">

            <div class="icono">📧</div>

            <h3>Correo</h3>

            <p>
                info@technovaacademy.com
            </p>

            <small>
                Respondemos en menos de 24 horas.
            </small>

        </div>

    </div>

</section>

<section class="mapa">

    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.0009541903464!2d-84.03759952425393!3d9.933877674167526!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e3f47ea4ff37%3A0x7a7818a6a9e5c90c!2sUniversidad%20Fid%C3%A9litas!5e0!3m2!1ses!2scr!4v1783633636110!5m2!1ses!2scr"
        width="100%"
        height="450"
        style="border:0;"
        allowfullscreen
        loading="lazy"
        referrerpolicy="strict-origin-when-cross-origin">
    </iframe>

</section>

<?php require_once "views/layout/footer.php"; ?>