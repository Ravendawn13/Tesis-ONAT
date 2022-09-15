<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Modentrada */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modentrada-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fentrada')->textInput() ?>

    <?= $form->field($model, 'equipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inventario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'procedencia')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'diagnostico')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'reparado')->dropDownList(['si' => 'Si', 'no' => 'No']) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
