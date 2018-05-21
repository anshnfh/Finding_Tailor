<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\PenjahitProfil */

$this->title = 'Create Penjahit Profil';
$this->params['breadcrumbs'][] = ['label' => 'Penjahit Profils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjahit-profil-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
