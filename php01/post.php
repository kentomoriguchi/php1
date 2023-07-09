<html>
<head>
<meta charset="utf-8">
<title>POST練習</title>
</head>
<body>
<form action="write.php" method="post">
	お名前: <input type="text" name="name"><br>
	E-mail: <input type="text" name="mail"><br>
	年齢: <select name="age" id="age">
		<option value="">選択してください</option>
		<option value="10代">10代</option>
		<option value="20代">20代</option>
		<option value="30代">30代</option>
		<option value="40代">40代</option>
		<option value="50代">50代</option>
		<option value="60代">60代</option>
		<option value="70代以上">70代以上</option>
	</select><br>
	職業: <select name="profession" id="profession">
		<option value="">選択してください</option>
		<option value="学生">学生</option>
		<option value="会社員">会社員</option>
		<option value="公務員">公務員</option>
		<option value="自営業">自営業</option>
		<option value="パート・アルバイト">パート・アルバイト</option>
		<option value="専業主婦">専業主婦</option>
		<option value="フリーター">フリーター</option>
		<option value="その他">その他</option>
	</select><br>
	商品を知ったきっかけ: <select name="chance" id="chance">
		<option value="">選択してください</option>
		<option value="インターネット検索">インターネット検索</option>
		<option value="インターネット広告">インターネット広告</option>
		<option value="Instagram">Instagram</option>
		<option value="Facebook">Facebook</option>
		<option value="Twitter">Twitter</option>
		<option value="紹介">紹介</option>
		<option value="その他">その他</option>
	</select><br>
	コストパフォーマンス: <select name="cp" id="cp">
		<option value="">選択してください</option>
		<option value="非常に高い">非常に高い</option>
		<option value="高い">高い</option>
		<option value="普通">普通</option>
		<option value="低い">低い</option>
		<option value="非常に低い">非常に低い</option>
	</select><br>
	満足度: <select name="cs" id="cs">
		<option value="">選択してください</option>
		<option value="非常に満足">非常に満足</option>
		<option value="満足">満足</option>
		<option value="普通">普通</option>
		<option value="不満">不満</option>
		<option value="非常に不満">非常に不満</option>
	</select><br>
	友人や家族に勧めたいか: <select name="recommend" id="recommend">
		<option value="">選択してください</option>
		<option value="とてもそう思う">とてもそう思う</option>
		<option value="そう思う">そう思う</option>
		<option value="そう思わない">そう思わない</option>
		<option value="全くそう思わない">全くそう思わない</option>
	</select><br>

	<input type="submit" value="送信">
</form>
<ul>
<li><a href="post.php">post.php</a></li>
</ul>
</body>
</html>