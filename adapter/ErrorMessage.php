<?php
namespace app\models\sheji\adapter;

class ErrorMessage {

	/**
	 * @var string 统一的错误信息
	 */
	private $error;

	
	public function __construct( $error )
	{
		$this->error = $error;
	}


	public function getError()
	{
		return $this->error."\n\r";
	}

	/**
	 * 最初版本的返回信息
	 * @return string
	 */
	public function getBasicInfo()
	{
		return '功能的返回方法';
	}
}