<?php
namespace app\models\sheji\decorator;
/**
 * 公共的区域类
 * Class Tile
 */
class Plain extends Tile {

	/**
	 * @var integer 对应区域的经验值
	 */
	protected $experience = 5;

	/**
	 *  获取经验值
	 * @return mixed
	 */
	public function getExperience(){
		return $this->experience;
	}
}