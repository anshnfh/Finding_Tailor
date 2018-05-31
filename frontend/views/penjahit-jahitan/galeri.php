<?php

use yii\helpers\Html;
use yii\helper\Url;
use yii\grid\GridView;
use frontend\models\PenjahitJahitan;
use frontend\controllers\PenjahitJahitanController;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PenjahitProfilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Galeri Jahitan Penjahit';
//$this->params['breadcrumbs'][] = ['label' => 'Penjahit Jahitans', 'url' => ['index']];
//$this->params['breadcrumbs'][] = $this->title;
?>

<div class="penjahit-jahitan-create">
    <h1><?= Html::encode($this->title); ?></h1>

    <div class="container">
    	<?php
	    	// foreach ($datas as $key) {
    		$query = (new \yii\db\Query())
                ->select('*')
                ->from('penjahit_jahitan')
                ->leftJoin('penjahit_profil', '`penjahit_profil`.`pjht_id` = `penjahit_jahitan`.`pjht_id`')
                ->leftJoin('user', '`user`.`id` = `penjahit_profil`.`user_id`');
     
        $command = $query->createCommand(); 
        $data = $command->queryAll();

        // var_dump($data);
        // die();
	    		
	   	foreach ($data as $key) {
	   		print_r($data[0]);
	   		die();
	   		echo Html::img(Yii::$app->request->baseUrl . '/'. '$data[0][hasil_jahit_photo]', ['width' => '300px','height' => '200px']);
	   	}

	    
	    	

    	?>


    		
    </div>
</div>