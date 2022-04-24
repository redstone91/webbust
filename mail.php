<?php 

require_once('phpmailer/PHPMailerAutoload.php');
$mail = new PHPMailer;
$mail->CharSet = 'utf-8';

$name = $_POST['name'];
$tel = $_POST['tel'];
$email = $_POST['email'];
$product = $_POST['product'];

function mb_ucfirst($word, $charset = "utf-8") {

		return mb_strtoupper(mb_substr($word, 0, 1, $charset), $charset).mb_substr($word, 1, mb_strlen($word, $charset)-1, $charset);

    }
    
 $name = mb_ucfirst($name);

//$mail->SMTPDebug = 3;                               

$mail->isSMTP();                                      
$mail->Host = 'smtp.mail.ru';  																							
$mail->SMTPAuth = true;                               
$mail->Username = 'mailer_mailer_2020@mail.ru'; 
$mail->Password = 'YOaYAe3top1^'; 
$mail->SMTPSecure = 'ssl';                            
$mail->Port = 465; 

$mail->setFrom('mailer_mailer_2020@mail.ru'); 
$mail->addAddress($_POST['email']);     
$mail->addAddress('mailer_mailer_2020@mail.ru');                
$mail->isHTML(true);                                  

$mail->Subject = ''.$name.', Ваш заказ! ';
$mail->Body = '<div>Имя: '.$name.'</div><div>Телефон: '.$tel.'</div><div>Почта: '.$email.'</div><div>Название продукта: '.$product.'</div>';
$mail->AltBody = '';

if(!$mail->send()) {
    echo 'Error';
} else {
    header('location: thank-you.html');
}
?>