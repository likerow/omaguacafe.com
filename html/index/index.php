<html>
<head>

  <script src="views/boo/js/jquery.min.js"></script>
     <link rel="stylesheet" href="views/boo/css/bootstrap.min.css"/>

      <link href="views/otros/agency.css" rel="stylesheet" />


    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" /><link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css" /><link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" /><link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />



</head>
<body>



    <div  id="portfolioSaladBar" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">


          <center>  <div class="container">


                <div class="row">

                <center>      <div class="col-lg-8 col-lg-offset-2">

                        <div class="modal-body">

                          <div >

                          <div id="_AJAX_CUERPO_">
                            <!-- Project Details Go Here -->
<h3>Arma tu ensalada</h3>

<?php
 $fechaactual = getdate();
  $hoy=$fechaactual['wday'];
    $validahora='';
    $validadia='';
if($hoy==6 || $hoy==0){
  echo'<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>ATENCIÓN</h4>
  <p>Los pedidos se realizan de lunes a viernes</a>.</p>
  </div>';
  $validadia='no';
}

if(($fechaactual["hours"]==11 && $fechaactual["minutes"]>30) || $fechaactual["hours"]>=12 ){
  echo'<div class="alert alert-dismissible alert-warning">
  <button type="button" class="close" data-dismiss="alert">&times;</button>
  <h4>ATENCIÓN</h4>
  <p>Los pedidos se realizan antes de las 11:30</a>.</p>
  </div>';
  $validahora='no';
}


?>
                            <p class="item-intro text-muted">Todas las ensaladas van acompañadas del refresco</p>









<h4>Eleccion rápida </h4>
<div class="  btn-group" data-toggle="buttons">

  <div class="row">
                        <div class=" col-md-12">
                                <label class="btn btn-selected ">
                                <p class="item-intro"><input type="checkbox" id="rbtnSBPalta" name="rbtnSBPalta" onClick="godelDia()" value='ensalada_del_dia' >Ensalada del dia
                                </p></label></div>

</div>
<script>
$(document).ready(function(){
  $("#ensaladas").hide();
  $("#rbtnSBPalta").click(function() {
        if($("#rbtnSBPalta").is(':checked')) {
          $("#ensaladas").show();
            document.getElementById("precio").innerHTML="S/. 12,00";
        } else {
            $("#ensaladas").hide();
        document.getElementById("precio").innerHTML='';
        }
    });

});
</script>
<div id='CUERPO_0'>
<h4>Bases</h4>

<div class="  btn-group" data-toggle="buttons">
  <form name="formbase">
  <div class=" col-md-4 ">
  <label class="btn btn-selected ">
  <p class="item-intro"><input type="checkbox" name="GrupoBase[]" id="ensalada" autocomplete="off" value="Frescas(lechuga, tomate,pepinillo)" > Frescas<br>(lechuga, tomate,<br>pepinillo)
  </p></label></div>

  <div class=" col-md-4 ">
  <label class="btn btn-selected ">
  <p class="item-intro"><input type="checkbox" name="GrupoBase[]" id="cocidas" autocomplete="off" value=" Cocidas" > Cocidas
  </p></label></div>


    <?php



    if($hoy==3 || $hoy==1){
    echo'<div class=" col-md-4 ">
    <label class="btn btn-selected ">
    <p class="item-intro"><input type="checkbox" name="GrupoBase[]" id="rbtnFideos" autocomplete="off" value=" Fideos" > Fideos
    </p></label></div>';
}
    if($hoy==2 || $hoy==4){
    echo'  <div class=" col-md-4 ">
  <label class="btn btn-selected ">
  <p class="item-intro"><input type="checkbox" name="GrupoBase[]" id="rbtnSolterito" autocomplete="off" value="Solterito" >Solterito
  </span></p></label></div>';

}
 ?>

</form>

</div>

<div id="_OTROS_">



