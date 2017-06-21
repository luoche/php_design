<?php
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2017/6/21
 * Time: 22:48
 */

namespace app\models\sheji\builder;


class BuilderClient {

	/**
	 * 调用方法
	 *  多个类的调用
	 *
	 * BuilderClient constructor.
	 */
	public function __construct()
	{

		$a_client = new AClient();

		$b_client = new BClient();


	}

}