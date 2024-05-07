<?php
@session_start();
$_SESSION["pagina"] = "login";
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    $ipAdress = $_SERVER['HTTP_CLIENT_IP'];
} else if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    $ipAdress = $_SERVER['HTTP_X_FORWARDED_FOR'];
} else {
    $ipAdress = $_SERVER['REMOTE_ADDR'];
}
?>

<?php if (isset($_SESSION['autentica'])) {
    header("Location: index.php");
} else { ?>
    <!DOCTYPE html>
    <html class="light-style customizer-hide">

    <?php require_once 'head.php'; ?>

    <body>
        <input type="text" id="IPVisitante" value="<?php echo $ipAdress ?>" />

        <div class="container-xxl">
            <div class="authentication-wrapper authentication-basic container-p-y">
                <div class="authentication-inner">
                    <div class="card">
                        <div class="card-body">
                            <div class="app-brand justify-content-center">
                                <span class="app-brand-text demo text-body fw-bolder">Facilitador</span>
                            </div>

                            <h4 class="mb-2">Bienvenido! 👋</h4>
                            <p class="mb-4"></p>
                            <form class="mb-3" action="" method="POST">
                                <div class="mb-3">
                                    <label for="email" class="form-label">Usuario</label>
                                    <input type="text" class="form-control" id="email" name="usuario" placeholder="Ingresa tu nombre de usuario" autofocus required />
                                </div>
                                <div class="mb-3 form-password-toggle">
                                    <div class="d-flex justify-content-between">
                                        <label class="form-label" for="password" name="password">Contraseña</label>
                                    </div>
                                    <div class="input-group input-group-merge">
                                        <input type="password" id="password" class="form-control" name="password" placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;" aria-describedby="password" />
                                        <span class="input-group-text cursor-pointer"><i class="bx bx-hide"></i></span>
                                    </div>
                                </div>
                                <div class="mb-3">
                                    <button class="btn btn-primary d-grid w-100" type="submit" name="login">Iniciar sesión</button>
                                </div>
                            </form>
                            <div id="logerror">
                                <?php
                                include 'BDconexion.php';
                                if (isset($_POST['login'])) {
                                    $conexion_bd = mysqli_connect($host, $username, $password);
                                    mysqli_select_db($conexion_bd, $database);

                                    $myusuario = mysqli_query($conexion_bd, "SELECT usuario FROM usuarios WHERE usuario = '" . $_POST['usuario'] . "'");
                                    $nmysuario = mysqli_num_rows($myusuario);

                                    if ($nmysuario != 0) {
                                        $sql = "SELECT idUsuario, nombre, usuario FROM usuarios where usuario =  '" . $_POST['usuario'] . "' and contrasena = '" . $_POST['password'] . "'";
                                        $myclave = mysqli_query($conexion_bd, $sql);
                                        $nmyclave = mysqli_num_rows($myclave);
                                        $row = $myclave->fetch_row();
                                        if ($nmyclave != 0) {
                                            session_start();
                                            $_SESSION["autentica"] = "SIP";
                                            $_SESSION["idUsuario"] = $row[0];
                                            $_SESSION["nombre"] = $row[1];
                                            $_SESSION["usuario"] = $row[2];
                                            $_SESSION["ipAdress"] = $ipAdress;

                                            //$bitacoraLogin = mysqli_query($link, "INSERT INTO bitacora (`idUsuario`,`IPConexion`,`TipoOperacion`) VALUES (" .  $row[0] . ", '" . $_SESSION['ipAdress'] . "',1);");

                                            header("Location: index2.php");
                                        } else {
                                            echo  "Contraseña Incorrecta.";
                                        }
                                    } else {
                                        echo  "El usuario ingresado es incorrecto.";
                                    }
                                    mysqli_close($conexion_bd);
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="login/libs/jquery/jquery.js"></script>
        <script src="login/libs/popper/popper.js"></script>
        <script src="login/js/bootstrap.js"></script>
        <script src="login/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
        <script src="login/js/menu.js"></script>
        <script src="login/js/main.js"></script>
        <script src="login/js/pages-account-settings-account.js"></script>
        <script src="login/js/config.js"></script>

    </body>

    </html>

<?php } ?>