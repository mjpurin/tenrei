<?php
// HPMailer のクラスをグローバル名前空間（global namespace）にインポート
// スクリプトの先頭で宣言する必要があります
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
require 'src/Exception.php';
require 'src/PHPMailer.php';
require 'src/SMTP.php';
//エラーメッセージ用日本語言語ファイルを読み込む場合（25行目の指定も必要）
require 'language/phpmailer.lang-ja.php';


function sakuraSendMail($fromAddress,$pass,$fromNameOrg,$titleOrg,$bodyOrg,$to,$bcc=null){
mb_language("japanese");
mb_internal_encoding("UTF-8");
try{
$mailer = new PHPMailer();
$mailer->IsSMTP();
$mailer->Encoding = "7bit";
$mailer->CharSet = '"iso-2022-jp"';
//$mailer->SMTPDebug = 2;
$mailer->Host = 'ansin-tenrei.com';
$mailer->SMTPOptions = array('ssl' => array('verify_peer' => false, 'verify_peer_name' => false, 'allow_self_signed' => true));
$mailer->Port = 587;
$mailer->SMTPAuth = TRUE;
$mailer->SMTPSecure = "tls";
$mailer->Username = $fromAddress; //ログインアドレス
$mailer->Password = $pass; // ログインパスワード
$fromName=mb_encode_mimeheader(mb_convert_encoding($fromNameOrg,"JIS","UTF-8"));
$mailer->setFrom($fromAddress,$fromName);
$mailer->AddReplyTo($fromAddress, $fromName);
//$mailer->Subject  = mb_encode_mimeheader(mb_convert_encoding($titleOrg,"JIS","UTF-8"));
$mailer->Subject  = mb_encode_mimeheader($titleOrg,'ISO-2022-JP');
$mailer->Body     = mb_convert_encoding($bodyOrg,"JIS","UTF-8");
$mailer->AddAddress($to); // Toアドレス
if(!empty($bcc) && count($bcc) > 0){
  foreach($bcc as $val){
    $mailer->addBCC($val);
  }
}
$mailer->Send();
//echo "Message Sent OK\n";
//exit();
return true;
}catch(phpmailerException $e){
//  echo $e->errorMessage();
}catch(Exception $e){
//  echo $e->getMessage();
}
//exit();
return false;
}
