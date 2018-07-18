<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\Orderan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orderan-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'order_jml')->textInput() ?>

    <?= $form->field($model, 'order_jenis')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_ukuran')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_aksesoris')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_photo_model')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'order_date')->textInput() ?>

    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
