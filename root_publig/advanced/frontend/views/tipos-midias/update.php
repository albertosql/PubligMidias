<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\TiposMidias */

$this->title = 'Editar Mídia: ' . $model->nome;
$this->params['breadcrumbs'][] = ['label' => 'Tipos de Mídias', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nome, 'url' => ['view', 'id' => $model->nome]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="tipos-midias-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
