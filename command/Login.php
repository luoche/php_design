<?php
namespace app\models\sheji\command;


class Login {

	private $name;

	private $pass;

	private $login_user = [
		'user' => 'admin',
		'pass' => '123456',
	];

	public function __construct()
	{

	}

	
	public function execute(Context $context)
	{
		if($context->getParam('user') == $this->login_user['user'] && $context->getParam('pass') == $this->login_user['pass']){
			return True;
		}

		return False;
	}
}