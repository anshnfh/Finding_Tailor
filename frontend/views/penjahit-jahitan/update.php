<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PenjahitJahitan */

$this->title = 'Update Penjahit Jahitan: {nameAttribute}';
$this->params['breadcrumbs'][] = ['label' => 'Penjahit Jahitans', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->hasil_id, 'url' => ['view', 'id' => $model->hasil_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penjahit-jahitan-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
