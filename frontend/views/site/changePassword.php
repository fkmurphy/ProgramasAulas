<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
     
/* @var $this yii\web\View */
/* @var $model frontend\models\ChangePasswordForm */
/* @var $form ActiveForm */
     
$this->title = 'Gestión de clave';
?>
<div class="row">
    <div class="col-md-6 col-md-offset-2 ">
        <?php $form = ActiveForm::begin(); ?>
                <?= $form->field($model,'old_password')->passwordInput(); ?>
                <?= $form->field($model, 'password')->passwordInput() ?>
                <?= $form->field($model, 'confirm_password')->passwordInput() ?>

                <div class="form-group">
                    <div class="col-md-6 text-right">
                        <?= Html::submitButton('Confirmar', ['class' => 'btn btn-primary']) ?>
                    </div>
                    <div class="col-md-6 text-left">
                        <a type="button" class="btn btn-warning" 
                           href="/index.php" name="button">Cancelar</a>

                    </div>
                </div>
        <?php ActiveForm::end(); ?>  
    </div>
</div>