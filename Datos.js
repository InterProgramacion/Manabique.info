var Medida="", Estado="", Atracadero=""; 

//BOTONES DE OPCION DE ATRACADERO: Norte o Sur
var boton1 = document.getElementById("boton1");
var boton2 = document.getElementById("boton2");

if (boton1) {
   document.getElementById('boton1').addEventListener("click", function(){
  
      if(boton2.classList.contains("active")){
         boton2.classList.remove("active");
      }
     
      if(!boton1.classList.contains("active")){
         boton1.classList.toggle("active");
         Atracadero = "Norte";
      }
     
   });
}

if (boton2) {
   document.getElementById('boton2').addEventListener("click", function(){
  
      if(boton1.classList.contains("active")){
         boton1.classList.remove("active");
      }
      
      if(!boton2.classList.contains("active")){
         boton2.classList.toggle("active");
         Atracadero = "Sur";
      }
     
   });
}

function captura(){
    var Orden = document.getElementById("txtHora");
}

//BOTONES DE OPCION DE ESTADO: Lleno o Vacío
    var boton3 = document.getElementById("boton3");
    var boton4 = document.getElementById("boton4");
    
    if (boton3) {
      document.getElementById('boton3').addEventListener("click", function(){
      
         if(boton4.classList.contains("active")){
            boton4.classList.remove("active");
         }
        
         if(!boton3.classList.contains("active")){
            boton3.classList.toggle("active");
            Estado = "Lleno";
         }
        
      });
    }

    if (boton4) {
      document.getElementById('boton4').addEventListener("click", function(){
      
         if(boton3.classList.contains("active")){
            boton3.classList.remove("active");
         }
         
         if(!boton4.classList.contains("active")){
            boton4.classList.toggle("active");
            Estado = "Vacío";
         }
        
      });
    }
    
//BOTONES DE OPCION DE MEDIDA: 20 o 40 o 45
   var boton20 = document.getElementById("boton20");
   var boton40 = document.getElementById("boton40");
   var boton45 = document.getElementById("boton45");

   if (boton20) {
      document.getElementById('boton20').addEventListener("click", function(){
     
         if(boton40.classList.contains("active")){
            boton40.classList.remove("active");
         }
        
         if(!boton20.classList.contains("active")){
            boton20.classList.toggle("active");
            Medida = 20;
         }
      
         if(boton45.classList.contains("active")){
            boton45.classList.remove("active");
       }
        
      });
   }
   
if (boton40) {
   document.getElementById('boton40').addEventListener("click", function(){
     
      if(boton20.classList.contains("active")){
         boton20.classList.remove("active");
      }
      
      if(!boton40.classList.contains("active")){
         boton40.classList.toggle("active");
         Medida = 40;
      }
      
      if(boton45.classList.contains("active")){
         boton45.classList.remove("active");
    }
   });
}

   if (boton45) {
      document.getElementById('boton45').addEventListener("click", function(){
     
         if(!boton45.classList.contains("active")){
           boton45.classList.toggle("active");
           Medida = 45;
         }
         
         if(boton40.classList.contains("active")){
           boton40.classList.remove("active");
         }
         
         if(boton20.classList.contains("active")){
           boton20.classList.remove("active");
       }
      });
   }

   

