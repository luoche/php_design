<?php
namespace app\models\sheji\command;


/**
 * 主要是为了解决多个参数
 * 	 setParam()
 * 	 getParam()
 * 	 setSuccess()
 * 	 setError()
 * 	 getSuccess()
 * 	 getError()
 * 
 */
class Context {

	public $_params = [];

	private $success_info = '';

	private $error_info = '';

	public function setParam ($field, $value)
	{
		$this->_params[$field] = $value;
	}

	public function getParam ($field)
	{
		// TODO 待修改 完善
		return $this->_params[$field];
	}


	public function setSuccess ($info)
	{
		$this->success_info = $info;
	}


	/**
	 * 获取成功返货的信息--也可以封装到 const中
	 * @return mixed
	 */
	public function getSuccess()
	{
		echo  $this->success_info.'<br/>';
	}


	public function setError ($info)
	{
		$this->error_info = $info;
	}

	/**
	 * 获取失败的信息--也可以封装到 const中
	 * @return mixed
	 */
	public function getError ()
	{
		echo $this->error_info.'<br/>';
	}
}