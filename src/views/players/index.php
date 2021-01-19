<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Players';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="players-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Players', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'player_id',
            'player_name',
            'player_team',
            'player_age',
            'player_country',
            'player_position',
            'player_pros:ntext',
            'player_cons:ntext',
            'scout_name',
            'created_at',

            ['class' => 'yii\grid\ActionColumn',
                'buttons' => [
                    'delete' => function ($url) {
                        return Html::a('Delete', $url, [
                            'data-method' => 'post',
                            'data-confirm' => 'Are you sure?'
                        ]);
                    },
                    'update' => function ($url) {
                        return Html::a('Update', $url, [
                            'data-method' => 'post'
                        ]);
                    }


                ]
            ]
        ],
    ]); ?>


</div>
