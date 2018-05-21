<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\PenjahitJahitan */

$this->title = 'Create Penjahit Jahitan';
$this->params['breadcrumbs'][] = ['label' => 'Penjahit Jahitans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjahit-jahitan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
