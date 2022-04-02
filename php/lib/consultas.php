<?php
include 'db.php';

class consultas extends db{
    function __construct(){
          parent::__construct();
      }

      public function Login($email){
          $sql="SELECT * FROM usuarios WHERE email='".$email."'";
          $resultado = $this->realizarConsulta($sql);
          if ($resultado!=null){
              $tabla=[];
              while($fila=$resultado->fetch_assoc()){
                  $tabla[]=$fila;
              }
            return $tabla;
          } else {
            return null;
          }
        }
  
        public function nuevousuario($usuario,$email,$pass){
          $sql="INSERT INTO usuarios (nombre_usuario, email, contraseña, rol ,avatar) VALUES ('$usuario','$email','$pass','1','../../cosas_necesarias/avatar.png')";
        $this->realizarConsulta($sql);
        }
        // public function modificarPerfil($email, $nombre, $apellido, $id ,$rol) {
        //   $sql = "UPDATE usuarios SET usuario = '".$email."', email = '".$email."', nombre = '".$nombre."', rol = '".$rol."', apellidos = '".$apellido."' WHERE id = ".$id;
        //   $this->realizarConsulta($sql);
        
        // }
  
        public function comprobaremail($email){
          $sql="SELECT * FROM usuarios WHERE email='".$email."'";
          $resultado = $this->realizarConsulta($sql);
          if ($resultado!=null){
              $tabla=[];
              while($fila=$resultado->fetch_assoc()){
                  $tabla[]=$fila;
              }
            return $tabla;
          } else {
            return null;
          }
        }
  
  
  
  }


?>