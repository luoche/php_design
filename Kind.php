<?php

namespace app\models\sheji;


abstract class Kind {

	/**
	 * @var array kind 实例化数组 里面可以是不同的类对象
	 */
	protected $_kind =[];

	/**
	 *  公共方法
	 * @param Kind $kind
	 * @return mixed
	 */
	public function addKind(Kind $kind) {
		$this->_kind[] = $kind;
	}

	/**
	 * 获取单个兵种的攻击力量
	 * @return mixed
	 */
	abstract public function getStrength();

}