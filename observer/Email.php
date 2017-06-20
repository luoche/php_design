<?php

namespace app\models\sheji\observer;

class Email extends Observer {

	public $_observer;


	public function getMessage (Obserable $obserable)
	{
		$this->_observer = $obserable;

	    $info = $this->_observer->getInfo();

	    $this->return_message = "email >> 用户:".$info['user'].",使用密码：".$info['password']."登录错误，请查看原因"."<br/>";


	    return $this->return_message;
	}
}