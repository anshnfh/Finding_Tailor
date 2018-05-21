<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model frontend\models\PenjahitJahitanSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjahit-jahitan-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'hasil_id') ?>

    <?= $form->field($model, 'pjht_id') ?>

    <?= $form->field($model, 'hasil_foto_jahit') ?>

    <?= $form->field($model, 'hasil_ket') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
