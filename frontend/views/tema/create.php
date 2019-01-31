<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model backend\models\Tema */

$this->title = 'Añadir un tema a la unidad';
$this->params['breadcrumbs'][] = ['label' => 'Temas', 'url' => ['unidad/update','id' => $model->getUnidadId()]];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tema-create">

    <h1><?= Html::encode($this->title) ?> </h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
