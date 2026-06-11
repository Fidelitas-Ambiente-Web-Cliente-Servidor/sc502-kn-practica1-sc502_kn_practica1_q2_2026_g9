// =========================
// CURSOS DESTACADOS
// =========================

const cursos = [
    {
        nombre: "Desarrollo Web",
        descripcion: "Aprende HTML, CSS y JavaScript desde cero.",
        imagen: "img/curso1.jpg",
        categoria: "Desarrollo Web"
    },
    {
        nombre: "Inteligencia Artificial",
        descripcion: "Domina Machine Learning y redes neuronales.",
        imagen: "img/curso2.jpg",
        categoria: "Tecnología"
    },
    {
        nombre: "Ciberseguridad",
        descripcion: "Protege sistemas y redes empresariales.",
        imagen: "img/curso3.jpg",
        categoria: "Seguridad"
    }
];

// Obtener el contenedor del HTML
const contenedorCursos = document.getElementById("contenedorCursos");

// Crear las tarjetas dinámicamente
cursos.forEach(curso => {

    // Tarjeta principal
    const card = document.createElement("div");
    card.classList.add("card");

    // Imagen
    const img = document.createElement("img");
    img.src = curso.imagen;
    img.alt = curso.nombre;

    // Contenido de la tarjeta
    const cardBody = document.createElement("div");
    cardBody.classList.add("card-body");

    // Nombre del curso
    const titulo = document.createElement("h3");
    titulo.textContent = curso.nombre;

    // Categoría
    const categoria = document.createElement("p");
    categoria.innerHTML = `<strong>Categoría:</strong> ${curso.categoria}`;

    // Descripción
    const descripcion = document.createElement("p");
    descripcion.textContent = curso.descripcion;

    // Botón
    const boton = document.createElement("button");
    boton.textContent = "Ver más";

    // Construir la tarjeta
    cardBody.appendChild(titulo);
    cardBody.appendChild(categoria);
    cardBody.appendChild(descripcion);
    cardBody.appendChild(boton);

    card.appendChild(img);
    card.appendChild(cardBody);

    // Agregar al contenedor
    contenedorCursos.appendChild(card);

});