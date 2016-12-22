<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Portfolio */

$this->title = 'Editar Serviço: ' . $model->empresa;
$this->params['breadcrumbs'][] = ['label' => 'Portfólio', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->empresa, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Editar';
?>
<div class="portfolio-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
