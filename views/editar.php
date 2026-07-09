<h2>
Editar Curso
</h2>



<form method="POST"
action="index.php?controller=index&action=update"
enctype="multipart/form-data">


<input type="hidden"
name="id"
value="<?= $curso['id']; ?>">



<label>
Nombre
</label>

<input type="text"
name="nombre"
value="<?= $curso['nombre']; ?>">



<label>
Descripción
</label>


<textarea name="descripcion">

<?= $curso['descripcion']; ?>

</textarea>



<label>
Imagen actual
</label>

<br>

<img
src="img/curso/<?= htmlspecialchars($curso['imagen']); ?>"
width="180"
alt="Imagen del curso">

<br><br>

<input
type="hidden"
name="imagen_actual"
value="<?= htmlspecialchars($curso['imagen']); ?>">

<label>
Seleccionar nueva imagen (opcional)
</label>

<input
type="file"
name="imagen"
accept=".jpg,.jpeg,.png">



<label>
Categoría
</label>


<input type="text"
name="categoria"
value="<?= $curso['categoria']; ?>">



<button type="submit">
Actualizar
</button>


</form>