function validar(element) {
    // obtenemos el dataset con los valores minimos para ese campo
    const min = parseInt(element.dataset.lengthmin);

    if (element.value.length >= min) {
        // tiene los caracteres minimos
        element.style.borderColor = "#2ECC71";
        return true;
    } else {
        // no tiene los caracteres minimos
        element.style.borderColor = "red";
        return false;
    }
}

/**
 * Function que valida que todos los valores del formulario tengan el tamaño minimo indicado.
 * Se ejecuta antes de enviar el formulario.
 */
function validarFormulario(formulario) {
    let result = true;
    const input = formulario.querySelectorAll("input[type=text], input[type=email], textarea");

    // recorremos todos los input para ver si algun input no cumple con los caracteres minimos
    for (i of input) {
        if (validar(i) == false) {
            result = false;
        }
    }
    return result;
}