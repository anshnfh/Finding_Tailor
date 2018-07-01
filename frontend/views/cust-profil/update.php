<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\CustProfil */

$this->title = 'Update Cust Profil: ' . $model->cust_id;
$this->params['breadcrumbs'][] = ['label' => 'Cust Profils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->cust_id, 'url' => ['view', 'id' => $model->cust_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="cust-profil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
