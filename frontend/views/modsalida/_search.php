<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\ModsalidaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modsalida-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'fsalida') ?>

    <?= $form->field($model, 'equipo') ?>

    <?= $form->field($model, 'marca') ?>

    <?= $form->field($model, 'inventario') ?>

    <?php // echo $form->field($model, 'destino') ?>

    <?php // echo $form->field($model, 'piereparadas') ?>

    <?php // echo $form->field($model, 'recibe') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'created_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