<h4>Carbohidratos</h4>
<div class="  btn-group" data-toggle="buttons">
  <div class=" col-md-4 ">
  <label class="btn btn-selected ">
  <p class="item-intro"><input type="checkbox" name="GrupoCarbohidratos[]" id="checkPapa" autocomplete="off" value="Papa Cocktail" > Papa Cocktail
  </p></label></div>

  <div class=" col-md-4 ">
  <label class="btn btn-selected ">
  <p class="item-intro"><input type="checkbox" name="GrupoCarbohidratos[]" id="checkCamote" autocomplete="off" value=" Camote" > Camote
  </p></label></div>
  <div class=" col-md-4 ">
  <label class="btn btn-selected ">
  <p class="item-intro"><input type="checkbox" name="GrupoCarbohidratos[]" id="checkArroz" autocomplete="off" value=" Arroz integral" > Arroz integral
  </p></label></div>

</div>

<p class="text-radioButton text-titulo"></p>
<h4>Complementos</h4>
<div class="  btn-group" data-toggle="buttons">
  <div class=" col-md-4 ">
  <label class="btn btn-selected ">
  <p class="item-intro"><input type="checkbox" name="GrupoComplementos[]" id="checkPapa" autocomplete="off" value="Brócoli" > Brócoli
  </p></label></div>

  <div class=" col-md-4 ">
  <label class="btn btn-selected ">
  <p class="item-intro"><input type="checkbox" name="GrupoComplementos[]" id="checkCamote" autocomplete="off" value=" Beterraga" > Beterraga
  </p></label></div>
  <div class=" col-md-4 ">
  <label class="btn btn-selected ">
  <p class="item-intro"><input type="checkbox" name="GrupoComplementos[]" id="checkArroz" autocomplete="off" value="Palta" > Palta
  </p></label></div>

</div>


                             <p class="text-radioButton text-titulo"></p>
                             <h4>Proteínas</h4>
                             <div class="btn-group" data-toggle="buttons">
                                 <div class=" col-md-6">
                               <label class="btn btn-selected ">
                                 <p class="item-intro"><input type="radio" name="GrupoProteina"  id="atun" value="Atun" autocomplete="off" > Atún(Conserva)
                               </p></label></div>
                               <div class=" col-md-6 ">
                             <label class="btn btn-selected ">
                               <p class="item-intro"><input type="radio" name="GrupoProteina" id="pollo" autocomplete="off" value="Pollo a la plancha" > Pollo a la plancha
                             </p></label></div>


                             </div>


                             <p class="text-radioButton text-titulo"></p>
<h4>Adicional (+S/. 1,00)</H4>
                             <div class="  btn-group" data-toggle="buttons">
                               <div class=" col-md-6 ">
                               <label class="btn btn-selected ">
                               <p class="item-intro"><input type="checkbox" name="GrupoAdicional[]" id="checkHuevo" autocomplete="off" value="Huevo" > Huevo
                               </p></label></div>

                               <div class=" col-md-6 ">
                               <label class="btn btn-selected ">
                               <p class="item-intro"><input type="checkbox" name="GrupoAdicional[]" id="checkQueso" autocomplete="off" value="Queso fresco" >  Queso Fresco
                               </p></label></div>



                             </div>
                             <script>
                             $(document).ready(function(){
                                  $("#atun").click(function() {
                                     if($("#atun").is(':checked')) {
                                         document.getElementById("precio").innerHTML="S/. 11,00";
  }
                                 });

                             });

                             $(document).ready(function(){
                                  $("#pollo").click(function() {
                                     if($("#pollo").is(':checked')) {
                                         document.getElementById("precio").innerHTML="S/. 9,00";
                                     }
                                 });

                             });


                             $(document).ready(function(){
                                  $("#checkQueso").click(function() {
                                     if($("#checkQueso").is(':checked')) {
                                         document.getElementById("_+precio1").innerHTML="+ S/. 1,00";
                                       }else{
                                         document.getElementById("_+precio1").innerHTML="";
                                       }
                                 });

                             });
                             $(document).ready(function(){
                                  $("#checkHuevo").click(function() {
                                     if($("#checkHuevo").is(':checked')) {
                                         document.getElementById("_+precio0").innerHTML="+ S/. 1,00";
                                       }else{
                                         document.getElementById("_+precio0").innerHTML="";
                                       }
                                 });

                             });

                             </script>


                             <p class="text-radioButton text-titulo"></p>
