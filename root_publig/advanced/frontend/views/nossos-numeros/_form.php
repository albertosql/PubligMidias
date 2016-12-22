<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\NossosNumeros */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nossos-numeros-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'busdoors')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'taxis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sacosPao')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'kmRodados')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'impactoSacoPao')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Cadastrar' : 'Salvar', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
