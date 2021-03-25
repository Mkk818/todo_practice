<?php

// ファイルの読み込み
// dbconnectを呼びたくなるが、Modelsの中のModel.phpにdbconnectが入っているのと、Task.phpでModel.phpを読んでいるので
require_once('Models/Task.php');

// データの受け取り
// スーパーグローバル変数
$title = $_POST['title'];
$contents = $_POST['contents'];
$currentTime = date("Y/m/d H:i:s");
// DBへのデータ保存
$task = new Task();
$task->create([$title, $contents, $currentTime]);

// リダイレクト
// create.php → store.php → index.phpを
// create.php → index.phpに見せたい
header('location:index.php');
exit;
