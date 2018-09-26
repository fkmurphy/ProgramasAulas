<?php
use froala\froalaeditor\FroalaEditorWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
$this->params['breadcrumbs'][] = ['label' => '...'];
$this->params['breadcrumbs'][] = ['label' => "Contenidos analíticos", 'url' => ['contenido-analitico', 'id' => $model->id]];
$this->params['breadcrumbs'][] = ['label' => "Propuesta metodológica", 'url' => ['propuesta-metodologica', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Evaluación y condiciones de acreditación';
?>
<?php $form = ActiveForm::begin([
  'enableAjaxValidation'      => true,
  'enableClientValidation'    => false,
  'validateOnChange'          => false,
  'validateOnSubmit'          => true,
  'validateOnBlur'            => false,
]); ?>
<div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
     60%
  </div>
</div>
<h3>6. Evaluación y condiciones de acreditación</h3>

<?= FroalaEditorWidget::widget([
            'model' => $model,
            'attribute' => 'evycond_acreditacion',
            'name' => 'evycond_acreditacion',
            'options' => [
                'id'=>'evycond_acreditacion'
            ],
            'clientOptions' => [
              'placeholderText' => 'Señalar alternativas de cursado regular, promocional, y libre y criterios de evaluación y acreditación de forma discriminada.',
              'height' => 100,
              'language' => 'es',
              'height' => 100,
              'theme' => 'gray',
              'toolbarButtons' => ['bold', 'italic', 'underline', '|', 'paragraphFormat', 'fontSize','color','|','undo','redo','align'],
            ],
]) ?>
<br>
<div class="form-group">
  <div class="row">
    <div class="col-xs-6 text-left">
      <?= Html::a('Volver', ['propuesta-metodologica', 'id' => $model->id],['class' => 'btn btn-warning']) ?>
    </div>
    <div class="col-xs-6 text-right">
      <?= Html::submitButton('Seguir', ['class' => 'btn btn-success']) ?>
    </div>
  </div>
</div>

<?php ActiveForm::end(); ?>
