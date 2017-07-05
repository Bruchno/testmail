<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Testmail */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="testmail-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fromemail')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'theme')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'data')->textInput() ?>

    <?= $form->field($model, 'text')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
