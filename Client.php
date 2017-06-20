<?php

namespace app\models\sheji;


class Client {


	public function __construct () {

		$army1 = new Army();

		$army1->addKind(new Swordman());
		$army1->addKind(new Swordman());
		$army1->addKind(new Gunner());

		$all = $army1->getStrength();
		echo $all;

		echo "<br/>";



		$army2 = new Army();

		$army2->addKind(new Swordman());
		$army2->addKind(new Swordman());
		$army2->addKind(new Gunner());

		$all = $army2->getStrength();
		echo $all;
		echo "<br/>";

		$army3 = new Army();
		$army3->addKind($army1);
		$army3->addKind($army2);
		$all = $army2->getStrength();
		echo $all;
		echo "<br/>";

		$army4 = new Sea();
		$army4->addKind(new Swordman());
		$army4->addKind(new Swordman());
		$all = $army2->getStrength();
		echo $all;
		echo "<br/>";

		$merge = new Sea();

		$merge->addKind($army3);
		$merge->addKind($army4);
		$all = $army2->getStrength();
		echo $all;
		echo "<br/>";
	}

}