const carreras = document.querySelectorAll('.contenedor-general-de-carreras');

carreras.forEach((carrera, index) => {
    const numeroCarrera = index + 1;
    const parrafo = carrera.querySelector('p');
    parrafo.textContent = `Carrera ${numeroCarrera}`;
});