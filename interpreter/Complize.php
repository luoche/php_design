<?php
namespace app\models\sheji\interpreter;

class Complize {

	protected $assign_vars = [];


	public function assign ($field,$value) 
	{
		$this->assign_vars[$field] = $value;
	}

	public function display( $parse_str )
	{

		$parse_cls 	= new StrParse();
	    $parsed_str =  $parse_cls->display($this,$parse_str);

	    return $parsed_str;
	}
}