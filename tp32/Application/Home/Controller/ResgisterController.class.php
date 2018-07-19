<?php
namespace Home\Controller;
use Think\Controller;

class ResgisterController extends Controller
{
	public function index()
    {	
    	$this->display('index');
    }
    public function add(){
    	if (IS_POST) {
		#2.接受数据
		$postData['username'] = I('post.username');
		$postData['password'] = I('post.password');
	
		#3.插入数据库
		$rs = M('user')->add($postData);
		#4.判断
		if ($rs) {
			$this->success('插入成功', U('login/index'));
		} else {
			$this->error('插入失败', U('login/index'));
		}
	}
    }

}