<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\NossosNumerosSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="nossos-numeros-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'busdoors') ?>

    <?= $form->field($model, 'taxis') ?>

    <?= $form->field($model, 'sacosPao') ?>

    <?= $form->field($model, 'kmRodados') ?>

    <?php // echo $form->field($model, 'impactoSacoPao') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
