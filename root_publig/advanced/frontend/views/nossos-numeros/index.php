<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NossosNumerosSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Nossos Números';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="nossos-numeros-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <!--
    <p>
        <?= Html::a('Create Nossos Numeros', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    -->
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'busdoors',
            'taxis',
            'sacosPao',
            'kmRodados',
            'impactoSacoPao',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
