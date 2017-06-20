<?php

namespace app\models\sheji;

class Swordman extends Kind {

	/**
	 * @var int 攻击力量是100  射手
	 */
	private $strength = 100;

	public function getStrength()
	{
		return $this->strength;
	}

}