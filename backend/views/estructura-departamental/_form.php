<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use common\models\{Departamento,asignatura};
use kartik\select2\Select2;
use yii\helpers\ArrayHelper;

/* @var $this yii\web\View */
/* @var $model common\models\EstructuraDepartamental */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estructura-departamental-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'departamento_id')->widget(Select2::class,[
          'data' => ArrayHelper::map(Departamento::find()->all(),'id',function($model){
              return $model->getNomenclatura();
          }),
          //'data' =>ArrayHelper::map(((new StatusSearch())->search(['model' => 'backend\models\Status'])),'id','descripcion'),
          //'data' => (new StatusSearch())->search(['model' => 'backend\models\Status'])->id,
          'language' => 'es',
          'options' => ['placeholder' => 'Seleccione un departamento'],
          'pluginOptions' => [
            'allowClear' => true,
          ],
        ])->label('Departamento evaluador') ?>

    <?= $form->field($model, 'asignatura_id')->widget(Select2::class,[
          'data' => ArrayHelper::map(Asignatura::find()->all(),'id',function($model){
              return $model->getNomenclatura();
          }),
          'language' => 'es',
          'options' => ['placeholder' => 'Seleccione una asignatura'],
          'pluginOptions' => [
            'allowClear' => true,
          ],
        ])->label('Departamento evaluador') ?>
  

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
