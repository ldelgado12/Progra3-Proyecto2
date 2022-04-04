<?php

    $accion = $_REQUEST['accion'];

    switch($accion){
        case 'listar_notas':
            listarNotas();
            break;
        case 'obtener_nota':
                obtener_nota();
                break;
        case 'borrar_usuario':
                borrarUsuario();
                break;
    }

    function listarNotas(){

        //Creando la coneccion
        $conexion = new mysqli("localhost","root","","proyecto_l");
        if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
        }

        //Realizando la consulta
        $sql = "SELECT u.id_usuario,usuario,nombre,apell1,apell2,matematica,espaniol,ciencias,estudios_sociales,ingles, role FROM usuarios u INNER JOIN notas n ON u.id_usuario = n.id_usuario";
        $rs = $conexion->query($sql);
        $conexion->close();

        $cuerpoTabla = "<tbody>";
            while($fila = $rs->fetch_assoc()){
                $cuerpoTabla .=  "<tr>";
                    $cuerpoTabla .= "<td>".$fila['id_usuario']."</td>";
                    $cuerpoTabla .= "<td>".$fila['usuario']."</td>";
                    $cuerpoTabla .= "<td>".$fila['nombre']."</td>";
                    $cuerpoTabla .= "<td>".$fila['apell1']."</td>";
                    $cuerpoTabla .= "<td>".$fila['apell2']."</td>";
                    $cuerpoTabla .= "<td>".$fila['matematica']."</td>";
                    $cuerpoTabla .= "<td>".$fila['espaniol']."</td>";
                    $cuerpoTabla .= "<td>".$fila['ciencias']."</td>";
                    $cuerpoTabla .= "<td>".$fila['estudios_sociales']."</td>";
                    $cuerpoTabla .= "<td>".$fila['ingles']."</td>";
                    $cuerpoTabla .= "<td>";
                    $cuerpoTabla .= "<a class='add' title='Add' data-toggle='tooltip'><i class='material-icons'>&#xE03B;</i></a>";
                    $cuerpoTabla .= "<a class='edit' href='index.php?accion=abrirFormActualizarNotas&id_usuario=".$fila['id_usuario']."' title='Edit' data-toggle='tooltip' onclick='editarNota(".$fila['id_usuario'].");'><i class='material-icons'>&#xE254;</i></a>";
                    $cuerpoTabla .= "<a class='delete' title='Delete' data-toggle='tooltip' onclick='borrarUsuario(".$fila['id_usuario'].");'><i class='material-icons'>&#xE872;</i></a>";
                    $cuerpoTabla .= "</td>";
                $cuerpoTabla .=  "</tr>";
            }
        $cuerpoTabla .= "</tbody>";

        header("HTTP/1.1 200 OK");
        // echo json_encode($array_salida);
        echo $cuerpoTabla;

        exit;
    }

    function obtener_nota(){

        //Creando la coneccion
        $conexion = new mysqli("localhost","root","","proyecto_l");
        if (!$conexion) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
        }

        $id_usuario = $_REQUEST['id_usuario'];
        //Realizando la consulta
        $sql = "SELECT u.id_usuario,usuario,nombre,apell1,apell2,matematica,espaniol,ciencias,estudios_sociales,ingles, role FROM usuarios u INNER JOIN notas n ON u.id_usuario = n.id_usuario WHERE u.id_usuario =".$id_usuario;
        $rs = $conexion->query($sql);
        $conexion->close();

        $cuerpoTabla = "<tbody>";
            while($fila = $rs->fetch_assoc()){
                $cuerpoTabla .=  "<tr>";
                    $cuerpoTabla .= "<td>".$fila['id_usuario']."</td>";
                    $cuerpoTabla .= "<td>".$fila['usuario']."</td>";
                    $cuerpoTabla .= "<td>".$fila['nombre']."</td>";
                    $cuerpoTabla .= "<td>".$fila['apell1']."</td>";
                    $cuerpoTabla .= "<td>".$fila['apell2']."</td>";
                    $cuerpoTabla .= "<td>".$fila['matematica']."</td>";
                    $cuerpoTabla .= "<td>".$fila['espaniol']."</td>";
                    $cuerpoTabla .= "<td>".$fila['ciencias']."</td>";
                    $cuerpoTabla .= "<td>".$fila['estudios_sociales']."</td>";
                    $cuerpoTabla .= "<td>".$fila['ingles']."</td>";
                $cuerpoTabla .=  "</tr>";
            }
        $cuerpoTabla .= "</tbody>";

        header("HTTP/1.1 200 OK");
        // echo json_encode($array_salida);
        echo $cuerpoTabla;

        exit;
    }

    function borrarUsuario(){
        $conexion = new mysqli("localhost","root","","proyecto_l");
        if (!$conexion) {
          echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
          echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
          echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
          exit;
        }
        $id_usuario = $_REQUEST['id_usuario'];
        $sql  = "delete from usuarios where id_usuario =".$id_usuario;
        $rs  = $conexion->query($sql);
        $sql2  = "delete from notas where id_usuario =".$id_usuario;
        $rs2  = $conexion->query($sql2);
      
        $conexion->close();
        header("HTTP/1.1 200 OK"); // las importantes
        echo "ok";// las importantes
        exit();// las importantes
      }

    header("HTTP/1.1 404 Bad_Request_Listar");

    exit;
?>