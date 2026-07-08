<h2>
Agregar Curso Destacado
</h2>



<form method="POST"
action="index.php?controller=index&action=store">


<label>
Nombre del curso
</label>

<input type="text" name="nombre" required>



<label>
Descripción
</label>

<textarea name="descripcion" required></textarea>



<label>
Imagen
</label>

<input type="text" name="imagen"
placeholder="img/php.jpg">



<label>
Categoría
</label>

<input type="text" name="categoria">



<button type="submit">
Guardar
</button>


</form>