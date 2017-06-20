<?php
namespace app\models\sheji\adapter;

class LogToTxt {

	private $errorMessage;

	public function __construct(ErrorMessage $errorMessage)
	{
		$this->errorMessage = $errorMessage;
	}

	/**
	 *  写入的日志 txt
	 */
	public function writeLog ()
	{
		$error = $this->errorMessage->getError();


		$log_path = \Yii::$app->basePath.'/models/sheji/adapter/log.txt';

		fwrite(fopen($log_path,'a+'),$error);

	}
}