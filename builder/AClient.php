<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2017/6/21
 * Time: 22:49
 */

namespace app\models\sheji\builder;


class AClient
{
	/**
	 *  特有的属性
	 */
	const ATTR = [
		'size' 	=> 12,
		'num' 	=> 12,
		'color' => 'yellow',
	];


	public function __construct()
	{
		$cls = new ProductBuilder();

		// 简化了步骤的设置, 修改方法的时候统一。
		$cls->build(self::ATTR);

		$cls->getProduct();
	}
}