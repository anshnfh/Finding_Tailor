<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model frontend\models\PenjahitProfil */

$this->title = $model->pjht_fullname;
$this->params['breadcrumbs'][] = ['label' => 'Penjahit Profils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjahit-profil-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->pjht_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->pjht_id], [
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
            'pjht_id',
            'pjht_fullname',
            'pjht_alamat',
            'pjht_kec',
            'pjht_kota',
            'pjht_telp',
            'pjht_photo:ntext',
            'pjht_jam_oprs_buka',
            'pjht_jam_oprs_tutup',
            'info_jenis',
            'info_jml_order',
            'info_durasi_kerja',
            'info_spesialisasi',
            'info_status',
            'user_id',
        ],
    ]) ?>

</div>
