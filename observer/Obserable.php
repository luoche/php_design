<?php

namespace app\models\sheji\observer;
/**
 * 被观察者的公共类
 */
abstract class Obserable {

	/**
	 * 添加到不同的类
	 * @dates  2017-06-18
	 * @author wangyafei
	 * @return [type]     [description]
	 */
	abstract public function attach(Observer $observer);

	/**
	 * 移除某个依赖的类
	 * @dates  2017-06-18
	 * @author wangyafei
	 * @return [type]     [description]
	 */
	abstract public function detach(Observer $observer);

	/**
	 * 消息推送和通知
	 * @dates  2017-06-18
	 * @author wangyafei
	 * @return [type]     [description]
	 */
	abstract public function notify();
}