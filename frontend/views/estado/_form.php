<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\Estado */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estado-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'estado_nombre')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'estado_valor')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
