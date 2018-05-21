<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PenjahitJahitan */

$this->title = $model->hasil_id;
$this->params['breadcrumbs'][] = ['label' => 'Penjahit Jahitans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjahit-jahitan-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->hasil_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->hasil_id], [
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
            'hasil_id',
            'pjht_id',
            'hasil_foto_jahit:ntext',
            'hasil_ket',
        ],
    ]) ?>

</div>
