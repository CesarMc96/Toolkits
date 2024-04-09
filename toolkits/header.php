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
  <script src="js/toolkits.js"></script>
</head>

<body>
  <div class="container">
    <div class="row text-center">
      <div class="col-md-4 col-sm-6 hero-feature">
        <div class="thumbnail">
          <div class="caption flat">
            <h4 style="cursor: pointer;" onclick="mostrarPnlTareas();">Tareas</h4>
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
    <div id="agregarTareaPnl">
      <label> Nombre </label>
      <input type="text" name="nombreTarea" />
      <br><br>
      <div id="form" style="width:350px;">
        <fieldset>
          <legend>Información</legend>
          <table>
            <tr>
              <td>Archivo</td>
              <td>
                <select name="selectArchivo">
                  <option value="value1">Value 1</option>
                  <option value="value2">Value 2</option>
                  <option value="value3">Value 3</option>
                </select>
              </td>
              <td></td>
              <td>IP</td>
              <td>
                <select name="selectIP">
                  <option value="value1">Value 1</option>
                  <option value="value2">Value 2</option>
                  <option value="value3">Value 3</option>
                </select>
              </td>
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
  </div>

</body>

</html>

<style>
  .container {
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
  }

  @media (min-width: 768px) {
    .container {
      width: 750px;
    }

    .col-sm-6 {
      width: 50%;
    }

    .col-sm-1,
    .col-sm-10,
    .col-sm-11,
    .col-sm-12,
    .col-sm-2,
    .col-sm-3,
    .col-sm-4,
    .col-sm-5,
    .col-sm-6,
    .col-sm-7,
    .col-sm-8,
    .col-sm-9 {
      float: left;
    }
  }

  @media (min-width: 992px) {
    .container {
      width: 970px;
    }

    .col-md-4 {
      width: 33.33333333%;
    }

    .col-md-1,
    .col-md-10,
    .col-md-11,
    .col-md-12,
    .col-md-2,
    .col-md-3,
    .col-md-4,
    .col-md-5,
    .col-md-6,
    .col-md-7,
    .col-md-8,
    .col-md-9 {
      float: left;
    }
  }

  @media (min-width: 1200px) {
    .container {
      width: 1170px;
    }
  }

  .row {
    margin-right: -15px;
    margin-left: -15px;
  }

  .text-center {
    text-align: center;
  }

  .col-lg-1,
  .col-lg-10,
  .col-lg-11,
  .col-lg-12,
  .col-lg-2,
  .col-lg-3,
  .col-lg-4,
  .col-lg-5,
  .col-lg-6,
  .col-lg-7,
  .col-lg-8,
  .col-lg-9,
  .col-md-1,
  .col-md-10,
  .col-md-11,
  .col-md-12,
  .col-md-2,
  .col-md-3,
  .col-md-4,
  .col-md-5,
  .col-md-6,
  .col-md-7,
  .col-md-8,
  .col-md-9,
  .col-sm-1,
  .col-sm-10,
  .col-sm-11,
  .col-sm-12,
  .col-sm-2,
  .col-sm-3,
  .col-sm-4,
  .col-sm-5,
  .col-sm-6,
  .col-sm-7,
  .col-sm-8,
  .col-sm-9,
  .col-xs-1,
  .col-xs-10,
  .col-xs-11,
  .col-xs-12,
  .col-xs-2,
  .col-xs-3,
  .col-xs-4,
  .col-xs-5,
  .col-xs-6,
  .col-xs-7,
  .col-xs-8,
  .col-xs-9 {
    position: relative;
    min-height: 1px;
    padding-right: 15px;
    padding-left: 15px;
  }

  .thumbnail {
    display: block;
    padding: 4px;
    margin-bottom: 20px;
    line-height: 1.42857143;
    background-color: #fff;
    border: 1px solid #ddd;
    border-radius: 4px;
    -webkit-transition: border .2s ease-in-out;
    -o-transition: border .2s ease-in-out;
    transition: border .2s ease-in-out;
  }

  .thumbnail .caption {
    padding: 9px;
    color: #333;
  }

  body {
    margin: 0;
  }

  body {
    padding-top: 70px;
  }

  .btn-group-vertical>.btn-group:after,
  .btn-group-vertical>.btn-group:before,
  .btn-toolbar:after,
  .btn-toolbar:before,
  .clearfix:after,
  .clearfix:before,
  .container-fluid:after,
  .container-fluid:before,
  .container:after,
  .container:before,
  .dl-horizontal dd:after,
  .dl-horizontal dd:before,
  .form-horizontal .form-group:after,
  .form-horizontal .form-group:before,
  .modal-footer:after,
  .modal-footer:before,
  .modal-header:after,
  .modal-header:before,
  .nav:after,
  .nav:before,
  .navbar-collapse:after,
  .navbar-collapse:before,
  .navbar-header:after,
  .navbar-header:before,
  .navbar:after,
  .navbar:before,
  .pager:after,
  .pager:before,
  .panel-body:after,
  .panel-body:before,
  .row:after,
  .row:before {
    display: table;
    content: " ";
  }

  :after,
  :before {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }

  body {
    font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
    font-size: 14px;
    line-height: 1.42857143;
    color: #333;
    background-color: #fff;
  }

  * {
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }

  #tareaPanel {
    padding-top: 2%;
    /*display: none;*/
  }
</style>