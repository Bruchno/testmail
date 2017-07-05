<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\TestmailSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */
$script = <<<JS
$('#btndel').on('click', function () {
	
	var idList = $('#mygrid').yiiGridView('getSelectedRows');
	if (idList.length == 0)
	{
		alert('Now Checked!!');
	} else {
		var strId ='';
		for(var i=0; i<idList.length; i++) 
		{
			strId += idList[i] + ', ';
			
		}
		$.ajax({
				url: 'index.php?r=testmail/deletemail',
				type: 'POST',
				data: {'strId': strId},
				success: function(){
				
				},
				
			});
		$.pjax.reload({container: '#mygrid', timeout: '5000'});
	}
});
JS;
$this->registerJs($script);
$this->title = 'Отправленные письма';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="testmail-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
    <div style = "margin: 20px;">  
	<button id = "btndel">Удалить выбранные</button></div>
	  
    <?php Pjax::begin();  ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
		'id' => 'mygrid',
		
        'columns' => [		
           
		   ['class' => 'yii\grid\CheckboxColumn', 
		   'header' => '',
		   ],
		
            ['header' => 'Отправитель',
			'attribute' => 'fromemail'],
			['header' => 'Тема послания',
			'attribute' => 'theme',],
            ['header' => 'Дата отправки',
			'attribute' => 'data'],
         
        ],
    ]); ?>
	<?php Pjax::end();  ?>
	
</div>
<div id="strAjax"></div>
