<?php
$usuario=$_POST['usuario'];
$password=$_POST['password'];
$sql="SELECT id FROM t_usuarios WHERE nombre='$usuario' AND password='$password'";
echo $sql;
$conexion= mysqli_connect("localhost", "root", "", "foro");

if ($conexion)
{
    //Lanzar sql
    $resultados=mysqli_query($conexion, $sql);
    $array= mysqli_fetch_array($resultados);
    $usuario_correcto=false;
    $numero_resultados=mysqli_num_rows($resultados);
    if ($numero_resultados>0)
    {   $id=$array['id'];     
        session_start();
        $_SESSION['usuario']=$usuario;
        $_SESSION['id']=$id;
        header("location: comentarios.php");
    }
    else 

    {
        echo "No hay resultados";
    }
}
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

