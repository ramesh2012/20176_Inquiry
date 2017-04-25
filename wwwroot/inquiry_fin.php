<?php

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

// �K�{�`�F�b�N

$must_params = array('email','body');
foreach($must_params as $p){
    if ('' === $input_data[$p]){
        // �G���[����
        $error_detail["error_must_{$p}"] = true;
    }
}

// �^�`�F�b�N: email

// XXX RFC ��
if (false === filter_var($input_data['email'], FILTER_VALIDATE_EMAIL)) {
    //�G���[����
   $error_detail["error_format_email"] = true;
 }
 // �^�`�F�b�N�F���t
if ('' !== $input_data['birthday']) {
    if (false === strtotime($input_data['birthday'])) {
        // �G���[����
        $error_detail["error_format_birthday"] = true;
    }
}

 // �G���[����

if (array() !== $error_detail){

var_dump($error_detail);
   echo '�G���[���������炵��';
   exit;
 }
echo 'OK �ł����I�I';
