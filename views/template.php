<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="views/css/estilos.css" type="text/css" rel="stylesheet" />
    <title>SENASoft Cauca 2013 | Foro de debate</title>
</head>
<body>
    <header><?php include "modules/barra.php";?></header>  
    <?php
        $ruta = new MvcController();
        $ruta -> rutasController();
    ?>
    <footer><?php include "modules/copyright.php";?></footer>
    <script src="views/js/jquery.min.js" type="text/javascript"></script>
    <script src="views/js/inicio.js" type="text/javascript"></script>
    <script src="views/js/validarRegistro.js" type="text/javascript"></script>
</body>
</html>