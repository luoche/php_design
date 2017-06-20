<?php

namespace app\models\sheji\observer;

class Sql extends Observer {

	public $_observer;


	public function getMessage (Obserable $obserable)
	{
		$this->_observer = $obserable;

	    $info = $this->_observer->getInfo();

	    $this->return_message = "sql >> 用户:".$info['user'].",密码：".$info['password']."<br/>";


	    return $this->return_message;
	}
}