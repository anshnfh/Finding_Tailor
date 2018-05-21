<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PenjahitJahitanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Penjahit Jahitans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjahit-jahitan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Penjahit Jahitan', ['create'], ['class' => 'btn btn-success']) ?>
        <?= Html::a('Menuju Galeri', ['galeri'], ['class' => 'btn btn-success']) ?>
        
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'hasil_id',
            'pjht_id',
            [
                'attribute'=>'hasil_foto_jahit',
                'format'=>'html',
                'value'=> function($data){
                    return Html::img(Yii::$app->request->baseUrl . '/'. $data['hasil_foto_jahit'], ['width' => '120px','height' => '75px']);
                },
                
            ],
            'hasil_ket',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
