<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Portfolio */

$this->title = 'Cadastrar Serviço';
$this->params['breadcrumbs'][] = ['label' => 'Portfólio', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="portfolio-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
