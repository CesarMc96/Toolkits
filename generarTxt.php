<?php
error_reporting(E_ERROR | E_PARSE);

$tipoArchivo = $_POST['tipoArchivo'];
$nombre = $_POST['nombre'];

switch ($tipoArchivo) {
    case 'generalista':
        $bandera = false;
        $nombre = $nombre . ".txt";

        $directorio = opendir('listas/');
        if ($directorio) {
            while (($entry = readdir($directorio)) !== FALSE) {
                $arrFiles[] = $entry;

                if ($entry === $nombre) {
                    $bandera = true;
                }
            }
        }
        closedir($directorio);

        if ($bandera === true) {
            $respuestaLista = "Archivo Existente";
        } else {
            $listaEstaciones = $_POST['listaEstaciones'];

            $file = fopen("listas/" . $nombre, "w+");

            foreach ($listaEstaciones as $valor) {
                fwrite($file, $valor . PHP_EOL);
            }

            fclose($file);
            $respuestaLista = "Archivo Creado con exito";
        }

        echo json_encode(array('resultado' => $respuestaLista));
        break;

    case 'sacarEstaciones':
        $arrayLista = [];

        $archivoAbierto = fopen("listas/" . $nombre . ".txt", "r");

        while (!feof($archivoAbierto)) {
            if ($linea = fgets($archivoAbierto)) {
                array_push($arrayLista, $linea);
            }
        }

        fclose($archivoAbierto);

        echo json_encode(array('resultado' => $arrayLista));
        break;

    case 'actualizarlista':
        $nombreViejo = $_POST['nombreViejo'] . ".txt";
        $listaEstaciones = $_POST['listaEstaciones'];
        $nombre = $nombre . ".txt";

        rename("listas/" . $nombreViejo, "listas/" . $nombre);

        $file = fopen("listas/" . $nombre, "w+");

        foreach ($listaEstaciones as $valor) {
            fwrite($file, $valor . PHP_EOL);
        }

        fclose($file);

        $respuestaLista = "Archivo Actualizado con exito";

        echo json_encode(array('resultado' => $respuestaLista));
        break;

    case 'eliminarlista':
        $nombre = $nombre . ".txt";
        $bandera = unlink("listas/" . $nombre);

        if($bandera == true){
            $respuestaLista = "Archivo Eliminado con exito";
        } else {
            $respuestaLista = "Error";
        }

        echo json_encode(array('resultado' => $respuestaLista));
        break;

    default:
        # code...
        break;
}

/* else {
    $servidor = $_POST['servidor'];
    $tiempoDesde = $_POST['tiempoDesde'];
    $tiempoHasta = $_POST['tiempoHasta'];

    echo "<script>console.log('Console: " . $text . "' );</script>";

    if (!is_dir('prueba')) {
        @mkdir('prueba', 0700);
    }

    #Tarea
    $file = fopen("prueba/" . $nombre . ".bat", "w+");

    fwrite($file, "CHDIR C:\LRGS\bin" . PHP_EOL);
    fwrite($file, "getDcpMessages> -h lrgseddn3.cr.usgs.gov -u mexnms -f MessageBrowserSMN.sc 1> E:\SIVEA\PRUEBASTOOL\deswall_lrg16092023-0001.log" . PHP_EOL);
    fwrite($file, "exit" . PHP_EOL);

    fclose($file);

    #MessageBrowser
    $fileMB = fopen("prueba/MessageBrowser" . $nombre . ".sc", "w+");

    fwrite($fileMB, "DRS_SINCE: now - 24 hours" . PHP_EOL);
    fwrite($fileMB, "DRS_UNTIL: now" . PHP_EOL);
    fwrite($fileMB, "DCP_ADDRESS:15E1D1B6" . PHP_EOL);
    fwrite($fileMB, "DCP_ADDRESS:15E1714E" . PHP_EOL);
    fwrite($fileMB, "DCP_ADDRESS:15E213A6" . PHP_EOL);
    fwrite($fileMB, "DCP_ADDRESS:15E16238" . PHP_EOL);
    fwrite($fileMB, "DCP_ADDRESS:15E13244" . PHP_EOL);
    fwrite($fileMB, "DCP_ADDRESS:15E1A726" . PHP_EOL);
    fwrite($fileMB, "DCP_ADDRESS:15E1B450" . PHP_EOL);
    fwrite($fileMB, "DCP_ADDRESS:15E1F75A" . PHP_EOL);
    fwrite($fileMB, "DCP_ADDRESS:15E181CA" . PHP_EOL);
    fwrite($fileMB, "DCP_ADDRESS:15E1C2C0" . PHP_EOL);
    fwrite($fileMB, "DCP_ADDRESS:15E157A2" . PHP_EOL);
    fwrite($fileMB, "DCP_ADDRESS:15E192BC" . PHP_EOL);
    fwrite($fileMB, "DCP_ADDRESS:15E1E42C" . PHP_EOL);
    fwrite($fileMB, "DCP_ADDRESS:15E144D4" . PHP_EOL);
    fwrite($fileMB, "RETRANSMITTED: Y" . PHP_EOL);
    fclose($fileMB);
}
*/