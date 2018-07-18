<?php

use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\ActiveForm;
use frontend\models\PenjahitProfil;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model frontend\models\PenjahitProfil */

$this->title = 'Update Penjahit Profil';
$this->params['breadcrumbs'][] = ['label' => 'Penjahit Profils', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->pjht_id, 'url' => ['view', 'id' => $model->pjht_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="penjahit-profil-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
    	'model1' => $model1,
        'model' => $model,
    ]) ?>

</div>

