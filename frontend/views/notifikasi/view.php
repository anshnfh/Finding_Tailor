<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\Notifikasi */

$this->title = $model->notif_id;
$this->params['breadcrumbs'][] = ['label' => 'Notifikasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="notifikasi-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->notif_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->notif_id], [
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
            'notif_id',
            'notif_remind_date',
            'notif_content',
            'notif_exp_date',
            'user_id',
            'pjht_id',
        ],
    ]) ?>

</div>
