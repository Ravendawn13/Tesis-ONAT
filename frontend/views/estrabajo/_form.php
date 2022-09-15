<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Estrabajo */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="estrabajo-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nomestacion')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ip')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'monitor')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'teclado')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mouse')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'impresora')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'escaner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'bocinas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cddvdex')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'motherboard')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'microprocesador')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ram')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fuente')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'lectarjetas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'cddvdint')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ups')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'chasis')->textInput() ?>

    <?= $form->field($model, 'area')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'trabajadores_id')->textInput() ?>

    <?= $form->field($model, 'responsable')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'crated_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
