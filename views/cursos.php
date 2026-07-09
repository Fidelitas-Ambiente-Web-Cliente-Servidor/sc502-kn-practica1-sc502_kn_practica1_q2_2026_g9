<section class="header-cursos">

    <h1>Catálogo de Cursos</h1>

    <p>
        Explora nuestros cursos especializados en tecnología y desarrollo profesional.
    </p>

</section>

<section class="filtros">

    <input
        type="text"
        id="buscarCurso"
        placeholder="🔍 Buscar curso...">

    <select id="filtroCategoria">

        <option value="">Todas las categorías</option>

        <option value="Programación">Programación</option>

        <option value="Bases de Datos">Bases de Datos</option>

        <option value="Diseño">Diseño</option>

        <option value="Redes">Redes</option>

        <option value="Seguridad">Seguridad</option>

    </select>

</section>

<section class="contenedor-cursos">

    <div id="listaCursos" class="cards">

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

                        <p>
                            <strong>Categoría:</strong>
                            <?= htmlspecialchars($curso['categoria']); ?>
                        </p>

                        <?php if(isset($curso['duracion'])): ?>

                            <p>

                                <strong>Duración:</strong>

                                <?= htmlspecialchars($curso['duracion']); ?>

                            </p>

                        <?php endif; ?>

                        <?php if(isset($curso['precio'])): ?>

                            <p>

                                <strong>Precio:</strong>

                                ₡<?= htmlspecialchars($curso['precio']); ?>

                            </p>

                        <?php endif; ?>

                        <div style="margin-top:20px;">

                            <a
                                class="btn-edit"
                                href="index.php?controller=index&action=edit&id=<?= $curso['id']; ?>">

                                Editar

                            </a>

                            <a
                                class="btn-delete"
                                href="index.php?controller=index&action=delete&id=<?= $curso['id']; ?>"
                                onclick="return confirm('¿Eliminar este curso?');">

                                Eliminar

                            </a>

                        </div>

                    </div>

                </div>

            <?php endforeach; ?>

        <?php else: ?>

            <h2 style="text-align:center; width:100%;">

                No hay cursos registrados.

            </h2>

        <?php endif; ?>

    </div>

</section>

<script src="js/cursos.js?v=<?= time(); ?>"></script>