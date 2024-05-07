<div id="listaEstaciones">
    <table class="table">
        <thead>
            <tr>
                <th scope="col" id="contadorListaEsta">#</th>
                <th scope="col">Lista</th>
                <th scope="col" id="numEsta">Estaciones</th>
                <th scope="col"></th>
            </tr>
        </thead>
        <?php
        $contador = 0;
        $estacionesToal = 0;

        $archivos = glob("listas/*");

        echo '<tbody>';

        foreach ($archivos as $archivo) {
            $contador = $contador + 1;

            $archivoAbierto = fopen($archivo, "r");
            $num_lineas = 0;

            while (!feof($archivoAbierto)) {
                if ($linea = fgets($archivoAbierto)) {
                    $num_lineas++;
                }
            }

            $estacionesToal = $estacionesToal + $num_lineas;
            fclose($archivoAbierto);

            $nombreBuscar = "'" . substr($archivo, 7, -4) . "'";

            echo '<tr>';
            echo '<th scope="row" id="contadorListaEsta">' . $contador . '</td>';
            echo '<td>' . substr($archivo, 7, -4) . '</td>';
            echo '<td id="numEsta">' . $num_lineas .  '</td>';
            echo '<td id="iconos">
                <a style="cursor: pointer;" title="Ver" onclick="visualizarLista(' . $nombreBuscar . ')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24">
                        <path fill="currentColor" d="M12 9a3.02 3.02 0 0 0-3 3c0 1.642 1.358 3 3 3c1.641 0 3-1.358 3-3c0-1.641-1.359-3-3-3"/>
                        <path fill="currentColor" d="M12 5c-7.633 0-9.927 6.617-9.948 6.684L1.946 12l.105.316C2.073 12.383 4.367 19 12 19s9.927-6.617 9.948-6.684l.106-.316l-.105-.316C21.927 11.617 19.633 5 12 5m0 12c-5.351 0-7.424-3.846-7.926-5C4.578 10.842 6.652 7 12 7c5.351 0 7.424 3.846 7.926 5c-.504 1.158-2.578 5-7.926 5"/>
                    </svg>
                </a> &nbsp; / &nbsp;  
                <a style="cursor: pointer;" title="Editar" onclick="editarLista(' . $nombreBuscar . ')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 20 20">
                        <path fill="currentColor" d="m13.89 3.39l2.71 2.72c.46.46.42 1.24.03 1.64l-8.01 8.02l-5.56 1.16l1.16-5.58s7.6-7.63 7.99-8.03c.39-.39 1.22-.39 1.68.07m-2.73 2.79l-5.59 5.61l1.11 1.11l5.54-5.65zm-2.97 8.23l5.58-5.6l-1.07-1.08l-5.59 5.6z"/>
                    </svg>
                </a> &nbsp; / &nbsp;  
                <a style="cursor: pointer;" title="Editar" onclick="eliminarLista(' . $nombreBuscar . ')">
                    <svg xmlns="http://www.w3.org/2000/svg" width="1.5em" height="1.5em" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 11v6m-4-6v6M6 7v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7M4 7h16M7 7l2-4h6l2 4"/>
                    </svg>
                </a>
            </td>';
            echo '</tr>';
        }

        echo '</tbody>';
        echo '<tfoot>';
        echo '<tr>';
        echo '  <td style="padding-left: 5.6em;">Total</td>';
        echo '  <td><strong>' . $contador . '<strong></td>';
        echo '  <td id="numEsta"><strong>' . $estacionesToal . '<strong></td>';
        echo '</tr>';
        echo '</tfoot>';
        ?>
    </table>

    <div id="botonesAgregar">
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#agregarListaEsta">Agregar</button> &nbsp; &nbsp;
        <button id="btnVerModal" style="display: none;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#verListaEsta">Agregar</button> &nbsp; &nbsp;
        <button id="btnEditModal" style="display: none;" type="button" class="btn btn-primary" data-toggle="modal" data-target="#editarListaEsta">Agregar</button> &nbsp; &nbsp;
    </div>
</div>