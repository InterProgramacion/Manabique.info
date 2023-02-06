<?php
$servername="localhost";
$username="manabique_root";
$pass="12345*";
$dbname="manabique_DBreportesmanabique";

$conn=mysqli_connect($servername,$username,$pass,$dbname);

if($conn)
{
  echo "<h1> CONECTADO</h1>";
}
else
{
  echo "<h1> NO CONECTADO</h1>";
}
?>
<!--
?php
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

//$conexion=mysqli_connect("localhost:3307","root","12345","dbreportesmanabique");
$conexion=mysqli_connect("localhost:3306","root","12345","Manabique_DBreportesmanabique");

$consulta="SELECT * FROM manabique_usuario where Usuario ='$usuario' and Contraseña = SHA('$contraseña')";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:Reporte.php");

}else{
    include("index.php");
  ?>
  <h2 class="bad">ERROR</h2>
  ?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
-->
