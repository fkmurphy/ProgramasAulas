<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model backend\models\Objetivo */

$this->title = 'Update Objetivo: ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Objetivos', 'url' => ['programa/objetivo-plan','id' => $model->programa_id]];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="objetivo-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
