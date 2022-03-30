<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fororium</title>
    
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="../css/css.css">
    <link rel="stylesheet" href="../css/login.css">
</head>

<body>
    <header>
        <h2>Fororium</h2>
    </header>

<div class="container">
 
<section>
<form action="php/login.php" class="login-wrapper" method="post">
        <h1>Login_</h1>

        <div class="input-row">
            <span class="icon"><i class="fa fa-at"></i></span>
            <input type="email" name="email" placeholder="Email" required/>
        </div>

        <div class="input-row">
            <span class="icon"><i class="fa fa-lock"></i></span>
            <input type="password" name="con" placeholder="Contrase&ntilde;a" required/>
        </div>

        <!-- <div class="input-row">
            <input type="radio" name="rol" value="p" required>Profesor<br>
            <input type="radio" name="rol" value="a" required>Alumno
        </div> -->

        <div class="submit-row">
            <input type="submit" value="Iniciar Sesi&oacute;n &raquo;"/>
        </div>
        

    </form>

</section>
</div>

</body>
</html>