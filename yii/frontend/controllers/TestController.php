<?php
namespace frontend\controllers;

use Yii;

use yii\web\Controller;


/**
 * Site controller
 */
class TestController extends Controller
{
   

    /**
     * Displays homepage.
     *
     * @return mixed
     */
    
    public function actionIndex()
    {
        return $this->render('index',[

            'username'=>'jack',
            'order'=>[
                '1'=>'呵呵',
                'b'=>'哒哒'
            ]
        ]);
    }
    public function actionAdd()
    {
        echo 'add';
    }

  
   

    
}
