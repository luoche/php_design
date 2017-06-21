<?php
namespace app\models\sheji\builder;
/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2017/6/21
 * Time: 22:34
 */
class Product {

	/**
	 * @var string product的颜色
	 */
	private $color;

	/**
	 * @var integer product的尺寸
	 */
	private $size;

	/**
	 * @var integer product的大小
	 */
	private $num;


	public function setColor ( $color )
	{
		$this->color = $color;
	}


	public function setSize ( $size )
	{
		$this->size = $size;
	}

	public function setNum ( $num )
	{
		$this->num = $num;
	}

	public function getResult (  )
	{
		echo  '该产品的颜色：'.$this->color.':尺寸:'.$this->size.':大小:'.$this->num."<br/>";
	}


}