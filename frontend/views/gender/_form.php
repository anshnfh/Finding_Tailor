<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
// use kartik\date\DatePicker;
use kartik\widgets\DatePicker;


/* @var $this yii\web\View */
/* @var $model frontend\models\Gender */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="gender-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_gender')->widget(DatePicker::classname(), [
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
