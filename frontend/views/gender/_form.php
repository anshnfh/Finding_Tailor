<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Gender */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="main main-raised">
	<div class="section section-basic">
<div class="gender-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'nama_gender')->textInput(['maxlength' => true]) ?>

    <?php
    	echo DatePicker::widget([
    'name' => 'nama_gender', 
    'value' => date('d-M-Y', strtotime('+2 days')),
    'options' => ['placeholder' => 'Select issue date ...'],
    'pluginOptions' => [
        'format' => 'dd-M-yyyy',
        'todayHighlight' => true
    ]
]);
    ?>

    <?php
echo $form->field($model, 'nama_gender')->dropDownList(
            ['a' => 'Item A', 'b' => 'Item B', 'c' => 'Item C']
    ); ?>

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
</div>
</div>
