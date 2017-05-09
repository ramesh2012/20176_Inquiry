<?php

ob_start();
session_start();

/*
$email = (string)@$_POST['email'];
$email = (string)filter_input(INPUT_POST, 'email');
*/
$params = array('email','name','birthday','body');

$input_data = array();
foreach($params as $p) {
 $input_data[$p] = (string)@$_POST[@p];
}
var_dump($input_data);
// 

$error_details = array();

// 必須チェック

$must_params = array('email','body');
foreach($must_params as $p){
    if ('' === $input_data[$p]){
        // エラー処理
        $error_detail["error_must_{$p}"] = true;
    }
}

// 型チェック: email

// XXX RFC 非
if (false === filter_var($input_data['email'], FILTER_VALIDATE_EMAIL)) {
    //エラー処理
   $error_detail["error_format_email"] = true;
 }
 // 型チェック：日付
if ('' !== $input_data['birthday']) {
    if (false === strtotime($input_data['birthday'])) {
        // エラー処理
        $error_detail["error_format_birthday"] = true;
    }
}

 // エラー判定

if (array() !== $error_detail){
  $_SESSION['buffer']['error_detail']=$error_detail;

$_SESSION['buffer']['input']=$input_data;

// var_dump($error_detail);
   // echo 'エラーがあったらしい';
 header('Location:./inquiry.php');   
exit;
 }
echo 'データのvalidation OK でした！！';
