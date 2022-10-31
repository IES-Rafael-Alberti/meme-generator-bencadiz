<?php
if(isset($_POST['usuario'])) {
   require("conecta.php");

    // recupera los datos del formulario
    $usuario = $_POST["usuario"];
    $password = $_POST["password"];
   
    // prepara la sentencia SQL. Le doy un nombre a cada dato del formulario 
    $sql = "INSERT INTO usuarios (nombre, pwd) values (:nombre, :pwd)";
    // asocia valores a esos nombres
    $datos = array("nombre" => $usuario,
                   "pwd" => $password
                  );
                  
     // comprueba que la sentencia SQL preparada está bien 
     $stmt = $conn->prepare($sql);
     // ejecuta la sentencia usando los valores
     if($stmt->execute($datos) != 1) {
        print("No se pudo dar de alta");
        exit(0);
    }

    header("Location: index.php");
    exit(0);
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Protectora de animales RAfaNO - Login</title>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
    <label for="usuario">Usuario: </label>
    <input type="text" name="usuario" id="usuario">
    <label for="password">Password: </label>
    <input type="password" name="password" id="password">
    <input type="submit" value="Login">
</form>    
</body>
</html>