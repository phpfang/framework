<?php
namespace Home\Controller;
use Think\Controller;

class MsgController extends Controller
{
	//列表
    public function index()
    {	
    	#1.获取数据
    	$msgs = M('msg')->select();
    	#2.加载视图
    	$this->assign('msgs', $msgs);
    	$this->display('index');
    }
   public function add()
{	
	#1.判断提交方式
	if (IS_POST) {
		#2.接受数据
		$postData['uname'] = I('post.uname');
		$postData['content'] = I('post.content');
		$postData['created_at']=time(); 
		#3.插入数据库
		$rs = M('msg')->add($postData);
		#4.判断
		if ($rs) {
			$this->success('插入成功', U('msg/index'));
		} else {
			$this->error('插入失败', U('msg/index'));
		}
	}
}

}