/*!
 * Start Bootstrap - SB Admin v7.0.7 (https://startbootstrap.com/template/sb-admin)
 * Copyright 2013-2023 Start Bootstrap
 * Licensed under MIT (https://github.com/StartBootstrap/startbootstrap-sb-admin/blob/master/LICENSE)
 */

// Scripts

document.addEventListener('DOMContentLoaded', () => {
    // Selección del botón para el toggle de la barra lateral
    const sidebarToggle = document.querySelector('#sidebarToggle');

    // Verificar si el elemento existe antes de agregar el evento
    if (sidebarToggle) {
        // Persistencia del estado del sidebar entre sesiones
        const isSidebarToggled = localStorage.getItem('sb|sidebar-toggle') === 'true';

        if (isSidebarToggled) {
            document.body.classList.add('sb-sidenav-toggled');
        }

        // Agregar evento de click al botón del toggle
        sidebarToggle.addEventListener('click', (event) => {
            event.preventDefault();
            document.body.classList.toggle('sb-sidenav-toggled');
            localStorage.setItem('sb|sidebar-toggle', document.body.classList.contains('sb-sidenav-toggled'));
        });
    } else {
        console.warn('El botón #sidebarToggle no fue encontrado en la página.');
    }
});
