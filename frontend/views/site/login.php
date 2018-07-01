<?php
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \common\models\LoginForm */
use frontend\assets\LoginAsset;

LoginAsset::register($this);

$this->title = 'Sign In';

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
    <!-- <div class="login-logo"> -->
        <!-- <a href="index"><b>Finding</b>Tailor</a> -->
    <!-- </div> -->

    <div class="form login-box-body">
        <ul class="tab-group">
              <li class="tab active"><a href="#customer">Pengguna</a></li>
              <li class="tab"><a href="#penjahit">Penjahit</a></li>
        </ul>

        <div class="tab-content">
              <div id="customer">
                    <h1>Login Customer</h1>

                    <?php $form1 = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

                    <?= $form1
                        ->field($model1, 'username', $fieldOptions1)
                        ->label(false)
                        ->textInput(['placeholder' => $model1->getAttributeLabel('username')]) ?>

                    <?= $form1
                        ->field($model1, 'password', $fieldOptions2)
                        ->label(false)
                        ->passwordInput(['placeholder' => $model1->getAttributeLabel('password')]) ?>
                
                     
                     <div class="row">
                         <?= $form1->field($model1, 'rememberMe')->checkbox() ?>
                     </div>

                    <div class="row" style="margin-top: 50px;">
                        <div class="col-xs-12">
                          <?= Html::submitButton('Sign in', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
                        </div>
                    </div>
                    
                    <?php ActiveForm::end(); ?>

              </div>

              <div id="penjahit">
                    <h1>Login Penjahit</h1>

                    <?php $form = ActiveForm::begin(['id' => 'login-form1', 'enableClientValidation' => false]); ?>

                    <?= $form
                        ->field($model, 'username', $fieldOptions1)
                        ->label(false)
                        ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

                    <?= $form
                        ->field($model, 'password', $fieldOptions2)
                        ->label(false)
                        ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

                    <div class="row">
                        <div class="col-xs-8">
                            <?= $form->field($model, 'rememberMe')->checkbox() ?>
                        </div>
                    </div>

                    <div class="row" style="margin-top: 50px;">
                        <div class="col-xs-12">
                          <?= Html::submitButton('Sign in', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
                        </div>
                    </div>


                    <?php ActiveForm::end(); ?>

              </div>

        </div><!-- tab-content -->

    </div> 
</div><!-- /.login-box -->
