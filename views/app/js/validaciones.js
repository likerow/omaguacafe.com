function goValidaciones(){

if(document.getElementById("rbtnSBPalta").checked){

//ensalada del dia
  var connect, form, response, result,telefono,nombre,monto,hora_aprox='';


  telefono=document.getElementById('Whatsapp').value;
  nombre=document.getElementById('nombre').value;
  monto=document.getElementById('monto').value;
  var gentrega=document.getElementsByName('tipoentrega');
var entrega='';
for(var i=0;i<gentrega.length;i++) {
                                  if(gentrega[i].checked){
                                      entrega=gentrega[i].value;}
                              }

  if(entrega!=''){

    if(entrega=='Recoger'){

          hora_aprox=document.getElementById('hora_aprox').value;

    document.getElementById('_AJAX_VALIDACIONES_').innerHTML=result ;
          }

    else{


      var direccion='',ghora_deli,hora_deli='',empresa,oficina;
      direccion=document.getElementById('direccion').value;
      empresa=document.getElementById('empresa').value;
      oficina=document.getElementById('oficina').value;
      ghora_deli=document.getElementsByName('hora_deli');
      for(var i=0;i<ghora_deli.length;i++) {
                                        if(ghora_deli[i].checked){
                                            hora_deli=ghora_deli[i].value;}
                                    }
    }

    //.----------


    form='direccion='+direccion+'&telefono='+telefono+'&nombre='+nombre+'&hora_aprox='+hora_aprox+'&hora_deli='+hora_deli+'&empresa='+empresa+'&oficina='+oficina+'&cnt='+cnt+'&entrega='+entrega+'&monto='+monto;


    //--------
    connect=window.XMLHttpRequest ? new XMLHttpRequest(): new ActiveXObject('Microsoft.XMLHTTP');
    connect.onreadystatechange=function(){
        if(connect.readyState == 4 && connect.status == 200){
            if(connect.responseText ==1){
                result='<div class="alert alert-dismissible alert-warning">';
    result+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
    result+='<h4>Conectado...</h4>';
    result+='<p <strong>te estamos redireccionnado </strong></p>';
    result+='</div>';


    document.getElementById('_AJAX_VALIDACIONES_').innerHTML=connect.result;

        document.getElementById('_AJAX_CUERPO_').innerHTML='<div class="alert alert-dismissible alert-success"><strong>Gracias por su compra<br></strong> En breves momentos estaremos comunicandonos con usted </div>' ;

            }else{
               document.getElementById('_AJAX_VALIDACIONES_').innerHTML=connect.responseText;


            }

        }else if(connect.readyState != 4){

            result='<div class="alert alert-dismissible alert-warning">';
    result+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
    result+='<h4>PROCESANDO.....</h4>';
    result+='<p <strong>Enviando pedido</strong></p>';
    result+='</div>';

    document.getElementById('_AJAX_VALIDACIONES_').innerHTML=result ;


        }

    }
    connect.open('POST','ajax.php?mode=validacionesdeldia',true);
    connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
    connect.send(form);



}






else{
  // si forma de entrega esta vacio

  result='<div class="alert alert-dismissible alert-warning">';
result+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
result+='<h4>SELECCIONE LA FORMA DE ENTREGA</h4>';
result+='<p <strong>seleccione la forma como desea aquirir su compra</strong></p>';
result+='</div>';


document.getElementById('_AJAX_VALIDACIONES_').innerHTML=result ;
}


}else{
  //  eleccion de ingredientes
  var connect, form, response, result,telefono,cnt=0,nombre,monto, ingredientes='',gbase,base='', carbohidratos='',gcarbohidratos,complementos='',gcomplementos,proteina='',gproteina,adicional='',gadicional,vinagreta='',gvinagreta;

gbase=document.getElementsByName('GrupoBase[]');
gcarbohidratos=document.getElementsByName('GrupoCarbohidratos[]');
gcomplementos=document.getElementsByName('GrupoComplementos[]');
gproteina=document.getElementsByName('GrupoProteina');
gadicional =document.getElementsByName('GrupoAdicional[]');
gvinagreta =document.getElementsByName('GrupoVinagretas[]');
telefono=document.getElementById('Whatsapp').value;
nombre=document.getElementById('nombre').value;
monto=document.getElementById('monto').value;

var gentrega=document.getElementsByName('tipoentrega');
var entrega='';



for (var x=0; x < gbase.length; x++) {
              if (gbase[x].checked) {

               base+=gbase[x].value+" , ";
              }
             }
   for (var x=0; x < gcarbohidratos.length; x++) {
                           if (gcarbohidratos[x].checked) {

                            carbohidratos+=gcarbohidratos[x].value+" , ";
                           }
                          }

                          for (var x=0; x < gcomplementos.length; x++) {
                                        if (gcomplementos[x].checked) {

                                         complementos+=gcomplementos[x].value+" , ";
                                        }
                                       }
for(var i=0;i<gproteina.length;i++) {
                                  if(gproteina[i].checked){
                                      proteina=gproteina[i].value;}
                              }
                              for (var x=0; x < gadicional.length; x++) {
                                            if (gadicional[x].checked) {

                                                cnt=cnt+1;
                                             adicional+=gadicional[x].value+" , ";
                                            }
                                           }
                                           for (var x=0; x < gvinagreta.length; x++) {
                                                         if (gvinagreta[x].checked) {

                                                          vinagreta+=gvinagreta[x].value+" , ";
                                                         }
                                                        }
                                                        for(var i=0;i<gentrega.length;i++) {
                                                                                          if(gentrega[i].checked){
                                                                                              entrega=gentrega[i].value;}
                                                                                      }


if(base!=''){
if(carbohidratos!=''){
  if(complementos!=''){
    if(proteina!=''){
      if(vinagreta!=''){

        if(entrega!=''){

          if(entrega=='Recoger'){
              var hora_aprox='';
                hora_aprox=document.getElementById('hora_aprox').value;
                if(hora_aprox==''){
                  result='<div class="alert alert-dismissible alert-warning">';
          result+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
          result+='<h4>PROCESANDO.....</h4>';
          result+='<p <strong>Enviando pedido</strong></p>';
          result+='</div>';

          document.getElementById('_AJAX_VALIDACIONES_').innerHTML=result ;
                }

          }else{

            var direccion='',ghora_deli,hora_deli='',empresa,oficina;
            direccion=document.getElementById('direccion').value;
            empresa=document.getElementById('empresa').value;
            oficina=document.getElementById('oficina').value;
            ghora_deli=document.getElementsByName('hora_deli');
            for(var i=0;i<ghora_deli.length;i++) {
                                              if(ghora_deli[i].checked){
                                                  hora_deli=ghora_deli[i].value;}
                                          }
          }


          //.----------


          form='base='+base+'&carbohidratos='+carbohidratos+'&complementos='+complementos+'&proteina='+proteina+'&vinagreta='+vinagreta+'&adicional='+adicional
          +'&nombre='+nombre+'&direccion='+direccion+'&telefono='+telefono+'&hora_aprox='+hora_aprox+'&hora_deli='+hora_deli+'&empresa='+empresa+'&oficina='+oficina+'&cnt='+cnt+'&entrega='+entrega+'&monto='+monto;


          //--------
          connect=window.XMLHttpRequest ? new XMLHttpRequest(): new ActiveXObject('Microsoft.XMLHTTP');
          connect.onreadystatechange=function(){
              if(connect.readyState == 4 && connect.status == 200){
                  if(connect.responseText ==1){
                      result='<div class="alert alert-dismissible alert-warning">';
          result+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
          result+='<h4>Conectado...</h4>';
          result+='<p <strong>te estamos redireccionnado </strong></p>';
          result+='</div>';


          document.getElementById('_AJAX_VALIDACIONES_').innerHTML=connect.result;

              document.getElementById('_AJAX_CUERPO_').innerHTML='<div class="alert alert-dismissible alert-success"><strong>Gracias por su compra<br></strong> En breves momentos estaremos comunicandonos con usted </div>' ;

                  }else{
                     document.getElementById('_AJAX_VALIDACIONES_').innerHTML=connect.responseText;


                  }

              }else if(connect.readyState != 4){

                  result='<div class="alert alert-dismissible alert-warning">';
          result+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
          result+='<h4>PROCESANDO.....</h4>';
          result+='<p <strong>enviando pedido</strong></p>';
          result+='</div>';

          document.getElementById('_AJAX_VALIDACIONES_').innerHTML=result ;


              }

          }
          connect.open('POST','ajax.php?mode=validaciones',true);
          connect.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
          connect.send(form);

//-------------------


        }else{
          result='<div class="alert alert-dismissible alert-warning">';
        result+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
        result+='<h4>SELECCIONE LA FORMA DE ENTREGA</h4>';
        result+='<p <strong>seleccione la forma como desea aquirir su compra</strong></p>';
        result+='</div>';


        document.getElementById('_AJAX_VALIDACIONES_').innerHTML=result ;
        }

      }else{
        result='<div class="alert alert-dismissible alert-warning">';
      result+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
      result+='<h4>ELIGE ALMENOS UNA VINAGRETA</h4>';
      result+='<p <strong>Puede elegir mas de 1 vinagreta</strong></p>';
      result+='</div>';


      document.getElementById('_AJAX_VALIDACIONES_').innerHTML=result ;
      }

    }else{
      result='<div class="alert alert-dismissible alert-warning">';
    result+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
    result+='<h4>ELIGE UNA PROTEINA</h4>';
    result+='<p <strong></strong></p>';
    result+='</div>';


    document.getElementById('_AJAX_VALIDACIONES_').innerHTML=result ;
    }

  }else{
    result='<div class="alert alert-dismissible alert-warning">';
  result+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
  result+='<h4>ELIGE ALMENOS UN COMPLEMENTO</h4>';
  result+='<p <strong></strong></p>';
  result+='</div>';


  document.getElementById('_AJAX_VALIDACIONES_').innerHTML=result ;
  }

}else{
  result='<div class="alert alert-dismissible alert-warning">';
result+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
result+='<h4>ELIGE ALMENOS UN CARBOHIDRATO</h4>';
result+='<p <strong></strong></p>';
result+='</div>';


document.getElementById('_AJAX_VALIDACIONES_').innerHTML=result ;
}


}else{
result='<div class="alert alert-dismissible alert-warning">';
result+='<button type="button" class="close" data-dismiss="alert">&times;</button>';
result+='<h4>ELIGE ALMENOS UNA BASE</h4>';
result+='<p <strong></strong></p>';
result+='</div>';


document.getElementById('_AJAX_VALIDACIONES_').innerHTML=result ;
}


}

}
