<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
use backend\models\CarreraProgramaSearch;
use backend\models\CarreraPrograma;
use backend\models\Carrera;
use yii\data\ActiveDataProvider;
/* @var $this yii\web\View */
/* @var $searchModel backend\models\CarreraProgramaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->params['breadcrumbs'][] = $this->title;
?>
<div class="carrera-programa-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::submitButton('Añadir una carrera',['class' => 'btn btn-success' , 'name'=>'submit','value' => 'carrera']) ?>
    </p>


    <?= GridView::widget([
      'dataProvider' => new ActiveDataProvider([
        'query' => $model->getCarrerap()
      ]),
      'filterModel' => new CarreraProgramaSearch(),
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
              'attribute' => 'carrera_id',
              'format' => 'text',
              'value' => function($model){
                return Carrera::findOne($model->id)->nom;
              }
            ],
            [
              'attribute' => 'estado',
              'value' => function($model){
                if (!isset($model->estado))
                  return "Sin evaluar";
                else if ($model->estado == 1){
                  return "Aprobado";
                }  else
                  return "Desaprobado";
              }
            ],
            [
              'class' => 'yii\grid\ActionColumn',
              'controller' => 'carrera-programa'
            ],
        ],
    ]); ?>
</div>
