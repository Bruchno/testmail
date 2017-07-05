<?php

namespace app\controllers;

use Yii;
use app\models\Testmail;
use app\models\TestmailSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * TestmailController implements the CRUD actions for Testmail model.
 */
class TestmailController extends Controller
{
    
    public function actionIndex()
    {
        $searchModel = new TestmailSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    
    public function actionDeletemail()
    {
    	$strId = Yii::$app->request->post('strId');
    	$arrId = explode(", ", $strId);
    	
    	foreach ($arrId as $id)
    	{
    		$model = Testmail::findone($id);
    		$model->delete();
    		
    	} 
    	 return true;
    }
}