<h4>Vinagretas</h4>
                             <div class="  btn-group" data-toggle="buttons">
                               <div class=" col-md-4 ">
                               <label class="btn btn-selected ">
                               <p class="item-intro"><input type="checkbox" name="GrupoVinagretas[]" id="checkPapa" autocomplete="off" value="Limon" > Limón
                               </p></label></div>

                               <div class=" col-md-4 ">
                               <label class="btn btn-selected ">
                               <p class="item-intro"><input type="checkbox" name="GrupoVinagretas[]" id="checkCamote" autocomplete="off" value="vinagreta" > Vinagreta
                               </p></label></div>
                               <div class=" col-md-4 ">
                               <label class="btn btn-selected ">
                               <p class="item-intro"><input type="checkbox" name="GrupoVinagretas[]" id="checkArroz" autocomplete="off" value=" Ají omagua" > Ají omagua
                               </p></label></div>


                             </div>




</div>

</div>

<div id='ensaladas'>
<?php
if($hoy==3){
  echo '<div class="btn-group" data-toggle="buttons" >
  <p class="text-radioButton text-titulo"> </p>
  <div class="col-md-6">
    <img src="views/app/imagenes/miercoles.jpg" class="img-responsive" >
  </div>
  <div class="col-md-6" i>
  <label for="ejemplo_email_1">SIEMPRE BABY<br> <br> - Tupuras acompañadas de espinaca <br> - Manzana <br> - Tomate<br> - Zanahora <br> - Palta<br> - Pimiento con pecana acaramelados <br> - Vinagreta de maracuyá</label>
  </div>
  </div>';
}else if($hoy==4){
  echo'<div class="btn-group" data-toggle="buttons" >
  <p class="text-radioButton text-titulo"> </p>
  <div class="col-md-6">
    <img src="views/app/imagenes/jueves.jpg" class=" img-responsive">
  </div>
  <div class="col-md-6">
  <label for="ejemplo_email_1">PURA VIDA<br> <br> - Berenjena <br> - Zuccini <br> - Vainitas<br> - Espárragos <br> - Shitake <br> - Pimientos frescos, tomate , alcahofa y mix de lechugas <br> - Reduccion de vino y chimicurri</label>
  </div>
  </div>';
}else if($hoy==5){
  echo'<div class="btn-group" data-toggle="buttons" >
  <p class="text-radioButton text-titulo"> </p>
  <div class="col-md-6">
    <img src="views/app/imagenes/viernes.jpg" class="img-responsive" >
  </div>
  <div class="col-md-6">
  <label for="ejemplo_email_1">ORIENTAL<br> <br> - Mix de lechugas <br> - Zanahoria <br> - Pimientos<br> - Pepinillo <br> - Mango <br> - Frejol chino acompañado de pechuga<br> plancha en salsa orienta <br> - Vinagreta de Rocoto</label>
  </div>
  </div>';
}else if($hoy==1){
  echo'<div class="btn-group" data-toggle="buttons" >
  <p class="text-radioButton text-titulo"> </p>
  <div class="col-md-6">
    <img src="views/app/imagenes/lunes.jpg" class="img-responsive" >
  </div>

  <div class="col-md-6">
  <label for="ejemplo_email_1">MANCOREÑA<br> <br> - Mix de lechugas <br> - Tomate <br> - Papa<br> - Vainitas <br> - Aceitunas <br> - Cebolla acompañado de atún <br> - Vinagreta de alcaparra</label>
  </div>
  </div>';
}else if($hoy==2){
  echo'<div class="btn-group" data-toggle="buttons" >
  <p class="text-radioButton text-titulo"> </p>
  <div class="col-md-6">
    <img src="views/app/imagenes/martes.jpg" class="img-responsive">
  </div>

  <div class="col-md-6">
  <label for="ejemplo_email_1">OMAGUA CLÁSICA<br> <br> - Mix de lechugas <br> - Jamón inglés <br> - Pechuga a la plancha<br> - Queso fresco <br> - Zanahoria <br> - Cebolla, pimiento, tomate, aceituna y huevo <br> - Vinagreta Parmesana</label>
  </div>
  </div>';
}
?>
</div>



