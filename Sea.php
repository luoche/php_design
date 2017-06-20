<?php

namespace app\models\sheji;

class Sea extends Kind {

	protected $strength = 0;

	const MIN_SWORD_STR = 10;
	const MIN_GUN_STR   = 20;


	public function getStrength() {

		foreach ($this->_kind as $kind) {

			if ($kind instanceof Swordman) {
				$_temp_strength = $kind->getStrength()-self::MIN_SWORD_STR;
			}

			if ($kind instanceof Gunner) {
				$_temp_strength = $kind->getStrength()-self::MIN_GUN_STR;
			}
			$this->strength += $_temp_strength;
		}

		return $this->strength;
	}

}