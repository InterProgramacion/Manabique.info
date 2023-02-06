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
    <script src = 'Datos.js'></script>
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
  <!--<form method="post" onclick="Encabezado()">-->
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
<button class="button5 button6" type="button" id="boton1">Norte</button>
<button class="button5 button6" type="button" id="boton2">Sur</button>
<script src="Datos.js"></script>
      <!--<select name="txtAtracadero" id="txtAtracadero">
      <option value="Blanco"> </option>
        <option value="Norte">Norte</option>
        <option value="Sur">Sur</option>
      </select>
</div>
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
</form>
<div class ="bodyform">
      <table class ="table">
    <tr>
      <th class="text-center">Orden</th>
      <td class="text-center"> 
        <input name="txtOrden" id="txtOrden"/>
        <span class="validity"></span></td>
    </tr>
    <tr>
    <th class="text-center">Hora</th>
    <?php
$hora= getdate();
date_default_timezone_get();
$fecha = $hoy = date("h:i"); 
echo '<td><input name="txtHora" id="txtHora" type="time" value="'.$fecha.'"/> </td>';
?>
    </tr>
    <tr>
    <th class="text-center">Prefijo</th>
      <td class="text-center">
        <input name="txtPrefijo" id="txtPrefijo"/>
        <span class="validity"></span>
      </td>
    </tr>
    <tr>
    <th class="text-center">Número</th>
    <td class="text-center">
        <input name="txtNumero" id="txtNumero" type="number"/>
        <span class="validity"></span>
      </td>
    </tr>
    
    <tr>
    <th class="text-center">Medida</th>
    <td class="text-center">
      <button class="button5 button6"  type="button" id="boton20" >20</button>
      <button class="button5 button6" type="button" id="boton40" >40</button>
      <button class="button5 button6" type="button" id="boton45" >45</button>
      </td>
    </tr>
    
    <tr>
    <th class="text-center">Posición</th>
    <td class="text-center">
        <input name="txtPos" id="txtPos"/>
        <span class="validity"></span>
      </td>
    </tr>
    
    <tr>
    <th class="text-center">Estado</th>
    <td class="text-center">
      <button class="button5 button6" type="button" id="boton3" >Lleno</button>
      <button class="button5 button6" type="button" id="boton4" >Vacío</button>
      <script src="Datos.js"></script>
      </td>
    </tr>

    <tr>
    <th class="text-center">Observaciones</th>
    <td class="text-center">
      <input name="txtObservaciones" id="txtObservaciones"/>
      </td>
    </tr>
    <tr>
    <th class="text-center">Otros movimientos</th>
    <td class="text-center">
      <select name="txtOtrosMoviminetos " id="txtOtrosMoviminetos">
      <option value=""> </option>
        <option value="Tapadera">Tapadera</option>
        <option value="Reestiva">Restivas</option>
        <option value="Pin Box">Pin Box</option>
        <option value="Ahordo">Abordo</option>
        <option value="Temporales">Temporales</option>
        <option value="Contenedores">Contenedores</option>
      </select>
      </td>
    </tr>
    <tr>
    <td class="text-center">
      <button class="buttonSin" type="button" onclick="AgregarLista()"><img src="img/anadir.png" height="30px" width="35px"/></button>        
      </td>
    </tr>
      </table>
      
</div>
<!--<input class="button3 button4" action="subir.php" type="submit" name="submit" id="submit" value="Guardar" />-->
<input class="button3 button4"  onclick="Encabezado()" type="submit" name="submit" id="submit" value="Guardar" />

</div> 

<!--<template>-->
<div id="list" class ="bodyform">
<div>
  <table id="TablaContenedor" class ="tableAdd">
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
    </thead>
    <tbody id="ContenidoTabla">
    <tr>
      <!--<td>
      <button class="buttonSin" type="button"><img src="img/editar.png" height="25px" width="30px"/></button>
      </td>-->
      
    </tr>
    </tbody>
  </table>
</div>

</div>
<!--</template>-->
</body>
</html>