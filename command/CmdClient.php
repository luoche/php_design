<?php
namespace app\models\sheji\command;

class CmdClient {

	public function __construct ()
	{

		$action_cls  = new Controller();
		$context_cls = $action_cls->getContext();

		$context_cls->setParam('action','Login');
		$context_cls->setParam('user','admin');
		$context_cls->setParam('pass','123456');

		$context_cls->setSuccess('你成功了');
		$context_cls->setError('ERROR');

		$action_cls->process();

		$action_cls  = new Controller();
		$context_cls = $action_cls->getContext();
		$context_cls->setParam('action','FeedBack');
		$context_cls->setParam('title','1111');
		$context_cls->setParam('content','222');
		$context_cls->setParam('create_time','222');

		$context_cls->setSuccess('insert 成功了');
		$context_cls->setError('insert error');

		$action_cls->process();
	}
}
