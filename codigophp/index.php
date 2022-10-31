<?php
require("testlogin.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página principal</title>
</head>
<body>
    <a href="phpinfo.php">phpinfo()</a>
    <a href="xdebug_info.php">xdebug_info()</a>
   
</body>
</html>

<?php
   require("conecta.php");

    // recupera los datos del formulario
    $id = $_SESSION["id"];
   
    $sql="Select * from usuarios where id = :id";

    $datos = array("id" => $id);

    $stmt = $conn->prepare($sql);

    $stmt->execute($datos);

    $usuarios = $stmt->fetch();

    print($usuarios["nombre"].$usuarios["pwd"].$usuarios["id"]);

?>
