	<p class="mt20">以下の内容でよろしければ送信ボタンを押して下さい。</p>
<form method="post">
 <table id="tncForm">
   
     <tr><th>お名前</th>
     <td><?php echo htmlspecialchars($_SESSION['name']);?></td></tr>
     <tr><th>メールアドレス</th>
       <td><?php echo htmlspecialchars($_SESSION['email']);?></td></tr>
     <tr><th>ご住所</th>
     <td><?php echo htmlspecialchars($_SESSION['address']);?></td></tr>
     <tr><th>電話番号</th>
     <td><?php echo htmlspecialchars($_SESSION['tel']);?></td></tr>
     <tr><th>お問い合わせ内容</th>
       <td><?php echo nl2br(htmlspecialchars($_SESSION['body']));?>
       </td></tr>
      
       
       <tr><td colspan="2" class="tac">
       <input type="submit" name="back" value="戻る" class="mr10">
       <input type="submit" name="send" value="送信する">
       </td></tr>
 </table>
 </form>