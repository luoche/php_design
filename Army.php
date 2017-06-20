<?php

namespace app\models\sheji;

class Army extends Kind {

	protected $strength = 0;

	public function getStrength() {
		foreach ($this->_kind as $kind) {
			$this->strength += $kind->getStrength();
		}

		$this->strength += $kind->getStrength();
		return $this->strength;
	}

}