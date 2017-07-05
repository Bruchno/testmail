<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="site-contact">
    <h1><?= Html::encode($this->title) ?></h1>
<form action = "/site/index"><button type = "submit">Отменить</button></form>
    <?php if (Yii::$app->session->hasFlash('contactFormSubmitted')): ?>

        <div class="alert alert-success">
            Thank you for contacting us. We will respond to you as soon as possible.
        </div>

        
    <?php else: ?>

        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us.
            Thank you.
        </p>

        <div class="row">
            <div class="col-lg-5">

                <?php $form = ActiveForm::begin(['id' => 'contact-form']); ?>

                    

                   <?= $form->field($model, 'email')->textInput(['autofocus' => true])->label('Получатель')  ?>

                     <?= $form->field($model, 'subject')->label('Тема письма') ?>

                    <?= $form->field($model, 'body')->textarea(['rows' => 6])->label('Текст письма') ?>

                    

                    <div class="form-group">
                        <?= Html::submitButton('Отправить', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                    </div>
					
					

                <?php ActiveForm::end(); ?>

            </div>
        </div>

    <?php endif; ?>
	
</div>
