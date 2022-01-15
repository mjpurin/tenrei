<?php
session_start();
?>
<?php include('head.php');?>
<div id="subSliderBox">
<div id="subSlider">
         <div><a href=""><img alt="画像1" src="images/sub-slider/PR_hall.jpg" /></a></div>
         <div><a href=""><img alt="画像2" src="images/sub-slider/PR_hoken.jpg" /></a></div>
</div>
</div>
<main id="contact">
  <h1>◇ お問い合わせ</h1>
  <p>お問い合わせは、お電話044-975-3853（代表）か、下記のフォームよりお願いいたします。</p>
  <h2>メールフォーム</h2>
  <div id="formBox">
  <?php
    $mode='input';
    $errors=array();
    if(isset($_POST['send']) && !empty($_SESSION['email']) ){
    require_once('lib/phpmailer/connectSMTP.php');
      //セッションを変数に置き換え
      $name=$_SESSION["name"] ;
      $email=$_SESSION["email"] ;
      $address=$_SESSION["address"] ;
      $tel=$_SESSION["tel"] ;
      $body=$_SESSION["body"] ;

      $mailcont = $name ."様\n";
      $mailcont .= "お問い合わせありがとうございます。\n";
      $mailcont .= "下記内容で承りました。\n";
      $mailcont .= "-------------------------------\n";
      $mailcont .= "お名前:" . $name . "\n";
      $mailcont .= "メールアドレス:" . $email . "\n";
      $mailcont .= "ご住所:" . $address . "\n";
      $mailcont .= "お電話:" . $tel . "\n";
      $mailcont .= "お問い合わせ内容:\n";
      $mailcont .= $body . "\n\n";
      $mailcont .= "-------------------------------\n";
      $mailcont .= "ご返事を差し上げるまで\n";
      $mailcont .= "しばらくお待ちください。\n";
      $mailcont .= "\n";
      $mailcont .= "安心典礼\n";
      $mailcont .= "E-mail:taniyama@ansin-tenrei.com\n";

      $mailto = $email;//宛名
      $subject = "お問い合わせありがとうございます。安心典礼です。";//件名
      $subject2="以下のようなお問い合わせがありました。";
      $content = $mailcont;//本文

      if(sakuraSendMail("taniyama@ansin-tenrei.com","taniyama0426",'安心典礼',$subject,$content,$mailto)){
      $mode='sendComplete';
      }else{
      $mode='sendFailed';
      }

  //toAdmin
  
      if(sakuraSendMail("taniyama@ansin-tenrei.com","taniyama0426",'安心典礼',$subject2,$content,"taniyama@ansin-tenrei.com")){
      $mode='sendComplete';
      }else{
      $mode='sendFailed';
      }

      // セッション変数を初期化
      $_SESSION = array();
      $_SESSION['name']='';
      $_SESSION['email']='';
      $_SESSION['address']='';
      $_SESSION['tel']='';
      $_SESSION['body']='';

    }else if(isset($_POST['back'])){
      $mode="reInput";

    }else if(count($_POST)>0 && !isset($_POST['send'])){
      if(isset($_POST['name'])){$_SESSION['name']=$_POST['name'];}
      if(isset($_POST['email'])){$_SESSION['email']=trim($_POST['email']);}
      if(isset($_POST['address'])){$_SESSION['address']=$_POST['address'];}
      if(isset($_POST['tel'])){$_SESSION['tel']=$_POST['tel'];}
      if(isset($_POST['body'])){$_SESSION['body']=$_POST['body'];}

      if (trim($_SESSION['name']) === '') {
          $errors['name'][] = '未入力です。';
      }
      if (trim($_SESSION['email']) === '') {
          $errors['email'][] = '未入力です。';
      }
      if (trim($_SESSION['body']) === '') {
          $errors['body'][] = '未入力です。';
      }
      $patarn = "/^([a-zA-Z0-9])+([a-zA-Z0-9\._-])*@([a-zA-Z0-9_-])+([a-zA-Z0-9\._-]+)+$/";
      if (!preg_match($patarn,$_SESSION['email'])){
        $errors['email'][] = 'メールアドレスの正しい書式ではありません。';
      }
      if(count($errors)>0){
        $mode='hasError';
      }else{
        $mode="confirm";
      }
    }else{
            $_SESSION['name']='';
            $_SESSION['email']='';
            $_SESSION['address']='';
            $_SESSION['tel']='';
            $_SESSION['body']='';
    }
    switch($mode){
      case 'input':
        include('formIntro.php');
        include('formInput.php');
      break;
      case 'reInput':
      case 'hasError':
        include('formReInput.php');
      break;
      case 'confirm':
        include('formConfirm.php');
      break;
      case 'sendComplete':
        include('formComplete.php');
      break;
      case 'sendFailed':
        include('formFailed.php');
      break;
    }
?>
</div>

<script src="js/vendor/slick.min.js"></script>
<script>
$(document).ready(function(){
  $('#subSlider').slick({
    autoplay:true,
    autoplaySpeed:5000,
  });
});

</script>
</main>
<?php include('foot.php');?> 
