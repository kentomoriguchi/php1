<?php
function h($value){
    return htmlspecialchars($value,ENT_QUOTES);
}

$name = h($_GET["name"]);
$mail = h($_GET["mail"]);



?>
<html>
<head>
<meta charset="utf-8">
<title>GET練習（受信）</title>
</head>
<body>
<!-- <?= $name ?> -->
お名前：<?php echo $name ?>
Mail：<?= $mail ?>
<ul>
<li><a href="index.php">index.php</a></li>
</ul>
</body>
</html>