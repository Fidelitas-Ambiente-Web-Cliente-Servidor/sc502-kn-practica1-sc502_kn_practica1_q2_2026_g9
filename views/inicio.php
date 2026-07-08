<section class="hero">

<h1>
TechNova Academy
</h1>

<p>
Impulsando el talento digital del futuro.
</p>

<a href="index.php?controller=index&action=create" class="btn">
Agregar Curso
</a>

</section>



<section class="destacados">

<h2>
Cursos Destacados
</h2>


<div class="cards">


<?php foreach($cursos as $curso): ?>


<div class="card">


<img src="<?= $curso['imagen']; ?>">


<h3>
<?= $curso['nombre']; ?>
</h3>


<p>
<?= $curso['descripcion']; ?>
</p>


<span>
<?= $curso['categoria']; ?>
</span>


<br><br>


<a href="index.php?controller=index&action=edit&id=<?= $curso['id']; ?>">
Editar
</a>


<a href="index.php?controller=index&action=delete&id=<?= $curso['id']; ?>"
onclick="return confirm('¿Eliminar curso?')">
Eliminar
</a>


</div>


<?php endforeach; ?>


</div>


</section>