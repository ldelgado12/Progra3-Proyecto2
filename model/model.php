<?php
    require_once 'connection/conn.php';

    class model{
        private $inst_conn; 
        private $conn;

        function __construct()
        {
            $this->inst_conn = new conn;            
        }

        function m_validarLogin($usuario, $pass){
            $this->conn = $this->inst_conn->AbrirBD();
            $arr_rs = array();

            $sql = "SELECT id_usuario, usuario, nombre, apell1, apell2, role FROM usuarios WHERE ";
            $sql .= " usuario='$usuario' and pass=md5('proyecto_$pass')";

            
            $rs = $this->conn->query($sql);

            while($fila = $rs->fetch_assoc()){

                $arr_rs["id_usuario"] =  $fila['id_usuario'];
                $arr_rs["usuario"] =  $fila['usuario'];
                $arr_rs["nombre"] =  $fila['nombre'];
                $arr_rs["apell1"] =  $fila['apell1'];
                $arr_rs["apell2"] =  $fila['apell2'];
                $arr_rs["role"] =  $fila['role'];
                // echo "id= " . $fila['id_usuario'] . "\n";
                // echo "nombre= " . $fila['nombre'] . "\n";
            }
            $this->conn = $this->inst_conn->CerrarBD();
            return $arr_rs;
            // echo $arr_rs;
            // exit;
        }

        function m_borrarUsuario($id_usuario){
            $this->conn = $this->inst_conn->AbrirBD();
            $arr_rs = array();

            $sql = "DELETE FROM usuarios WHERE id_usuario =". $id_usuario;
            $rs = $this->conn->query($sql);
            $this->conn = $this->inst_conn->CerrarBD();


        }
        function m_CrearUsuario($arr_usuario){
            $this->conn = $this->inst_conn->AbrirBD();
            $sql = "insert into usuarios(usuario,pass,nombre,apell1,apell2,role) ";
            //                  Usuario             Contrasenia                             nombre              apellido                apellido2           role
            // $sql .= "values('".$arr_usuario[0]."',md5('proyecto_".$arr_usuario[1]."),'".$arr_usuario[2]."','".$arr_usuario[3]."','".$arr_usuario[4]."',".$arr_usuario[5].");";
            $sql .= "VALUES ('".$arr_usuario[0]."', md5('proyecto_".$arr_usuario[1]."'), '".$arr_usuario[2]."', '".$arr_usuario[3]."', '".$arr_usuario[4]."', '".$arr_usuario[5]."');";
            
            $rs = $this->conn->query($sql);
            $this->inst_conn->CerrarBD();

            return $rs;
            
        }
        function m_crearNota($usuario, $pass){

            $this->conn = $this->inst_conn->AbrirBD();
            $arr_rs = array();

            $sql = "SELECT id_usuario, usuario, nombre, apell1, apell2, role FROM usuarios WHERE ";
            $sql .= " usuario='$usuario' and pass=md5('proyecto_$pass')";

            
            $rs = $this->conn->query($sql);

            while($fila = $rs->fetch_assoc()){

                $arr_rs["id_usuario"] =  $fila['id_usuario'];
                $arr_rs["role"] =  $fila['role'];
            }

            if($arr_rs["role"] == 2){
                $sql = "insert into notas(id_usuario, matematica, espaniol, ciencias, estudios_sociales, ingles) ";
               $sql .= "VALUES ('".$arr_rs["id_usuario"]."', '0', '0', '0', '0', '0');";
               $rs  = $this->conn->query($sql);
            }

            $this->conn = $this->inst_conn->CerrarBD();



            return $arr_rs;

            // $this->conn = $this->inst_conn->AbrirBD();
            // $sql = "insert into notas(id_usuario, matematica, espaniol, ciencias, estudios_sociales, ingles) ";
            // //                  Usuario             Contrasenia                             nombre              apellido                apellido2           role
            // // $sql .= "values('".$arr_usuario[0]."',md5('proyecto_".$arr_usuario[1]."),'".$arr_usuario[2]."','".$arr_usuario[3]."','".$arr_usuario[4]."',".$arr_usuario[5].");";
            // $sql .= "VALUES ('".$id_usuario."', '100', '90', '80', '90', '50');";
            
            // $rs = $this->conn->query($sql);
            // $this->inst_conn->CerrarBD();

            // return $rs;
        }
        function m_editarUsuario($arr_usuario, $id_usuario){
            $this->conn = $this->inst_conn->AbrirBD();
            //
            // $sql = "insert into usuarios(usuario,pass,nombre,apell1,apell2,role) ";
            // $sql .= "values('".$arr_usuario[0]."',md5('proyecto_".$arr_usuario[1]."'), '".$arr_usuario[2]."','".$arr_usuario[3]."','".$arr_usuario[4]."',".$arr_usuario[5].");";
            // $rs  = $this->conn->query($sql);
            
            $sql = "update usuarios set usuario = '".$arr_usuario[1]."', nombre = '".$arr_usuario[2]."', apell1 = '".$arr_usuario[3]."', apell2 = '".$arr_usuario[4]."' where id_usuario = ".$id_usuario.";";
            $rs  = $this->conn->query($sql);

            $sqlNotas = "update notas set matematica = ".$arr_usuario[5].", espaniol = ".$arr_usuario[6].", ciencias = ".$arr_usuario[7].", estudios_sociales = ".$arr_usuario[8].", ingles = ".$arr_usuario[9]." where id_usuario = ".$id_usuario.";";
            $rs  = $this->conn->query($sqlNotas);

            $this->inst_conn->CerrarBD();
            return true;
        }
        function m_obtenerNota(){
            $this->conn = $this->inst_conn->AbrirBD();
            $arr_rs = array();
            $id_usuario = $_REQUEST['id_usuario'];
            $sql = "SELECT u.id_usuario,usuario,nombre,apell1,apell2,matematica,espaniol,ciencias,estudios_sociales,ingles, role FROM usuarios u INNER JOIN notas n ON u.id_usuario = n.id_usuario WHERE u.id_usuario =".$id_usuario;
            $rs = $this->conn->query($sql);
            while($fila = $rs->fetch_assoc()){
                $arr_rs["id_usuario"] =  $fila['id_usuario'];
                $arr_rs["usuario"] =  $fila['usuario'];
                $arr_rs["nombre"] =  $fila['nombre'];
                $arr_rs["apell1"] =  $fila['apell1'];
                $arr_rs["apell2"] =  $fila['apell2'];
                $arr_rs["matematica"] =  $fila['matematica'];
                $arr_rs["espaniol"] =  $fila['espaniol'];
                $arr_rs["ciencias"] =  $fila['ciencias'];
                $arr_rs["estudios_sociales"] =  $fila['estudios_sociales'];
                $arr_rs["ingles"] =  $fila['ingles'];
            }
            $this->conn = $this->inst_conn->CerrarBD();
            return $arr_rs;
            // echo $arr_rs;
            // exit;
        }
    }

?>