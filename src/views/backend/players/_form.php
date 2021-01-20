<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model mertoncel\content\models\Players */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="players-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'player_id')->textInput() ?>

    <?= $form->field($model, 'player_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'player_team')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'player_age')->textInput() ?>

    <?= $form->field($model, 'player_country')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'player_position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'player_pros')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'player_cons')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'scout_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
