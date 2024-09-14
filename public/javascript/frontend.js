document.getElementById('nombre_rol').addEventListener('input', function() {
    var rolSeleccionado = this.value;
    var options = document.querySelectorAll('#roles option');

    options.forEach(function(option) {
        if (option.value === rolSeleccionado) {
            document.getElementById('id_rol').value = option.getAttribute('data-id');
        }
    });
});