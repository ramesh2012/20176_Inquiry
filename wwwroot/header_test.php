<?php
// test header php

//ヘッダを出力するのでバッファリング
ob_start();


// 少し待つ
sleep(3);
//余計な出力

echo'test';


//移動させる
header('Location:http://google.com');

?>