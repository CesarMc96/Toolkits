<?php
header("Cache-Control: no-cache, must-revalidate");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
header("Last-Modified: " . gmdate("D, d M Y H:i:s") . " GMT");

@session_start();

if (!$_SESSION['autentica']) {
    header('location: login.php');
} else {
    $_SESSION["pagina"] = "index";
    $idUsuario = $_SESSION["idUsuario"];
    $nombre = $_SESSION["nombre"];
    $usuario = $_SESSION["usuario"];
    $ipAdress = $_SESSION["ipAdress"];

    
    $usuariosDatos = [];
    $conexion_bd = new PDO("mysql:host=172.29.60.126;dbname=tics;charset=utf8; port=3306", "Cesar", "cesartic");
}
?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<?php include "head.php" ?>

<body onload="cambiarBotones(1)">
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div id="logoMenuLateral" class="app-brand demo">
                    <a href="index.php" class="app-brand-link">
                        <span class="app-brand-text demo menu-text fw-bolder ms-2">Facilitador</span>
                    </a>
                </div>

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1">

                    <li class="menu-header small text-uppercase"></li>

                    <li class="menu-item" id="menuTareas">
                        <a href="javascript:void(0);" class="menu-link menu-toggle" onclick="cambiarBotones(1)">
                            <i class="menu-icon tf-icons bx bx-time-five"></i>
                            <div>Tareas</div>
                        </a>
                    </li>

                    <li class="menu-item" id="menuServidores">
                        <a href="javascript:void(0);" class="menu-link menu-toggle" onclick="cambiarBotones(2)">
                            <i class="menu-icon tf-icons bx bxs-server"></i>
                            <div data-i18n="Authentications">Estatus Servidor</div>
                        </a>
                    </li>

                    <li class="menu-item" id="menuEstaciones" onclick="cambiarBotones(3)">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div data-i18n="Account Settings">Estaciones</div>
                        </a>
                    </li>

                    <li class="menu-header small text-uppercase"></li>

                    <li class="menu-item" id="menuDocumentacion">
                        <a href="mantenimiento.php" class="menu-link">
                            <i class="menu-icon tf-icons bx bx-file"></i>
                            <div data-i18n="Documentation">Documentación</div>
                        </a>
                    </li>
                </ul>
            </aside>

            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme" id="layout-navbar">
                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                <a class="nav-link dropdown-toggle hide-arrow" data-bs-toggle="dropdown">
                                    <div class="avatar avatar-online">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
                                            <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z" />
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z" />
                                        </svg>
                                    </div>
                                    <div class="flex-grow-1">
                                        <span class="fw-semibold d-block"><?php echo $nombre ?></span>
                                        <small class="text-muted"><?php echo $usuario ?></small>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-menu-end">
                                    <li>
                                        <a class="dropdown-item">
                                            <div class="d-flex">
                                                <div class="flex-shrink-0 me-3">
                                                    <div class="avatar avatar-online">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" fill="currentColor" class="bi bi-emoji-sunglasses" viewBox="0 0 16 16">
                                                            <path d="M4.968 9.75a.5.5 0 1 0-.866.5A4.498 4.498 0 0 0 8 12.5a4.5 4.5 0 0 0 3.898-2.25.5.5 0 1 0-.866-.5A3.498 3.498 0 0 1 8 11.5a3.498 3.498 0 0 1-3.032-1.75zM7 5.116V5a1 1 0 0 0-1-1H3.28a1 1 0 0 0-.97 1.243l.311 1.242A2 2 0 0 0 4.561 8H5a2 2 0 0 0 1.994-1.839A2.99 2.99 0 0 1 8 6c.393 0 .74.064 1.006.161A2 2 0 0 0 11 8h.438a2 2 0 0 0 1.94-1.515l.311-1.242A1 1 0 0 0 12.72 4H10a1 1 0 0 0-1 1v.116A4.22 4.22 0 0 0 8 5c-.35 0-.69.04-1 .116z" />
                                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-1 0A7 7 0 1 0 1 8a7 7 0 0 0 14 0z" />
                                                        </svg>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" style="cursor: pointer;" data-bs-toggle="modal" data-bs-target="#modalConfiguracion">
                                            <i class="bx bx-cog me-2"></i>
                                            <span class="align-middle">Configuración</span>
                                        </a>
                                    </li>
                                    <li>
                                        <div class="dropdown-divider"></div>
                                    </li>
                                    <li>
                                        <a class="dropdown-item" href="logout.php">
                                            <i class="bx bx-power-off me-2"></i>
                                            <span class="align-middle">Cerrar sesión</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>

                <div class="modal fade" id="modalConfiguracion">
                    <div class="modal-dialog modal-dialog-centered">
                        <div class="modal-content">

                            <div class="modal-header">
                                <h4 class="fw-bold">Configuración</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>

                            <div class="modal-body" style="text-align: center;">
                                <button type="button" class="btn btn-ligh" style="border-color: gray;">Perfil Completo</button><br><br>
                                <button type="button" class="btn btn-ligh" style="border-color: gray;">Cambiar Contraseña</button>
                            </div>

                            <div class="modal-footer" style="width: 100%;">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="limpiarModalEquipoUsuario();">Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Content wrapper -->
                <div class="content-wrapper" id="mdlTareas" style="display: none;">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Lista /</span> Tareas </h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <div id="tabla" class="table-responsive text-nowrap">
                                            <?php require_once 'tareas.php'; ?>

                                            <div class="container" id="tareaPanel">
                                                <div id="agregarTareaPnl">
                                                    <div id="pnlNombre">
                                                        <div>
                                                            <label> Nombre </label> <input type="text" name="nombreTarea" />
                                                        </div>
                                                        <div>
                                                            Archivo Final: deswall_lrg <?php print($hoy = date("dmY")) ?> -1200.log
                                                        </div>
                                                    </div><br>

                                                    <div id="form">
                                                        <fieldset>
                                                            <legend>Información</legend>
                                                            <table>
                                                                <tr>
                                                                    <td>
                                                                        IP:
                                                                        <select name="selectIP">
                                                                            <option value="value1">lrgseddn1.cr.usgs.gov</option>
                                                                            <option value="value2">lrgseddn2.cr.usgs.gov</option>
                                                                            <option value="value3">lrgseddn3.cr.usgs.gov</option>
                                                                        </select>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>Estaciones:
                                                                        <select name="selectEstaciones">
                                                                            <option value="value1">ESMAS</option>
                                                                            <option value="value2">EMAS</option>
                                                                            <option value="value3">GASIR</option>
                                                                            <option value="value4">PC Guerrero</option>
                                                                            <option value="value5">PC Oaxaca</option>
                                                                        </select>
                                                                    </td>
                                                                    <td></td>
                                                                    <td></td>
                                                                    <td>Rango de Tiempo: <input type="text" name="desdeTiempo" placeholder="Desde" /> - <input type="text" name="hastaTiempo" placeholder="Hasta" /></td>
                                                                </tr>
                                                            </table>
                                                        </fieldset>
                                                    </div><br>
                                                    <div id="form">
                                                        <fieldset>
                                                            <legend>Horario</legend>
                                                            <table>
                                                                <tr>
                                                                    <td>Hora</td>
                                                                    <td><input type="text" id="hora" /></td>
                                                                    <td></td>
                                                                    <td>Minutos</td>
                                                                    <td><input type="text" id="minutos" /></td>
                                                                </tr>
                                                            </table>
                                                        </fieldset>
                                                    </div>
                                                    <div id="botonesAgregar">
                                                        <button type="button" class="btn btn-success" onclick="return agregarTarea()">Guardar</button> &nbsp; &nbsp;
                                                        <button type="button" class="btn btn-warning" onclick="return cancelarGuardadoTarea()">Cancelar</button>
                                                    </div>

                                                </div>

                                                <div id="listaTareas">
                                                    <h2 style="text-align: center;">Lista de Tareas</h2>
                                                    <table class="table">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">#</th>
                                                                <th scope="col">Tarea</th>
                                                                <th scope="col">Ultima ejecución</th>
                                                                <th scope="col">Editar</th>
                                                                <th scope="col">Ejecutar</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <tr>
                                                                <th scope="row">1</th>
                                                                <td>ESMA</td>
                                                                <td>09/04/2024 11:27:00</td>
                                                                <td>
                                                                    <a>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                                                        </svg>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                                                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                                                                        </svg>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <th scope="row">2</th>
                                                                <td>EMA</td>
                                                                <td>09/04/2024 11:17:00</td>
                                                                <td>
                                                                    <a>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-fill" viewBox="0 0 16 16">
                                                                            <path d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.5.5 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11z" />
                                                                        </svg>
                                                                    </a>
                                                                </td>
                                                                <td>
                                                                    <a>
                                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-play-fill" viewBox="0 0 16 16">
                                                                            <path d="m11.596 8.697-6.363 3.692c-.54.313-1.233-.066-1.233-.697V4.308c0-.63.692-1.01 1.233-.696l6.363 3.692a.802.802 0 0 1 0 1.393" />
                                                                        </svg>
                                                                    </a>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>

                                                    <div id="botonesAgregar">
                                                        <button type="button" class="btn btn-primary" onclick="return mostrarPnlAgregar()">Agregar</button> &nbsp; &nbsp;
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                        </div>

                                        <div class="modal fade" id="myModal">
                                            <div id="mdlDialognUsEq" class="modal-dialog modal-dialog-centered">
                                                <div id="mdlPrincipalEquipoUsuario" class="modal-content">

                                                    <div class="modal-header">
                                                        <h3 class="modal-title"><label id="nombreTitulo"></label></h3>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="limpiarModalEquipoUsuario();"></button>
                                                    </div>

                                                    <div class="modal-body" id="infoUsuarioMdl">
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                                <label for="idEmpleado" class="form-label">ID Empleado</label>
                                                                <input type="text" class="form-control" id="idEmpleado" name="idEmpleado" readonly>
                                                            </div>

                                                            <div class="mb-3 col-md-6">
                                                                <label for="curp" class="form-label">CURP</label>
                                                                <input class="form-control" type="text" name="curp" id="curp" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="usuario" class="form-label">Usuario</label>
                                                                <input class="form-control" type="text" id="usuario" name="usuario" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="email" class="form-label">Correo Electronico</label>
                                                                <input class="form-control" type="text" id="email" name="email" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="extension">Extensión</label>
                                                                <input type="text" id="extension" name="extension" class="form-control" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6" style="display: none;" id="divDidU">
                                                                <label for="did" class="form-label"># DID</label>
                                                                <input type="text" class="form-control" id="did" name="did" />
                                                            </div>
                                                            <div class="mb-3">
                                                                <label class="form-label" for="country">Puesto</label>
                                                                <input type="text" class="form-control" id="puesto" name="puesto" readonly>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="area" class="form-label">Area</label>
                                                                <input type="text" class="form-control" id="area" name="area" readonly>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="gerencia" class="form-label">Gerencia</label>
                                                                <input type="text" class="form-control" id="gerencia" name="gerencia" readonly>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-body" id="modlEquipoUsuario" style="display: none;">
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6">
                                                                <label for="equipoU" class="form-label">Nombre</label>
                                                                <input class="form-control" type="text" name="equipoU" id="equipoU" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="marcaU" class="form-label">Marca</label>
                                                                <input class="form-control" type="text" name="marcaU" id="marcaU" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="modeloU" class="form-label">Modelo</label>
                                                                <input class="form-control" type="text" id="modeloU" name="modeloU" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="hostnameU" class="form-label">Host Name</label>
                                                                <input class="form-control" type="text" id="hostnameU" name="hostnameU" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="numSerieU">Numero Serie</label>
                                                                <input type="text" id="numSerieU" name="numSerieU" class="form-control" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="IPU">IP</label>
                                                                <input type="text" id="IPU" name="IPU" class="form-control" readonly />
                                                            </div>
                                                        </div>

                                                        <div style="display: none;" id="divEquipoDos">
                                                            <hr>
                                                            <div class="row">
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="equipoU2" class="form-label">Nombre</label>
                                                                    <input class="form-control" type="text" name="equipoU2" id="equipoU2" readonly />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="marcaU2" class="form-label">Marca</label>
                                                                    <input class="form-control" type="text" name="marcaU2" id="marcaU2" readonly />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="modeloU2" class="form-label">Modelo</label>
                                                                    <input class="form-control" type="text" id="modeloU2" name="modeloU2" readonly />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label for="hostnameU2" class="form-label">Host Name</label>
                                                                    <input class="form-control" type="text" id="hostnameU2" name="hostnameU2" readonly />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label" for="numSerieU2">Numero Serie</label>
                                                                    <input type="text" id="numSerieU2" name="numSerieU2" class="form-control" readonly />
                                                                </div>
                                                                <div class="mb-3 col-md-6">
                                                                    <label class="form-label" for="IPU">IP</label>
                                                                    <input type="text" id="IPU2" name="IPU2" class="form-control" readonly />
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer" style="width: 100%;">
                                                        <button type="button" class="btn btn-light" style="padding: 0%;" onclick="mostarEquipoUsuario();"> Equipo &nbsp;
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                                            </svg>
                                                        </button>
                                                        <div id="pruebaEspacio" style="width: 68%;"></div>
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="limpiarModalEquipoUsuario();">Cerrar</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>


                <div class="content-wrapper" id="mdlAgregarUsuario" style="display: block;">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Estatus /</span> Servidor</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <hr class="my-0" />
                                    <div class="card-body" style="height: 51em;">
                                    <object type="text/html" data="https://dcs4.noaa.gov/lrgs/lrgseddn3.cr.usgs.gov.html" style="width: 100%;height: 100%;"></object>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>

                <div class="content-wrapper" id="mdlBuscarEquipo" style="display: none;">.
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Buscar /</span> Equipos</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <div id="tabla" class="table-responsive text-nowrap">
                                            <table id="tblEquipos" class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>Nombre</th>
                                                        <th>Host Name</th>
                                                        <th>Serie</th>
                                                        <th>UPS</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php
                                                    $link = mysqli_connect("172.29.60.126:3306", "Cesar", "cesartic");
                                                    mysqli_select_db($link, "tics");
                                                    $documentos = mysqli_query($link, "SELECT e.idEquipo, td.Nombre, td.Descripcion, de.Marca, de.Modelo, d.Host_Name, d.Numero_Serie, UPS_Serie from equipo e
                                                    inner join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
                                                    inner join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
                                                    inner join dispositivo d on d.idDispositivo= e.idDispositivo
                                                    where e.idTipoDispositivo != 20 and e.idTipoDispositivo != 16 and e.idTipoDispositivo !=17 
                                                    and e.idTipoDispositivo !=18 and e.idTipoDispositivo !=19 and e.idTipoDispositivo !=9 
                                                    and e.idTipoDispositivo !=8 and e.idTipoDispositivo !=7 and e.idTipoDispositivo !=13;");
                                                    while ($rows = mysqli_fetch_array($documentos)) {
                                                        echo '<tr>';
                                                        echo '<td> ' . '<i class="fab fa-angular fa-lg text-danger me-3"></i><strong>' . $rows[1] . '</strong>' . '</td>';
                                                        echo '<td> ' . $rows[5] . '</td>';
                                                        echo '<td> ' . $rows[6] . '</td>';
                                                        echo '<td> ' . $rows[7] . '</td>';
                                                        echo '<td> 
                                                        <a id="pruebaA" onclick="mostrarTodoEquipo(' . $rows[0] . ')" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#myModalEquipo"> 
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                        </svg>
                                                        </a> 
                                                        </td>';
                                                        echo '</tr>';;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <hr>
                                        </div>

                                        <!-- Modal -->
                                        <div class="modal fade" id="myModalEquipo">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h3 class="modal-title"><label id="nombreTituloEquipo"></label></h3>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="row" id="mdlEquiMon">
                                                            <div class="mb-3 col-md-6">
                                                                <label for="marca" class="form-label">Marca</label>
                                                                <input class="form-control" type="text" name="marca" id="marca" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="modelo" class="form-label">Modelo</label>
                                                                <input class="form-control" type="text" id="modelo" name="modelo" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="hostname" class="form-label">Host Name</label>
                                                                <input class="form-control" type="text" id="hostname" name="hostname" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="numSerie">Numero Serie</label>
                                                                <input type="text" id="numSerie" name="numSerie" class="form-control" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="ups">UPS Serie</label>
                                                                <input type="text" id="ups" name="ups" class="form-control" readonly />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                        <!-- Modal -->

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>

                <div class="content-wrapper" id="mdlBuscarTelefono" style="display: none;">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Buscar /</span> Teléfonos</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <div id="tabla" class="table-responsive text-nowrap">
                                            <table id="tblTelefonos" class="table table-hover">
                                                <thead>
                                                    <tr>
                                                        <th>IP</th>
                                                        <th>Modelo</th>
                                                        <th>Numero Serie</th>
                                                        <th>Extension</th>
                                                        <th>Usuario</th>
                                                        <th>Comentarios</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody class="table-border-bottom-0">
                                                    <?php
                                                    $link = mysqli_connect("172.29.60.126:3306", "Cesar", "cesartic");
                                                    mysqli_select_db($link, "tics");
                                                    $documentos = mysqli_query($link, "SELECT idconcentradoTelefonos, ipTelefono, Modelo, Numero_Serie, Numero Extension, p.Nombre_persona, ct.Comentarios FROM tics.concentradotelefonos ct
                                                    left join equipo e on e.idEquipo = ct.idEquipo
                                                    left join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
                                                    left join extension ext on ext.idExtension= ct.idExtension
                                                    left join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
                                                    left join dispositivo d on d.idDispositivo= e.idDispositivo
                                                    left join empleado em on em.idEmpleado= ct.idEmpleado
                                                    left join persona p on p.idPersona = em.idPersona ;");
                                                    while ($rows = mysqli_fetch_array($documentos)) {
                                                        echo '<tr>';
                                                        echo '<td> ' . '<i class="fab fa-angular fa-lg text-danger me-3"></i><strong>' . $rows[1] . '</strong>' . '</td>';
                                                        echo '<td> ' . $rows[2] . '</td>';
                                                        echo '<td> ' . $rows[3] . '</td>';
                                                        echo '<td> ' . $rows[4] . '</td>';
                                                        echo '<td> ' . $rows[5] . '</td>';
                                                        echo '<td> ' . $rows[6] . '</td>';
                                                        echo '<td> 
                                                        <a id="pruebaA" onclick="mostrarTodoTelefono(' . $rows[0] . ');" style="cursor: pointer" data-bs-toggle="modal" data-bs-target="#modlUpdateTel"> 
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                                        </svg>
                                                        </a> 
                                                        </td>';
                                                        echo '</tr>';;
                                                    }
                                                    ?>
                                                </tbody>
                                            </table>
                                            <hr>
                                        </div>

                                        <div class="modal fade" id="modlUpdateTel">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content">

                                                    <div class="modal-header">
                                                        <h3 class="modal-title"><label id="nombreTituloTel"></label></h3>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" onclick="limpiarModalEquipoUsuario();"></button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="row">
                                                            <div class="mb-3 col-md-6" style="display: none;">
                                                                <input type="text" id="idconcentradoTelefonos" />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="modeloTel" class="form-label">Modelo</label>
                                                                <input class="form-control" type="text" name="modeloTel" id="modeloTel" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="SerieTel" class="form-label">Número Serie</label>
                                                                <input class="form-control" type="text" id="SerieTel" name="SerieTel" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label for="extTel" class="form-label">Extensión</label>
                                                                <input class="form-control" type="text" id="extTel" name="extTel" readonly />
                                                            </div>
                                                            <div class="mb-3 col-md-6">
                                                                <label class="form-label" for="userTel">Usuario</label>
                                                                <select id="userTel" class="select2 form-select" style="color: black;">
                                                                    <option value="0">Seleccione:</option>
                                                                    <?php
                                                                    $query = $conexion_bd->prepare("
                                                                    Select e.idEmpleado, p.Nombre_persona from empleado e
                                                                    inner join persona p on p.idPersona = e.idPersona
                                                                    order by p.Nombre_persona;
                                                                    ");
                                                                    $query->execute();
                                                                    $data = $query->fetchAll();

                                                                    foreach ($data as $valores) :
                                                                        echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                                                        array_push($usuariosDatos, $valores);
                                                                    endforeach;

                                                                    ?>
                                                                </select>
                                                            </div>
                                                            <div class="mb-3">
                                                                <label for="comTel" class="form-label">Comentarios</label>
                                                                <input class="form-control" type="text" id="comTel" name="comtTel" />
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer" style="width: 100%;">
                                                        <div id="pruebaEspacio" style="width: 68%;"></div>
                                                        <button type="button" class="btn btn-secundary" onclick="actualizarTelefono();">Guardar</button>
                                                        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cerrar</button>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>

                <div class="content-wrapper" id="mdlBuscarIP" style="display: none;">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Buscar /</span> IP</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <div class="navbar-nav align-items-center">
                                            <div class="nav-item d-flex align-items-center">
                                                <i class="bx bx-search fs-4 lh-0"></i>
                                                <input id="buscarIp" type="text" class="form-control border-0 shadow-none" placeholder="Buscar..." aria-label="Search..." />
                                            </div>
                                        </div>
                                    </div>
                                    <hr class="my-0" />
                                    <!-- Info Usuario -->
                                    <div class="card-body" id="cardUsuario" style="display: none;">
                                        <div class="row">
                                            <h3 id="mdlTitle" class="modal-title" style="text-align: left;"><label id="ipEncontrada"></label></h3>
                                            <div class="mb-3 col-md-6" id="nomUsuarioIPdiv">
                                                <label for="nomUsuarioIP" class="form-label">Nombre</label>
                                                <input class="form-control" type="text" id="nomUsuarioIP" name="nomUsuarioIP" />
                                            </div>
                                            <div class="mb-3 col-md-6" id="equipoIPdiv">
                                                <label for="equipoIP" class="form-label">Equipo</label>
                                                <input type="text" class="form-control" id="equipoIP" name="equipoIP" />
                                            </div>
                                            <div class="mb-3 col-md-6" id="userConIPdiv">
                                                <label for="userConIP" class="form-label">Usuario</label>
                                                <input type="text" class="form-control" id="userConIP" name="userConIP">
                                            </div>
                                            <div class="mb-3 col-md-6" id="hostNameIPdiv">
                                                <label for="hostNameIP" class="form-label">Host Name Equipo</label>
                                                <input class="form-control" type="text" id="hostNameIP" name="hostNameIP" />
                                            </div>
                                            <div class="mb-3 col-md-6" id="empIDdiv">
                                                <label class="form-label" for="empID">ID Empleado</label>
                                                <input class="form-control" type="text" name="empID" id="empID" />
                                            </div>
                                            <div class="mb-3 col-md-6" id="numSerieIDdiv">
                                                <label for="numSerieID" class="form-label">Numero Serie</label>
                                                <input class="form-control" type="text" name="numSerieID" id="numSerieID" />
                                            </div>

                                        </div>
                                    </div>
                                    <hr class="my-0" />
                                    <!-- Info IP -->
                                    <div class="card-body" id="cardRed" style="display: none;">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="nodoRed" class="form-label">Nodo red</label>
                                                <input class="form-control" type="text" id="nodoRed" name="nodoRed" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="vlan" class="form-label">VLAN</label>
                                                <input class="form-control" type="text" name="vlan" id="vlan" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="puerto" class="form-label">Puerto</label>
                                                <input class="form-control" type="text" id="puerto" name="puerto" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="switch" class="form-label">Switch</label>
                                                <input type="text" class="form-control" id="switch" name="switch">
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label class="form-label" for="rack">Rack</label>
                                                <input class="form-control" type="text" name="rack" id="rack" />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="comentario" class="form-label">Comentario</label>
                                                <input type="text" class="form-control" id="comentario" name="comentario" />
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>

                <div class="content-wrapper" id="mdlAgregarIP" style="display: none;">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Agregar /</span> IP</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" style="cursor: pointer;" onclick="tipoIPAgregar(1);" id="IPUserAdd"><i class="bx bx-user me-1"></i> Usuario</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" style="cursor: pointer;" onclick="tipoIPAgregar(2);" id="IPPrinterAdd"><i class="bx bx-printer me-1"></i> Impresora</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" style="cursor: pointer;" onclick="tipoIPAgregar(3);" id="IPServerAdd"><i class="bx bx-data me-1"></i> Servidor</a>
                                    </li>
                                </ul>
                                <div class="card mb-4">
                                    <hr class="my-0" />

                                    <div class="card-body" id="cardUsuarioIPnew" style="display: block;">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="nombreCompletoIPNew" class="form-label">Nombre Usuario</label>
                                                <select id="nombreCompletoIPNew" class="select2 form-select" style="color: black;">
                                                    <option value="">Seleccione:</option>
                                                    <?php
                                                    $query = $conexion_bd->prepare("SELECT e.idEmpleado, p.Nombre_persona from empleado e
                                                    inner join persona p on p.idPersona = e.idPersona
                                                    order by p.Nombre_persona;");
                                                    $query->execute();
                                                    $data = $query->fetchAll();

                                                    foreach ($data as $valores) :
                                                        echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                                        array_push($usuariosDatos, $valores);
                                                    endforeach;

                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="hostEquipoIpNew" class="form-label">Host Name Equipo</label>
                                                <select id="hostEquipoIpNew" class="select2 form-select" style="color: black;">
                                                    <option value="">Seleccione:</option>
                                                    <?php
                                                    $query = $conexion_bd->prepare("SELECT distinct e.idEquipo, eq.idConcentrado, d.Host_Name from equipo e
                                                    inner join dispositivo d on d.idDispositivo= e.idDispositivo
                                                    left join concentrado eq on eq.equipoExt = e.idEquipo
                                                    where d.Host_Name is not null and eq.idConcentrado is null;");
                                                    $query->execute();
                                                    $data = $query->fetchAll();

                                                    foreach ($data as $valores) :
                                                        echo '<option value="' . $valores[0] . '">' . $valores[2] . '</option>';
                                                        array_push($usuariosDatos, $valores);
                                                    endforeach;

                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label for="IPNew" class="form-label">IP</label>
                                                <input class="form-control" type="text" id="IPNew" name="IPNew" />
                                            </div>
                                            <div class="mb-3 col-md-1">
                                                <label for="nodoRedIPNew" class="form-label">Nodo red</label>
                                                <input class="form-control" type="text" id="nodoRedIPNew" name="nodoRedIPNew" maxlength="5" style="color: black; text-transform:uppercase;" />
                                            </div>
                                            <div class="mb-3 col-md-1">
                                                <label for="vlanIPNew" class="form-label">VLAN</label>
                                                <input class="form-control" type="text" name="vlanIPNew" id="vlanIPNew" readonly />
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="puertoIPNew" class="form-label">Puerto</label>
                                                <input class="form-control" type="text" id="puertoIPNew" name="puertoIPNew" maxlength="10" value="GE 0/0/" style="color: black; text-transform:uppercase;" />
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="switchIPNew" class="form-label">Switch</label>
                                                <select id="switchIPNew" class="select2 form-select" style="color: black;">
                                                    <option value=""> Seleccione: </option>
                                                    <option value="172.33.42.3">172.33.42.3</option>
                                                    <option value="172.33.42.4">172.33.42.4</option>
                                                    <option value="172.33.42.5">172.33.42.5</option>
                                                    <option value="172.33.42.6">172.33.42.6</option>
                                                    <option value="172.33.42.7">172.33.42.7</option>
                                                    <option value="172.33.42.10">172.33.42.10</option>
                                                    <option value="172.33.42.11">172.33.42.11</option>
                                                    <option value="172.33.42.13">172.33.42.13</option>
                                                    <option value="172.33.42.14">172.33.42.14</option>
                                                    <option value="172.33.42.15">172.33.42.15</option>
                                                    <option value="172.33.42.21">172.33.42.21</option>
                                                    <option value="172.33.42.26">172.33.42.26</option>
                                                    <option value="172.33.42.27">172.33.42.27</option>
                                                    <option value="172.33.42.28">172.33.42.28</option>
                                                    <option value="172.33.42.29">172.33.42.29</option>
                                                    <option value="172.33.42.30">172.33.42.30</option>
                                                    <option value="172.33.42.254">172.33.42.254</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label" for="rackIPNew">Rack</label>
                                                <input class="form-control" type="text" name="rackIPNew" id="rackIPNew" readonly />
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="comentarioIPNew" class="form-label">Comentario</label>
                                                <input type="text" class="form-control" id="comentarioIPNew" name="comentarioIPNew" />
                                            </div>

                                            <div class="mt-2" id="botonesAgregar" style="text-align: end;">
                                                <button type="submit" class="btn btn-primary me-2" onclick="guardarIPUserBD();">Guardar</button>
                                                <button type="reset" class="btn btn-outline-secondary" onclick="limpiarNuevaIP();">Limpiar</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body" id="cardImpresoraIPnew" style="display: none;">
                                        <div class="row">
                                            <div class="mb-3 col-md-6">
                                                <label for="impresoraName" class="form-label">Impresora</label>
                                                <select id="impresoraName" class="select2 form-select" style="color: black;">
                                                    <option value="">Seleccione:</option>
                                                    <?php
                                                    $query = $conexion_bd->prepare("SELECT e.idEquipo, CONCAT ('Modelo: ', de.Modelo, ' / Serie: ', d.Numero_Serie) Impresora from equipo e
                                                    inner join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
                                                    inner join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
                                                    inner join dispositivo d on d.idDispositivo= e.idDispositivo
                                                    left join concentrado eq on eq.equipoExt = e.idEquipo
                                                    where e.idTipoDispositivo between 16 and 19 and eq.idConcentrado is null;");
                                                    $query->execute();
                                                    $data = $query->fetchAll();

                                                    foreach ($data as $valores) :
                                                        echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                                        array_push($usuariosDatos, $valores);
                                                    endforeach;

                                                    ?>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-6">
                                                <label for="comentarioIPNewPrint" class="form-label">Área</label>
                                                <input type="text" class="form-control" id="comentarioIPNewPrint" name="comentarioIPNewPrint" />
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label for="IPNewPrint" class="form-label">IP</label>
                                                <input class="form-control" type="text" id="IPNewPrint" name="IPNewPrint" />
                                            </div>
                                            <div class="mb-3 col-md-1">
                                                <label for="nodoRedIPNewPrint" class="form-label">Nodo red</label>
                                                <input class="form-control" type="text" id="nodoRedIPNewPrint" name="nodoRedIPNewPrint" maxlength="5" style="color: black; text-transform:uppercase;" />
                                            </div>
                                            <div class="mb-3 col-md-1">
                                                <label for="vlanIPNewPrint" class="form-label">VLAN</label>
                                                <input class="form-control" type="text" name="vlanIPNewPrint" id="vlanIPNewPrint" readonly />
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="puertoIPNewPrint" class="form-label">Puerto</label>
                                                <input class="form-control" type="text" id="puertoIPNewPrint" name="puertoIPNewPrint" maxlength="9" value="GE 0/0/" style="color: black; text-transform:uppercase;" />
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="switchIPNewPrint" class="form-label">Switch</label>
                                                <select id="switchIPNewPrint" class="select2 form-select" style="color: black;">
                                                    <option value=""> Seleccione: </option>
                                                    <option value="172.33.42.3">172.33.42.3</option>
                                                    <option value="172.33.42.4">172.33.42.4</option>
                                                    <option value="172.33.42.5">172.33.42.5</option>
                                                    <option value="172.33.42.6">172.33.42.6</option>
                                                    <option value="172.33.42.7">172.33.42.7</option>
                                                    <option value="172.33.42.10">172.33.42.10</option>
                                                    <option value="172.33.42.11">172.33.42.11</option>
                                                    <option value="172.33.42.13">172.33.42.13</option>
                                                    <option value="172.33.42.14">172.33.42.14</option>
                                                    <option value="172.33.42.15">172.33.42.15</option>
                                                    <option value="172.33.42.21">172.33.42.21</option>
                                                    <option value="172.33.42.26">172.33.42.26</option>
                                                    <option value="172.33.42.27">172.33.42.27</option>
                                                    <option value="172.33.42.28">172.33.42.28</option>
                                                    <option value="172.33.42.29">172.33.42.29</option>
                                                    <option value="172.33.42.30">172.33.42.30</option>
                                                    <option value="172.33.42.254">172.33.42.254</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label" for="rackIPNewPrint">Rack</label>
                                                <input class="form-control" type="text" name="rackIPNewPrint" id="rackIPNewPrint" readonly />
                                            </div>

                                            <div class="mt-2" id="botonesAgregar" style="text-align: end;">
                                                <button type="submit" class="btn btn-primary me-2" onclick="guardarIPPrintBD();">Guardar</button>
                                                <button type="reset" class="btn btn-outline-secondary" onclick="limpiarNuevaIP();">Limpiar</button>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="card-body" id="cardServerIPnew" style="display: none;">
                                        <div class="row">
                                            <div class="mb-3 col-md-12">
                                                <label for="comentarioIPNewServer" class="form-label">Nombre Servidor</label>
                                                <input type="text" class="form-control" id="comentarioIPNewServer" name="comentarioIPNewServer" />
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label for="IPNewServer" class="form-label">IP</label>
                                                <input class="form-control" type="text" id="IPNewServer" name="IPNewServer" />
                                            </div>
                                            <div class="mb-3 col-md-1">
                                                <label for="nodoRedIPNewServer" class="form-label">Nodo red</label>
                                                <input class="form-control" type="text" id="nodoRedIPNewServer" name="nodoRedIPNewServer" maxlength="5" style="color: black; text-transform:uppercase;" />
                                            </div>
                                            <div class="mb-3 col-md-1">
                                                <label for="vlanIPNewServer" class="form-label">VLAN</label>
                                                <input class="form-control" type="text" name="vlanIPNewServer" id="vlanIPNewServer" readonly />
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="puertoIPNewServer" class="form-label">Puerto</label>
                                                <input class="form-control" type="text" id="puertoIPNewServer" name="puertoIPNewServer" maxlength="10" value="GE 0/0/" style="color: black; text-transform:uppercase;" />
                                            </div>
                                            <div class="mb-3 col-md-2">
                                                <label for="switchIPNewServer" class="form-label">Switch</label>
                                                <select id="switchIPNewServer" class="select2 form-select" style="color: black;">
                                                    <option value=""> Seleccione: </option>
                                                    <option value="172.33.42.3">172.33.42.3</option>
                                                    <option value="172.33.42.4">172.33.42.4</option>
                                                    <option value="172.33.42.5">172.33.42.5</option>
                                                    <option value="172.33.42.6">172.33.42.6</option>
                                                    <option value="172.33.42.7">172.33.42.7</option>
                                                    <option value="172.33.42.10">172.33.42.10</option>
                                                    <option value="172.33.42.11">172.33.42.11</option>
                                                    <option value="172.33.42.13">172.33.42.13</option>
                                                    <option value="172.33.42.14">172.33.42.14</option>
                                                    <option value="172.33.42.15">172.33.42.15</option>
                                                    <option value="172.33.42.21">172.33.42.21</option>
                                                    <option value="172.33.42.26">172.33.42.26</option>
                                                    <option value="172.33.42.27">172.33.42.27</option>
                                                    <option value="172.33.42.28">172.33.42.28</option>
                                                    <option value="172.33.42.29">172.33.42.29</option>
                                                    <option value="172.33.42.30">172.33.42.30</option>
                                                    <option value="172.33.42.254">172.33.42.254</option>
                                                </select>
                                            </div>
                                            <div class="mb-3 col-md-3">
                                                <label class="form-label" for="rackIPNewServer">Rack</label>
                                                <input class="form-control" type="text" name="rackIPNewServer" id="rackIPNewServer" readonly />
                                            </div>

                                            <div class="mt-2" id="botonesAgregar" style="text-align: end;">
                                                <button type="submit" class="btn btn-primary me-2" onclick="guardarIPServerBD();">Guardar</button>
                                                <button type="reset" class="btn btn-outline-secondary" onclick="limpiarNuevaIP();">Limpiar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>

                <div class="content-wrapper" id="mdlActualizarIP" style="display: none;">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Actualizar /</span> IP</h4>
                        <div class="row">
                            <div class="col-md-12">
                                <ul class="nav nav-pills flex-column flex-md-row mb-3">
                                    <li class="nav-item">
                                        <a class="nav-link active" style="cursor: pointer;" onclick="tipoIPActualizar(1);" id="IPUseract"><i class="bx bx-user me-1"></i> Usuario</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" style="cursor: pointer;" onclick="tipoIPActualizar(2);" id="IPPrinteract"><i class="bx bx-printer me-1"></i> Impresora</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" style="cursor: pointer;" onclick="tipoIPActualizar(3);" id="IPServeract"><i class="bx bx-data me-1"></i> Servidor</a>
                                    </li>
                                </ul>
                                <div class="card mb-4">
                                    <hr class="my-0" />
                                    <div class="card-body">

                                        <div class="card-body" id="cardUsuarioIPAct" style="display: block;">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="buscarActIP" class="form-label">Usuario</label>
                                                    <select id="buscarActIP" class="select2 form-select" style="color: black;">
                                                        <option value="">Seleccione:</option>
                                                        <?php
                                                        $query = $conexion_bd->prepare("Select distinct p.Nombre_persona from empleado e 
                                                                inner join persona p on p.idPersona = e.idPersona 
                                                                right join concentrado con on con.idUsuario = e.idEmpleado where idEmpleado is not null;");
                                                        $query->execute();
                                                        $data = $query->fetchAll();

                                                        foreach ($data as $valores) :
                                                            echo '<option value="' . $valores[0] . '" style="text-transform: uppercase;">' . $valores[0] . '</option>';
                                                            array_push($usuariosDatos, $valores);
                                                        endforeach;
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6" id="IPActPadre" style="display: none;">
                                                    <label class="form-label">IP</label>
                                                    <select id="IPAct" class="select2 form-select" style="color: black;">
                                                        <option value="">Seleccione:</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-12">
                                                </div>
                                                <hr class="my-0" />
                                                <div class="mb-3 col-md-12">
                                                </div>
                                                <div class="mb-3 col-md-3">
                                                    <label for="IPActEncontrada" class="form-label">IP</label>
                                                    <input class="form-control" type="text" id="IPActEncontrada" name="IPActEncontrada" />
                                                </div>
                                                <div class="mb-3 col-md-1">
                                                    <label for="nodoRedIPAct" class="form-label">Nodo red</label>
                                                    <input class="form-control" type="text" id="nodoRedIPAct" name="nodoRedIPAct" maxlength="5" style="color: black; text-transform:uppercase;" />
                                                </div>
                                                <div class="mb-3 col-md-1">
                                                    <label for="vlanIPAct" class="form-label">VLAN</label>
                                                    <input class="form-control" type="text" name="vlanIPAct" id="vlanIPAct" readonly />
                                                </div>
                                                <div class="mb-3 col-md-2">
                                                    <label for="puertoIPAct" class="form-label">Puerto</label>
                                                    <div style="display: flex;">
                                                        <input class="form-control" type="text" id="puertoIPAct" name="puertoIPAct" maxlength="10" value="GE 0/0/" style="color: black; text-transform:uppercase;" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-2">
                                                    <label for="switchIPAct" class="form-label">Switch</label>
                                                    <select id="switchIPAct" class="select2 form-select" style="color: black;">
                                                        <option value=""> Seleccione: </option>
                                                        <option value="172.33.42.3">172.33.42.3</option>
                                                        <option value="172.33.42.4">172.33.42.4</option>
                                                        <option value="172.33.42.5">172.33.42.5</option>
                                                        <option value="172.33.42.6">172.33.42.6</option>
                                                        <option value="172.33.42.7">172.33.42.7</option>
                                                        <option value="172.33.42.10">172.33.42.10</option>
                                                        <option value="172.33.42.11">172.33.42.11</option>
                                                        <option value="172.33.42.13">172.33.42.13</option>
                                                        <option value="172.33.42.14">172.33.42.14</option>
                                                        <option value="172.33.42.15">172.33.42.15</option>
                                                        <option value="172.33.42.21">172.33.42.21</option>
                                                        <option value="172.33.42.26">172.33.42.26</option>
                                                        <option value="172.33.42.27">172.33.42.27</option>
                                                        <option value="172.33.42.28">172.33.42.28</option>
                                                        <option value="172.33.42.29">172.33.42.29</option>
                                                        <option value="172.33.42.30">172.33.42.30</option>
                                                        <option value="172.33.42.254">172.33.42.254</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-3">
                                                    <label class="form-label" for="rackIPAct">Rack</label>
                                                    <input class="form-control" type="text" name="rackIPAct" id="rackIPAct" readonly />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="comentarioIPAct" class="form-label">Comentario</label>
                                                    <input type="text" class="form-control" id="comentarioIPAct" name="comentarioIPAct" />
                                                </div>
                                                <div class="mb-3 col-md-6"></div>
                                                <div class="mb-3 col-md-6" style="display: none;" id="nombreUserActDiv">
                                                    <label for="nombreUserAct" class="form-label">Usuario</label>
                                                    <select id="nombreUserAct" class="select2 form-select" style="color: black;">
                                                        <option value="">Seleccione:</option>
                                                        <?php
                                                        $query = $conexion_bd->prepare("
                                                        Select e.idEmpleado, p.Nombre_persona from empleado e
                                                        inner join persona p on p.idPersona = e.idPersona
                                                        order by p.Nombre_persona;
                                                        ");
                                                        $query->execute();
                                                        $data = $query->fetchAll();

                                                        foreach ($data as $valores) :
                                                            echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                                            array_push($usuariosDatos, $valores);
                                                        endforeach;
                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6" style="display: none;" id="hostEquipoIpActDiv">
                                                    <label for="hostEquipoIpAct" class="form-label">Host Name Equipo</label>
                                                    <select id="hostEquipoIpAct" class="select2 form-select" style="color: black;">
                                                        <option value="">Seleccione:</option>
                                                        <?php
                                                        $query = $conexion_bd->prepare("SELECT distinct e.idEquipo, eq.idConcentrado, d.Host_Name from equipo e
                                                        inner join dispositivo d on d.idDispositivo= e.idDispositivo
                                                        left join concentrado eq on eq.equipoExt = e.idEquipo
                                                        where d.Host_Name is not null;");
                                                        $query->execute();
                                                        $data = $query->fetchAll();

                                                        foreach ($data as $valores) :
                                                            echo '<option value="' . $valores[0] . '">' . $valores[2] . '</option>';
                                                            array_push($usuariosDatos, $valores);
                                                        endforeach;

                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6" style="display: none;">
                                                    <input type="text" class="form-control" id="idConcentradoAct" name="idConcentradoAct" />
                                                </div>
                                                <div class="mb-3 col-md-12">
                                                </div>
                                                <div class="mb-3 col-md-2" id="btnExtraUserAct" style="display: none;">
                                                    <input type="checkbox" id="ActUserYes" name="ActUserYes" value="Yes" onclick="checkEditUserIp();">
                                                    <label for="ActUserYes"> Cambiar Usuario</label> &nbsp;&nbsp;
                                                </div>
                                                <div class="mb-3 col-md-2" id="btnExtraEquipoAct" style="display: none;">
                                                    <input type="checkbox" id="ActEquipoYes" name="ActEquipoYes" value="Yes" onclick="checkEditPCIp(1);">
                                                    <label for="ActEquipoYes"> Cambiar Equipo</label>
                                                </div>
                                                <div class="mb-3 col-md-2" id="btnExtraUserAdd" style="display: none;">
                                                    <input type="checkbox" id="AddUserSAct" name="AddUserSAct" value="Yes">
                                                    <label for="AddUserSAct"> Agregar Usuario</label> &nbsp;&nbsp;
                                                </div>
                                                <div class="mb-3 col-md-2" id="btnExtraEquipoAdd" style="display: none;">
                                                    <input type="checkbox" id="AddEquipoAct" name="AddEquipoAct" value="Yes">
                                                    <label for="AddEquipoAct"> Agregar Equipo</label>
                                                </div>
                                                <div class="mt-2" id="botonesActualizarIP" style="text-align: end; display:none;">
                                                    <!--button type="button" class="btn btn-outline-danger">Liberar IP</button-->
                                                    <button type="submit" class="btn btn-primary" onclick="actualizarIPBD();">Actualizar</button>
                                                    <button type="reset" class="btn btn-outline-secondary" onclick="revertirActualizarIP();">Revetir</button>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="card-body" id="cardImpresoraIPAct" style="display: none;">
                                            <div class="row">
                                                <div class="mb-3 col-md-6">
                                                    <label for="impresoraNameAct" class="form-label">Impresora</label>
                                                    <select id="impresoraNameAct" class="select2 form-select" style="color: black;">
                                                        <option value="">Seleccione:</option>
                                                        <?php
                                                        $query = $conexion_bd->prepare("SELECT distinct Comentario from concentrado con 
                                                        where Comentario is not null and Comentario like '%rea:%';");
                                                        $query->execute();
                                                        $data = $query->fetchAll();

                                                        foreach ($data as $valores) :
                                                            echo '<option value="' . $valores[0] . '">' . $valores[0] . '</option>';
                                                            array_push($usuariosDatos, $valores);
                                                        endforeach;

                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6" id="IPActPadrePrint" style="display: none;">
                                                    <label class="form-label">IP</label>
                                                    <select id="IPAcPrintt" class="select2 form-select" style="color: black;">
                                                        <option value="">Seleccione:</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-12">
                                                </div>
                                                <hr class="my-0" />
                                                <div class="mb-3 col-md-12">
                                                </div>
                                                <div class="mb-3 col-md-3">
                                                    <label for="IPActEncontradaPrint" class="form-label">IP</label>
                                                    <input class="form-control" type="text" id="IPActEncontradaPrint" name="IPActEncontradaPrint" />
                                                </div>
                                                <div class="mb-3 col-md-1">
                                                    <label for="nodoRedIPActPrint" class="form-label">Nodo red</label>
                                                    <input class="form-control" type="text" id="nodoRedIPActPrint" name="nodoRedIPActPrint" maxlength="5" style="color: black; text-transform:uppercase;" />
                                                </div>
                                                <div class="mb-3 col-md-1">
                                                    <label for="vlanIPActPrint" class="form-label">VLAN</label>
                                                    <input class="form-control" type="text" name="vlanIPActPrint" id="vlanIPActPrint" readonly />
                                                </div>
                                                <div class="mb-3 col-md-2">
                                                    <label for="puertoIPActPrint" class="form-label">Puerto</label>
                                                    <div style="display: flex;">
                                                        <input class="form-control" type="text" id="puertoIPActPrint" name="puertoIPActPrint" maxlength="10" value="GE 0/0/" style="color: black; text-transform:uppercase;" />
                                                    </div>
                                                </div>
                                                <div class="mb-3 col-md-2">
                                                    <label for="switchIPActPrint" class="form-label">Switch</label>
                                                    <select id="switchIPActPrint" class="select2 form-select" style="color: black;">
                                                        <option value=""> Seleccione: </option>
                                                        <option value="172.33.42.3">172.33.42.3</option>
                                                        <option value="172.33.42.4">172.33.42.4</option>
                                                        <option value="172.33.42.5">172.33.42.5</option>
                                                        <option value="172.33.42.6">172.33.42.6</option>
                                                        <option value="172.33.42.7">172.33.42.7</option>
                                                        <option value="172.33.42.10">172.33.42.10</option>
                                                        <option value="172.33.42.11">172.33.42.11</option>
                                                        <option value="172.33.42.13">172.33.42.13</option>
                                                        <option value="172.33.42.14">172.33.42.14</option>
                                                        <option value="172.33.42.15">172.33.42.15</option>
                                                        <option value="172.33.42.21">172.33.42.21</option>
                                                        <option value="172.33.42.26">172.33.42.26</option>
                                                        <option value="172.33.42.27">172.33.42.27</option>
                                                        <option value="172.33.42.28">172.33.42.28</option>
                                                        <option value="172.33.42.29">172.33.42.29</option>
                                                        <option value="172.33.42.30">172.33.42.30</option>
                                                        <option value="172.33.42.254">172.33.42.254</option>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-3">
                                                    <label class="form-label" for="rackIPActPrint">Rack</label>
                                                    <input class="form-control" type="text" name="rackIPActPrint" id="rackIPActPrint" readonly />
                                                </div>
                                                <div class="mb-3 col-md-6">
                                                    <label for="comentarioIPActPrint" class="form-label">Comentario</label>
                                                    <input type="text" class="form-control" id="comentarioIPActPrint" name="comentarioIPActPrint" />
                                                </div>
                                                <div class="mb-3 col-md-6"></div>
                                                <div class="mb-3 col-md-6" style="display: none;" id="hostEquipoIpActDivPrint">
                                                    <label for="hostEquipoIpActPrint" class="form-label">Host Name Equipo</label>
                                                    <select id="hostEquipoIpActPrint" class="select2 form-select" style="color: black;">
                                                        <option value="">Seleccione:</option>
                                                        <?php
                                                        $query = $conexion_bd->prepare("SELECT e.idEquipo, CONCAT ('Modelo: ', de.Modelo, ' / Serie: ', d.Numero_Serie) Impresora from equipo e
                                                        inner join tipodispositivo td on td.idTipoDispositivo= e.idTipoDispositivo
                                                        inner join datosextrasdispositivo de on de.idDatosDispositivo= e.idDatosDispositivo
                                                        inner join dispositivo d on d.idDispositivo= e.idDispositivo
                                                        left join concentrado eq on eq.equipoExt = e.idEquipo
                                                        where e.idTipoDispositivo between 16 and 19;");
                                                        $query->execute();
                                                        $data = $query->fetchAll();

                                                        foreach ($data as $valores) :
                                                            echo '<option value="' . $valores[0] . '">' . $valores[1] . '</option>';
                                                            array_push($usuariosDatos, $valores);
                                                        endforeach;

                                                        ?>
                                                    </select>
                                                </div>
                                                <div class="mb-3 col-md-6" style="display: none;">
                                                    <input type="text" class="form-control" id="idConcentradoActPrint" name="idConcentradoActPrint" />
                                                </div>
                                                <div class="mb-3 col-md-12">
                                                </div>
                                                <div class="mb-3 col-md-2" id="btnExtraUserAct" style="display: none;">
                                                    <input type="checkbox" id="ActUserYes" name="ActUserYes" value="Yes" onclick="checkEditUserIp();">
                                                    <label for="ActUserYes"> Cambiar Usuario</label> &nbsp;&nbsp;
                                                </div>
                                                <div class="mb-3 col-md-2" id="btnExtraEquipoAct" style="display: none;">
                                                    <input type="checkbox" id="ActEquipoYes" name="ActEquipoYes" value="Yes" onclick="checkEditPCIp(2);">
                                                    <label for="ActEquipoYes"> Cambiar Equipo</label>
                                                </div>
                                                <div class="mb-3 col-md-2" id="btnExtraUserAdd" style="display: none;">
                                                    <input type="checkbox" id="AddUserSAct" name="AddUserSAct" value="Yes">
                                                    <label for="AddUserSAct"> Agregar Usuario</label> &nbsp;&nbsp;
                                                </div>
                                                <div class="mb-3 col-md-2" id="btnExtraEquipoAdd" style="display: none;">
                                                    <input type="checkbox" id="AddEquipoAct" name="AddEquipoAct" value="Yes">
                                                    <label for="AddEquipoAct"> Agregar Equipo</label>
                                                </div>
                                                <div class="mt-2" id="botonesActualizarIPPrint" style="text-align: end; display:none;">
                                                    <!--button type="button" class="btn btn-outline-danger">Liberar IP</button-->
                                                    <button type="submit" class="btn btn-primary" onclick="actualizarIPBD();">Actualizar</button>
                                                    <button type="reset" class="btn btn-outline-secondary" onclick="revertirActualizarIP();">Revetir</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="content-backdrop fade"></div>
                </div>
                <!-- Content wrapper -->
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>
</body>

<?php include "scripts.php" ?>

</html>
