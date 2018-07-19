<?php
namespace common\models;

use Yii;
use yii\db\ActiveRecord;

class Msg extends ActiveRecord
{
		//不加载layout
    public $layout = false;

    //列表
    public function actionIndex()
    {
        #步骤1：获取留言表数据
        $msgs = Msg::find()->all();
        #步骤2：加载视图
        return $this->render('index', compact('msgs')); 
    }
}