<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\NotifikasiSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Notifikasis';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notifikasi-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Notifikasi', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'notif_id',
            'notif_remind_date',
            'notif_content',
            'notif_exp_date',
            'user_id',
            //'pjht_id',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
