<?php
$servername="localhost:3307";
$username="root";
$pass="12345";
$dbname="dbreportesmanabique";
$filas= 0;
$entrar=false;
$UsuarioBD="";
$contraseñaBD="";
$arr = [];
$arrprueba = [];


$conexion=mysqli_connect($servername,$username,$pass,$dbname);

$usuario=$_POST['usuario'];
//$contraseña=$_POST['contraseña'];
$contraseña=$_POST['contraseña'];
$contraseña2=sha1($_POST['contraseña']);
session_start();
$_SESSION['usuario']=$usuario;

//$conexion=mysqli_connect("localhost:3307","root","12345","dbreportesmanabique");
$conexion=mysqli_connect($servername,$username,$pass,$dbname);

$consulta="SELECT * FROM manabique_usuario where Usuario ='$usuario' and Contraseña = SHA('$contraseña')";
$consulta3="SELECT `Usuario`,`Contraseña` FROM manabique_usuario where Usuario ='$usuario' and Contraseña = SHA('$contraseña')";
$consulta2= "SELECT * FROM manabique_usuario";

$resultado=mysqli_query($conexion,$consulta);
$resultado2=mysqli_query($conexion,$consulta2);
$array = mysqli_fetch_assoc($resultado);

//if ($array>0) {
  //echo "SIPUDO ENTRAR DESPUES DE VER EL QUERY";
  //echo "</br>";
//}
$sql = $conexion-> query("SELECT * FROM manabique_usuario where Usuario ='$usuario' and Contraseña = SHA('$contraseña')");
while ($row = mysqli_fetch_array($sql)) {
  $arr = $row;
  //echo "</br>";
    //echo "<td width=\"15%\"><font face=\"verdana\">" . 
	    //$row[0] . "</font></td>";
      //echo "---";
    //echo "<td width=\"15%\"><font face=\"verdana\">" . 
	    //$row[1] . "</font></td>";

      $arrprueba[0]= "PruebadeUsuario";
      $arrprueba[1]= "PruebadeContraseña";
      $UsuarioBD=$arr[1];
      $contraseñaBD=$arr[2];
      //echo "</br>";
      //echo "----------------------------------------------------";
      //echo $arr[0];
      //echo $arr[1];
      //echo "</br>";
      //echo $arrprueba[0];
      //echo $arrprueba[1];
}


//echo "</br>";
//echo "-----------------------------------------------------";
//echo $arr[0];
//echo $arr[1];
//echo "-----------------------------------------------------";
//echo "</br>";
//echo "</br>";
//echo "-----------------------------------------------------";
//echo $arrprueba[0];
//echo $arrprueba[1];
//echo "-----------------------------------------------------";
/*echo "</br>";
echo "ENTRO";
echo "</br>";
echo $usuario;
echo "</br>";
echo $UsuarioBD;
echo "</br>";
echo $contraseña2;
echo "</br>";
echo $contraseñaBD;
echo "</br>";
echo "TERMINO";
echo "</br>";*/
if ($usuario==$UsuarioBD && $contraseña2==$contraseñaBD) {
  //echo "TRUE";
  //echo "</br>";
  $entrar = true;
}

//if($conexion)
//{
  //echo "<h1> CONECTADO</h1>";
  //echo $usuario;
  //echo "     ";
  //echo $contraseña2;
  //echo "</br>";
 /* echo "</br>";
  echo "LO QUE ESTA DENTRO DE LA BASE DE DAOTS:";
  echo "</br>";
  while ($row = mysqli_fetch_array($resultado2)) {
    echo "</br>";
    echo "<td width=\"15%\"><font face=\"verdana\">" . 
	    $row[1] . "</font></td>";
      echo "---";
    echo "<td width=\"15%\"><font face=\"verdana\">" . 
	    $row[2] . "</font></td>";
}*/
//}
//else
//{
 // echo "<h1> NO CONECTADO 2</h1>";
  //$consulta="SELECT * FROM manabique_usuario";
  //$resultado=mysqli_query($conexion,$consulta);
  //echo $resultado;
//}

//if($filas){
  //header("location:Reporte.php");
  //include("index.php");
  //echo $filas;
//}

if($entrar){
    //header("location:Reporte.php");
    include("Reporte.php");
    //include("index.php");
    //echo $filas;
}else{
    include("index.php");
  ?>
  <h2 class="bad">ERROR</h2>
  <?php
}
//mysqli_free_result($resultado);
mysqli_close($conexion);