<?php

namespace app\models\sheji\visitor;

class Level extends OAddAttr {

	public $level;

	
	public function __construct ($level)
	{
		$this->level = $level;
	}

	public function getAttr(Article $article)
	{
		echo $article->user_id.':的等级是'.$this->level."<br/>";
	}



	public function getLevel (Article $article)
	{
		echo '这里是等级<br/>';
	}
}