<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\EstrabajoSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estrabajo-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'nomestacion') ?>

    <?= $form->field($model, 'ip') ?>

    <?= $form->field($model, 'monitor') ?>

    <?= $form->field($model, 'teclado') ?>

    <?php // echo $form->field($model, 'mouse') ?>

    <?php // echo $form->field($model, 'impresora') ?>

    <?php // echo $form->field($model, 'escaner') ?>

    <?php // echo $form->field($model, 'bocinas') ?>

    <?php // echo $form->field($model, 'cddvdex') ?>

    <?php // echo $form->field($model, 'motherboard') ?>

    <?php // echo $form->field($model, 'microprocesador') ?>

    <?php // echo $form->field($model, 'ram') ?>

    <?php // echo $form->field($model, 'fuente') ?>

    <?php // echo $form->field($model, 'lectarjetas') ?>

    <?php // echo $form->field($model, 'cddvdint') ?>

    <?php // echo $form->field($model, 'ups') ?>

    <?php // echo $form->field($model, 'chasis') ?>

    <?php // echo $form->field($model, 'area') ?>

    <?php // echo $form->field($model, 'trabajadores_id') ?>

    <?php // echo $form->field($model, 'responsable') ?>

    <?php // echo $form->field($model, 'created_at') ?>

    <?php // echo $form->field($model, 'updated_at') ?>

    <?php // echo $form->field($model, 'crated_by') ?>

    <?php // echo $form->field($model, 'updated_by') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-outline-secondary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
