<?php
require_once '../vendor/autoload.php';
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
->setUsername('staafwot@gmail.com')
->setPassword('Radek123456!');
$mailer = new Swift_Mailer($transport);
/* Wyslij email porwierdzenie rejesteacji ########################################################################################################*/
function sendVerificationEmail($userEmail, $token){
  global $mailer;
  $body =  '<!DOCTYPE html>
            <html lang="pl">
              <head>
                <meta charset="UTF-8">
                <title>Email weryfikacyjny założenia konta</title>
                <style>
                .wrapper {
                  padding: 20px;
                  color: #444;
                  font-size: 1.3em;
                }
                a {
                  background: #592f80;
                  text-decoration: none;
                  padding: 8px 15px;
                  border-radius: 5px;
                  color: #fff;
                }
                </style>
              </head>
              <body>
                <div class="wrapper">
                  <p>Dziękujemy za zarejestrowanie się na naszej stronie. Kliknij poniższy link, aby zweryfikować swoje konto:</p><br>
                  <a href="http://176.139.95.57/verify_email.php?token=' . $token . '">Zweryfikuj Email!</a>
                </div>
              </body>
            </html>';
  $message = (new Swift_Message('Weryfikacja email'))
  ->setFrom('staafwot@gmail.com')
  ->setTo($userEmail)
  ->setBody($body, 'text/html');
  $result = $mailer->send($message);
  if($result > 0){
    return true;
  }else{
    return false;
  }
}
/* Wyslij email reset hasla ########################################################################################################*/
function sendResetEmail($userEmail, $token){
  global $mailer;
  $body =  '<!DOCTYPE html>
            <html lang="pl">
              <head>
                <meta charset="UTF-8">
                <title>Zmiana Hasła</title>
                <style>
                .wrapper {
                  padding: 20px;
                  color: #444;
                  font-size: 1.3em;
                }
                a {
                  background: #592f80;
                  text-decoration: none;
                  padding: 8px 15px;
                  border-radius: 5px;
                  color: #fff;
                }
                </style>
              </head>
              <body>
                <div class="wrapper">
                  <p>Kliknij poniższy link, aby zresetować hasło dostępu do twojego konta:</p><br>
                  <a href="http://176.139.95.57/reset_password.php?token=' . $token . '&email=' . $userEmail . '">Zresetuj Hasło!</a><br>
                  <p>Jeśli nie prosiłeś o zmianę hasła, możesz zignorować tę wiadomość, a Twoje hasło nie zostanie zmienione.</p>
                </div>
              </body>
            </html>';
  $message = (new Swift_Message('Reset hasla'))
  ->setFrom('staafwot@gmail.com')
  ->setTo($userEmail)
  ->setBody($body, 'text/html');
  $result = $mailer->send($message);
  if($result > 0){
    return true;
  }else{
    return false;
  }
}