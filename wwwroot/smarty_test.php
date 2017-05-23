<?php
//samarty_test_c.php



require_once (__DIR__.'/vendor/smarty-3.1.30/libs/Smarty.class.php');

$smarty_obj = new Smarty();

$smarty_obj->setTemplateDir(__DIR__.'/../smarty/templates/' ) ;
$smarty_obj->setCompileDir(__DIR__.'/../smarty/templates_c/' ) ;


$smarty_obj->display('smarty_test.tpl');

 // Smartyへのデータの入力テスト
$smarty_obj->assign('val' .$a);

$awk['a'] = '配列のa';
$awk['b'] = '配列のb';
$smarty_obj->assign('ar' , awk);

$smarty_obj->display('smarty_test.tpl');