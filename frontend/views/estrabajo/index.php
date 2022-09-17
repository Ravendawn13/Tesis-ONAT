<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use app\models\Estrabajo;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\EstrabajoSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Expediente Técnico de Estación de Trabajo';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estrabajo-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Crear Expediente', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'nomestacion',
            'ip',
            'monitor',
            'teclado',
            'mouse',
            //'impresora',
            //'escaner',
            //'bocinas',
            //'cddvdex',
            //'motherboard',
            //'microprocesador',
            //'ram',
            //'fuente',
            //'lectarjetas',
            //'cddvdint',
            //'ups',
            //'chasis',
            //'area',
            //'trabajadores_id',
            //'responsable',
            //'created_at',
            //'updated_at',
            //'crated_by',
            //'updated_by',
            [
                'class' => ActionColumn::className(),
                'urlCreator' => function ($action, Estrabajo $model, $key, $index, $column) {
                    return Url::toRoute([$action, 'id' => $model->id]);
                 }
            ],
        ],
    ]); ?>


</div>
