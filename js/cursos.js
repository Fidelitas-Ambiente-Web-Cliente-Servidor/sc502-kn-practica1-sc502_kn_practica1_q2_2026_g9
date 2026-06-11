// ==========================
// ARRAY DE CURSOS
// ==========================

const cursos = [
    {
        nombre: "HTML y CSS",
        descripcion: "Aprende a crear sitios web modernos y responsivos.",
        categoria: "Web",
        duracion: "6 semanas",
        precio: "$120",
        imagen: "img/curso1.jpg"
    },
    {
        nombre: "JavaScript",
        descripcion: "Programación interactiva para páginas web.",
        categoria: "Web",
        duracion: "8 semanas",
        precio: "$150",
        imagen: "img/curso2.jpg"
    },
    {
        nombre: "React",
        descripcion: "Desarrollo de aplicaciones web modernas.",
        categoria: "Web",
        duracion: "10 semanas",
        precio: "$180",
        imagen: "img/curso3.jpg"
    },
    {
        nombre: "Python para IA",
        descripcion: "Fundamentos de inteligencia artificial con Python.",
        categoria: "IA",
        duracion: "8 semanas",
        precio: "$200",
        imagen: "img/curso4.jpg"
    },
    {
        nombre: "Machine Learning",
        descripcion: "Modelos predictivos y aprendizaje automático.",
        categoria: "IA",
        duracion: "12 semanas",
        precio: "$250",
        imagen: "img/curso5.jpg"
    },
    {
        nombre: "Ciberseguridad",
        descripcion: "Protección de sistemas, redes y datos.",
        categoria: "Seguridad",
        duracion: "10 semanas",
        precio: "$220",
        imagen: "img/curso6.jpg"
    }
];

// ==========================
// ELEMENTOS DEL DOM
// ==========================

const listaCursos = document.getElementById("listaCursos");
const buscarCurso = document.getElementById("buscarCurso");
const filtroCategoria = document.getElementById("filtroCategoria");

// ==========================
// RENDERIZAR CURSOS
// ==========================

function renderizarCursos(cursosMostrar) {

    listaCursos.innerHTML = "";

    cursosMostrar.forEach(curso => {

        const tarjeta = document.createElement("div");
        tarjeta.classList.add("card-curso");

        tarjeta.innerHTML = `
            <img src="${curso.imagen}" alt="${curso.nombre}">
            
            <div class="contenido">
                <h3>${curso.nombre}</h3>

                <p>${curso.descripcion}</p>

                <p><strong>Categoría:</strong> ${curso.categoria}</p>

                <p><strong>Duración:</strong> ${curso.duracion}</p>

                <p><strong>Precio:</strong> ${curso.precio}</p>
            </div>
        `;

        listaCursos.appendChild(tarjeta);
    });
}

// ==========================
// FILTRAR CURSOS
// ==========================

function aplicarFiltros() {

    const textoBusqueda = buscarCurso.value.toLowerCase();
    const categoriaSeleccionada = filtroCategoria.value;

    const cursosFiltrados = cursos.filter(curso => {

        const coincideTexto =
            curso.nombre.toLowerCase().includes(textoBusqueda) ||
            curso.descripcion.toLowerCase().includes(textoBusqueda);

        const coincideCategoria =
            categoriaSeleccionada === "Todos" ||
            curso.categoria === categoriaSeleccionada;

        return coincideTexto && coincideCategoria;

    });

    renderizarCursos(cursosFiltrados);
}

// ==========================
// EVENTOS
// ==========================

buscarCurso.addEventListener("input", aplicarFiltros);

filtroCategoria.addEventListener("change", aplicarFiltros);

// ==========================
// CARGA INICIAL
// ==========================

renderizarCursos(cursos);