function Limpiar(){
   document.getElementById('txtOrden').value = "";
   document.getElementById('txtHora').value = "";
   document.getElementById('txtPrefijo').value = "";
   document.getElementById('txtNumero').value = "";
   document.getElementById('txtPos').value = "";
   document.getElementById('txtObservaciones').value = "";
   document.getElementById('txtOtrosMoviminetos').value = "";
   Medida="", Estado="";
   boton20.classList.remove("active");
   boton40.classList.remove("active");
   boton45.classList.remove("active");
   boton3.classList.remove("active");
   boton4.classList.remove("active");
}



   function AgregarLista(){

   var Orden = document.getElementById('txtOrden').value;
   if (Orden != "") {
      //alert(Orden);
      var Hora = document.getElementById('txtHora').value;
      if (Hora != "") {
         //alert(Hora);
         var Prefijo = document.getElementById('txtPrefijo').value;
         if (Prefijo != "") {
            //alert(Prefijo);
            var Numero = document.getElementById('txtNumero').value;
            if (Numero != "") {
               //alert(Numero);
               if (Medida != "") {
                  //alert(Medida);
                  var Posicion = document.getElementById('txtPos').value;
                  if (Posicion != "") {
                     //alert(Posicion);
                     if (Estado != "") {
                        //alert(Estado);
                        //ACA TENGO QUE HACER QUE SE CARGUE EN UNA LISTA Y SE MUESTRE EN PANTALLA
                        var Observaciones = document.getElementById('txtObservaciones').value;
                        var OtrosMovimientos = document.getElementById('txtOtrosMoviminetos').value;

                        var name_table = document.getElementById('TablaContenedor');   
                        var row = name_table.insertRow();
                        var cell1 = row.insertCell(0);
                        var cell2 = row.insertCell(1);  
                        var cell3 = row.insertCell(2);  
                        var cell4 = row.insertCell(3);  
                        var cell5 = row.insertCell(4);  
                        var cell6 = row.insertCell(5);  
                        var cell7 = row.insertCell(6);  
                        var cell8 = row.insertCell(7);  
                        var cell9 = row.insertCell(8);  
                        var cell10 = row.insertCell(9);

                        cell1.innerHTML = '<td name="orden[]" class="non-margin">' + Orden + ' </td>';
                        cell2.innerHTML = '<td name="hora[]" class="non-margin">' + Hora + ' </td>';
                        cell3.innerHTML = '<td name="prefijo[]" class="non-margin">' + Prefijo + ' </td>';
                        cell4.innerHTML = '<td name="numero[]" class="non-margin">' + Numero + ' </td>';
                        cell5.innerHTML = '<td name="medida[]" class="non-margin">' + Medida + ' </td>';
                        cell6.innerHTML = '<td name="posicion[]" class="non-margin">' + Posicion + ' </td>';
                        cell7.innerHTML = '<td name="estado[]" class="non-margin">' + Estado + ' </td>';
                        cell8.innerHTML = '<td name="observaciones[]" class="non-margin">' + Observaciones + ' </td>';
                        cell9.innerHTML = '<td name="otrosmovimientos[]" class="non-margin">' + OtrosMovimientos + ' </td>';
                        cell10.innerHTML = '<td><button class="buttonSin" onclick="Eliminar()" type="button"><img src="img/delete.png" height="25px" width="30px"/></button></td>';

                        alert("Se agrego correctamante.");
                        Limpiar();

                     } else {
                        alert("ERROR: Debe seleccionar el Estado");
                     }
                  } else {
                     alert("ERROR: Debe ingresar la Posicion");
                  }
               } else {
                  alert("ERROR: Debe seleccionar la Medida");
               }
            } else {
               alert("ERROR: Debe ingresar el Número");
            }
         } else {
            alert("ERROR: Debe ingresar el Prefijo");
         }
      } else {
         alert("ERROR: Debe ingresar la Hora");
      }
   } else {
      alert("ERROR: Debe ingresar la Orden");
   }

    }

    function Encabezado2(){
      var txtFechaAtraque = document.getElementById('txtFechaAtraque').value;
      if (txtFechaAtraque != "") {
         if (Atracadero != "") {
            var txtProaVita = document.getElementById('txtProaVita').value;
            if (txtProaVita != "") {
               var txtPopaVita = document.getElementById('txtPopaVita').value;
               if (txtPopaVita != "") {
                  var txtBuque = document.getElementById('txtBuque').value;
                  if (txtBuque != "") {
                     var txtNaviera = document.getElementById('txtNaviera').value;
                     if (txtNaviera) {
                     var txtNoViaje = document.getElementById('txtNoViaje').value;
                     if (txtNoViaje) {
                        
                        const data = new URLSearchParams();
                        var formulario = new FormData();
                        formulario.append('txtFechaAtraque',txtFechaAtraque);
                        formulario.append('txtAtracadero',Atracadero);
                        formulario.append('txtProaVita',txtProaVita);
                        formulario.append('txtPopaVita',txtPopaVita);
                        formulario.append('txtBuque',txtBuque);
                        formulario.append('txtNaviera',txtNaviera);
                        formulario.append('txtNoViaje',txtNoViaje);
                        formulario.append("Ejempñlo", "valor ejemplo");

                     
                        var request;

                        for (let index of formulario.entries()) {
                           console.log(index[0] + ': ' + index[1]);
                        }
                        
                        const jsonData =JSON.stringify(formulario);


                        request = $.ajax({
                           type: 'post',
                           url: 'subir.php',
                           async: true,
                           data:{
                              txtFechaAtraque: txtFechaAtraque,
                              txtAtracadero: Atracadero,
                              txtProaVita: txtProaVita,
                              txtPopaVita: txtPopaVita,
                              txtBuque: txtBuque,
                              txtNaviera: txtNaviera,
                              txtNoViaje: txtNoViaje
                           }
                        })

                        request.done(function (response, textStatus, jqXHR){
                           // Log a message to the console
                           console.log("Hooray, it worked!");
                       });

                       request.fail(function (jqXHR, textStatus, errorThrown){
                        // Log the error to the console
                        console.error(
                            "The following error occurred: "+
                            textStatus, errorThrown
                        );
                        request.always(function () {
                           // Reenable the inputs
                           $inputs.prop("disabled", false);
                       });
                    });
                        //fetch('subir.php', {
                           //method: 'POST',
                           //headers: {'Content-Type': 'application/json'}, 
                          // body: jsonData
                        //})
                        //.then(res => res.json())
                        //.then(data => {
                           //if (data == 'true') {
                             //alert("Se ingreso correctamente");
                           //}
                           //else{
                              //console.log(data);
                            //  alert("No se ingreso el reporte");
                          // }
                        //})

                        alert("Termino prueba");

                     } else {
                        alert("ERROR: Debe ingresar el No. de viaje");
                     }
                     }
                     else{
                        alert("ERROR: Debe seleccionar la Naviera");
                     }
                  } else {
                     alert("ERROR: Debe seleccionar el Buque");
                  }
               } else {
                  alert("ERROR: Debe ingresar Popa en Vita");
               }
            } else {
               alert("ERROR: Debe ingresar Proa en Vita");
            }
         } else {
            alert("ERROR: Debe seleccionar Atracadero");
       }
      }else{
         alert("ERROR: Debe ingresar Fecha");
      }
      
   }

   /*
   
   
   */

    function Encabezado(){
      alert("Entro a la funcion Encabezado");
      var PruebaVarieble = Atracadero;
      alert("Entro a la funcion");
      if (PruebaVarieble != "") {
         alert("Que lindo ");
         var Numero = document.getElementById('txtFechaAtraque').value;
      }
       alert("Que enojo ");
       /* document.getElementById('formulario').addEventListener('submit', function(e){
         alert("Entro 1");
         e.preventDefault();

         let formulario = new FormData(document.getElementById('formulario'));

         fetch('subir.php', {
         method: 'POST',
         body: formulario
      })
      .then(res => res.json())
      .then(data => {
         if (data == 'true') {
            document.getElementById('txtFechaAtraque').value = '';
            document.getElementById('txtProaVita').value = '';
            document.getElementById('txtPopaVita').value = '';
            document.getElementById('txtBuque').value = '';
            document.getElementById('txtNaviera').value = '';
            document.getElementById('txtNoViaje').value = '';
            document.getElementById('txtAtracadero').value = Atracadero;
            alert('Se insertó correctamente');
         }else{
            console.log(data);
            alert("Entro 2");
            console.log("Entro 2");
         }
      })

}); */
         
alert("TERMINO");
}
      //var mysql = require('mysql');
      //var conexion= mysql.createConnection({
        // host : 'localhost:3307',
         //database : 'dbreportesmanabique',
         //user : 'root',
         //password : '12345',
      //});

      //conexion.connect(function(err) {
        // if (err) {
          //   alert("error");
         //}
         //alert("se conecto");
     //});
      //var FechaAtraque = document.getElementById('txtFechaAtraque').value;
      //aca va tambien el atracadero, que en este caso es el primero
      //var ProaVita = document.getElementById('txtProaVita').value;
      //var PopaVita = document.getElementById('txtPopaVita').value;
      //var Buque = document.getElementById('txtBuque').value;
      //var Naviera = document.getElementById('txtNaviera').value;
      //var NoViaje = document.getElementById('txtNoViaje').value;
 


   function ListaNavieras(){
      var name_table = document.getElementById('TablaContenedor')[0];   
      alert("Entro a la funcion");
   }

