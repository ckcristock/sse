<?php
$myvar= $_POST['g-recaptcha-response'];
echo "Hi1";
echo $myvar;
echo "HHHHiii";
if ($_POST['g-recaptcha-response'] == '') {
       echo "Captcha invalido22";
} else {
       $obj = new stdClass();
       $obj->secret = "6LcOpRQpAAAAANzc845FvKhksP54_Ah4ZxVOyD99";
       $obj->response = $_POST['g-recaptcha-response'];
       $obj->remoteip = $_SERVER['REMOTE_ADDR'];
       $url = 'https://www.google.com/recaptcha/api/siteverify';

       $options = array(
              'http' => array(
                     'header' => "Content-type: application/x-www-form-urlencoded\r\n",
                     'method' => 'POST',
                     'content' => http_build_query($obj)
              )
       );
       $context = stream_context_create($options);
       $result = file_get_contents($url, false, $context);

       $validar = json_decode($result);

       /* FIN DE CAPTCHA */

       $nombre = $_POST['nombre'];
       $correo = $_POST['correo'];
       $telefono = $_POST['telefono'];
       $asunto = $_POST['asunto'];



       $header = "From: ssegreen2020@gmail.com" . " \r\n" . 'Cc: moncadaruizjorge@yahoo.com' . "\r\n";
       //$header.= "Bcc: jorge.moncada@sse.green" . "\r\n";
       $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";

       $mensajecliente = "Nombre: " . $nombre  . " \r\n";
       $mensajecliente .= "Correo: " . $correo  . " \r\n";
       $mensajecliente .= "Telefono: " . $telefono  . " \r\n";
       $mensajecliente .= "Asunto: " . $asunto  . " \r\n";
       $mensajecliente .= "Mensaje: " . $_POST['mensaje'] . " \r\n";
       $mensajecliente .= "Página: Nosotros";



       $para = "ssegreen2020@gmail.com";
       $asunto = $_POST['asunto'];

       mail($para, $asunto, $mensajecliente, $header);

       header("Location: ../nosotros.php?correo=1");
}
?>

<!-- <script>
       window.location.href = '../nosotros.php?correo=1';
</script> -->