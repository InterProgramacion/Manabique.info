<?php
//header('Content-Type: application/json');
$txtFechaAtraque = isset($_GET["txtFechaAtraque"]) ? $_GET["txtFechaAtraque"]: "2023-01-03";
//$txtFechaAtraque = $_POST['txtFechaAtraque'];
$txtAtracadero = isset($_GET['txtAtracadero']) ? $_GET["txtAtracadero"]: "sur";
//$txtAtracadero = $_POST['txtAtracadero'];
//$txtAtracadero = "prueba";

//$txtProaVita = $_POST['txtProaVita'];
$txtProaVita = isset($_GET['txtProaVita']) ? $_GET["txtAtracadero"]: "saf";
$txtPopaVita = isset($_GET['txtPopaVita']) ? $_GET["txtAtracadero"]: "fsa";
//$txtPopaVita = $_POST['txtPopaVita'];
$txtBuque  = isset($_GET['txtBuque']) ? $_GET["txtAtracadero"]: "5";
//$txtBuque = $_POST['txtBuque'];
$txtNaviera  = isset($_GET['txtNaviera']) ? $_GET["txtAtracadero"]: "2";
//$txtNaviera = $_POST['txtNaviera'];
$txtNoViaje = isset($_GET['txtNoViaje']) ? $_GET["txtAtracadero"]: "1";
//$txtNoViaje = $_POST['txtNoViaje'];
 

//echo json_encode($txtFechaAtraque);
$con=mysqli_connect("localhost:3307","root","12345","dbreportesmanabique");
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO buque_naviera(idreportes_buque, idreportes_naviera, fecha_atraque, proa_vita, popa_vita, atracadero, no_viaje) VALUES ('$txtBuque','$txtNaviera','$txtFechaAtraque','$txtProaVita','$txtPopaVita', '$txtAtracadero', '$txtNoViaje');";
// SELECT LAST_INSERT_ID();
$rs = mysqli_query($con, $sql);
if($rs)
{
    $SQLTABLA = "SELECT `idreportes_buque_naviera` FROM `buque_naviera` ORDER BY `idreportes_buque_naviera` DESC LIMIT 1";
    $resultado = mysqli_query($con, $SQLTABLA);
    if ($resultado) {
        //echo "FUNCIONÓ Y ENTROS"; 
        echo ('true');
        while ($fila = mysqli_fetch_assoc($resultado)) {
            $id = $fila['idreportes_buque_naviera'];
            //echo $id;
        }

        //Ahora inserto las navieras 
        $sqlNavieras = "INSERT INTO `linea_naviera`(`orden`, `hora`, `prefijo`, `numero`, `medida`, `posicion`, `estado`, `observaciones`, `otros_movimientos`, `id_linea_naviera`) VALUES ('[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]')";
       
       //echo $txtAtracadero;
    }
    //include("Reporte.php");
    //while ($valores = mysqli_fetch_array($SQLTABLA)) {
        //$id = $valores;
        //echo '<option value="'.$valores['idreportes_buque_naviera'].'">''</option>';
     //   echo  $valores["idreportes_buque_naviera"].'<br>';
    //}

    mysqli_close($con);
}
else{
    echo ('false');
}

//La tabla de navieras

//$Content = file_get_contents("Reporte.php");
                
///$DOM = new DOMDocument();
//$DOM->loadHTML($Content);
        
//$TablaContenedor = $DOM->getElementsByTagName('th');
//$ContenidoTabla = $DOM->getElementsByTagName('td');

//#Get header name of the table
//foreach($TablaContenedor as $NodeContenedor) 
//{
//        $aDataTableHeaderHTML[] = trim($NodeContenedor->textContent);
//}
//print_r($aDataTableHeaderHTML); die();

//?>
