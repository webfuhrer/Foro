<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
$msg=0;
if (isset($_GET['msg']))
{
    $msg=$_GET['msg'];
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <?php
            if ($msg==1)
            {
                echo "<p style='color:#FF0000'>El usuario no está logueado</p>";
            }
            else if ($msg==2)
            {
                echo "<p  style='color:#FF0000'>El usuario o la contraseña son incorrectos</p>";
            }
            ?>
        </div>
        <form action ="comprobar_usuario.php" method="POST">
            Usuario: <input type="text" name="usuario" placeholder="Introduzca usuario">
            Password: <input type="password" name="password" placeholder="Introduzca password">
            <input type="submit" value="Entrar">
        </form>
             
    </body>
</html>
