<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Modentrada */

$this->title = 'Modelo de Entrada al Taller';
$this->params['breadcrumbs'][] = ['label' => 'Modentradas', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="modentrada-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
