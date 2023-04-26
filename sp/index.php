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
                        <br/>
                        <p><strong><font size="+1">～LINEでお問い合わせが可能です～</font></strong><br/>
                        <br/>
                        <strong>以下の手順でLINEの友だち追加をしてください</strong>
<br/>
<br/>
<a href="https://lin.ee/xQ2akmQ" target="new"><font color="#0000FF">https://lin.ee/xQ2akmQ</font></a><br/>
<br/>
<font color="#000000">
1.上記のURLをタップ。<br/>
2.LINEの友だち追加画面が開きます。<br/>
3.株式会社 安心典礼『追加ボタン』をタップ。<br/>
4.友だち追加完了。<br/>
5.トークに株式会社 安心典礼からのご案内が届きます。</font></p>
                        <br/>
                        <br/>
	        		  <p class="mainStrings">
                        安心典礼 今月（4月）のお話<br/>
                        <br/>
                        ～灌仏会（花まつり）～<br/>
今年は例年よりも桜の開花が早く、3月下旬には関東でも満開を迎えました。季節の移り変わり、1年が経つのはあっという間に感じます。3月13日からマスク着用が個人の判断とのアナウンスが政府から発せられ、街中や商業施設、交通機関においても素顔の人々の割合が増えてきた印象です。子どもから年配の方まで多くの笑顔が溢れる世の中に戻ってほしいものです。<br/>
<br/>
4月は仏教においてはお釈迦様の生誕を祝う灌仏会（かんぶつえ）が4月8日に行われます。この灌仏会は別名「花まつり」とも呼ばれます。由来は諸説ありますが、お釈迦様がルンビニー（ネパール南部タライ平原にある小さな村）の花園で生まれたことから「花まつり」になったというものや、4月初旬は桜を初めいろいろな花が咲き出すことからお釈迦様の誕生を「花まつり」という名前で祝うようになった等があります。<br/>
<br/>
花まつりでは、お釈迦様が生まれた時の姿の立像（誕生仏）に甘茶を（「アマチャ」という木の葉を煎じて作った飲み物）優しくかけて拝みます。これは天に9頭の龍が現れて聖なる水を吐き、それを産まれたばかりのお釈迦様の産湯に使ったという伝説にちなんでいます。<br/>
<br/>
また、お釈迦様の誕生秘話として、生まれてすぐに立ち上がって7歩歩き、右手で天を指し、左手では地を指して、「天上天下唯我独尊（てんじょうてんがゆいがどくそん）」と言ったという伝説が言い伝えられています。この言葉の意味は、「すべての人は平等で、尊い使命を持って生まれたきた」という意味があります。<br/>
<br/>
また、寺院を訪れた人々にも振る舞われる甘茶は、神様の飲み物で、飲むと不老不死になれるという言い伝えもあります。<br/>
<br/>
弊社フューネラルホール使用の「家族葬プラン」は、ホールの利用料を含んでおり、葬儀費用を抑えることが可能です。（※白木祭壇使用）約30名が参列可能なプライベートの空間でゆっくりと故人さまを偲んでいただけます。人生最後のセレモニーを心を込めてサポートさせていただきます。<br/>
<br/>
低価格帯のご葬儀プランには、フラワー祭壇を使用する「きずな葬」、「つばさ葬」（告別式のみ）もございます。故人さま、ご親族さまのご要望に寄り添った最適なプランをご提案させていただきます。<br/>
<br/>
また弊社では、様々な宗教・宗派でのご葬儀も承っております。特に溝の口キリスト教会ウインディチャペルにおきましては、これまで数多くのキリスト教式のご葬儀を執り行わせていただきました。～<a href="../windy.php"><font color="#0000FF">こちらから</font></a>～<br/>
<br/>
今後とも地域の皆様のニーズにお応え出来るよう努力していく所存でございます。<br/>
川崎市葬儀/宮前区葬儀/真心の葬儀<br>
<br>
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
                            <br/>
                            <div id="title1ImageBox">
			        			<h2>家族葬プラン 418,000円（税込）</h2>
			        			<img src="images/new-family.jpg" width="200" height="119">
			        			<h3>弊社ホールご利用（白木祭壇4段）限定<br/>
                                （通夜・告別式）</h3>
			        		</div>
			        		<div id="title1detail"><img src="images/new-family-detail.jpg" width="350" height="568"></div>
                            <br/>
                            <br/>
                            <br/>
                            <div id="title1ImageBox">
			        			<h2>きずな葬プラン 429,000円（税込）</h2>
			        			<img src="images/title4img.jpg" width="200" height="119">
			        			<h3>白木6尺もしくはフラワー6尺祭壇<br/>
                                （通夜・告別式）</h3>
			        		</div>
			        		<div id="title1detail"><img src="images/title4-detail.jpg" width="350" height="568"></div>
                            <br/>
                            <br/>
                            <br/>
                            <div id="title1ImageBox">
                                <h2>つばさ葬プラン 363,000円（税込）</h2>
                                <img src="images/title3img.jpg" width="200" height="119">
			        			<h3>フラワー6尺祭壇（告別式のみ）</h3>
                            </div>
			        		<div id="title1detail">
	        			    <img src="images/title3-detail.jpg" width="350" height="568"></div>
                            <br/>
                            <br/>
                            <br/>
			        		<div id="title1ImageBox">
			        			<h2>火葬プラン 275,000円（税込）</h2>
			        			<img src="images/title2img.jpg" width="200" height="119">
			        			<h3>火葬のみの最もシンプルな葬儀です</h3>
                            </div>
			        		<div id="title1detail">
                            <img src="images/title2-detail.jpg" width="350" height="450"></div>
                            <br/>
                            <br/>
                            
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
