<?php
namespace app\models\sheji\interpreter;

class InterpreterClient {

	$complize_cls = new Complize();

	// 变量的赋值
	$complize_cls->assign('name','wang');
	$complize_cls->assign('sex','1');


	// 待解析的字符串
	$need_parse_str = '';

	$complize_cls->display($need_parse_str);

}