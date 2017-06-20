<?php

namespace app\models\sheji\decorator;

/**
 * 干净区域的--
 *
 *  	最终集成
 *
 * Class Tile
 */
class Clean extends Decorator {

	/**
	 * 干净区域的分数加成
	 */
	const EXPERIENCE_CHANGE = 2;

	/**
	 *  获取经验值
	 * @return mixed
	 */
	public function getExperience(){
		return $this->tile->getExperience()+self::EXPERIENCE_CHANGE;
	}
}