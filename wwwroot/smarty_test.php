<?php
//samarty_test_c.php



require_once (__DIR__.'/vendor/smarty-3.1.30/libs/Smarty.class.php');

$smarty_obj = new Smarty();

$smarty_obj->setTemplateDir(__DIR__.'/../smarty/templates/' ) ;
$smarty_obj->setCompileDir(__DIR__.'/../smarty/templates_c/' ) ;


$smarty_obj->display('smarty_test.tpl');

 // Smarty�ւ̃f�[�^�̓��̓e�X�g
$smarty_obj->assign('val' .$a);

$awk['a'] = '�z���a';
$awk['b'] = '�z���b';
$smarty_obj->assign('ar' , awk);

$smarty_obj->display('smarty_test.tpl');