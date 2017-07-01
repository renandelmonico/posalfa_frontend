<div class="container">

    <ul class="breadcrumb">
        <li><a href="home">Página Inicial</a></li>
        <li>Contato</li>
    </ul>

    <?php
    $config = json_decode(file_get_contents('./config.json'));

    $nome = trim ( $_POST["nome"] );
    $email = trim ( $_POST["email"] );
    $mensagem = trim ( $_POST["mensagem"] );

    require './vendor/PHPMailer/PHPMailerAutoload.php';

    $mail = new PHPMailer;

    $mail->SMTPDebug = 2;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.live.com';  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $config->email;                 // SMTP username
    $mail->Password = $config->senha;                           // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = 465;                                    // TCP port to connect to

    $mail->setFrom($config->email, 'Contato site');
    $mail->addAddress('renandelmonico@gmail.com', 'Renan Delmonico');

    $mail->addAttachment('imgs/opala.jpg');    // Optional name
    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = 'E-mail enviado do site CarSale';
    $mail->Body    = $mensagem;
    $mail->AltBody = $mensagem;

    if(!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
?>
</div>