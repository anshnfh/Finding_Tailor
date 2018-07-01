<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\CustProfil */

$this->title = $model->cust_id;
$this->params['breadcrumbs'][] = ['label' => 'Cust Profils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cust-profil-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->cust_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->cust_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'cust_id',
            'cust_fullname',
            'cust_alamat',
            'cust_kecamatan',
            'cust_kota',
            'cust_phone',
            'cust_photo:ntext',
            'user_id',
        ],
    ]) ?>

</div>
