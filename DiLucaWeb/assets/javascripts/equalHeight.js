document.addEventListener("DOMContentLoaded", function() {
    const col1 = document.getElementById("col-2");
    const col2 = document.getElementById("col-1");

    if (col1 && col2) {
        const images = col1.querySelectorAll("img");
        let imagesLoaded = 0;

        // Función para ejecutar cuando todas las imágenes estén cargadas
        const checkAllImagesLoaded = () => {
            if (imagesLoaded === images.length) {
                const col1Height = col1.offsetHeight;
                col2.style.height = `${col1Height}px`;
                console.log(`Altura de col-1: ${col1Height}px`);
            }
        };

        // Si no hay imágenes, ajusta directamente las alturas
        if (images.length === 0) {
            checkAllImagesLoaded();
        }

        // Escucha el evento de carga para cada imagen
        images.forEach((img) => {
            if (img.complete) {
                imagesLoaded++;
                checkAllImagesLoaded();
            } else {
                img.addEventListener("load", () => {
                    imagesLoaded++;
                    checkAllImagesLoaded();
                });
            }
        });
    }
});