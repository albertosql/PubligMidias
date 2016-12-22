<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\TiposMidias */

$this->title = 'Cadastrar Mídia';
$this->params['breadcrumbs'][] = ['label' => 'Tipos de Mídias', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tipos-midias-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
