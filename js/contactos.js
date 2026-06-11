// =========================
// ELEMENTOS DEL FORMULARIO
// =========================

const formulario = document.getElementById("formularioContacto");

const nombre = document.getElementById("nombre");
const correo = document.getElementById("correo");
const telefono = document.getElementById("telefono");
const asunto = document.getElementById("asunto");
const mensaje = document.getElementById("mensaje");

const errorNombre = document.getElementById("errorNombre");
const errorCorreo = document.getElementById("errorCorreo");
const errorTelefono = document.getElementById("errorTelefono");
const errorAsunto = document.getElementById("errorAsunto");
const errorMensaje = document.getElementById("errorMensaje");

const btnEnviar = document.getElementById("btnEnviar");
const mensajeExito = document.getElementById("mensajeExito");

// =========================
// VALIDACIONES
// =========================

function validarNombre() {

    const regex = /^[A-Za-zÁÉÍÓÚáéíóúÑñ\s]+$/;

    if (nombre.value.trim().length < 5) {
        errorNombre.textContent =
            "El nombre debe tener al menos 5 caracteres.";
        return false;
    }

    if (!regex.test(nombre.value.trim())) {
        errorNombre.textContent =
            "Solo se permiten letras y espacios.";
        return false;
    }

    errorNombre.textContent = "";
    return true;
}

function validarCorreo() {

    const regex =
        /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

    if (!regex.test(correo.value.trim())) {
        errorCorreo.textContent =
            "Ingrese un correo válido.";
        return false;
    }

    errorCorreo.textContent = "";
    return true;
}

function validarTelefono() {

    const regex = /^[0-9]+$/;

    if (!regex.test(telefono.value.trim())) {
        errorTelefono.textContent =
            "Solo se permiten números.";
        return false;
    }

    if (telefono.value.trim().length < 8) {
        errorTelefono.textContent =
            "Debe tener mínimo 8 dígitos.";
        return false;
    }

    errorTelefono.textContent = "";
    return true;
}

function validarAsunto() {

    if (asunto.value.trim().length < 3) {
        errorAsunto.textContent =
            "El asunto debe tener mínimo 3 caracteres.";
        return false;
    }

    errorAsunto.textContent = "";
    return true;
}

function validarMensaje() {

    if (mensaje.value.trim().length < 20) {
        errorMensaje.textContent =
            "El mensaje debe tener mínimo 20 caracteres.";
        return false;
    }

    errorMensaje.textContent = "";
    return true;
}

// =========================
// ACTIVAR BOTÓN
// =========================

function validarFormulario() {

    const valido =
        validarNombre() &&
        validarCorreo() &&
        validarTelefono() &&
        validarAsunto() &&
        validarMensaje();

    btnEnviar.disabled = !valido;
}

// =========================
// EVENTOS EN TIEMPO REAL
// =========================

nombre.addEventListener("input", validarFormulario);
correo.addEventListener("input", validarFormulario);
telefono.addEventListener("input", validarFormulario);
asunto.addEventListener("input", validarFormulario);
mensaje.addEventListener("input", validarFormulario);

// =========================
// ENVÍO DEL FORMULARIO
// =========================

formulario.addEventListener("submit", function(e){

    e.preventDefault();

    mensajeExito.innerHTML =
        "<p>✅ Mensaje enviado correctamente.</p>";

    formulario.reset();

    btnEnviar.disabled = true;

});