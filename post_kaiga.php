<?php
// POSTを受け取る
// POSTの場合はパスワードも送ってみる。
$name = $_POST["name"];
$age = $_POST["age"];
$gender = $_POST["gender"];
$kibun = $_POST["kibun"];
$kanzyo = $_POST["kanzyo"];

// ファイルを開く
$file = fopen("kaida.txt","a");
// ファイルに書き込む
fwrite($file, $name . $age . $gender . $kibun . $kanzyo . "\n");
// ファイルに保存
fclose($file);

?>
<html>

<head>
    <meta charset="utf-8">
    <title>kaiga受け取る</title>
</head>

<body>
    お名前：<?= $name ?>
    年齢：<?= $age ?>
    性別：<?= $gender ?>
    気分：<?= $kibun ?>
    感情：<?= $kanzyo ?>
    <ul>
        <li><a href="read_kaiga.php">確認する</a></li>
    </ul>
</body>

</html>
