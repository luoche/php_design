<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2017/6/21
 * Time: 22:51
 */

namespace app\models\sheji\builder;
use yii\helpers\ArrayHelper;

/**
 * Class ProductBuilder
 *  专门针对 Product封装的 build类
 *
 * @package app\models\sheji\builder
 */
class ProductBuilder
{

	/**
	 * @var Product 商品的实例化原型
	 */
	public $product;

	public function __construct()
	{
		if (!$this->product instanceof Product) {
			$this->product = new Product();
		}
	}

	/**
	 *
	 * $param = [
	 * 		'color' => 'red',
	 * 		'size' => '12',
	 * 		'num' => '11',
	 * ]
	 * @param array $param_arr 参数数组
	 *
	 */
	public function build ( $param_arr )
	{
		$color = ArrayHelper::getValue($param_arr,'color','');
		if(!empty($color)) {
			$this->product->setColor($color);
		}

		$size = ArrayHelper::getValue($param_arr,'size','');
		if(!empty($size)) {
			$this->product->setSize($size);
		}

		$num = ArrayHelper::getValue($param_arr,'num','');
		if(!empty($num)) {
			$this->product->setNum($num);
		}
	}

	/**
	 *  获取结果产品的输出
	 */
	public function getProduct ()
	{
		$this->product->getResult();
	}
}