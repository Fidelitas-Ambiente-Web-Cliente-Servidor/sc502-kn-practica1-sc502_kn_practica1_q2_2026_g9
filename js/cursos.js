document.addEventListener("DOMContentLoaded", () => {

    const buscarCurso = document.getElementById("buscarCurso");
    const filtroCategoria = document.getElementById("filtroCategoria");
    const tarjetas = document.querySelectorAll(".card");

    function filtrar() {

        const texto = buscarCurso.value.toLowerCase();
        const categoria = filtroCategoria.value.toLowerCase();

        tarjetas.forEach((card) => {

            const contenido = card.textContent.toLowerCase();

            const mostrar =
                contenido.includes(texto) &&
                (
                    categoria === "" ||
                    categoria === "todos" ||
                    contenido.includes(categoria)
                );

            card.style.display = mostrar ? "block" : "none";

        });

    }

    if (buscarCurso)
        buscarCurso.addEventListener("keyup", filtrar);

    if (filtroCategoria)
        filtroCategoria.addEventListener("change", filtrar);

});