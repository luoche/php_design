<?php

namespace app\models\sheji\adapter;

/**
 * Class ErrorXmlAdapter
 * 处理不同的日志参数要求。  xml的writeLog 中 有要求的参数来在这边中转
 * 	还可以是方法名称的更换。
 * 	xml可以是一个已经完成的项目  ErrorMessage 已经上线不可能更改
 *
 *  此类就是为了 1.获取差异性的 属性
 *	2. 方法的重写 返回参数的在处理
 *  3. 重命名function
 *
 * @package app\models\sheji\adapter
 */
class ErrorXmlAdapter extends ErrorMessage {

	/**
	 * @var integer 错误行数
	 */
	private $line;

	/**
	 * @var string  错误信息
	 */
	private $message;

	public function __construct($error)
	{
		parent::__construct($error);

		$temp = explode(":",$error);

		// 特殊字段 line message--新增字段
		$this->line 	= $temp[0];
		$this->message	= $temp[1];
	}

	/**
	 * 获取的特殊属性
	 * @return integer
	 */
	public function getLine ()
	{
		return $this->line;
	}

	/**
	 * 获取的特殊属性
	 * @return integer
	 */
	public function getMessage ()
	{
		return $this->message;
	}

	/**
	 * 改写 和 重命名的方法--便于统一化管理
	 * @return string
	 */
	public function getInfo()
	{
		return 'xml.'.$this->getBasicInfo();
	}
}