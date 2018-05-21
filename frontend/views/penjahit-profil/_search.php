<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PenjahitProfilSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjahit-profil-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'pjht_id') ?>

    <?= $form->field($model, 'pjht_fullname') ?>

    <?= $form->field($model, 'pjht_uname') ?>

    <?= $form->field($model, 'pjht_password') ?>

    <?= $form->field($model, 'pjht_alamat') ?>

    <?php // echo $form->field($model, 'pjht_kec') ?>

    <?php // echo $form->field($model, 'pjht_kota') ?>

    <?php // echo $form->field($model, 'pjht_telp') ?>

    <?php // echo $form->field($model, 'pjht_photo') ?>

    <?php // echo $form->field($model, 'pjht_jam_oprs_buka') ?>

    <?php // echo $form->field($model, 'pjht_jam_oprs_tutup') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
