<html>
<head>


     <link rel="stylesheet" href="views/boo/css/bootstrap.min.css">

      <link href="views/otros/agency.css" rel="stylesheet" />
  <link href="views/fonts/font-awesome.min.css" rel="stylesheet" />

      <script src="views/boo/js/jquery.min.js"></script>

    <script src="views/boo/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" /><link href="https://fonts.googleapis.com/css?family=Kaushan+Script" rel="stylesheet" type="text/css" /><link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" /><link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />



</head>
<body>


                             <!-- Portfolio Modal PedidoSaladBar -->
    <div  id="portfolioSaladBar" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-content">


            <div class="container">


                <div class="row">

                    <div class="col-lg-8 col-lg-offset-2">

                        <div class="modal-body">

                          <div id="updSaladBar">

                          <div id="_AJAX_CUERPO_">
                            <!-- Project Details Go Here -->
                            <h3>Arma tu ensalada<h3>

                            <p class="item-intro text-muted">Todas las ensaladas van acompañadas del refresco</p>









<h4>Eleccion rapida </h4>
<div class="  btn-group" data-toggle="buttons">

  <div class="row">

                                <div class="col-md-6">
                                <p class="item-intro"><span GroupName="GrupoIngredienteSB"><input id="rbtnSBPalta" type="checkbox" name="rbtnSBPalta" onClick="godelDia()" value='ensalada_del_dia'/><label for="rbtnSBPalta">Ensalada del dia</label></span></p>
                                </div>


</div>
<script>
$(document).ready(function(){

    $("#rbtnSBPalta").click(function() {
        if($("#rbtnSBPalta").is(':checked')) {
            document.getElementById("precio").innerHTML="S/. 12,00";
        } else {
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
    $fechaactual = getdate();
    $hoy=$fechaactual['wday'];
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
                                 <div class=" col-md-4 ">
                               <label class="btn btn-selected ">
                                 <p class="item-intro"><input type="radio" name="GrupoProteina"  id="atun" value="Atun" autocomplete="off" > Atun(Conserva)
                               </p></label></div>
                               <div class=" col-md-4 ">
                             <label class="btn btn-selected ">
                               <p class="item-intro"><input type="radio" name="GrupoProteina" id="pollo" autocomplete="off" value="Pollo a la planta" > Polloa la placha
                             </p></label></div>


                             </div>


                             <p class="text-radioButton text-titulo"></p>
<h4>Adicional (+S/. 1,00)</H4>
                             <div class="  btn-group" data-toggle="buttons">
                               <div class=" col-md-4 ">
                               <label class="btn btn-selected ">
                               <p class="item-intro"><input type="checkbox" name="GrupoAdicional[]" id="checkHuevo" autocomplete="off" value="Huevo" > Huevo
                               </p></label></div>

                               <div class=" col-md-4 ">
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
                               <div class=" col-md-4 ">
                               <label class="btn btn-selected ">
                               <p class="item-intro"><input type="checkbox" name="GrupoVinagretas[]" id="checkArroz" autocomplete="off" value="Rocoto" > Rocoto
                               </p></label></div>

                             </div>




</div>

</div>
<p class="text-radioButton text-titulo"> </p>
<h3>DATOS</h3>
                             <div class="form-group">
                             <label for="ejemplo_email_1"> Nombre</label>
                             <input type="email" class="form-control" id="nombre"
                                    placeholder="Introduce tu nombre" value=<?php if(isset($_COOKIE['nombreOmagua'])){echo$_COOKIE['nombreOmagua'];}?> >

                                           <label for="ejemplo_email_1"> Introducir número de Whatsapp</label>
                                           <input type="email" class="form-control" id="Whatsapp"
                                                  placeholder="Introduce tu numero de telefono" <?php if(isset($_COOKIE['telefonoOmagua'])){echo$_COOKIE['telefonoOmagua'];}?> >

                                                  <label for="ejemplo_email_1">Forma de entrega :                 </label>
                                                  <label class="radio-inline" onclick="goRecoger()"><input type="radio" id="Recoger" name="tipoentrega" value="Recoger" >Recoger</label>
                                                  <label class="radio-inline"onclick="goDelivery()"><input type="radio" id="Delivery"name="tipoentrega" value="Delivery">Delivery</label><br>
                                                  <div id="_ENTREGA_"></div>

                                                  <label > Precio total : <p id="precio"><p id="_+precio1"></p><p id="_+precio0"></p></p></label><br>

                                                  <label > Monto con el que se pagará</label>
                                                  <input type="email" class="form-control" id="monto"
                                                    placeholder="Ingrese el monto con que se pagara" >







                             </div>
                             <div id="_AJAX_VALIDACIONES_">

                             </div>



                             <input   type="submit"  id="btnPedirSaladBar" onclick="goValidaciones()" class="btn btn-primary btn-lg" />

</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

</div>

<script src="views/app/js/validaciones.js"></script>
<script src="views/app/js/precios.js"></script>
<script src="views/app/js/validacionesRapida.js"></script>





</body>
