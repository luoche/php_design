<?php

namespace app\models\sheji\decorator;
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2017/5/20
 * Time: 22:16
 */
class DecoratorClient {

	public function __construct()
	{
		echo "查看平原地区情况------------";

		echo "<br/>";

		echo "普通区域：";
		$plain_cls = new Plain();
		echo $plain_cls->getExperience();
		echo "<br/>";

		echo "干净区域：";
		$clean = new Clean($plain_cls);

		$clean_ex = $clean->getExperience();
		echo $clean_ex;
		echo "<br/>";


		// 使用一个return 还是蛮不错的
		echo "dirty区域：";
		$dirty = new Dirty($plain_cls);
		$dirty_ex = $dirty->getExperience();
		echo $dirty_ex;
		echo "<br/>";


		echo "<br/>";
		echo "<br/>";
		echo "干净区域 +dirty区域：";

		// 实例化一次 就相当于 加一层修饰
		$clean_plus = new Clean($plain_cls);
		$clean_dirty_plus = new Dirty($clean_plus);

		echo $clean_dirty_plus->getExperience();
		echo "<br/>";
		echo "<br/>";


		// 高山区域的不在重复编写 和 平原的一样



	}
}