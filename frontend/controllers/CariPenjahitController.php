<?php

namespace frontend\controllers;

use Yii;
use yii\web\Controller;
use frontend\models\PenjahitProfil;
use frontend\models\PenjahitJahitan;

class CariPenjahitController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$this->layout = "main_customer";

    	$user_id = Yii::$app->user->identity->id;

        $user = Yii::$app->user;

        $query = (new \yii\db\Query())
                ->select('*')
                ->from('penjahit_profil');

        $command = $query->createCommand(); 
        $data = $command->queryAll();

        // var_dump($data);
        // die();

        return $this->render('index', [
        	'user_id' => $user_id,
        	'datas' => $data,

        ]);
    }

    public function actionDetail($id){
    	$this->layout = "main_customer";

    	$pjht_id = $id;
    	 $query = (new \yii\db\Query())
    	 		->select('pjht_id' == $id)
    	 		->from('penjahit_profil');

    	 $command = $query->createCommand();
    	 $data = $command->queryOne();

    	 // var_dump($data);
    	 // die();

    	return $this->render('detail', [
    		'pjht_id' => $pjht_id,
    		'datas' => $data,
    	]);

    }

}
