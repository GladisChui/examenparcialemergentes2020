<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap core CSS offline-->
    <link rel="stylesheet" href="librerias/bootstrap/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;            
            height: 100vh;
        }

        #login .container #login-row #login-column #login-box {
            margin-top: 120px;
            max-width: 600px;
            height: 320px;
            
        }

        #login .container #login-row #login-column #login-box #login-form {
            padding: 20px;
        }

        #login .container #login-row #login-column #login-box #login-form #register-link {
            margin-top: -85px;
        }
    </style>
</head>

<body class="text-center">
    <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form action="login.php" method="post" autocomplete="off">
                            <h1 class="h3 mb-3 font-weight-normal">Login</h1>
                            <label for="" class="sr-only">Usuario</label>
                            <input type="text" name="usuario" class="form-control" placeholder="Usuario" required autofocus>
                            <label for="" class="sr-only">clave</label>
                            <input type="password" name="clave" class="form-control" placeholder="Password" required>
                            <div class="checkbox mb-3">
                                <label>
                                    <input type="checkbox" value="remember-me"> Recuerdame
                                </label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                            <p class="mt-5 mb-3 text-muted">&copy; 2017-2020</p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="librerias/bootstrap/js/jquery-3.5.1.min.js"></script>
    <script src="librerias/bootstrap/js/popper.min.js"></script>
    <script src="librerias/bootstrap/js/bootstrap.min.js"></script>
</body>

</html>