<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Modsalida */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="modsalida-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fsalida')->textInput() ?>

    <?= $form->field($model, 'equipo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'marca')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'inventario')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'destino')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'piereparadas')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'recibe')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_by')->textInput() ?>

    <?= $form->field($model, 'updated_by')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Guardar', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
