<?php

namespace app\models\sheji\command;

/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2017/6/19
 * Time: 22:51
 */

class FeedBack {

	private $title;

	private $content;

	private $create_time;


	public function __construct( )
	{

	}


	public function execute (Context $context)
	{
		if(!empty($context->getParam('title')) && !empty($context->getParam('content')) && !empty($context->getParam('create_time')) ){
			return True;
		}

		return False;
	}
}