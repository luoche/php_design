<?php
namespace app\models\sheji\visitor;

/**
 * Created by PhpStorm.
 * User: wang
 * Date: 2017/6/18
 * Time: 19:23
 */

class Article {


	public $user_id;


	public $create_time;

	public function addArticle ( $user_id, $create_time )
	{
		$this->user_id = $user_id;
		$this->create_time = $create_time;


		echo '用户'.$this->user_id.'与'.$this->create_time.'创建了一篇文章'."<br/>";
	}

	public function getAttr ( OAddAttr $addAttr )
	{
		$addAttr->getAttr($this);
	}

	/**
	 * 一般而言添加的方法如level 都是独立的 不会把多个抽出公共部分
	 *
	 * @param Level $level
	 */
	public function getLevel ( Level $level )
	{
		$level->getLevel($this);
	}




}