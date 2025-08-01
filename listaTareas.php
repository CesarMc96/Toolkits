<?php
include 'BDconexion.php';
$conexion_bd = mysqli_connect($host, $username, $password);
mysqli_select_db($conexion_bd, $database);
?>

<div id="listaTareas">
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
            <?php
            $tareas = mysqli_query($conexion_bd, "SELECT * FROM toolkits.tareas;");

            $contador = 0;
            while ($rows = mysqli_fetch_array($tareas)) {
                $contador = $contador + 1;
                echo '<tr>';
                echo '<th scope="row"> ' . $contador . '</td>';
                echo '<td> ' . $rows[1] . '</td>';
                echo '<td> ' . $rows[2] . '</td>';
                echo '<td>
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
                    </td>';
                echo '</tr>';;
            }
            ?>
        </tbody>
    </table>

    <div id="botonesAgregar">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarTarea">Agregar</button> &nbsp; &nbsp;
    </div>
</div>