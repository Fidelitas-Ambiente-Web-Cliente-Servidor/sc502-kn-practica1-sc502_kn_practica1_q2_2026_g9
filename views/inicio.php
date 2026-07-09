<?php require_once "views/layout/header.php"; ?>

<section class="hero">

    <h1>TechNova Academy</h1>

    <p>
        Impulsando el talento digital del futuro.
    </p>

    <a href="index.php?controller=index&action=create" class="btn">
        ➕ Agregar Curso
    </a>

</section>

<section class="destacados">

    <h2>Cursos Destacados</h2>

    <div class="cards">

        <?php if(!empty($cursos)): ?>

            <?php foreach($cursos as $curso): ?>

                <div class="card">

                    <img
                        src="img/curso/<?= htmlspecialchars($curso['imagen']); ?>"
                        alt="<?= htmlspecialchars($curso['nombre']); ?>">

                    <div class="card-body">

                        <h3>
                            <?= htmlspecialchars($curso['nombre']); ?>
                        </h3>

                        <p>
                            <?= htmlspecialchars($curso['descripcion']); ?>
                        </p>

                        <span>
                            <?= htmlspecialchars($curso['categoria']); ?>
                        </span>

                        <div class="acciones">

                            <a
                                href="index.php?controller=index&action=edit&id=<?= $curso['id']; ?>"
                                class="btn-edit">

                                ✏️ Editar

                            </a>

                            <a
                                href="index.php?controller=index&action=delete&id=<?= $curso['id']; ?>"
                                class="btn-delete"
                                onclick="return confirm('¿Está seguro de eliminar este curso?');">

                                🗑 Eliminar

                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        <?php else: ?>

            <h3 style="text-align:center;">
                No hay cursos registrados.
            </h3>

        <?php endif; ?>

    </div>

</section>

<?php require_once "views/layout/footer.php"; ?>