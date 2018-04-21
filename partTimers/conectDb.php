<?php
// DBサーバーへ接続
$db_link = mysqli_connect( 'localhost', 'root', '');

// DBへ接続 (パラメータの順番が違う)
mysqli_select_db( $db_link, 'mydb');

// クエリの実行 (パラメータの順番が違う)
$data = mysqli_query( $db_link, 'SELECT * FROM items');
$sea = mysqli_fetch_assoc($data);
echo $sea['name'];
// DBとの接続解除
mysqli_close($db_link);
 ?>
