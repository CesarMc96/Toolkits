window.onload = function () {
    setInterval(() => {
        $('#listaTareas').load('listaTareas.php');
    }, 180000);
}

function cambiarBotones(opcion) {
    desactivarBotones();
    switch (opcion) {
        case 1:
            var item = document.getElementById("menuTareas");

            if (!item.classList.contains('active')) {
                document.getElementById("menuTareas").classList.toggle("active");
                document.getElementById("mdlTareas").style.display = "block";
            } else {
                document.getElementById("menuTareas").classList.remove("active");
                document.getElementById("mdlTareas").style.display = "none";
            }
            break;

        case 3:
            var item = document.getElementById("menuEstaciones");

            if (!item.classList.contains('active')) {
                document.getElementById("menuEstaciones").classList.toggle("active");
                document.getElementById("mdlEstaciones").style.display = "block";
            } else {
                document.getElementById("menuEstaciones").classList.remove("active");
                document.getElementById("mdlEstaciones").style.display = "none";
            }
            break;
        default:
            break;
    }
}

function desactivarBotones() {
    document.getElementById("menuTareas").classList.remove("active");
    document.getElementById("mdlTareas").style.display = "none";
    document.getElementById("menuEstaciones").classList.remove("active");
    document.getElementById("mdlEstaciones").style.display = "none";
}


function mostrarPnlTareas() {
    document.getElementById("tareaPanel").style.display = "block";
}

function cancelarGuardadoTarea() {
    if (confirm('¿Estas Seguro que deseas cancelar el guardado de la tarea?')) {
        ocultarModal("#agregarTarea");
    }
}

/*
function agregarTarea() {
    //$('#agregarTarea').modal('toggle');
    $('#modal').modal().hide();
    $('#listaTareas').load('listaTareas.php');
    alert("Tarea Guardada");
    console.log("Actualizar");
}
*/

$(document).ready(function () {
    $('#agregarTarea').on('click', function (e) {

        if ($(e.target).hasClass("btn-success")) {
            //alert("secondary");
            // console.log("btn-secondary");
            //$('#btnCerrarGuardar').trigger('click');
            //$('#listaTareas').load('listaTareas.php');

            $.ajax({
                url: "./generarTxt.php",
                type: "POST",
                data: {
                    nombre: document.getElementById("nombreTareaA").value
                },
                success: function (result) {
                    console.log('success');
                    console.log(result);
                },
                error: function () {
                    console.log('error');
                }
            });
        }
    });
});



$("[data-dismiss='modal']").click(function () {
});


/*------ Lista Estaciones -------*/
function agregarLista(accion, tabla) {
    if (accion === 'Agregar') {
        var idEsta = document.getElementById('estacionesID');
        var evento = remove;
    } else {
        var idEsta = document.getElementById('estacionesIDEdit');
        var evento = remove2;
    }

    if (idEsta.value != '') {
        var newRow = document.createElement('tr');
        newRow.appendChild(createCell(idEsta.value));

        var cellRemoveBtn = createCell();
        cellRemoveBtn.appendChild(createRemoveBtn(evento))
        newRow.appendChild(cellRemoveBtn);

        document.querySelector('#' + tabla + ' tbody').appendChild(newRow);
        idEsta.value = '';
    }
}

function remove() {
    var row = this.parentNode.parentNode;
    document.querySelector('#tableDinamicaEsta tbody').removeChild(row);
}

function remove2() {
    var row = this.parentNode.parentNode;
    document.querySelector('#tableDinamicaEstaEdit tbody').removeChild(row);
}

function createRemoveBtn(evento) {
    var btnRemove = document.createElement('button');
    btnRemove.className = 'btn btn-xs btn-danger';
    btnRemove.onclick = evento;
    btnRemove.innerText = 'Descartar';
    return btnRemove;
}

function createCell(text) {
    var td = document.createElement('td');
    if (text) {
        td.innerText = text;
    }
    return td;
}

