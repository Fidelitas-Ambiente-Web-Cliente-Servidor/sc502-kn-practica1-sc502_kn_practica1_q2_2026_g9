<!-- HERO -->

<section class="hero">


<h1>
TechNova Academy
</h1>


<p>
Impulsando el talento digital del futuro.
</p>


<a href="index.php?controller=cursos&action=index" class="btn">
Explorar Cursos
</a>


</section>



<!-- CURSOS DESTACADOS -->

<section class="destacados">


<h2>
Cursos Destacados
</h2>


<a href="index.php?controller=index&action=create">
➕ Agregar Curso
</a>



<div class="cards">


<?php foreach($cursos as $curso): ?>


<div class="card">


<img src="<?= $curso['imagen'] ?>" 
alt="<?= $curso['nombre'] ?>">



<h3>
<?= $curso['nombre'] ?>
</h3>



<p>
<?= $curso['descripcion'] ?>
</p>



<span>
<?= $curso['categoria'] ?>
</span>



<br><br>


<a href="index.php?controller=index&action=edit&id=<?= $curso['id'] ?>">
Editar
</a>



<a href="index.php?controller=index&action=delete&id=<?= $curso['id'] ?>">
Eliminar
</a>



</div>


<?php endforeach; ?>


</div>


</section>




<!-- ESTADÍSTICAS -->

<section class="estadisticas">


<div class="estadistica">

<h3>
5000+
</h3>

<p>
Estudiantes
</p>

</div>



<div class="estadistica">

<h3>
30
</h3>

<p>
Profesores
</p>

</div>



<div class="estadistica">

<h3>
50
</h3>

<p>
Cursos
</p>

</div>


</section>




<!-- TESTIMONIOS -->

<section class="testimonios">


<h2>
Testimonios
</h2>



<div class="testimonio">

<p>
"Gracias a TechNova conseguí mi primer empleo como desarrollador web."
</p>

<strong>
- María Rodríguez
</strong>

</div>



<div class="testimonio">

<p>
"Los cursos son prácticos y los profesores tienen mucha experiencia."
</p>

<strong>
- Carlos Gómez
</strong>

</div>


</section>