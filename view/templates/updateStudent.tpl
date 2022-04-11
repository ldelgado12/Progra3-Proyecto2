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
    <h1>Actualizar Notas/Usuario</h1>
    <form action="index.php" method="post">
      <input type="hidden" name="accion" value="editarUsuario">
      <label>
        <p class="label-txt">ID de estudiante</p>
        <input type="text" class="input" name="id_usuario" value="{$id_usuario}">
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
      <label>
        <p class="label-txt">Contraseña de estudiante</p>
        <input type="text" class="input" name="pass" value="{$pass}">
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
      <label>
        <p class="label-txt">Current User</p>
        <input type="text" class="input" name="currentUser" value="{$currentUser}">
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
        <label>
          <p class="label-txt">Edite nombre de usuario</p>
          <input type="text" class="input" name="usuario" value="{$usuario}" required>
          <div class="line-box">
            <div class="line"></div>
          </div>
        </label>
        <label>
          <p class="label-txt">Edite nombre</p>
          <input type="text" class="input" name="nombre" value="{$nombre}" required>
          <div class="line-box">
            <div class="line"></div>
          </div>
        </label>
        <label>
            <p class="label-txt">Edite primer apellido</p>
            <input type="text" class="input" name="apell1" value="{$apell1}" required>
            <div class="line-box">
              <div class="line"></div>
            </div>
        </label>
        <label>
            <p class="label-txt">Ingrese su segundo apellido</p>
            <input type="text" class="input" name="apell2" value="{$apell2}" required>
            <div class="line-box">
              <div class="line"></div>
            </div>
        </label>
        <label>
          <p class="label-txt">Nota de Matematicas</p>
          <input type="text" class="input" name="matematica" value="{$matematica}" required>
          <div class="line-box">
            <div class="line"></div>
          </div>
      </label>
      <label>
        <p class="label-txt">Nota de Español</p>
        <input type="text" class="input" name="espaniol" value="{$espaniol}" required>
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
      <label>
        <p class="label-txt">Nota de Ciencias</p>
        <input type="text" class="input" name="ciencias" value="{$ciencias}" required>
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
      <label>
        <p class="label-txt">Nota de Estudios Sociales</p>
        <input type="text" class="input" name="estudios_sociales" value="{$estudios_sociales}" required>
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
      <label>
        <p class="label-txt">Nota de Ingles</p>
        <input type="text" class="input" name="ingles" value="{$ingles}" required>
        <div class="line-box">
          <div class="line"></div>
        </div>
      </label>
        <button type="submit" value="editarUsuario">submit</button>
      </form>
</body>
</html>