<h3>DATOS</h3>
                             <div class="form-group">

                             <label for="ejemplo_email_1"> Nombre</label>
                             <input type="email" class="form-control" id="nombre"
                                    placeholder="Introduce tu nombre" value=<?php if(isset($_COOKIE['nombreOmagua'])){echo$_COOKIE['nombreOmagua'];}?> >

                                           <label for="ejemplo_email_1"> Introducir número de Whatsapp</label>
                                           <input type="email" class="form-control" id="Whatsapp"
                                                  placeholder="Introduce tu numero de telefono" value=<?php if(isset($_COOKIE['telefonoOmagua'])){echo$_COOKIE['telefonoOmagua'];}?> >
<br>
                                                  <label for="ejemplo_email_1">Forma de entrega :                 </label>
                                                  <label class="radio-inline" ><input type="radio"  class="forma" id="Recoger" name="tipoentrega" value="Recoger" >Recoger</label>
                                                  <label class="radio-inline"><input type="radio"  class="forma" id="Delivery" name="tipoentrega" value="Delivery">Delivery</label><br>
<br>
                                                  <div id="_ENTREGA_"></div>

                                                  <script>



                                                    $(document).ready(function(){
$("#delivery").hide();$("#recojo").hide();
        $("#Recoger").click(function() {
            if($("#Recoger").is(':checked')) {
                  $("#recojo").show();
                    $("#delivery").hide();
            }
        });

    });

    $(document).ready(function(){
$("#Delivery").click(function() {
if($("#Delivery").is(':checked')) {
$("#delivery").show();
$("#recojo").hide();
}
});

});


                                                  </script>
<div id='recojo'>
  <label for="ejemplo_email_1"> Hora aproximada de recojo</label>
                                    <input type="email" class="form-control" id="hora_aprox" placeholder="Hora"  valu=<?php if(isset($_COOKIE['hora_aproxOmagua'])){echo$_COOKIE['hora_aproxOmagua'];}?>>
</div>
<div id='delivery'>
  <label for="ejemplo_email_1">Hora de entrega :                 </label>
  <label class="radio-inline"><input type="radio" name="hora_deli" value="12:00 ">12:00 </label>
  <label class="radio-inline"><input type="radio" name="hora_deli" value="12:30 ">12:30</label>
  <label class="radio-inline"><input type="radio" name="hora_deli" value="1:00 ">1:00</label><br>
  <label for="ejemplo_email_1"> Dirección :</label>
  <input type="email" class="form-control" id="direccion"
  placeholder="Dirección" value=<?php if(isset($_COOKIE['direccionOmagua'])){echo$_COOKIE['direccionOmagua'];}?> >
   <label for="ejemplo_email_1"> Empresa</label>
    <input type="email" class="form-control" id="empresa"
    placeholder="Empresa"  value=<?php if(isset($_COOKIE['empresaOmagua'])){echo$_COOKIE['empresaOmagua'];}?>>
     <label for="ejemplo_email_1"> Oficina</label>
   <input type="email" class="form-control" id="oficina"
      placeholder="Oficina" value=<?php if(isset($_COOKIE['oficinaOmagua'])){echo$_COOKIE['oficinaOmagua'];}?>>

</div>
                                                  <br><label > Precio total : <div id="precio"></div><div id="_+precio0"></div><div id="_+precio1"></div></label><br>

                                                  <label > Monto con el que se pagará</label>
                                                  <input type="email" class="form-control" id="monto"
                                                    placeholder="Ingrese el monto con que se pagara" >







                             </div>
                             <div id="_AJAX_VALIDACIONES_">

                             </div>


<?php
if($validadia!='no' && $validahora!='no'){
  echo'  <center>   <input   type="submit"  value="ENVIAR PEDIDO" onclick="goValidaciones()" class="btn btn-primary btn-lg" /></center>
';
}else{
  echo'<br>';
  
}

?>

</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</center>
</div>

</div>

<script src="views/app/js/validaciones.js"></script>
<script src="views/app/js/validacionesRapida.js"></script>





</body>
</html>
