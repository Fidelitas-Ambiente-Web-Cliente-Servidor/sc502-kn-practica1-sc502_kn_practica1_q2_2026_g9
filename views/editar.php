<h2>
Editar Curso
</h2>



<form method="POST"
action="index.php?controller=index&action=update">


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
Imagen
</label>


<input type="text"
name="imagen"
value="<?= $curso['imagen']; ?>">



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