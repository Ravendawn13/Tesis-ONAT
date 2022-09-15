<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Estrabajo */

$this->title = 'Expediente Técnico de Estación de Trabajo';
$this->params['breadcrumbs'][] = ['label' => 'Estrabajos', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="estrabajo-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
