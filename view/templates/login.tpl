<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="css/general.css">
    <link rel="stylesheet" href="css/iniciar_sesion.css">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
</head>
<body>
    <header class="main_header">
        <nav>
            <a href="index.html">
            <img class="img_logo" src="imagenes/logo.png" width="61" height="80" alt="Logo Costa Rica Educa">
            </a>
            <div class="float-right middle2">
                <div class="float-right mr-2">
                    <p class="white">¿No eres miembro?</p>
                    <a href="registro_centroEdu.html" class="registrar_cuenta ml-1">Registro Centro Educativo</a>
                    <a href="registro_padre.html" class="registrar_cuenta ml-1">Registro Familiar</a>
                </div>
            </div>
        </nav>
    </header>

    
    <div class="wrapper">
        <div class="section">

            <div class="cont">
                    <h1 class="center inicio color_text">Iniciar sesión</h1>
                <form action="index.php" method="post">
                        <input type="hidden" name="accion" value="login">
                        <label class="label2 color_text" for="txt_correo">Usuario</label>
                        <input class="form-control border_input" name="usuario" type="text" id="txt_correo">
                        <label class="label2 color_text" for="txt_contrasenna">Contraseña</label>
                        <input class="form-control border_input" name="password" type="password" id="txt_contrasenna">
                        <div class="center">
                        <button  class="ingresar" id="btn_ingresar">Ingresar</button>
                        </div>
                        <p class="p color_text"><a href="#" class="p" id="cambiar_clave">¿Se le olvidó la contraseña?</a></p>

                </form>
            </div>
        </div>
    </div>



</body>
</html>