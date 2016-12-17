<?php


$HTML='';
if( $_POST['telefono']!='' && $_POST['nombre']){

if(($_POST['direccion']!='' && $_POST['empresa']!='' && $_POST['oficina']!='' && $_POST['hora_deli']!='' && $_POST['monto']!='') || ($_POST['hora_aprox']!='' && $_POST['monto']!='') ){



    setcookie("direccionOmagua",$_POST['direccion'], mktime(). time()+60*60*24*30 );
    setcookie("empresaOmagua",$_POST['empresa'], mktime(). time()+60*60*24*30 );
    setcookie("oficinaOmagua",$_POST['oficina'], mktime(). time()+60*60*24*30 );
    setcookie("hora_aproxOmagua",$_POST['hora_aprox'], mktime(). time()+60*60*24*30 );
    setcookie("nombreOmagua",$_POST['nombre'], mktime().time()+60*60*24*30 );
    setcookie("telefonoOmagua",$_POST['telefono'], mktime().time()+60*60*24*30 );


  $mail = new PHPMailer;
  $mail->CharSet="UTF-8";
  $mail->Encoding="quoted-printable";

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = PHPMAILER_HOST;  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = PHPMAILER_USER;                 // SMTP username
  $mail->Password = PHPMAILER_PASS;                           // SMTP password
  $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted

   $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
  $mail->Port =PHPMAILER_PORT ;                                    // TCP port to connect to

  $mail->setFrom(PHPMAILER_USER, APP_TITLE);

  $mail->addAddress('keyl.qsy@gmail.com');     // Add a recipient puede llegar a tantac como desees


  $mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments archivo adjunto
  $mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'Pedidos';
  $mail->Body    = PedidosDelDia(12,$_POST['nombre'],$_POST['telefono'],$_POST['hora_aprox'],$_POST['hora_deli'],
  $_POST['direccion'],$_POST['empresa'],$_POST['oficina'],$_POST['entrega'],$_POST['monto']); //el cuerpo del senje


  $mail->AltBody = 'Pedidos Internet ';

  if(!$mail->send()) {


       $HTML=' <div class="alert alert-dismissible alert-warning">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <h4>Warning!</h4>
    <p><strong>el email no es valido</strong></a>.</p>
  </div>';



  } else {


$HTML='1';




}





}else{
  $HTML=' <div class="alert alert-dismissible alert-warning">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
 <h4>DATOS INCOMPLETOS</h4>
 <p>Complete todos los campos</a>.</p>
 </div>';
}

}else{

  $HTML=' <div class="alert alert-dismissible alert-warning">
 <button type="button" class="close" data-dismiss="alert">&times;</button>
 <h4>DATOS INCOMPLETOS</h4>
 <p>Complete Su nombre y numero de whatsapp</a>.</p>
 </div>';

}


echo $HTML;


 ?>