$(document).ready(function () {
    $('#agregarListaEsta').on('click', function (e) {
        if ($(e.target).hasClass("btn btn-warning") || $(e.target).hasClass("close")) {
            document.getElementById("tableDinamicaEsta").querySelector("tbody").innerHTML = "";
            document.getElementById("estacionesID").value = "";
            document.getElementById("nombreListaA").value = "";
            document.getElementById("nombreListaA").style.border = "1px solid black";
        }

        if ($(e.target).hasClass("btn btn-success")) {
            bandera = false;
            inputNombreLista = document.getElementById("nombreListaA");

            var lista = [];
            var l = $("#tableDinamicaEsta tbody tr td");
            Object.keys(l).forEach((k, v) => {
                if (v % 2 == 0 && l[k].innerText) {
                    lista.push(l[k].innerText);
                }
            });

            if (inputNombreLista.value === "") {
                inputNombreLista.style.border = "1px solid red";
                alertaTemporizador("El nombre no puede ir vacío.", "error");
            } else if (lista.length === 0) {
                alertaTemporizador("Debes ingresar al menos una estación.", "error");
            } else {
                $.ajax({
                    url: "./generarTxt.php",
                    type: "POST",
                    data: {
                        tipoArchivo: "generalista",
                        listaEstaciones: lista,
                        nombre: document.getElementById("nombreListaA").value
                    },
                    success: function (result) {
                        var jsonData = JSON.parse(result);
                        if (jsonData.resultado === "Archivo Existente") {
                            alertaTemporizador("La lista que desea registrar ya existe.", "error");
                        } else {
                            alertaTemporizador("Lista creada con éxito.", "success");
                            $('#listaEstaciones').load('listaEstaciones.php');
                            $('#btnCerrarGLE').trigger('click');
                        }
                    },
                    error: function (error) {
                        alertaTemporizador("No se pudo guardar la lista.", "error");
                    }
                });
            }
        }

        $("#estacionesID").keypress(function (e) {
            if (e.which == 13) {
                agregarLista('Agregar', 'tableDinamicaEsta');
            }
        });

        $('#nombreListaA').on('click', function (e) {
            document.getElementById("nombreListaA").style.border = "1px solid black";
        });
    });

    $('#editarListaEsta').on('click', function (e) {
        if ($(e.target).hasClass("btn btn-warning") || $(e.target).hasClass("close")) {
            document.getElementById("nombreListaA").style.border = "1px solid black";
        }

        if ($(e.target).hasClass("btn btn-success")) {
            Swal.fire({
                text: "¿Estás seguro de guardar los cambios?",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#3085d6",
                cancelButtonText: "Cancelar",
                cancelButtonColor: "#d33",
                confirmButtonText: "Guardar"
            }).then((result) => {
                if (result.isConfirmed) {
                    inputNombreLista = document.getElementById("nombreListaE");

                    var lista = [];
                    var l = $("#tableDinamicaEstaEdit tbody tr td");
                    Object.keys(l).forEach((k, v) => {
                        if (v % 2 == 0 && l[k].innerText) {
                            lista.push(l[k].innerText.trim());
                            console.log(" -" + l[k].innerText.trim() + "-" );
                        }
                    });

                    if (inputNombreLista.value === "") {
                        inputNombreLista.style.border = "1px solid red";
                        alertaTemporizador("El nombre no puede ir vacío.", "error");
                    } else if (lista.length === 0) {
                        alertaTemporizador("Debes ingresar al menos una estación.", "error");
                    } else {
                        $.ajax({
                            url: "./generarTxt.php",
                            type: "POST",
                            data: {
                                tipoArchivo: "actualizarlista",
                                listaEstaciones: lista,
                                nombreViejo: document.getElementById("nombreAntesEditar").value,
                                nombre: document.getElementById("nombreListaE").value
                            },
                            success: function (result) {
                                var jsonData = JSON.parse(result);
                                if (jsonData.resultado === "Archivo Actualizado con exito") {
                                    Swal.fire({
                                        text: "Lista actualizada con éxito",
                                        icon: "success"
                                    });
                                    $('#listaEstaciones').load('listaEstaciones.php');
                                    $('#btnCerrarALE').trigger('click');
                                }
                            },
                            error: function (error) {
                                alertaTemporizador("No se pudo actualizar la lista.", "error");
                            }
                        });
                    }
                }
            });
        }

        $("#estacionesIDEdit").keypress(function (e) {
            if (e.which == 13) {
                agregarLista('Editar', 'tableDinamicaEstaEdit');
            }
        });

        $('#nombreListaE').on('click', function (e) {
            document.getElementById("nombreListaE").style.border = "1px solid black";
        });
    });
});

