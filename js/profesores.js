// =========================
// PROFESORES
// =========================

const profesores = [
{
    nombre: "Ana Rodríguez",
    especialidad: "Desarrollo Web",
    descripcion: "Especialista Full Stack con más de 10 años de experiencia en desarrollo web y aplicaciones empresariales.",
    foto: "img/profesor1.jpg",
    correo: "ana@technova.com",
    cursosQueImparte: "HTML, CSS, JavaScript y React"
},
{
    nombre: "Carlos Méndez",
    especialidad: "Inteligencia Artificial",
    descripcion: "Experto en Machine Learning, Deep Learning y análisis de datos para empresas.",
    foto: "img/profesor2.jpg",
    correo: "carlos@technova.com",
    cursosQueImparte: "Python para IA y Machine Learning"
},
{
    nombre: "Laura Vargas",
    especialidad: "UX/UI Design",
    descripcion: "Diseñadora especializada en experiencia de usuario e interfaces modernas.",
    foto: "img/profesor3.jpg",
    correo: "laura@technova.com",
    cursosQueImparte: "UX Design y Figma"
},
{
    nombre: "Andrés Gómez",
    especialidad: "Ciberseguridad",
    descripcion: "Consultor en seguridad informática y protección de infraestructuras tecnológicas.",
    foto: "img/profesor4.jpg",
    correo: "andres@technova.com",
    cursosQueImparte: "Ciberseguridad y Ethical Hacking"
}
];

// =========================
// CONTENEDOR
// =========================

const listaProfesores = document.getElementById("listaProfesores");

// =========================
// CREAR TARJETAS
// =========================

profesores.forEach((profesor, index) => {

    const card = document.createElement("div");
    card.classList.add("card-profesor");

    // data-* requerido por el profesor
    card.dataset.id = index;

    card.innerHTML = `
        <img src="${profesor.foto}" alt="${profesor.nombre}">
        <h3>${profesor.nombre}</h3>
        <p>${profesor.especialidad}</p>
    `;

    listaProfesores.appendChild(card);

});

// =========================
// MODAL
// =========================

const modal = document.getElementById("modalProfesor");
const cerrarModal = document.getElementById("cerrarModal");

const modalFoto = document.getElementById("modalFoto");
const modalNombre = document.getElementById("modalNombre");
const modalEspecialidad = document.getElementById("modalEspecialidad");
const modalDescripcion = document.getElementById("modalDescripcion");
const modalCorreo = document.getElementById("modalCorreo");
const modalCursos = document.getElementById("modalCursos");

// =========================
// ABRIR MODAL
// =========================

document.addEventListener("click", function(event){

    const tarjeta = event.target.closest(".card-profesor");

    if(!tarjeta) return;

    const id = tarjeta.dataset.id;
    const profesor = profesores[id];

    modalFoto.src = profesor.foto;
    modalFoto.alt = profesor.nombre;

    modalNombre.textContent = profesor.nombre;
    modalEspecialidad.textContent = profesor.especialidad;
    modalDescripcion.textContent = profesor.descripcion;
    modalCorreo.textContent = "Correo: " + profesor.correo;
    modalCursos.textContent = "Cursos que imparte: " + profesor.cursosQueImparte;

    modal.style.display = "flex";

});

// =========================
// CERRAR MODAL CON X
// =========================

cerrarModal.addEventListener("click", () => {
    modal.style.display = "none";
});

// =========================
// CERRAR MODAL FUERA
// =========================

window.addEventListener("click", (event) => {

    if(event.target === modal){
        modal.style.display = "none";
    }

});