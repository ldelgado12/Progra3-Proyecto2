<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro Profesor</title>
    <link rel="stylesheet" href="css/signUpTeacher.css">
</head>
<body>
    <form action="index.php" method="post">
        <input type="hidden" name="accion" value="registrarUsuario">
        <label>
          <p class="label-txt">Ingrese su nombre de usuario</p>
          <input type="text" class="input" name="usuario" required>
          <div class="line-box">
            <div class="line"></div>
          </div>
        </label>
        <label>
          <p class="label-txt">Ingrese su contraseña</p>
          <input type="text" class="input" name="pass" required>
          <div class="line-box">
            <div class="line"></div>
          </div>
        </label>
        <label>
          <p class="label-txt">Ingrese su nombre</p>
          <input type="text" class="input" name="nombre" required>
          <div class="line-box">
            <div class="line"></div>
          </div>
        </label>
        <label>
            <p class="label-txt">Ingrese su primer apellido</p>
            <input type="text" class="input" name="apell1" required>
            <div class="line-box">
              <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">Ingrese su segundo apellido</p>
            <input type="text" class="input" name="apell2" required>
            <div class="line-box">
              <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">Ingrese su role(estudiante o profesor)</p>
            <input type="text" class="input" name="role" required>
            <div class="line-box">
              <div class="line"></div>
            </div>
        </label> 
        <button type="submit" value="registrarUsuario">submit</button>
      </form>
</body>
</html>