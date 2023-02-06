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
    <label
    >Fecha:
    <input type="date" name="txtFechaAtraque" required pattern="\d{4}-\d{2}-\d{2}" />
    <span class="validity"></span>
  </label>
<!--</div>
<br/>
<div><-->
<label for="lang">Atracadero: </label>
<input class="button5 button6"  href="#" type="submit" name="submit" id="submit" value="Norte" />
<input class="button5 button6" type="submit" name="submit" id="submit" value="Sur" />



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
    <input name="txtNoViaje" required/>
    <span class="validity"></span>
  </label>
</div>
</div>
<div class ="bodyform">
    <p>
        ACA VA A IR TODO LO DEL OTRO (TABLA)
</p>
</div>
<input class="button3 button4" type="submit" name="submit" id="submit" value="Guardar" />

</form>
</div>
    
</body>



</html>