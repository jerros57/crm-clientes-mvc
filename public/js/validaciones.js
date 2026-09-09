document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("formCliente");
    if (!form) return;

    const alertBox = document.getElementById("alertBox");

    form.addEventListener("submit", function (e) {
        // Limpiar mensajes previos
        alertBox.classList.add("d-none");
        alertBox.innerHTML = "";
        let errores = [];

        // Obtención de valores limpios
        const nombre = document.getElementById("nombre").value.trim();
        const correo = document.getElementById("correo").value.trim();
        const telefono = document.getElementById("telefono").value.trim();
        const edad = document.getElementById("edad").value.trim();

        // 1. Verificación de campos vacíos
        if (!nombre || !correo || !telefono || !edad) {
            errores.push("Todos los campos marcados con (*) son obligatorios.");
        }

        // 2. Verificación de longitud del nombre
        if (nombre.length > 0 && nombre.length < 3) {
            errores.push("El nombre debe tener al menos 3 caracteres.");
        }

        // 3. Verificación de correo electrónico válido mediante expresión regular
        const regexEmail = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        if (correo && !regexEmail.test(correo)) {
            errores.push("Ingrese un correo electrónico válido (ejemplo@dominio.com).");
        }

        // 4. Verificación de campo numérico y longitud exacta (Teléfono)
        const regexTelefono = /^[0-9]{10}$/;
        if (telefono && !regexTelefono.test(telefono)) {
            errores.push("El teléfono debe contener exactamente 10 dígitos numéricos.");
        }

        // 5. Verificación de rango numérico lógico (Edad)
        const edadNum = parseInt(edad, 10);
        if (edad && (isNaN(edadNum) || edadNum < 18 || edadNum > 100)) {
            errores.push("La edad debe ser un número entero entre 18 y 100 años.");
        }

        // Si existen errores, detener el envío al servidor y mostrarlos en pantalla
        if (errores.length > 0) {
            e.preventDefault();
            alertBox.classList.remove("d-none");
            alertBox.innerHTML = `<ul class="mb-0 ps-3">${errores.map(err => `<li>${err}</li>`).join("")}</ul>`;
            window.scrollTo({ top: 0, behavior: 'smooth' });
        }
    });
});