function editarLista(lista) {
    $('#btnEditModal').trigger('click');
    document.getElementById("nombreListaE").value = lista;
    document.getElementById("nombreAntesEditar").value = lista;
    document.getElementById("tableDinamicaEstaEdit").querySelector("tbody").innerHTML = "";

    $.ajax({
        url: "./generarTxt.php",
        type: "POST",
        data: {
            tipoArchivo: "sacarEstaciones",
            nombre: lista
        },
        success: function (result) {
            console.log(result);
            var jsonData = JSON.parse(result);

            for (i = 0; i < jsonData.resultado.length; i++) {
                var newRow = document.createElement('tr');

                newRow.appendChild(createCell(jsonData.resultado[i]));

                var cellRemoveBtn = createCell();
                cellRemoveBtn.appendChild(createRemoveBtn(remove2))
                newRow.appendChild(cellRemoveBtn);

                document.querySelector('#tableDinamicaEstaEdit tbody').appendChild(newRow);
            }
        },
        error: function (error) {
            alertaTemporizador("No se pudo guardar la lista.", "error");
        }
    });
}

function visualizarLista(lista) {
    console.log(lista);
    $('#btnVerModal').trigger('click');
    document.getElementById("nombreListaV").value = lista;
    document.getElementById("tableDinamicaEstaVer").querySelector("tbody").innerHTML = "";

    $.ajax({
        url: "./generarTxt.php",
        type: "POST",
        data: {
            tipoArchivo: "sacarEstaciones",
            nombre: lista
        },
        success: function (result) {
            var jsonData = JSON.parse(result);

            tamanoJs = jsonData.resultado.length / 4;

            for (i = 0; i < jsonData.resultado.length; i = i + 4) {
                var newRow = document.createElement('tr');

                newRow.appendChild(createCell(jsonData.resultado[i]));
                newRow.appendChild(createCell(jsonData.resultado[i + 1]));
                newRow.appendChild(createCell(jsonData.resultado[i + 2]));
                newRow.appendChild(createCell(jsonData.resultado[i + 3]));

                document.querySelector('#tableDinamicaEstaVer tbody').appendChild(newRow);
            }
        },
        error: function (error) {
            alertaTemporizador("No se pudo guardar la lista.", "error");
        }
    });
}

function eliminarLista(lista) {
    Swal.fire({
        text: "¿Estás seguro de eliminar la lista?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonText: "Cancelar",
        cancelButtonColor: "#d33",
        confirmButtonText: "Eliminar"
    }).then((result) => {
        if (result.isConfirmed) {
                $.ajax({
                    url: "./generarTxt.php",
                    type: "POST",
                    data: {
                        tipoArchivo: "eliminarlista",
                        nombre: lista
                    },
                    success: function (result) {
                        console.log(result);
                        var jsonData = JSON.parse(result);
                        if (jsonData.resultado === "Archivo Eliminado con exito") {
                            Swal.fire({
                                text: "Lista eliminada con éxito",
                                icon: "success"
                            });
                            $('#listaEstaciones').load('listaEstaciones.php');
                        } else {
                            Swal.fire({
                                text: "Intentar nuevamente.",
                                title: "ERROR",
                                icon: "error"
                            });
                        }
                    },
                    error: function (error) {
                        alertaTemporizador("No se pudo actualizar la lista.", "error");
                    }
                });
        }
    });
}
/*------ Lista Estaciones -------*/

function alertaTemporizador(mensaje, icono) {
    let timerInterval;
    Swal.fire({
        icon: icono,
        text: mensaje,
        timer: 2000,
        timerProgressBar: true,
        didOpen: () => {
            Swal.showLoading();
        },
        willClose: () => {
            clearInterval(timerInterval);
        }
    }).then((result) => {
        if (result.dismiss === Swal.DismissReason.timer) {
        }
    });
}

