<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model mertoncel\content\models\Players */

$this->title = 'Update Players: ' . $model->player_id;
$this->params['breadcrumbs'][] = ['label' => 'Players', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->player_id, 'url' => ['view', 'id' => $model->player_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="players-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
