<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$students=M('student')->select();
    	$this->assign('students',$students);
   		$this->display('index');
    }
    public function detail(){	 
    	$id=I('get.id') ;
    	$student=M('student')->find($id);
		$this->assign('student',$student);
		$this->display('detail');
    }
    public function form(){
    	if (IS_POST) {
    		$postData['name']= I('post.name');
    		$postData['age']= I('post.age');
    		$postData['sex']= I('post.sex');
    		$rs = M('student')->add($postData);
    		if ($rs) {
			$this->success('插入成功', U('index/index'));
			} else {
			$this->error('插入失败', U('index/form'));
			}
    	}
    	$this->display('form');
    }
}