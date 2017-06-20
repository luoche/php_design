<?php
namespace app\models\sheji\interpreter;

class StrParse extends IParse {

	public function display ( Complize $complize, $str)
	{
		$replace = $complize->assign_vars;
		
		return $str;
	}
}