<?php
use kartik\tabs\TabsX;
use froala\froalaeditor\FroalaEditorWidget;
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\helpers\Url;
$mensaje = [ 'onclick'=>"return confirm('No se guardarán los cambios de esta pestaña, ¿desea salir?')"];
$this->params['items'][] = ['label' => '1. Fundamentación','url' => Url::to(['cargar', 'id' => $model->id]), 'options'=>[ 'onclick'=>"return confirm('No se guardarán los cambios de esta pestaña, ¿desea salir?')"]];
$this->params['items'][] = ['label' => '2. Objetivo según plan de estudio'];
$this->params['items'][] = ['label' => '3. Contenido según plan de estudio', 'url' => Url::to(['contenido-plan', 'id' => $model->id]), 'options'=> $mensaje];
$this->params['items'][] = ['label' => '4. Contenidos analíticos', 'url' => Url::to(['contenido-analitico', 'id' => $model->id]), 'options'=> $mensaje];
$this->params['items'][] = ['label' => '5. Propuesta Metodológica', 'url' => Url::to(['propuesta-metodologica', 'id' => $model->id]), 'options'=> $mensaje];
$this->params['items'][] = ['label' => '6. Evaluación y cond. de acreditación', 'url' => Url::to(['eval-acred', 'id' => $model->id]), 'options'=> $mensaje];
$this->params['items'][] = ['label' => '7. Parciales, recuperatorios y promociones', 'url' => Url::to(['parcial-rec-promo', 'id' => $model->id]), 'options'=> $mensaje];
$this->params['items'][] = ['label' => '8. Distribución horaria', 'url' => Url::to(['dist-horaria', 'id' => $model->id]), 'options'=> $mensaje];
$this->params['items'][] = ['label' => '9. Cronograma tentativo', 'url' => Url::to(['crono-tentativo', 'id' => $model->id]), 'options'=> $mensaje];
$this->params['items'][] = ['label' => '10. Actividad extracurricular', 'url' => Url::to(['actividad-extracurricular', 'id' => $model->id]), 'options'=> $mensaje];
$this->params['breadcrumbs'][] = ['label' => '...'];
$this->params['breadcrumbs'][] = ['label' => "Fundamentacion", 'url' => ['cargar', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Objetivo según el plan de estudio';
$porcentaje = $model->calcularPorcentajeCarga();
?>
<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?= $porcentaje ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?= $porcentaje ?>%">
     <?= $porcentaje ?>%
  </div>
</div>

<?php $form = ActiveForm::begin([
'enableAjaxValidation'      => false,
'enableClientValidation'    => false,
'validateOnChange'          => true,
'validateOnSubmit'          => false,
'validateOnBlur'            => false,
]); ?>

<h3>2. Objetivo según Plan de estudio</h3>

<?= $form->field($model, 'objetivo_plan')->widget(FroalaEditorWidget::classname(),[
            'model' => $model,
            'attribute' => 'objetivo_plan',
            'name' => 'objetivo_plan',
            'options' => [
                'id'=>'objetivo_plan'
            ],
            'clientOptions' => [
              'placeholderText' => 'Se espera que los estudiantes puedan',
              'language' => 'es',
              'height' => 200,
              'theme' => 'gray',
              'toolbarButtons' => ['bold', 'italic', 'underline', '|','lineBreaker','paragraphFormat', 'fontSize','color','|','undo','redo','align'],
            ],
])->label('') ?>
<br>

<div class="form-group">
    <div class="row">
      <div class="col-xs-6 text-left">
        <?= Html::a('Atrás', ['cargar', 'id' => $model->id],['onclick'=>"return confirm('No se guardarán los cambios de esta sección, ¿desea salir?')",'class' => 'btn btn-warning']) ?>
        <?= Html::submitButton('Guardar y salir',['class' => 'btn btn-info' , 'name'=>'submit','value' => 'salir']) ?>
      </div>
      <div class="col-xs-6 text-right">
        <?= Html::submitButton('Seguir', ['class' => 'btn btn-success']) ?>
      </div>
    </div>
</div>
<?php ActiveForm::end(); ?>
