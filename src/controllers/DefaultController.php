<?php
namespace mertoncel\modules\content\Controllers;

class DefaultController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
}



