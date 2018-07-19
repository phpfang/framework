<?php
namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use common\models\User;
class RegisterController extends Controller
{
    //不加载layout
    public $enableCsrfValidation = false;
    public $layout = false;



     public function actionIndex(){
       
        return $this->render('index', compact('regs')); 
    }
    public function actionAdd(){
    	 if (Yii::$app->request->isPost) {
            $username = Yii::$app->request->post('username');
            $password = Yii::$app->request->post('password'); 
            $user = new User;
            $user->username = $username;
            $user->password = $password;
            $rs = $user->save();
            return $this->redirect(['/login']);
        }
    }
}
