<?php

namespace app\models\sheji\visitor;

class Num extends OAddAttr {

	public $num;

	
	public function __construct ($num)
	{
		$this->num = $num;
	}

	public function getAttr(Article $article)
	{
		echo $article->user_id.':的数量是'.$this->num."<br/>";
	}


	public function getNum (Article $article)
	{
		echo '这里是数量<br/>';
	}
}