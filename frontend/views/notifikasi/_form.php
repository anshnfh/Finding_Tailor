<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use frontend\models\Notifikasi;
use kartik\widgets\DatePicker;

/* @var $this yii\web\View */
/* @var $model frontend\models\Notifikasi */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="notifikasi-form">

    <?php $form = ActiveForm::begin(); ?>


    <?php echo '<label class ="control-label"> Date </label>';
          echo DatePicker::widget([
            'model' => $model,
            'attribute' => 'notif_remind_date',
            'name' => 'dp_3',
            'options' => ['placeholder' => 'Pilih tanggal...'],
            'type' => DatePicker::TYPE_COMPONENT_APPEND,
            'pluginOptions' => [
                'autoclose'=>true,
                'todayHighlight' => true,
                'format' => 'yyyy-mm-dd'
            ]
        ]);
    ?>

    <?= $form->field($model, 'notif_content')->textInput(['maxlength' => true]) ?>

     <!-- <?//= $form->field($model, 'notif_exp_date')->widget(DatePicker::classname(), [
    //         'options' => ['placeholder' => 'Pilih tanggal...'],
    //         'type' => DatePicker::TYPE_INPUT,
    //         'pluginOptions' => [
    //             'autoclose'=>true,
    //             'todayHighlight' => true,
    //             'format' => 'yyyy-mm-dd'
            ]
        ]);
    ?> -->

    <?php 
        // echo DatePicker::widget([
        //     'attribute' => 'notif_exp_date'
        //     //'name' => 'notif_exp_date', 
        //     'model' => $model,
        //     'value' => date('d-M-Y', strtotime('+2 days')),
        //     'options' => ['placeholder' => 'Pilih tanggal...'],
        //     'pluginOptions' => [
        //         'format' => 'dd-M-yyyy',
        //         'todayHighlight' => true
        //     ]
        // ]);
    ?>

    <?= $form->field($model, 'notif_exp_date')->widget(DatePicker::classname(), [
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
