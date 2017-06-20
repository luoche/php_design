<?php

namespace app\models\sheji\observer;
/**
 * 观察者的抽象类
 */
abstract class Observer {

	protected $return_message;



	abstract function getMessage(Obserable $obserable);


}