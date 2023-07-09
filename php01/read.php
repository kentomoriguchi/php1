<table>
  <th>日時</th>
  <th>名前</th>
  <th>E-mail</th>
  <th>年齢</th>
  <th>職業</th>
  <th>きっかけ</th>
  <th>コスパ</th>
  <th>満足度</th>
  <th>勧めたいか</th>

<?php
$file = fopen('data/data.txt', 'r');// ファイルを開く

// ファイル内容を1行ずつ読み込んで出力
while ($str = fgets($file)) {
    //echo nl2br($str); // nl2br() ... 改行文字を追加

    $arr = explode("," , $str);

    echo '<tr>';
    foreach ($arr as $arr) {
        echo '<td>' . $arr . '</td>';
    }
    echo '</tr>';
}
fclose($file); // ファイルを閉じる
?>
</table>



<html>
<head>
<meta charset="utf-8">
<title>アンケート表</title>
<link rel="stylesheet" href="css/style.css">
</head>
<body>

</body>
</html>
