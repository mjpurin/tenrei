<?php $str=$mode=='reInput'? '修正後確認ボタンを押して下さい':'入力内容にエラーがあります。';?>
  <p class="mt20<?php if($mode=='hasError'){echo ' c_red';}?>"><?php echo $str;?></p>
<form method="post">
 <table id="tncForm">
   
     <tr><th><span class="must">必須</span>お名前</th>
     <td><input type="text" name="name" value="<?php echo htmlspecialchars($_SESSION['name']);?>">
     <?php
 if(count($errors['name'])>0){
 	echo '<br>';
 	echo '<span class="c_red">'.$errors['name'][0].'</span>';
}
?>
     </td></tr>
     <tr><th><span class="must">必須</span>メールアドレス</th>
       <td><input type="text" name="email" value="<?php echo htmlspecialchars($_SESSION['email']);?>">
       <?php
 if(count($errors['email'])>0){
 	foreach($errors['email'] as $err){
 		echo '<br>';
 		echo '<span class="c_red">'.$err.'</span>';
 	}
 	
}
?>
       </td></tr>
     <tr><th>ご住所</th>
     <td class="wide"><input type="text" name="address" value="<?php echo htmlspecialchars($_SESSION['address']);?>"></td></tr>
     <tr><th>電話番号</th>
     <td><input type="text" name="tel" value="<?php echo htmlspecialchars($_SESSION['tel']);?>"></td></tr>
     
     
     
       
     <tr><th><span class="must">必須</span>お問い合わせ内容</th>
       <td><textarea name="body"><?php echo htmlspecialchars($_SESSION['body']);?></textarea>
       <?php
 if(count($errors['body'])>0){
 	foreach($errors['body'] as $err){
 		echo '<br>';
 		echo '<span class="c_red">'.$err.'</span>';
 	}
 	
}
?></td></tr>
      
       
       <tr><td colspan="2" class="tac">
       <input type="submit" value="入力内容を確認する"></td></tr>
 </table>
 </form>