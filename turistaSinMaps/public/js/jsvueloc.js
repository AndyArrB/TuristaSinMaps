
    document.addEventListener("DOMContentLoaded", function() {
        // Selecciona todos los títulos de los filtros
        const filterTitles = document.querySelectorAll(".filter-title");

        filterTitles.forEach(title => {
            title.addEventListener("click", function() {
                // Activa o desactiva la clase "active" en el grupo de filtros correspondiente
                const filterGroup = this.parentElement;
                filterGroup.classList.toggle("active");
            });
        });
    });

