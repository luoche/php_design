<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2017/6/21
 * Time: 22:49
 */

namespace app\models\sheji\builder;


class BClient
{
	/**
	 * 特有的属性
	 */
	const ATTR = [
		'size' 	=> 11,
		'num' 	=> 11,
		'color' => 'red',
	];

	public function __construct()
	{
		$cls = new ProductBuilder();
		$cls->build(self::ATTR);

		$cls->getProduct();
	}
}