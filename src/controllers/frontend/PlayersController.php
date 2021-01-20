<?php


namespace mertoncel\content\controllers\frontend;


use mertoncel\content\models\Players;
use yii\data\ActiveDataProvider;
use yii\web\Controller;

class PlayersController extends Controller
{
    public function actionIndex()
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Players::find()->latest()
        ]);

        return $this->render('index', [
            'dataProvider' => $dataProvider
        ]);
    }

    public function actionSearch($keyword)
    {
        $dataProvider = new ActiveDataProvider([
            'query' => Players::find()->latest()->byKeyword($keyword)
        ]);

        return $this->render('search', [
            'dataProvider' => $dataProvider
        ]);
    }
}