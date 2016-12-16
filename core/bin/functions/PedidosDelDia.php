<?php
function PedidosDelDia($precio,$nombre,$telefono,$tiempo,$horario,$direccion,$empresa,$oficina,$tipo,$monto) {
  $HTML = '
  <html>
  <body style="background: #FFFFFF;font-family: Verdana; font-size: 14px;color:#1c1b1b;">
  <div style="">
      <h2>Pedido nuevo</h2>
      <p style="font-size:17px;">Solicitud</p>
  	<p>El día '. date('d/m/Y', time()).' se ha generado un nuevo pedido. <br /> lo siguiente: .</p>
  	<p style="padding:15px;background-color:#ECF8FF;">
    <strong> <h4> ENSALADA DEL DIA </h4></strong>
    <strong> <h4> Datos </h4></strong>
  		Nombre    :'.$nombre.'  <br>
      Whatsapp  :'.$telefono.' <br>

      <strong> <h4> Tipo de entrega : '.$tipo.'</h4></strong>

      tiempo aproximado : '.$tiempo.'<br>
      Horario           : '.$horario.'<br>
      Direccion         : '.$direccion.' <br>
      Empresa           : '.$empresa.'<br>
      oficina           :'.$oficina.'<br>

      <strong> <h4> Monto total : '.$precio.' </h4></strong>
        <strong> <h4> Pagara con : '.$monto.' </h4></strong>
  	</p>
      <p style="font-size: 9px;">&copy; '. date('Y',time()) .' '.APP_TITLE.'. Todos los derechos reservados.</p>
  </div>
  </body>
  </html>
  ';
    return $HTML;
}
?>
