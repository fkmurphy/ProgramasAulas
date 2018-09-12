<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\models\UnidadSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="unidad-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
        'options' => [
            'data-pjax' => 1
        ],
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'descripcion') ?>

    <?= $form->field($model, 'biblio_basica') ?>

    <?= $form->field($model, 'biblio_consulta') ?>

    <?= $form->field($model, 'crono_tent') ?>

    <?php // echo $form->field($model, 'programa_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
