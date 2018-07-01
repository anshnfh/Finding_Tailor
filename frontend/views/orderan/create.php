<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\Orderan */

$this->title = 'Create Orderan';
$this->params['breadcrumbs'][] = ['label' => 'Orderans', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="orderan-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
