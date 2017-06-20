<?php
namespace app\models\sheji\adapter;

/**
 * Class LogToXml
 * 格式和 txt的基本差别 只是保存的信息不一样 只不过参数不一样
 * 差异有 adapter来处理
 *
 * @package app\models\sheji\adapter
 */
class LogToXml {

	private $errorMessage;


	/**
	 * LogToXml constructor.
	 * 实例化对象 必须是AdapterXmlObject
	 *
	 * @param ErrorMessage $errorMessage
	 */
	public function __construct(ErrorMessage $errorMessage)
	{
		$this->errorMessage = $errorMessage;

	}

	/**
	 *  写入日志 xml
	 */
	public function writeLog ()
	{
		$log_path = \Yii::$app->basePath.'/models/sheji/adapter/log.xml';
		$xml_str = "<root>\r\n";
		$xml_str.= "<line>".$this->errorMessage->getLine()."</line>\r\n";
		$xml_str.= "<message>".$this->errorMessage->getMessage()."</message>\r\n";
		$xml_str.= "</root>"."\r\n";

		file_put_contents($log_path,$xml_str);

	}
}