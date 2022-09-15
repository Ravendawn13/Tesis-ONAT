<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use \frontend\models\Modentrada;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\ModentradaSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Registro de Entradas Tecnológicas de la Información';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modentrada-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Modelo de Entrada', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'fentrada',
            'equipo',
            'marca',
            'inventario',
            'procedencia',
            //'diagnostico',
            //'reparado',
            //'created_at',
            //'updated_at',
            //'created_by',
            //'updated_by',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Modentrada $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
