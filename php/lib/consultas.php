<?php
include 'db.php';

class consultas extends db{
    function __construct(){
          parent::__construct();
      }

      public function login($usuario){
          $sql="SELECT * FROM usuarios WHERE nombre_usuario='".$usuario."'";
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
          $sql="INSERT INTO usuarios (nombre_usuario, email, pass, rol ,avatar) VALUES ('$usuario','$email','$pass','1','../../cosas_necesarias/avatar.png')";
        $this->realizarConsulta($sql);
        }
        public function modificarPerfil($usuario,$email,$pass,$id) {
          $sql = "UPDATE usuarios SET nombre_usuario = '".$usuario."', email = '".$email."', pass = '".$pass."'WHERE id = ".$id;
          $this->realizarConsulta($sql);
        
        }
  
        public function comprobarusuario($usuario){
          $sql="SELECT * FROM usuarios WHERE nombre_usuario='".$usuario."'";
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