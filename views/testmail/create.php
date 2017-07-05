<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Testmail */

$this->title = 'Create Testmail';
$this->params['breadcrumbs'][] = ['label' => 'Testmails', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testmail-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
