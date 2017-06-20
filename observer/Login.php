<?php

namespace app\models\sheji\observer;

/**
*  登录注册 背时被观察着。 有成功和失败。等等触发
*/
class Login extends Obserable
{
	private $user_arr = [
		'admin' => 1111
	];

	/**
	 * 私有属性 用户的登录名
	 * @var string
	 */
	private $name;

	/**
	 * 私有属性 用户的密码
	 * @var string
	 */
	private $password;

	protected $login_flag = False;

	/**
	 * 关联的类
	 * @var [type]
	 */
	private $_observers = [];

	public function __construct($name, $password)
	{
		$this->name     = $name;
		$this->password = $password;

		$this->checkLogin();
	}


	public function checkLogin ()
	{
	    $user_keys = array_keys($this->user_arr);

	    if (in_array($this->name, $user_keys) && $this->password == $this->user_arr[$this->name]) {
			$this->login_flag = True;
	    }

	    // $this->notify();
	}


	public function getInfo ()
	{
	    return [
	    	'user' => $this->name,
	    	'password' => $this->password,
	    ];
	}





	public function attach (Observer $observer)
	{
	    if (empty($this->_observers) || !in_array($this->observer,$this->_observers)) {
	    	$this->_observers[] = $observer;
	    }
	}

	function myDiff($a,$b)
	{
	    if ($a === $b) {
	    	return 0;
	    }

	    return 1;
	}


	public function detach (Observer $observer)
	{
	    if (empty($this->_observers)) {
	    	return False;
	    }

	    if (in_array($observer,$this->_observers)) {
	    	$this->_observers = array_udiff($this->_observers,array($observer),create_function( 
		    '$a,$b', 
		    'return ($a === $b) ? 0 :1; ') );
	    }

	}

	

	public function notify()
	{
		// var_dump($this->_observers);

		foreach ($this->_observers as $ko => $observer) {
			echo $observer->getMessage($this);
		}


	}
   


 }