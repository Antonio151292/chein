function imprimir() {
    document.write("<div><p>(nombre0)</p></div>");
}
const openEls = document.querySelectorAll("[data-open]");
const closeEls = document.querySelectorAll("[data-close]");
const isVisible = "is-visible";

for (const el of openEls) {
    el.addEventListener("click", function() {
        const modalId = this.dataset.open;
        document.getElementById(modalId).classList.add(isVisible);
    });
}

for (const el of closeEls) {
    el.addEventListener("click", function() {
        this.parentElement.parentElement.parentElement.classList.remove(isVisible);
    });
}

document.addEventListener("click", e => {
    if (e.target == document.querySelector(".modal.is-visible")) {
        document.querySelector(".modal.is-visible").classList.remove(isVisible);
    }
});

document.addEventListener("keyup", e => {
    // Si presionamos ESC
    if (e.key == "Escape" && document.querySelector(".modal.is-visible")) {
        document.querySelector(".modal.is-visible").classList.remove(isVisible);
    }
});



var currentTab = 0; // La pestaña actual está configurada para ser la primera pestaña (0)
showTab(currentTab); // Mostrar la pestaña actual

function showTab(n) {
    // Esta función mostrará la pestaña especificada del formulario...
    var x = document.getElementsByClassName("tab");
    x[n].style.display = "block";
    // ... y corrija los botones Anterior/Siguiente:
    if (n == 0) {
        document.getElementById("prevBtn").style.display = "none";
    } else {
        document.getElementById("prevBtn").style.display = "inline";
    }
    if (n == (x.length - 1)) {
        document.getElementById("nextBtn").innerHTML = "Procesar";

    } else {
        document.getElementById("nextBtn").innerHTML = "Siguiente";

    }
    // ... y ejecute una función que muestre el indicador de paso correcto:
    fixStepIndicator(n)
}

function nextPrev(n) {
    // Esta función determinará qué pestaña mostrar
    var x = document.getElementsByClassName("tab");
    // Salga de la función si algún campo en la pestaña actual no es válido:
    if (n == 1 && !validateForm()) return false;
    // Ocultar la pestaña actual:
    x[currentTab].style.display = "none";
    //Aumentar o disminuir la pestaña actual en 1:
    currentTab = currentTab + n;
    // si ha llegado al final del formulario... :
    if (currentTab >= x.length) {
        //.. final del formulario de pago:
        document.getElementById("regForm").submit();
        //animacion de envio
        Swal.fire({
                icon: 'success',
                title: 'Tu pago se encuentra en proceso de validación',
                showConfirmButton: false,
                timer: 15500
            })
            //vaciar carrito
        document.getElementById("vaciar").click();
        //redireccionar pagina
        window.location = "/";
        return false;

    }
    // De lo contrario, muestra la pestaña correcta:
    showTab(currentTab);
}

function validateForm() {
    // Esta función se ocupa de la validación de los campos del formulario
    var x, y, i, valid = true;
    x = document.getElementsByClassName("tab");
    y = x[currentTab].getElementsByTagName("input");
    // Un ciclo que verifica cada campo de entrada en la pestaña actual:
    for (i = 0; i < y.length; i++) {
        // Si un campo está vacío...
        if (y[i].value == "") {
            // agrega una clase "no válida" al campo:
            y[i].className += " invalid";
            // y establecer el estado válido actual en falso:
            valid = false;
        }
    }
    // Si el estado válido es verdadero, marca el paso como finalizado y válido:
    if (valid) {
        document.getElementsByClassName("step")[currentTab].className += " finish";

    }
    return valid; // devuelve el estado valido
}

function fixStepIndicator(n) {
    // Esta función elimina la clase "activa" de todos los pasos...
    var i, x = document.getElementsByClassName("step");
    for (i = 0; i < x.length; i++) {
        x[i].className = x[i].className.replace(" active", "");
    }
    //... y agrega la clase "activa" al paso actual:
    x[n].className += " active";
}