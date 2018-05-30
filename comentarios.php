<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        session_start();
        $usuario=$_SESSION['usuario'];//AQUI VA EL NOMBRE
        $id_usuario=$_SESSION['id'];
        //Tengo que ver si vengo de login o vengo de un submit de comentarios.php
        
        if (isset($_POST['comentario']))
        {
            //insertar comentario
            $comentario=$_POST['comentario'];
            $sql="INSERT INTO t_comentarios(id_usuario, comentario) VALUES ('$id_usuario', '$comentario')";
            $conexion=mysqli_connect("localhost", "root", "", "foro");
            $resultados= mysqli_query($conexion, $sql);
            
        }
        $sql="SELECT t_usuarios.nombre, t_comentarios.comentario FROM t_usuarios INNER JOIN t_comentarios"
                . " ON t_usuarios.id=t_comentarios.id_usuario";
        $conexion=mysqli_connect("localhost", "root", "", "foro");
        $resultados= mysqli_query($conexion, $sql);
        while($row= mysqli_fetch_assoc($resultados))
        {
            echo "El usuario ".$row['nombre']." dijo:<br>";
            echo  $row['comentario']."<br><br><hr>" ;
            
        }
        
        ?>
        <form action="comentarios.php" method="POST">
            <textarea name="comentario"></textarea>
            <input type="submit" value="Enviar">
        </form>
    </body>
</html>
