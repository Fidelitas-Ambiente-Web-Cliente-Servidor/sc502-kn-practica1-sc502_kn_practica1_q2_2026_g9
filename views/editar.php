<?php require_once "views/layout/header.php"; ?>

<div class="container mt-5">

    <div class="card shadow">

        <div class="card-header bg-dark text-white">
            <h2 class="mb-0">✏️ Editar Curso</h2>
        </div>

        <div class="card-body">

            <form method="POST"
                  action="index.php?controller=index&action=update"
                  enctype="multipart/form-data">

                <input type="hidden"
                       name="id"
                       value="<?= $curso['id']; ?>">

                <input type="hidden"
                       name="imagen_actual"
                       value="<?= htmlspecialchars($curso['imagen']); ?>">

                <div class="mb-3">

                    <label class="form-label">
                        Nombre del Curso
                    </label>

                    <input class="form-control"
                           type="text"
                           name="nombre"
                           value="<?= htmlspecialchars($curso['nombre']); ?>"
                           required>

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Descripción
                    </label>

                    <textarea class="form-control"
                              rows="5"
                              name="descripcion"
                              required><?= htmlspecialchars($curso['descripcion']); ?></textarea>

                </div>

                <div class="mb-3 text-center">

                    <label class="form-label d-block">
                        Imagen Actual
                    </label>

                    <img src="img/curso/<?= htmlspecialchars($curso['imagen']); ?>"
                         class="img-fluid rounded shadow"
                         style="max-width:250px;">

                </div>

                <div class="mb-3">

                    <label class="form-label">
                        Nueva Imagen (Opcional)
                    </label>

                    <input class="form-control"
                           type="file"
                           name="imagen"
                           accept=".jpg,.jpeg,.png">

                </div>

                <div class="mb-4">

                    <label class="form-label">
                        Categoría
                    </label>

                    <input class="form-control"
                           type="text"
                           name="categoria"
                           value="<?= htmlspecialchars($curso['categoria']); ?>"
                           required>

                </div>

                <button class="btn btn-success">
                    💾 Guardar Cambios
                </button>

                <a href="index.php?controller=index&action=index"
                   class="btn btn-secondary">
                    Cancelar
                </a>

            </form>

        </div>

    </div>

</div>

<?php require_once "views/layout/footer.php"; ?>