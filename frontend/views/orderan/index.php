<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\OrderanSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Orderans';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orderan-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Orderan', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'order_id',
            'order_jml',
            'order_jenis',
            'order_model',
            'order_ukuran',
            'order_aksesoris',
            'order_photo_model:ntext',
            'order_date',
            'order_total',
            //'user_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
