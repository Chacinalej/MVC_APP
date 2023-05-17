
function editar(id) {
    window.location.href = '/MVC_APP/public/Clientes/editar?id=' + id;

}

function eliminar(id) {
    $.ajax({
        url: '/MVC_APP/public/Clientes/eliminar',
        type: 'POST',
        data: { id: id },
        success: function(response) {
            location.reload();
        },
        error: function() {
        }
    });
}

function editarEmpleado(idEmpleado) {
    window.location.href = '/MVC_APP/public/Empleado/editar?idEmpleado=' + idEmpleado;
}

function eliminarEmpleado(idEmpleado) {
    $.ajax({
        url: '/MVC_APP/public/Empleado/eliminar',
        type: 'POST',
        data: { idEmpleado: idEmpleado },
        success: function(response) {
            location.reload();
        },
        error: function() {
        }
    });
}

function editarPais(idPais) {
    window.location.href = '/MVC_APP/public/Paises/editar?idPais=' + idPais;
}


function eliminarPais(idPais) {
    $.ajax({
        url: '/MVC_APP/public/Paises/eliminar',
        type: 'POST',
        data: { idPais: idPais },
        success: function(response) {
            location.reload();
        },
        error: function() {
        }
    });
}
