<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use yii\helpers\ArrayHelper;
use frontend\models\Gender;
use frontend\models\Ukuran;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Orderan */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="orderan-form">

    <?php $form = ActiveForm::begin(); ?>


    <?= $form->field($model, 'order_jml')->input('number', ['min'=>1, 'step'=>1, 'placeholder'=>'Pilih Jumlah']); ?>

    <?= $form->field($model, 'order_jenis')->dropDownList(
        ArrayHelper::map(Gender::find()->asArray()->all(),'nama_gender','nama_gender'), ['prompt'=>'Pilih Gender'])?>

    <?= $form->field($model, 'order_model')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'order_ukuran')->dropDownList(
        ArrayHelper::map(Ukuran::find()->asArray()->all(),'ukuran_jenis','ukuran_jenis'), ['prompt'=>'Pilih Ukuran'])?>


    <?= $form->field($model, 'order_aksesoris')->textInput(['maxlength' => true]) ?>


    <?= $form->field($model, 'order_photo_model')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
            'pluginOptions'=>[
            'allowedFileExtensions'=>['jpg', 'png', 'gif'],
            'showUpload' => false,
            'showRemove' => false,
        ],
        ]);?> 


    <?= $form->field($model, 'order_date')->widget(DatePicker::classname(), [
            'options' => ['placeholder' => 'Pilih tanggal...'],
            'type' => DatePicker::TYPE_INPUT,
            'pluginOptions' => [
                'autoclose'=>true,
                'todayHighlight' => true,
                'format' => 'yyyy-mm-dd'
            ]
        ]);
    ?>



    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
