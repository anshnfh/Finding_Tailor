<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PenjahitProfil */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjahit-profil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pjht_fullname')
    ->textInput(['maxlength' => true])
    ->textInput(['placeholder' => $model->getAttributeLabel('Masukkan Nama Lengkap')])?>

    <?= $form->field($model, 'pjht_alamat')
    ->textInput(['maxlength' => true])
    ->textInput(['placeholder' => $model->getAttributeLabel('Masukkan Alamat')])?>

    <?= $form->field($model, 'pjht_kec')
    ->textInput(['maxlength' => true])
    ->textInput(['placeholder' => $model->getAttributeLabel('Masukkan Kecamatan')])?>

    <?= $form->field($model, 'pjht_kota')
    ->textInput(['maxlength' => true])
    ->textInput(['placeholder' => $model->getAttributeLabel('Masukkan Kota')])?>

    <?= $form->field($model, 'pjht_telp')
    ->textInput(['maxlength' => true])
    ->textInput(['placeholder' => $model->getAttributeLabel('Masukkan No. Telepon')])?>

    <?= $form->field($model, 'pjht_photo')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'pjht_jam_oprs_buka')->textInput() ?>

    <?= $form->field($model, 'pjht_jam_oprs_tutup')->textInput() ?>

    <?= $form->field($model, 'pjht_jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pjht_jml_order')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pjht_durasi_kerja')->textInput() ?>

    <?= $form->field($model, 'pjht_spesialisasi')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'pjht_status')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
