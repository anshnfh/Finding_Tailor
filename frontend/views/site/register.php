<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\SignupForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\helpers\ArrayHelper;
use frontend\models\Role;

$this->title = 'Register Pengguna';

$fieldOptions1 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
];

$fieldOptions2 = [
    'options' => ['class' => 'form-group has-feedback'],
    'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
];
?>

<div class="login-box" style="margin-top:60px;">
    <div class="login-logo">
        <a href="index"><b>Finding</b>Tailor</a>
    </div>
    <!-- /.login-logo -->
    <div class="login-box-body">
        <p class="login-box-msg">Silahkan isi form register ini !</p>

        <?php $form1 = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

        <?= $form1->field($model, 'username')
        ->textInput(['autofocus' => true]) 
        ->textInput(['placeholder' => $model->getAttributeLabel('username')])?>

        <?= $form1->field($model, 'email') 
        ->textInput(['placeholder' => $model->getAttributeLabel('email')])?>

        <?= $form1->field($model, 'password')->passwordInput() 
        ->passwordInput(['placeholder' => $model->getAttributeLabel('passsword')])?>

        <?= $form1->field($model, 'level')->dropDownList(
        ArrayHelper::map(Role::find()->asArray()->all(),'role_id','role_nama'), ['prompt'=>'Select User'])?>

        <div class="row">
            <div class="col-xs-12">
              <?= Html::submitButton('Register', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
            </div>
        </div>


        <?php ActiveForm::end(); ?>

        <!-- <a href="login" class="text-center btn btn-primary btn-block btn-flat" style="margin-top:16px;">Log</a> -->

    </div>
    <!-- /.login-box-body -->
</div><!-- /.login-box -->
