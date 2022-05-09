<?php
$titulo = "Contacto";
$pagina = "contacto";

include_once ("PHPMailer/src/PHPMailer.php");
include_once ("PHPMailer/src/SMTP.php");

function guardarCorreo($correo){
        $archivo = fopen("mails.txt", "a+"); 
        fwrite($archivo, $correo . ";\n");
        fclose($archivo);
    }

if($_POST){ /* es postback */
    $nombre = $_POST["txtNombre"];
    $correo = $_POST["txtCorreo"];
    $mensaje = $_POST["txtMensaje"];

    if($nombre != "" && $correo != ""){
        guardarCorreo($correo);

        $mail = new PHPMailer();
        $mail->IsSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "mail.dominio.com"; // SMTP a utilizar
        $mail->Username = "info@dominio.com.ar"; // Correo completo a utilizar
        $mail->Password = "aqui va la clave de tu correo";
        $mail->Port = 25;
        $mail->From = "info@dominio.com.ar"; //Desde la cuenta donde enviamos
        $mail->FromName = "Tu nombre a mostrar";
        $mail->IsHTML(true);
        $mail->SMTPOptions = array(
                    'ssl' => array(
                        'verify_peer' => false,
                        'verify_peer_name' => false,
                        'allow_self_signed' => true
                    )
                );

        //Destinatarios
        $mail->addAddress($correo);
        $mail->addBCC("otrocorreo@gmail.com"); //Copia oculta
        $mail->Subject = utf8_decode("Contacto página Web");
        $mail->Body = "Recibimos tu consulta, te responderemos a la brevedad.";
        /*if(!$mail->Send()){
            $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
        }*/
        $mail->ClearAllRecipients(); //Borra los destinatarios

        //Envía ahora un correo a nosotros con los datos de la persona
        $mail->addAddress("info@dominio.com.ar");
        $mail->Subject = utf8_decode("Recibiste un mensaje desde tu página Web");
        $mail->Body = "Te escribio $nombre cuyo correo es $correo el siguiente mensaje:<br><br>$mensaje";
       
       // if($mail->Send()){ /* Si fue enviado correctamente redirecciona */
            header('Location: confirmacion-envio.php');
       // } else {
       //     $msg = "Error al enviar el correo, intente nuevamente mas tarde.";
       // }    
    } else {
        $msg = "Complete todos los campos";
    }

}

include_once ("header.php");

?>
        <main>  
            <div class="container">
                <div class="row">
                    <div class="col-12 mt-sm-5">
                        <h1>Contacto</h1>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6 col-12 mt-4">
                        <p>Te invito a que te contectas enviandome un mensaje o bien por <a href="https://api.whatsapp.com/send?phone=">whatsapp</a></p>
                    </div>
                    <div class="col-sm-6 col-12 mt-4">
                        <form action="" method="POST">
                            <div class="mb-3">
                                <input type="text" id="txtNombre" name="txtNombre" class="form-control shadow"
                                    placeholder="Nombre">
                            </div>
                            <div class="mb-3">
                                <input type="email" id="txtCorreo" name="txtCorreo" class="form-control shadow"
                                    placeholder="Correo">
                            </div>
                            <div class="mb-3">
                                <textarea name="txtMensaje" id="txtMensaje" class="form-control shadow"></textarea>
                            </div>
                            <div class="text-right">
                                    <button type="submit" class="btn"> ENVIAR</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
        <footer>
            <div class="container">
                <div class="row mt-5 text-sm-left text-center pb-sm-0 pb-3">
                    <div class="col-sm-3 col-12">
                        <a href="https://github.com" target="_blank" title="Github">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="https://www.linkedin.com/" target="_blank" title="Linkedin">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                    </div>
                    <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3"> 
                        Sponsor <a href="https://depcsuite.com/" target="_blank" title="DEPCSUITE">DePC Suite</a>
                    </div>
                    <div class="col-sm-3 col-12 text-sm-left text-center pb-sm-0 pb-3"> 
                        <a href="mailto:fedebertarelli@gmail.com">fedebertarelli@gmail.com.ar</a>
                    </div>
                    <div class="col-sm-3 col-12 text-right">
                        <a href="https://api.whatsapp.com/send?phone=" title="Whatsapp">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </div>
                </div>
            </div>
        </footer>
    </body>
</html>