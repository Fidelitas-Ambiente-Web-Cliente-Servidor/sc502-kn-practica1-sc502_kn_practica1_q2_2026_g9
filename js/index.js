// ==========================
// TechNova Academy
// index.js
// ==========================

document.addEventListener("DOMContentLoaded", () => {

    console.log("TechNova Academy cargado correctamente.");

    // Animación sencilla para las tarjetas
    const tarjetas = document.querySelectorAll(".card");

    tarjetas.forEach((tarjeta) => {

        tarjeta.addEventListener("mouseenter", () => {
            tarjeta.style.transform = "translateY(-8px)";
        });

        tarjeta.addEventListener("mouseleave", () => {
            tarjeta.style.transform = "translateY(0)";
        });

    });

});