<?php
/**
 * LD库文件
 * ============================================================================
 * * 版权所有 2016-2018   零度网络科技有限公司，并保留所有权利。
 * 网站地址: http://www.hbclnx.com
 * ----------------------------------------------------------------------------
 * 这不是一个自由软件！您只能在不用于商业目的的前提下对程序代码进行修改和
 * 使用；不允许对程序代码以任何形式任何目的的再发布。
 * ============================================================================
 * Author: lisonglin
 * Id: index.php  2016年7月11日    Lisonglin
 */
namespace app\index\controller;
use ld\controller\Controller;
use Model;
use Home\model\User\User;
class index extends Controller {
	public function index() {
	    /* $res =  Model::table('msv_users AS b')->select();	   	 
	   	print_r($res);
	    exit;*/

	//print_r($this->response->get('test'));
	   	$this->assign('Test','<h1>这是新的框架了</h1>');
		return $this->fetch('/index.html');
	}
	//--http://127.0.0.1/frame/index.php/app/index/index/beans
	public function beans()
	{
		$bs = new \ClassPathXmlApplicationContext('app/Conf/spring.xml');
		$beans = $bs->getBean('user');
		echo $beans->getName();
		exit;
	}	
	//--http://127.0.0.1/frame/index.php/app/index/index/databases
	public function databases()
	{
		$res =  Model::table('pre_activity')->select();
	    exit;
	}
}