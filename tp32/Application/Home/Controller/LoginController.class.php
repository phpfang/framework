<?php
namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller
{
	public function index()
    {	
    	$this->display('index');
    }
    public function login(){
	    	if (IS_POST) {
			#2.接受数据
			$PostData['username'] = I('post.username');
			$PostData['password'] = I('post.password');
			$rs=M('user')->where(	$PostData)->find();

				if ($rs) {
					
					session("name",$PostData['username']);
					$this->success('登陆成功', U('index/index'));

				} else {
					$this->error('登陆失败', U('login/index'));
				}
		
	   	 	}
	}
	public function tuichu(){

	}
}