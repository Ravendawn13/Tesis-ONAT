<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Estrabajo */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Estrabajos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="estrabajo-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'nomestacion',
            'ip',
            'monitor',
            'teclado',
            'mouse',
            'impresora',
            'escaner',
            'bocinas',
            'cddvdex',
            'motherboard',
            'microprocesador',
            'ram',
            'fuente',
            'lectarjetas',
            'cddvdint',
            'ups',
            'chasis',
            'area',
            'trabajadores_id',
            'responsable',
            'created_at',
            'updated_at',
            'crated_by',
            'updated_by',
        ],
    ]) ?>

</div>
