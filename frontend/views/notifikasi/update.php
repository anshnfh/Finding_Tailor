<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\Notifikasi */

$this->title = 'Update Notifikasi: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Notifikasis', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->notif_id, 'url' => ['view', 'id' => $model->notif_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="notifikasi-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
