<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
class Email{
  private $cuerpo='';
  private $receptor='';
  private $asunto='';
  private $servidorCorreo='zendha.net';
  private $emisorCorreo='no-reply@zendha.net';
  private $passCorreo='Irdb63?1';
  function __construct($receptor,$asunto,$mensaje){
    $this->receptor=$receptor;
    $this->asunto=$asunto;
    $this->cuerpo=$this->maquetar($mensaje);
    
  }
  public function maquetar($m){
    return "<!DOCTYPE html>
    <html lang='en'>
    <head>
        <meta charset='UTF-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <meta name='viewport' content='width=device-width, initial-scale=1.0'>
        <title>Zendha</title>
        <link rel='preconnect' href='https://fonts.googleapis.com'>
        <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
        <link href='https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400&display=swap' rel='stylesheet'> 
        <style>
                body{
                    margin:0px;
                    padding:0px;
                    font-family: 'Work Sans', sans-serif;
                    color:#333;
                }
                h1, h2, h3, h4{
                    font-weight: 300;
                    color:#00ac7e;
                }
                p{
                    font-size:16px;
                    line-height: 1.5em;
                }
                p.p2{
                    font-size:11px;
                }
                #rdthead{
                    width:100%;
                    max-width: 1000px;
                    margin:auto;
                }
                #rdtxCuerpo{
                    padding-top:50px;
                    padding-bottom:50px;
                    margin:auto;
                    width:900px;
                    max-width:90%;   
                }
  
                #topfooter{
                    margin:auto;
                    width:900px;
                    max-width:90%;    
                    border-top:5px solid #00a881;
                    margin-top:50px;
                    padding-top:20px;
                    padding-bottom:50px;
                    font-size:10px;
                }
                #rdthead_int{
                    margin:auto;
                    width:900px;
                    max-width:90%;     
                    display:flex;      
                    justify-content:space-between;
                    padding-bottom:50px;
                    
                }
                .rdthead_int_cj{
                    width:40%;
                }
                img{
                    margin:15px 10px 10px 10px;
                    height:30px;
                }
        </style>
    </head>
    <body>
        <div id='rdthead'>
            <img src='https://systems.zendha.net/assets/mailheader.jpg' style='width:100%;height:auto;'>
        </div>
        <div id='rdtxCuerpo'>
        $m
        </div>
        <div id='topfooter'>
        Este correo electrónico y el material adjunto es para uso exclusiv o de la persona o entidad a la que expresamente se le ha enviado, y puede contener información
        confidencial o material privilegiado. Si usted no es el destinatario legítimo del mismo, por favor repórtelo inmediatamente al remitente del correo y bórrelo. Cualquier
        revisión, retransmisión, difusión o cualquier otro uso de este correo, por personas o entidades distintas a las del destinatario legítimo, queda expresamente prohibido.
        Este correo electrónico no pretende ni debe ser considerado como constitutivo de ninguna relación legal, contractual o de otra índole similar.
            </div>
        <div id='rdtfooter'>
            <div id='rdthead_int'>
                <div class='rdthead_int_cj'>
                    <div>Siguenos en nuestras redes sociales</div>
                    <a href='https://www.facebook.com/zendhasystems' target=\"_blank\"><img src='https://systems.zendha.net/assets/icons/facebook-square.svg'></a>
                    <a href='https://www.instagram.com/zendha.systems/'  target=\"_blank\"><img src='https://systems.zendha.net/assets/icons/instagram.svg'></a>
                    <a href='https://www.linkedin.com/company/grupo-zendha' target=\"_blank\"><img src='https://systems.zendha.net/assets/icons/linkedin.svg'  ></a>
                    <a href='https://twitter.com/zendhasystems' ><img src='https://systems.zendha.net/assets/icons/twitter.svg'></a>
                </div>
                <div class='rdthead_int_cj'>                    
                    <div>Todos los derechos reservados Zendha &copy; ".date("Y")."</div>
                    <a href=\"mailto:atencion.sys@zendha.net\" style='color:#333;text-decoration:inherit'>atencion.sys@zendha.net</a><br/>
                    <a href=\"tel:5552740827\" style='color:#333;text-decoration:inherit'>+52 55 5274 0827</a>
                </div>

            </div>
        </div>
    </body>
    </html>";
  }
  public function enviar(){
        require 'vendor/autoload.php';

        //Instantiation and passing `true` enables exceptions
        $mail = new PHPMailer(true);

        try {
            //Server settings
           // $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = $this->servidorCorreo;                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;             
            $mail->Username   = $this->emisorCorreo;                     //SMTP username
            $mail->Password   = $this->passCorreo;                               //SMTP password
            $mail->SMTPSecure = "ENCRYPTION_STARTTLS";         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
            $mail->SMTPAutoTLS = false;
            //$mail->Port       = 25;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above


            //$mail->SMTPSecure = 'STARTTLS';         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged


            //Recipients
            $mail->setFrom('no-reply@zendha.net', 'Zendha Systems');
            //$mail->addAddress('joe@example.net', 'Joe User');     //Add a recipient
            //$mail->addAddress('ellen@example.com');               //Name is optional
            //$mail->addReplyTo('info@example.com', 'Information');
            //$mail->addCC('cc@example.com');
            //$mail->addBCC('bcc@example.com');
            //$mail->addCC('aritz@nmn.mx');
            //Attachments
            //$mail->addAttachment('/var/tmp/file.tar.gz');         //Add attachments
            //$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    //Optional name

            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = $this->asunto;
            $mail->Body    = $this->cuerpo;
            $mail->AltBody = strip_tags($this->cuerpo);
            
            //$mail->addCC($this->receptor);
            $mail->addAddress($this->receptor, '');

            $mail->send();
            
        } catch (Exception $e) {
            echo "<div>No se ha podido enviar el mensaje. Razón $mail->ErrorInfo<div>";
        }

    }
}
function enviarPorSMPT($receptor,$asunto,$mensaje){
    $email=new email($receptor,$asunto,$mensaje);
    $email->enviar();
  
}
//enviarPorSMPT("aritz@nmn.mx","PRUEBA","HOLA!");