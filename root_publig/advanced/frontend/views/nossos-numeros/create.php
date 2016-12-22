<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\NossosNumeros */

$this->title = 'Create Nossos Numeros';
$this->params['breadcrumbs'][] = ['label' => 'Nossos Numeros', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nossos-numeros-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
