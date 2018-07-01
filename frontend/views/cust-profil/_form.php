<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model frontend\models\CustProfil */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="cust-profil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'cust_fullname')
    ->textInput(['maxlength' => true])
    ->textInput(['placeholder' => $model->getAttributeLabel('Masukkan Nama Lengkap')])
     ?>

    <?= $form->field($model, 'cust_alamat')
    ->textInput(['maxlength' => true])
    ->textInput(['placeholder' => $model->getAttributeLabel('Masukkan Alamat')]) ?>

    <?= $form->field($model, 'cust_kecamatan')
    ->textInput(['maxlength' => true])
    ->textInput(['placeholder' => $model->getAttributeLabel('Masukkan Kecamatan')]) ?>

    <?= $form->field($model, 'cust_kota')
    ->textInput(['maxlength' => true])
    ->textInput(['placeholder' => $model->getAttributeLabel('Masukkan Kota')]) ?>

    <?= $form->field($model, 'cust_phone')
    ->textInput(['maxlength' => true])
    ->textInput(['placeholder' => $model->getAttributeLabel('Masukkan No Telepon')]) ?>


    <?= $form->field($model, 'cust_photo')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
            'pluginOptions'=>[
            'allowedFileExtensions'=>['jpg', 'png', 'gif'],
            'showUpload' => false,
            'showRemove' => false,
        ],
        ]);?> 


    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
