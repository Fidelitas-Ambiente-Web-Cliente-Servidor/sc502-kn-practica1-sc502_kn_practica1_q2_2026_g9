let nombre = "Karol";
let edad = 26;
let estatura = 1.60;
let esProfesor = true;
let listaHobbies = ["leer", "escuchar musica", "fotografia"];
let objetoPersona = {
    nombre: "Karol",
    apellido: "Leal",
    edad: 36,
    altura: 1.60,
    esProfesor: true
}; // json

console.log(nombre);
console.log(edad);
console.log(estatura);
console.log(listaHobbies);
console.log(objetoPersona);

//lista de hobbies quiero imprimir la posicion 2
console.log(listaHobbies[2])
// objeto quiero acceder a un dato especifico es con .
console.log(objetoPersona.apellido)

// let y var


//let nombreEstudiante  = "Laura";
//let nombreEstudiante  = "Maria";

//console.log(nombreEstudiante);
//let nombreEstudiante = "Laura";
let numero = 80;
if (true) {
    let numero = 10; //local
    console.log(numero); // salida:10
}
//let numero = 20; // global
console.log(numero); // salida: 80

console.log("////////////////-----------------------------////////////")
console.log(nombre.length);
console.log(nombre.toUpperCase())
console.log(estatura.toFixed(8))
console.log(esProfesor.toString())
console.log("////////////////-----------------------------////////////")

const edadMayor = 18;

let mensaje = "";
if (edad >= edadMayor) {
    mensaje = "Es mayor de edad";
} else {
    mensaje = "Es menor de edad";
}
console.log(mensaje);

edad = 10;

mensaje = (edad >= edadMayor) ? "Es mayor de edad" : "Es menor de edad";
console.log(mensaje);

console.log("////////////////-----------------------------////////////")

let semaforo = "verde";

if (semaforo == "verde") {
    console.log("Siga!");
} else if (semaforo == "amarillo") {
    console.log("Cuidado!");// cuando ya hay un 3 de esta forma lo mejor es usar switch
} else if (semaforo == "rojo") {
    console.log("Detengase!")
} else {
    console.log("Color no validado!");
}

switch (semaforo) {
    case 'verde':
        console.log("Siga!");
        break;
    case 'amarillo':
        console.log("Cuidado!");
        break;
    case 'rojo':
        console.log("Detengase!")
        break;
    default:
        console.log("Color no validado!");
        break;
}

// for; ya se cuantas veces voy repetir
for (let i = 0; i <= 10; i++) {
    console.log(i);

}

for (let i = 10; i > 0; i--) {
    console.log(i);

}

for (let i = 0; i < listaHobbies.length; i++) {

    console.log(listaHobbies[i]);
}

for (let i in listaHobbies) {
    console.log(listaHobbies[i]);
}

edad = 10;
//do primero hace y luego pregunta edad =11 entonces sale de la condicion
do {
    edad++;
    console.log(edad);
    console.log("DOWHILE");
} while (edad < 10)
//while primeropregunta edad =11 entonces no entra 
while (edad < 11) {
    edad++;
    console.log(edad);
    console.log("WHILE");
}

// parametros
function sumar(num1, num2) {
    // returnar valores
    return num1 + num2;
}

function saludar() {
    console.log("Hola!");
}

let total_suma = sumar(34, 5);
console.log(total_suma);

saludar();



document.addEventListener("DOMContentLoaded", function () {
    // seleccionar por id
    let txtInputTarea = document.querySelector("#tarea");
    let txtClass = document.querySelectorAll(".grupoClase");
    console.log(txtClass);
    let selectH2 = document.querySelectorAll("h2");
    console.log(selectH2);




    selectH2.forEach(element => {
        element.innerText = "Nuevo h2";
    });

    let nuevaImagen = document.createElement("img");
    nuevaImagen.src = "./images/banner.jpg";
    nuevaImagen.width = "100";

    let sectionPrincipal = document.getElementById("principal");
    sectionPrincipal.appendChild(nuevaImagen);

    let btnAgregar = document.getElementById("btnAgregar");
    let contador = 2;
    let listaTareas = document.getElementById("listaTareas");
    btnAgregar.addEventListener("click", function () {
        let txtTarea = document.getElementById("tarea");

        if (txtTarea.value != "") {
            txtTarea.style.borderColor = "black";

            let nuevoLi = document.createElement("li");
            nuevoLi.innerText = txtTarea.value;
            console.log(contador);
            nuevoLi.dataset.id = contador++;
            listaTareas.appendChild(nuevoLi);
            mostrarMensaje(2);
            txtTarea.value = "";
        } else {
            mostrarMensaje(1);
            txtTarea.style.borderColor = "red";
        }

    })

    nuevaImagen.addEventListener("mouseover", function () {
        console.log("mouse over")
    })

    function mostrarMensaje(opcion) {
        let mensaje = document.getElementById("mensaje");
        switch (opcion) {
            case 1:
                mensaje.innerText = "Campo obligatorio";
                break;
            case 2:
                mensaje.innerText = "Tarea agregada correctamente!";
                break;
        }


        setTimeout(() => {
            mensaje.innerText = "";
        }, 2000);

    }

    listaTareas.addEventListener("click", function (event) {
        const id = event.target.dataset.id;
        const tarea = event.target.innerText;

        console.log(`ID: ${id} - Tarea: ${tarea}`);
    });

});