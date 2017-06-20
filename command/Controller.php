<?php
namespace app\models\sheji\command;

/**
 * Class Controller
 *  实例化的方法 调用Context 和 Factory
 */
class Controller {

	private $context;

	public function __construct()
	{
		$this->context = new Context();
	}


	public function getContext ()
	{
		return $this->context;
	}

	public function process ()
	{
		$class_name = $this->context->getParam('action');

		$factory_common_cls = Factory::getInstance($class_name);

		$flag = $factory_common_cls->execute($this->context);

		if ($flag) {
			return $this->context->getSuccess();
		} else {
			return $this->context->getError();
		}
	}
}