function Eliminar(){
   alert("Se eliminó el registro correctamente");
   var name_table = document.getElementById('TablaContenedor');   
  name_table.addEventListener("click", function(e){
   //console.log(e);
   //console.log("Entro a eliminar fila");
   //console.log(e.target.parentNode.parentNode.parentNode);
   //console.log(e.target.parentNode.parentNode.parentNode.rowIndex);
   const tIndex = e.target.parentNode.parentNode.parentNode.rowIndex;
   console.log(tIndex);
   if (tIndex > -1) {
      document.getElementById("TablaContenedor").deleteRow(tIndex);
   }
   //name_table.deleteRow(tIndex);
   //var r = (this).closest('tr').remove();
});
}


    function Agregar() {
      
      let div = document.createElement("div");
      let p = document.createElement("td");
      let hora = document.createElement("td");
      //let bTotal = document.createElement("b");

      p.innerHTML = txtOrden.value;
      hora.innerHTML = txtHora.value;
      //p.appendChild(bTotal);
      div.appendChild(p);
      div.appendChild(hora);
      list.appendChild(div);

      //let TransactionTableRef = document.getElementById("TablaContenedor");
      //let NewTransactionRow = TransactionTableRef.insertrow(-1);

      //let newTypeCellRef = NewTransactionRow.insertCell(0);
      //newTypeCellRef.textContent = txtOrden.value;

      //newTypeCellRef = NewTransactionRow.insertCell(1);
      //newTypeCellRef.textContent = txtOrden.value;

      //newTypeCellRef = NewTransactionRow.insertCell(2);
      //newTypeCellRef.textContent = txtOrden.value;

      //newTypeCellRef = NewTransactionRow.insertCell(3);
      //newTypeCellRef.textContent = txtOrden.value;

      alert("Se agrego correctamante.");
    }



