<?php require_once "views/layout/header.php"; ?>

<section class="header-profesores">

    <h1>Nuestro Equipo de Profesores</h1>

    <p>
        Conoce a los profesionales que imparten nuestros cursos
        y ayudan a formar el talento tecnológico del futuro.
    </p>

</section>

<section class="profesores-grid">

<?php foreach($profesores as $profesor): ?>

    <div class="perfil-profesor">

        <img src="<?= $profesor['imagen']; ?>" alt="<?= $profesor['nombre']; ?>">

        <h3><?= $profesor['nombre']; ?></h3>

        <p><?= $profesor['especialidad']; ?></p>

        <a href="index.php?controller=profesores&action=show&id=<?= $profesor['id']; ?>" class="btn">
            Ver Perfil
        </a>

    </div>

<?php endforeach; ?>

<section class="mision-vision">

    <div class="info-card">

        <div class="icono">🎯</div>

        <h2>Misión</h2>

        <p>
            Formar profesionales altamente capacitados mediante programas
            innovadores en desarrollo de software, bases de datos,
            ciberseguridad y tecnologías emergentes, impulsando el aprendizaje
            práctico y el crecimiento profesional.
        </p>

    </div>

    <div class="info-card">

        <div class="icono">🚀</div>

        <h2>Visión</h2>

        <p>
            Ser la academia tecnológica líder en Latinoamérica,
            reconocida por la excelencia académica, la innovación
            y la formación de profesionales preparados para afrontar
            los retos del mundo digital.
        </p>

    </div>

</section>

<?php require_once "views/layout/footer.php"; ?>