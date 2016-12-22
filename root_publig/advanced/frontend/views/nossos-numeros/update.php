<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\NossosNumeros */

$this->title = 'Editar Números';
$this->params['breadcrumbs'][] = ['label' => 'Nossos Números', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="nossos-numeros-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
