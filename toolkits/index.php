<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8; IE=edge">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7; IE=EmulateIE10; IE=EDGE" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=no">
    <title>Facilitador</title>
    <meta name="author" content="César Alejandro Montaño Cortés">
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="css/heroic-features.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="caption flat">
                        <h4 style="cursor: pointer;">Tareas</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="caption flat">
                        <h4 style="cursor: pointer;">Estatus Servidores</h4>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="caption flat">
                        <h4 style="cursor: pointer;">Lista Estaciones</h4>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div class="container" id="tareaPanel">
        <label> Nombre </label>
        <input type="text" name="nombreTarea" />
        <br><br>
        <div id="form" style="width:350px;">
            <fieldset>
                <legend>Información</legend>
                <table>
                    <tr>
                        <td>Archivo</td>
                        <td><input type="text" id="archivo" /></td>
                        <td></td>
                        <td>IP</td>
                        <td><input type="text" id="ip" /></td>
                        <td></td>
                        <td>Estaciones</td>
                        <td><input type="text" id="ip" /></td>
                    </tr>
                </table>
            </fieldset>
        </div>
        <div id="form" style="width:350px;">
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
    </div>

</body>

</html>

<style>
    fieldset {
        display: block;
        margin-inline-start: 2px;
        margin-inline-end: 2px;
        padding-block-start: 0.35em;
        padding-inline-start: 0.75em;
        padding-inline-end: 0.75em;
        padding-block-end: 0.625em;
        min-inline-size: min-content;
        border-width: 2px;
        border-style: groove;
        border-color: rgb(192, 192, 192);
        border-image: initial;
    }

    legend {
        display: block;
        padding-inline-start: 2px;
        padding-inline-end: 2px;
        unicode-bidi: isolate;
        border-width: initial;
        border-style: none;
        border-color: initial;
        border-image: initial;
    }

    table {
        display: table;
        border-collapse: separate;
        box-sizing: border-box;
        text-indent: initial;
        unicode-bidi: isolate;
        line-height: normal;
        font-weight: normal;
        font-size: medium;
        font-style: normal;
        color: -internal-quirk-inherit;
        text-align: start;
        border-spacing: 2px;
        border-color: gray;
        white-space: normal;
        font-variant: normal;
    }

    tbody {
        display: table-row-group;
        vertical-align: middle;
        unicode-bidi: isolate;
        border-color: inherit;
    }

    tr {
        display: table-row;
        vertical-align: inherit;
        unicode-bidi: isolate;
        border-color: inherit;
    }

    td {
        display: table-cell;
        vertical-align: inherit;
        unicode-bidi: isolate;
    }
</style>