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

    include 'BDconexion.php';
    $conexion_bd = mysqli_connect($host, $username, $password);
    mysqli_select_db($conexion_bd, $database);

    date_default_timezone_set('America/Monterrey');
}
?>

<!DOCTYPE html>

<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default" data-assets-path="../assets/" data-template="vertical-menu-template-free">

<?php include "head.php" ?>
<?php include "scripts.php" ?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<body onload="cambiarBotones(3)">
    <input type="text" id="IPVisitante" value="<?php echo $ipAdress ?>" />
    <input type="text" id="IDUsuarioEditor" value="<?php echo $idUsuario ?>" />
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div id="logoMenuLateral" class="app-brand demo">
                    <a href="index.php" class="app-brand-link">
                        <span class="app-brand-logo demo">
                            <svg width="25" viewBox="0 0 25 42" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <defs>
                                    <path d="M13.7918663,0.358365126 L3.39788168,7.44174259 C0.566865006,9.69408886 -0.379795268,12.4788597 0.557900856,15.7960551 C0.68998853,16.2305145 1.09562888,17.7872135 3.12357076,19.2293357 C3.8146334,19.7207684 5.32369333,20.3834223 7.65075054,21.2172976 L7.59773219,21.2525164 L2.63468769,24.5493413 C0.445452254,26.3002124 0.0884951797,28.5083815 1.56381646,31.1738486 C2.83770406,32.8170431 5.20850219,33.2640127 7.09180128,32.5391577 C8.347334,32.0559211 11.4559176,30.0011079 16.4175519,26.3747182 C18.0338572,24.4997857 18.6973423,22.4544883 18.4080071,20.2388261 C17.963753,17.5346866 16.1776345,15.5799961 13.0496516,14.3747546 L10.9194936,13.4715819 L18.6192054,7.984237 L13.7918663,0.358365126 Z" id="path-1"></path>
                                    <path d="M5.47320593,6.00457225 C4.05321814,8.216144 4.36334763,10.0722806 6.40359441,11.5729822 C8.61520715,12.571656 10.0999176,13.2171421 10.8577257,13.5094407 L15.5088241,14.433041 L18.6192054,7.984237 C15.5364148,3.11535317 13.9273018,0.573395879 13.7918663,0.358365126 C13.5790555,0.511491653 10.8061687,2.3935607 5.47320593,6.00457225 Z" id="path-3"></path>
                                    <path d="M7.50063644,21.2294429 L12.3234468,23.3159332 C14.1688022,24.7579751 14.397098,26.4880487 13.008334,28.506154 C11.6195701,30.5242593 10.3099883,31.790241 9.07958868,32.3040991 C5.78142938,33.4346997 4.13234973,34 4.13234973,34 C4.13234973,34 2.75489982,33.0538207 2.37032616e-14,31.1614621 C-0.55822714,27.8186216 -0.55822714,26.0572515 -4.05231404e-15,25.8773518 C0.83734071,25.6075023 2.77988457,22.8248993 3.3049379,22.52991 C3.65497346,22.3332504 5.05353963,21.8997614 7.50063644,21.2294429 Z" id="path-4"></path>
                                    <path d="M20.6,7.13333333 L25.6,13.8 C26.2627417,14.6836556 26.0836556,15.9372583 25.2,16.6 C24.8538077,16.8596443 24.4327404,17 24,17 L14,17 C12.8954305,17 12,16.1045695 12,15 C12,14.5672596 12.1403557,14.1461923 12.4,13.8 L17.4,7.13333333 C18.0627417,6.24967773 19.3163444,6.07059163 20.2,6.73333333 C20.3516113,6.84704183 20.4862915,6.981722 20.6,7.13333333 Z" id="path-5"></path>
                                </defs>
                                <g id="g-app-brand" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <g id="Brand-Logo" transform="translate(-27.000000, -15.000000)">
                                        <g id="Icon" transform="translate(27.000000, 15.000000)">
                                            <g id="Mask" transform="translate(0.000000, 8.000000)">
                                                <mask id="mask-2" fill="white">
                                                    <use xlink:href="#path-1"></use>
                                                </mask>
                                                <use fill="#696cff" xlink:href="#path-1"></use>
                                                <g id="Path-3" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-3"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-3"></use>
                                                </g>
                                                <g id="Path-4" mask="url(#mask-2)">
                                                    <use fill="#696cff" xlink:href="#path-4"></use>
                                                    <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-4"></use>
                                                </g>
                                            </g>
                                            <g id="Triangle" transform="translate(19.000000, 11.000000) rotate(-300.000000) translate(-19.000000, -11.000000) ">
                                                <use fill="#696cff" xlink:href="#path-5"></use>
                                                <use fill-opacity="0.2" fill="#FFFFFF" xlink:href="#path-5"></use>
                                            </g>
                                        </g>
                                    </g>
                                </g>
                            </svg>
                        </span>
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
                                                <div class="flex-grow-1">
                                                    <span class="fw-semibold d-block"><?php echo $nombre ?></span>
                                                    <small class="text-muted"><?php echo $usuario ?></small>
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
                                <h5><label><?php echo $nombrePersona ?></label></h5>
                                <button type="button" class="btn btn-ligh" style="border-color: gray;">Perfil Completo</button><br><br>
                                <button type="button" class="btn btn-ligh" style="border-color: gray;">Cambiar Contraseña</button>
                            </div>

                            <div class="modal-footer" style="width: 100%;">
                                <button type="button" class="btn btn-primary" data-bs-dismiss="modal" onclick="limpiarModalEquipoUsuario();">Cerrar</button>
                            </div>

                        </div>
                    </div>
                </div>

                <div class="content-wrapper" id="mdlTareas">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Lista /</span> Tareas </h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <div id="tabla" class="table-responsive text-nowrap">

                                            <?php include "listaTareas.php" ?>

                                            <div class="modal fade" id="agregarTarea" data-backdrop="static" data-keyboard="false" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Agregar tarea</h4>
                                                            <button type="button" class="close" data-dismiss="modal">x</button>
                                                        </div>

                                                        <div class="modal-body">
                                                            <div>
                                                                <label> Nombre </label> <input type="text" name="nombreTarea" id="nombreTareaA" style="height: 21px;" />
                                                            </div>
                                                            <br>

                                                            <fieldset>
                                                                <legend>Información</legend>
                                                                <table>
                                                                    <tr>
                                                                        <td>
                                                                            Servidor:&nbsp;
                                                                            <select name="selectIP" style="height: 21px;">
                                                                                <?php
                                                                                $servidores = mysqli_query($conexion_bd, "SELECT * FROM toolkits.servidores;");

                                                                                $contador = 0;
                                                                                while ($rows = mysqli_fetch_array($servidores)) {
                                                                                    $contador = $contador + 1;
                                                                                    echo '<option value="' . $rows[0] . '">' . $rows[1] . '</option>';
                                                                                }
                                                                                ?>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Estaciones:&nbsp;
                                                                            <select name="selectEstaciones" style="height: 21px;">
                                                                                <option value="value1">ESMAS</option>
                                                                                <option value="value2">EMAS</option>
                                                                                <option value="value3">GASIR</option>
                                                                                <option value="value4">PC Guerrero</option>
                                                                                <option value="value5">PC Oaxaca</option>
                                                                            </select>
                                                                        </td>
                                                                    </tr>
                                                                    <tr>
                                                                        <td>Rango de Tiempo:&nbsp;
                                                                            <input type="text" name="desdeTiempo" placeholder="Desde" style="height: 21px;" />
                                                                            &nbsp;-&nbsp;
                                                                            <input type="text" name="hastaTiempo" placeholder="Hasta" style="height: 21px;" />
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </fieldset>
                                                            <br>

                                                            <fieldset>
                                                                <legend>Horario</legend>
                                                                <table>
                                                                    <tr>
                                                                        <td>Hora: &nbsp;<input type="text" id="hora" style="height: 21px;" /></td>
                                                                        <td>&nbsp;&nbsp;Minutos: &nbsp;<input type="text" id="minutos" style="height: 21px;" /></td>
                                                                    </tr>
                                                                </table>
                                                            </fieldset>
                                                            <br>

                                                            <div>
                                                                Archivo Final: deswall_lrg<?php print ($hoy = date("dmY")) . "-" . date('hi') . ".log" ?>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success">Guardar</button>
                                                            <button type="button" class="btn btn-warning" data-dismiss="modal" id="btnCerrarGuardar">Cerrar</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="content-wrapper" id="mdlEstaciones">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Lista /</span> Estaciones </h4>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-4">
                                    <hr class="my-0" />
                                    <div class="card-body">
                                        <div id="tabla" class="table-responsive text-nowrap">

                                            <?php include "listaEstaciones.php" ?>

                                            <div class="modal fade" id="agregarListaEsta" data-backdrop="static" data-keyboard="false" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Agregar Lista de Estaciones</h4>
                                                            <button type="button" class="close" data-dismiss="modal">x</button>
                                                        </div>

                                                        <div class="modal-body" style="height: 28em;">
                                                            <div>
                                                                <label> Nombre </label> <input type="text" name="nombreLista" id="nombreListaA" style="height: 21px;" />
                                                            </div>

                                                            <fieldset>
                                                                <legend>Estaciones</legend>
                                                                <table>
                                                                    <tr>
                                                                        <td>
                                                                            ID:&nbsp;
                                                                            <input type="text" id="estacionesID" style="height: 21px;" />
                                                                            <a style="cursor: pointer;" onclick="agregarLista('Agregar','tableDinamicaEsta');"><i class="menu-icon tf-icons bx bx-plus-circle"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </fieldset>
                                                            <br>
                                                            <div id="tablediv" style="border: 1px solid; overflow: auto; height: 273px;">
                                                                <table class="table" id="tableDinamicaEsta">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col" style="width: 80%;">ID</th>
                                                                            <th scope="col"></th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody></tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success">Guardar</button>
                                                            <button type="button" class="btn btn-warning" data-dismiss="modal" id="btnCerrarGLE">Cerrar</button>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="verListaEsta" data-backdrop="static" data-keyboard="false" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Lista de Estaciones </h4>
                                                            <button type="button" class="close" data-dismiss="modal">x</button>
                                                        </div>

                                                        <div class="modal-body" style="height: 24em;">
                                                            <div>
                                                                <label> Nombre </label> <input type="text" name="nombreLista" id="nombreListaV" style="height: 21px;" disabled />
                                                            </div> <br>

                                                            <div id="tablediv" style="border: 1px solid; overflow: auto; height: 273px;">
                                                                <table class="table" id="tableDinamicaEstaVer">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col" colspan="4" style="text-align: center;">ID Estacion</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody></tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-warning" data-dismiss="modal">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="modal fade" id="editarListaEsta" data-backdrop="static" data-keyboard="false" role="dialog">
                                                <div class="modal-dialog modal-dialog-centered">
                                                    <div class="modal-content">

                                                        <div class="modal-header">
                                                            <h4 class="modal-title">Lista de Estaciones </h4>
                                                            <button type="button" class="close" data-dismiss="modal">x</button>
                                                        </div>

                                                        <div class="modal-body" style="height: 28em;">
                                                            <div>
                                                                <label> Nombre </label> <input type="text" name="nombreLista" id="nombreListaE" style="height: 21px;" />
                                                                <label style="display: none;"> NombreAntes </label> <input type="text" id="nombreAntesEditar" style="display:none;" />
                                                            </div>

                                                            <fieldset>
                                                                <legend>Estaciones</legend>
                                                                <table>
                                                                    <tr>
                                                                        <td>
                                                                            ID:&nbsp;
                                                                            <input type="text" id="estacionesIDEdit" style="height: 21px;" />
                                                                            <a style="cursor: pointer;" onclick="agregarLista('Editar','tableDinamicaEstaEdit');"><i class="menu-icon tf-icons bx bx-plus-circle"></i></a>
                                                                        </td>
                                                                    </tr>
                                                                </table>
                                                            </fieldset><br>

                                                            <div id="tablediv" style="border: 1px solid; overflow: auto; height: 273px;">
                                                                <table class="table" id="tableDinamicaEstaEdit">
                                                                    <thead>
                                                                        <tr>
                                                                            <th scope="col" style="width: 80%;">ID</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody></tbody>
                                                                </table>
                                                            </div>
                                                        </div>

                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-success">Guardar</button>
                                                            <button type="button" class="btn btn-warning" data-dismiss="modal" id="btnCerrarALE">Cerrar</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="layout-overlay layout-menu-toggle"></div>
    </div>

</body>


</html>

<style>
    body {
        background-color: #f5f5f9 !important;
        font-family: var(--bs-body-font-family) !important;
        font-size: var(--bs-body-font-size) !important;
        font-weight: var(--bs-body-font-weight) !important;
        line-height: var(--bs-body-line-height) !important;
        color: var(--bs-body-color) !important;
        text-align: var(--bs-body-text-align) !important;
        -webkit-text-size-adjust: 100% !important;
        -webkit-tap-highlight-color: rgba(67, 89, 113, 0) !important;
    }

    .h4 {
        font-size: 1.375rem !important;
    }

    div:where(.swal2-container) div:where(.swal2-loader) {
        display: none !important;
    }

    .modal {
        z-index: 9999;
    }

    .modal-backdrop {
        z-index: 9000;
    }

    #iconos,
    #numEsta {
        text-align: center;
    }

    #contadorListaEsta {
        padding-left: 7em;
    }
</style>