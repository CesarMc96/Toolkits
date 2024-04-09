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
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/heroic-features.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
</head>

<body>
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="caption flat">
                        <h3 style="cursor: pointer;">Tareas</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="caption flat">
                        <h3 style="cursor: pointer;">Estatus Servidores</h3>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6 hero-feature">
                <div class="thumbnail">
                    <div class="caption flat">
                        <h3 style="cursor: pointer;">Lista Estaciones</h3>
                    </div>
                </div>
            </div>
        </div>
        <hr>
    </div>

    <div class="container" id="tareaPanel">
        <label> Nombre </label>
        <input type="text" name="nombreTarea" />
        <br>
        <div id="form" style="width:350px;">
            <fieldset>
                <legend>General Information</legend>
                <table>
                    <tr>
                        <td><span style="text-decoration:underline">C</span>hange Password To:</td>
                        <td><input type="text" /></td>
                    </tr>
                    <tr>
                        <td><span style="text-decoration:underline">C</span>onfirm Password:</td>
                        <td><input type="text" /></td>
                    </tr>
                </table>
            </fieldset>
        </div>

        <fieldset style="width:100px;">

<legend>

Please Enter Your Name</legend>

<br>

<table>

<tr>

<td>First Name:</td>

<td><input type="text" /></td>

</tr>

<tr>

<td>Last Name:</td>

<td><input type="text" /></td>

</tr>

</table>

</fieldset>
    </div>

</body>

</html>