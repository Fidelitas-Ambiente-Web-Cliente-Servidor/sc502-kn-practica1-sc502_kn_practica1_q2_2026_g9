<section class="hero">

    <h1>TechNova Academy</h1>

    <p>
        Impulsando el talento digital del futuro.
    </p>

    <a href="index.php?controller=index&action=create" class="btn">
        Agregar Curso
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

                    <h3>
                        <?= htmlspecialchars($curso['nombre']); ?>
                    </h3>

                    <p>
                        <?= htmlspecialchars($curso['descripcion']); ?>
                    </p>

                    <span>
                        <?= htmlspecialchars($curso['categoria']); ?>
                    </span>

                    <br><br>

                    <a href="index.php?controller=index&action=edit&id=<?= $curso['id']; ?>">
                        Editar
                    </a>

                    |

                    <a href="index.php?controller=index&action=delete&id=<?= $curso['id']; ?>"
                       onclick="return confirm('¿Eliminar curso?');">
                        Eliminar
                    </a>

                </div>

            <?php endforeach; ?>

        <?php else: ?>

            <p>No hay cursos registrados.</p>

        <?php endif; ?>

    </div>

</section>