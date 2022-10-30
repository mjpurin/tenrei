<?php
session_start();
$mode='input';
$errors=array();
if(isset($_POST['send']) && !empty($_SESSION['email']) ){
	require_once('../lib/phpmailer/connectSMTP.php');
	//セッションを変数に置き換え
	$name=$_SESSION["name"] ;
	$email=$_SESSION["email"] ;
	$address=$_SESSION["address"] ;
	$tel=$_SESSION["tel"] ;
	$body=$_SESSION["body"] ;

	$mailcont = $name ."様\n";
	  $mailcont .= "\n";
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
?>
<!DOCTYPE html>
<html lang="ja">
	<head>
		<meta charset="utf-8">
		 <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
		 <link rel="canonical" href="https://ansin-tenrei.com/" />
		<title>安心典礼</title>
		<!--keywords 書いておくとその検索語でヒットしやすくなる-->
		<meta name="keywords" content="宮前区,葬儀,川崎市,無料相談,安心,典礼">
		<!--descpription 検索でヒットした時に紹介文として表示される-->
        	<meta name="description" content="安心典礼は川崎市宮前区にある葬儀社です。人生最後のセレモニーを真心を込めて全力でサポートいたします。">
        	<link rel="shortcut icon" href="../favicon.ico" >
	      <link rel="stylesheet" href="./css/default.css">
        	<link rel="stylesheet" href="./css/styles.css">

	</head>
	<body id="top" class="<?php echo ($mode !='input')?  'during':'';?>">
		<div class="container">
        		<div id="contents">
	        		<div id="header">
	        			<div id="headerTop">
	        				<div id="headerIconBox">
	        					<a href="./"><img src="images/topLogo.png"></a>
	        				</div>
	        				<div id="headerTelBox">
	        					<a href="tel:0449753853"><img src="images/topTel.png" alt="0449753853"></a>
	        				</div>
	        			</div>
	        			<div id="headerMiddle" class="txt_c">
	        			私達は、人生最後のセレモニーを相手の立場になって行い、すべての人を安心立命させます。
	        			</div>
	        			<ul id="slidelist">
									<li><img src="images/slider/slide1.jpg" alt="宮前区にある安心典礼は"></li>
									<li><img src="images/slider/slide2.jpg" alt="葬儀という人生最後のセレモニーを"></li>
									<li><img src="images/slider/slide3.jpg" alt="安心して立命できますよう"></li>
									<li><img src="images/slider/slide4.jpg" alt="全力でサポート致します"></li>
								</ul>

	        			<div id="headerBottom">
	        				<img src="images/headerBottom.jpg" alt="葬儀・緊急のお迎え搬送など、お困りの際はご連絡ください。-24時間対応です。-">
	        			</div>
	        		</div><!--end header -->
	        		<div id="main">
		        		<h1 id="mainTop">
		        			<img src="images/mainTop.png" alt="川崎 宮前区の葬儀なら実績豊富な安心典礼におまかせください。">
		        		</h1>
		        		<p class="mainStrings">
                        安心典礼 今月（10月）のお話<br/>
                        <br/>
                        ～32周年～<br/>
2020年10月に創業30周年を迎えてからもう2年が経ちます。<br/>
<br/>
この2年以上、世の中はコロナで明け暮れた日々でした。そのように大変な中、本当に多くの皆様に支えていただきましたこと、改めまして厚く御礼申し上げます。<br/>
<br/>
先日の安倍元首相の国葬に関しては賛否ある中、大きな混乱や騒動は起きず無事に執り行われ、コロナ禍にも関わらず多くの人々が献花に訪れたようです。<br/>
<br/>
今後どのような世の中になっていくか、物価上昇や気候変動による食糧難などが囁かれておりますが、世界情勢も含め様々な事柄に注視していく必要があるのではないでしょうか。<br/>
<br/>
弊社安心典礼と致しましても、この世情において如何にして地域の皆様のお役に立てるか、新しい分野も含め日々考える毎日です。
<br/>
<br/>
2年前にリニューアルいたしました弊社フューネラルホールは、収容人数は約30名のコンパクトスペースで、家族葬・1日葬・直葬などシンプルな葬儀に最適なホールとなっております。音響にもこだわった設計で厳かな式を営なむことが出来るのも特徴です。もちろん、新型コロナウィルス感染予防対策を万全に行っておりますので、安心してご利用ください。<br/>
<br/>
ホール、葬儀に関しましては、どんなことでもお気軽にお問い合わせください。<br/>
電話：044-975-3853</p>
		        		<div id="mainTel" class="mt20">
		        			<a href="tel:0449753853"><img src="images/telButton.png"></a>
		        		</div>
		        		<ul class="mt30">
		        			<li><a href="#title1"><img src="images/menu1.png"></a></li>
		        			<li><a href="#title2"><img src="images/menu2.png"></a></li>
		        			<li><a href="#title3"><img src="images/menu3.png"></a></li>
		        			<li><a href="#title4"><img src="images/menu4.png"></a></li>
		        		</ul>
		        		<div id="title1Container">
			        		<div id="title1" class="title mt60">
			        			<img src="images/title1.png" alt="葬儀費用は?">
			        		</div>
			        		<div id="title1ImageBox">
			        			<h2>直葬プラン 275,000円（税込）</h2>
			        			<img src="images/title2img.jpg" width="200" height="119">
			        			<h3>火葬のみの最もシンプルな葬儀です</h3>

			        		</div>
			        		<div id="title1detail">
                            　　<img src="images/title2-detail.jpg" width="350" height="450"> </div>
                            <br/>
                            <br/>
                            <div id="title1ImageBox">
		        			  <h2>1日葬プラン 363,000円（税込）</h2>
		        			  　<img src="images/title3img.jpg" width="200" height="119">
			        			<h3>フラワー6尺祭壇（告別式のみ）</h3>

		        		  </div>
                            <br/>
			        		<div id="title1detail">
	        			    <img src="images/title3-detail.jpg" width="350" height="568"> </div>
                            <br/>
                            <br/>
                            <div id="title1ImageBox">
			        			<h2>家族葬プラン 429,000円（税込）</h2>
			        			<img src="images/title4img.jpg" width="200" height="119">
			        			<h3>白木6尺もしくはフラワー6尺祭壇</h3>

			        		</div>
			        		<div id="title1detail"><img src="images/title4-detail.jpg" width="350" height="568"></div>
			        		<p class="moreInfo">
			        		様々なプランをご用意いたします。<br>
							PC版ホームページもご覧ください。<br>
							<span><a href="../price/list01.php?mode=pc"><img class="icon" src="images/pcIcon.png"></a></span>
			        		</p>
			        	</div><!--end title1Container -->
			        	<div id="title2Container">
			        		<div id="title2" class="title mt60">
			        			<img src="images/title2.png" alt="どんなことに対応できるの?">
			        		</div>
			        		<div id="title2Main" class="mt10">
			        			<img src="images/title2main.png" alt="病院からの緊急搬送、葬儀に関するご相談から役所の手続き・火葬の手続き代行、又は墓石や仏壇のご相談、ご不安な点は些細なことでもご相談ください。">
			        		</div>
			        		<div id="mainTel" class="mt20">
		        				<a href="tel:0449753853"><img src="images/telButton.png"></a>
		        			</div>
			        	</div><!--end title2Container -->
			        	<div id="title3Container">
			        		<div id="title3" class="title mt60">
			        			<img src="images/title3.png" alt="会社概要">
			        		</div>
			        		<div id="title3Main" class="mt10">
			        			<img src="images/title3main.png" alt="神奈川県川崎市宮前区初山1丁目20番13号">
			        		</div>
			        		<p class="moreInfo mt20">

							<span ><a href="../price/list01.php?mode=pc"><img class="icon" src="images/pcIcon.png"></a></span>
			        		</p>

			        	</div><!--end title3Container -->

			        	<div id="title4Container">
			        		<div id="title4" class="title mt60">
			        			<img src="images/title4.png" alt="メールでのご依頼/お問い合わせ">
			        		</div>
			        		<?php
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
			        	</div><!--end title4Container -->
	        		</div><!--end main -->
	        		<div id="pageTopLink" class="mt30">
	        			<a href="#top"><img src="images/pageTopBt.png" width="110" height="33"></a>
	        		</div>
	        		<div id="footer">
	        		Copyright Anshin tenrei co., ltd.  All Rights Reserved.
	        		</div>


        		</div><!--end contents -->

		</div><!--end container-->
		<script src="js/jquery-1.12.3.min.js"></script>
		<script src="js/jquery.easing.1.3.js"></script>
		<script>
		$(function(){
			if($('body').hasClass('during')){
				window.location.hash = "title4Container";
			}

				// #で始まるアンカーをクリックした場合に処理
			$('a[href^="#"]').click(function() {
					// スクロールの速度
					var speed = 400; // ミリ秒
					// アンカーの値取得
					var href= $(this).attr("href");
					// 移動先を取得
					var target = $(href == "#" || href == "" ? 'html' : href);
					// 移動先を数値で取得
					var position = target.offset().top;
					// スムーススクロール
					$('body,html').animate({scrollTop:position}, speed, 'swing');
					return false;
			});

			function slideChange($target){
				//li要素を取り出す(jQuery配列)
				const $items=$target.find('li');
				let index=0;//表示する画像のindex

				function open(){
					$items.eq(index).fadeIn(1200,'easeInQuad',function(){setTimeout(change,5000)})
				}
				function close(){
					$items.eq(index).fadeOut(1200,'easeOutQuad');
				}
				function change(){
					close();
					//indexを画像枚数(0~3)で循環させる常套手段
					index=++index%$items.length;
					open();
				}
				open();

			}
			slideChange($('#slidelist'));
		});

		</script>
	</body>
</html>
