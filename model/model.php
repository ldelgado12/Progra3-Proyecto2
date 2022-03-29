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
            $sql .= "values('".$arr_usuario[0]."',md5('proyecto_'".$arr_usuario[1]."''), '".$arr_usuario[2]."','".$arr_usuario[3]."','".$arr_usuario[4]."',".$arr_usuario[5].");";
            
            $rs = $this->conn->query($sql);
            $this->inst_conn->CerrarBD();
            
            }

        function m_editarUsuario($arr_usuario, $id_usuario){
            $this->conn = $this->inst_conn->AbrirBD();
            $arr_rs = array();

            $sql = "UPDATE usuarios SET ";
            $sql .= "nombre = '".$arr_usuario[0]."'";
            $sql .= "apell1 = '".$arr_usuario[1]."'";
            $sql .= "apell2 = '".$arr_usuario[2]."'";
            $sql .= "WHERE id_usuario =" .$id_usuario;

            $rs = $this->conn->query($sql);
            $this->inst_conn->CerrarBD();
        }
    }

?>