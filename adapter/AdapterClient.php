<?php

namespace app\models\sheji\adapter;

class AdapterClient {


	public function __construct ()
	{


		$error_cls = new ErrorMessage('110:http request message');

		$log_cls = new LogToTxt($error_cls);

		$log_cls->writeLog();

		echo "1111<br>";
		$error_cls_2 =  new ErrorXmlAdapter('110:http request message');

		$log_cls_2 	 = new LogToXml($error_cls_2);

		$log_cls_2->writeLog();
		echo "2222<br>";

		exit();
	}




}