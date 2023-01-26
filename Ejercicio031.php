<?php

    $txtNombre="";
    $rdgLenguaje="";
    if($_POST){
        $txtNombre= (isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
        $rdgLenguaje= (isset($_POST['rgdLenguaje']))?$_POST['rgdLenguaje']:"";
    }

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if($_POST){ ?>
    <strong> Hola </strong>:<?php echo $txtNombre;?>
    <?php } ?>
    <form action="Ejercicio031.php" method="post">
        Nombre: <br>
        <input value="<?php echo $txtNombre ?>" type="text" name="txtNombre" id="" >
        <br>
        ¿Te gusta?:<br>
        <br>php: <input type=radio <?php echo ($rdgLenguaje =="php")?"checked":"" ?> value="php" name="lenguajes">
        <br>html: <input type=radio value="html" name="lenguajes">
        <br>css: <input type=radio value="css" name="lenguajes"><br>

        <input type="submit" value="Enviar Informacion" />
    </form>  

</body>
</html>

