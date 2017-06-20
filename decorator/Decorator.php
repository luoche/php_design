<?php
namespace app\models\sheji\decorator;
/**
 * 公共的区域类--用于处理 clean 和 putty
 *
 * 因为是抽象类 所以不需要实现 experience
 *
 *
 * 	》》 继承和组合了 Tile的类
 * 		集成是为了获取他的属性 experience（）
 * 		组合 ： 实例化的对象的处理
 *
 * Class Tile
 */
abstract class Decorator extends Tile {

	/**
	 * @var object tile的实现类的对象
	 */
	protected $tile;

	/**
	 * 还是通过构造方法来把
	 * Decorator constructor.
	 * @param Tile $tile
	 */
	public function __construct(Tile $tile)
	{
		$this->tile = $tile;

		return $this->tile;
	}

	/*public function addDecoTile (Tile $tile) {
		$this->tile = $tile;

		return $this->tile;
	}*/
}