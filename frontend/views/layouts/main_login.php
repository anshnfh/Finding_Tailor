<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\CustomAppAsset;
use common\widgets\Alert;

CustomAppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?//= Html::csrfMetaTags() ?>
    <!-- <title><?//= Html::encode($this->title) ?></title> -->
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<!-- Start Header Area -->
  <!-- <header class="default-header"> -->
    <div class="container">
      <!-- <div class="header-wrap"> -->
        <!-- <div class="header-top d-flex justify-content-between align-items-center"> -->
         
        </div>
      </div>
    </div>
  </header>
  <!-- End Header Area -->

    <div>
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>


<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
