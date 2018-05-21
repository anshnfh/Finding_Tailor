<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;

/* @var $this yii\web\View */
/* @var $model frontend\models\PenjahitJahitan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjahit-jahitan-form">

    <?php $form = ActiveForm::begin(['options' => ['enctype' => 'multipart/form-data']]); ?>

    <?= $form->field($model, 'pjht_id')->textInput() ?>

    <?= $form->field($model, 'hasil_foto_jahit')->widget(FileInput::classname(), [
    	'options' => ['accept' => 'image/*'],
    	'pluginOptions'=>[
    		'allowedFileExtensions'=>['jpg', 'png', 'gif'],
    		'showUpload' => false,
    		'showRemove' => false,
    	],
    ]); ?>

    <?= $form->field($model, 'hasil_ket')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'user_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
