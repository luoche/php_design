<?php

namespace app\models\sheji\observer;

/**
*  设计观察者的模式--调用客户端
*/
class ObClient
{
	

	public function __construct () 
	{
		$login = new Login('admin',1111);

		$sql_cls = new Sql();

		$email_cls = new Email();

		$login->attach($sql_cls);

		$login->attach($email_cls);


		$login->notify();

		echo "<br/><br/>";
		$login2_cls = new Login('admin',222);

		$login2_cls->attach($sql_cls);
		$login2_cls->attach($email_cls);

		$login2_cls->detach($sql_cls);

		$login2_cls->notify();

		// 类似 不同的实例化 绑定不同的components
		// 每个component 实现不同的操作

		
	}
	



}