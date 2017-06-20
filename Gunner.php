<?php

 namespace app\models\sheji;


class Gunner extends Kind {

	/**
	 * @var int 攻击力量是100  火枪手
	 */
	private $strength = 200;

	public function getStrength()
	{
		return $this->strength;
	}

}