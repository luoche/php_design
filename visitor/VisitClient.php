<?php
namespace app\models\sheji\visitor;

class VisitClient {

	public function __construct ()
	{
		$li_person = new Article();

		$li_person->addArticle('李四','2017-06-10');


		$zhang_person = new Article();

		$zhang_person->addArticle('张三','2017-08-09');


		$wang_person = new Article();

		$wang_person->addArticle('王者','2018-01-02');

		// 如果新增属性不能在原来实例化的基础上--再修改

		$wang_level = new Level(3);
		$wang_person->getAttr($wang_level); 	// 如果是抽取功能部分
		$wang_person->getLevel($wang_level);	// 类独特的属性

		echo "<br/>";
		$li_num = new Num(32);
		$li_person->getAttr($li_num);

		//
	}
}
