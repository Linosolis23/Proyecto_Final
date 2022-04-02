<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fororium</title>
    <link rel="stylesheet" href="css/css.css">
</head>
<body>
    <header><h2>Fororium</h2></header>

<?php
// $_SESSION["nombre"]="pepe";

// if ($_SESSION["nombre"]=="pepe"){
//     echo '<script>alert("1")</script>';

// }else{
//     echo '<script>alert("2")</script>';

// }

if($_GET["mensaje"]=='0'){

    echo "<div class='alerta' id='alerta'>usuario registrado, ya puedes loguearte</div>";
    
    }elseif ($_GET["mensaje"]=='1'){
        echo "<div>Contraseña y recordar contraseña no coinciden</div>";
    
    }elseif ($_GET["mensaje"]=='2'){
        echo "<div>el usuario o la contraseña no es correcta</div>";
    
    }elseif ($_GET["mensaje"]=='3'){
        echo "<div>el usuario no existe</div>";
    
    }
?>

<div class="container">
  <nav class="menu">
<ul>
<li class="active"><a href="index.php">Home</a></li>
<li><a href="#">Posts</a></li>
<li><a href="#">Categoria</a></li>
<li><a href="#">Blog</a></li>
<li><a href="">Contact</a></li>
<li id="login"><a href="php/registrar.php">Registrar</a></li>
<li id="login"><a href="php/login.php">Login</a>

</ul>
</nav>
<section>


</section>
</div>
<!-- Insercion del javascript -->
<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="js/js.js"></script>
</body>
</html>

		