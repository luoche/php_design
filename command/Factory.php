<?php
namespace app\models\sheji\command;


/**
 * 主要是为了解决多个参数
 *
 * 
 */
class Factory {

	public $action_obj;


	public static function getInstance ($class_name)
	{
		$class_new_name = ucfirst($class_name);

		// 框架下暂时无法实现

//		$str = "Login";
		if ($class_new_name == 'Login') {
			return new Login();
		} else {
			return new FeedBack();
		}
//		var_dump($class_new_name);

//		return new $class_new_name"()";
//		exit()
//		$class_nick = $class_new_name.'.php';
//		return new $class_new_name();
	}


}