<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\OrderanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orderan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'order_id') ?>

    <?= $form->field($model, 'order_jml') ?>

    <?= $form->field($model, 'order_jenis') ?>

    <?= $form->field($model, 'order_model') ?>

    <?= $form->field($model, 'order_ukuran') ?>

    <?php // echo $form->field($model, 'order_aksesoris') ?>

    <?php // echo $form->field($model, 'order_photo_model') ?>

    <?php // echo $form->field($model, 'order_date') ?>

    <?php // echo $form->field($model, 'order_total') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <?php // echo $form->field($model, 'pjht_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
