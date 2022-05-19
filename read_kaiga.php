<?php
// ファイルを開く
$openfile = fopen("kaida.txt", "r");

// ファイル内容を1行ずつ読み込んで出力
while($str = fgets($openfile)){
    // textファイルの改行タブ(\n)があったらbrしてという命令
    echo nl2br($str);
}
// ファイルを閉じる
fclose($openfile)
?>