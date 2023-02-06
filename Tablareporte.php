<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/Construccion.css"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manabique</title>
    <meta http-equiv=”Expires” content=”0″>
    <meta http-equiv=”Last-Modified” content=”0″>
    <meta http-equiv=”Cache-Control” content=”no-cache, mustrevalidate”>
    <meta http-equiv=”Pragma” content=”no-cache”>
    <link rel="shortcut icon" href="img/MANABIQUE LOGISTICS.ico" type="image/x-icon">
    <?php
        $con = new mysqli("localhost:3307","root","12345","dbreportesmanabique");
    ?>
    <script>
    function myFunc()  {
        var now = new Date();
        var time = now.getHours() + ":" + now.getMinutes() + ":" + now.getSeconds();
        var hora = now.getHours() + ":" + now.getMinutes();
        document.getElementById('display-time').innerHTML = time;
    }
    setInterval(myFunc, 1000);
</script>
<p id="display-time"></p>
    <div>
        <prueba>
        <h1><img class="img-izquierda" src="img/MANABIQUE LOGISTICS.jpg" height="100px" width="150px">Reporte de Operaciones de Servicio a Contenedores</h1>
        </prueba>
    </div>
</head>
<body>

<div>
<form method="post" action="subir.php">
    <div class="formEnca">

    <div>
    <?php
$hoy = getdate();
$fecha = $hoy = date("Y-m-d"); 
echo '<label
>Fecha:
<input type="date" value="'.$fecha.'" name="txtFechaAtraque" required />
<span class="validity"></span>
</label>';
?>

<!--</div>
<br/>
<div><-->
<label for="lang">Atracadero: </label>
      <select name="txtAtracadero" id="txtAtracadero">
      <option value="Blanco"> </option>
        <option value="Norte">Norte</option>
        <option value="Sur">Sur</option>
      </select>
<!--</div>
<br/>
<div>-->
  <label
    >Proa en Vita:
    <input name="txtProaVita" required/>
    <span class="validity"></span>
  </label>
<!--</div>
<br/>
<div>-->
  <label
    >Popa en Vita:
    <input name="txtPopaVita" required/>
    <span class="validity"></span>
  </label>
</div>
<br/>
<div>
<label for="lang">Buque: </label>
      <select name="txtBuque" id="txtBuque">
      <option value="Blanco"> </option>
      <?php
        $sql = $con-> query("SELECT idreportes_buque, Nombre  FROM buque order by Nombre asc");
          while ($valores = mysqli_fetch_array($sql)) {
            echo '<option value="'.$valores['idreportes_buque'].'">'.$valores['Nombre'].'</option>';
            echo $valores['Nombre'];
        }
?>
      </select>
<!--</div>
<br/>
<div>-->
<label for="lang">Naviera: </label>
      <select name="txtNaviera" id="txtNaviera">
      <option value="Blanco"> </option>
      <?php
        $sql = $con-> query("SELECT idreportes_naviera, Nombre  FROM naviera order by Nombre asc");
          while ($valores = mysqli_fetch_array($sql)) {
            echo '<option value="'.$valores['idreportes_naviera'].'">'.$valores['Nombre'].'</option>';
            echo $valores['Nombre'];
        }
?>
      </select>
<!--</div>
<br/>
<div>-->
  <label
    >No. de Viaje:
    <input name="txtNoViaje" type="number" required/>
    <span class="validity"></span>
  </label>
</div>
</div>
<div class ="bodyform">
      <table>
      <thead>
    <tr>
      <th class="text-center">Orden</th>
      <th class="text-center">Hora</th>
      <th class="text-center">Prefijo</th>
      <th class="text-center">Número</th>
      <th class="text-center">Medida</th>
      <th class="text-center">Posición</th>
      <th class="text-center">Estado</th>
      <th class="text-center">Observaciones</th>
      <th class="text-center">Otros movimientos</th>
    </tr>
    <tr>
      <th class="text-center"> 
        <input name="txtOrden" required/>
        <span class="validity"></span></th>
      <th class="text-center">

<?php
$hora= getdate();
date_default_timezone_get();
$fecha = $hoy = date("h:i"); 
echo '
<input name="txtHora" type="time" value="'.$fecha.'" required/>';
?>

        <span class="validity"></span></th>
      <th class="text-center">
        <input name="txtPrefijo" required/>
        <span class="validity"></span>
      </th>
      <th class="text-center">
        <input name="txtNumero" type="number" required/>
        <span class="validity"></span>
      </th>
      <th class="text-center">
      <button class="button5 button6"  href="#" name="submit" id="submit" value="20" >20</button>
      <button class="button5 button6" href="#" name="submit" id="submit" value="40" >40</button>
      <button class="button5 button6" href="#" name="submit" id="submit" value="45" >45</button>
      </th>
      <th class="text-center">
        <input name="txtPos" required/>
        <span class="validity"></span>
      </th>
      <th class="text-center">
      <button class="button5 button6" id="boton1" value="Lleno">Lleno</button>
      <button class="button5 button6" id="boton2" value="Vacío">Vacío</button>
      <script type="text/javascript" src="Datos.js"></script>
      </th>
      <th class="text-center">
      <input name="txtObservaciones" required/>
      </th>
      <th class="text-center">
      <select name="txtAtracadero" id="txtAtracadero">
      <option value="Blanco"> </option>
        <option value="Tapadera">Tapadera</option>
        <option value="Reestiva">Reesivas</option>
        <option value="Pin Box">Pin Box</option>
        <option value="Ahordo">Abordo</option>
        <option value="Temporales">Temporales</option>
        <option value="Reestiva">Contenedores</option>
      </select>
      </th>
      <th class="text-center">
      <button class="buttonSin" type="submit"><img src="img/anadir.png" height="30px" width="35px"/></button>        
      </th>
    </tr>
      </thead>
      </table>
</div>
<input class="button3 button4" type="submit" name="submit" id="submit" value="Guardar" />

</form>
</div> 
<div class ="bodyform">
    <p>
    <table>
      <thead>
    <tr>
      <th class="text-center">Orden</th>
      <th class="text-center">Hora</th>
      <th class="text-center">Prefijo</th>
      <th class="text-center">Número</th>
      <th class="text-center">Medida</th>
      <th class="text-center">Posición</th>
      <th class="text-center">Estado</th>
      <th class="text-center">Observaciones</th>
      <th class="text-center">Otros movimientos</th>
    </tr>
    <tr>
    <td class="text-center">001</td>
      <td class="text-center">15:39</td>
      <td class="text-center">ejem</td>
      <td class="text-center">1</td>
      <td class="text-center">20</td>
      <td class="text-center">x</td>
      <td class="text-center">Lleno</td>
      <td class="text-center">ninguna</td>
      <td class="text-center"></td>
    </tr>
    <tr>
    <td class="text-center">002</td>
      <td class="text-center">12:20</td>
      <td class="text-center">ejem</td>
      <td class="text-center">2</td>
      <td class="text-center">20</td>
      <td class="text-center">y</td>
      <td class="text-center">Lleno</td>
      <td class="text-center">ninguna</td>
      <td class="text-center">Tapadera</td>
    </tr>
    </thead>
    </table>
</p>
</div>
</body>
</html>