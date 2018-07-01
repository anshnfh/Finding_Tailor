<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\CustProfilSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cust-profil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'cust_id') ?>

    <?= $form->field($model, 'cust_fullname') ?>

    <?= $form->field($model, 'cust_alamat') ?>

    <?= $form->field($model, 'cust_kecamatan') ?>

    <?= $form->field($model, 'cust_kota') ?>

    <?php // echo $form->field($model, 'cust_phone') ?>

    <?php // echo $form->field($model, 'cust_photo') ?>

    <?php // echo $form->field($model, 'user_id') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
