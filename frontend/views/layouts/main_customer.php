<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

use frontend\assets\MaterialAsset;

  // CobaAsset::register($this);

MaterialAsset::register($this);


?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>


<body class="landing-page sidebar-collapse">
    <?php //$this->beginBody() ?>
    <nav class="navbar navbar-expand navbar-dark bg-primary flex-column flex-md-row bd-navbar" color-on-scroll="100" id="sectionsNav">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="https://demos.creative-tim.com/material-kit/index.html">
          Finding<b>Tailor</b> </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
          <span class="navbar-toggler-icon"></span>
        </button>
      </div>
      <?php 
      if (Yii::$app->user->isGuest) {
      ?>

        <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="http://localhost/advancedraw/site/register" class="nav-link">
              Register
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/advancedraw/site/login" onclick="scrollToDownload()">
              Login
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/advancedraw/site/about" onclick="scrollToDownload()">
              About
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/advancedraw/site/Contact" onclick="scrollToDownload()">
              Contact Us
            </a>
          </li>
        </ul>
      </div>

    
   <?php } else{  ?>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav ml-auto">
          <li class="dropdown nav-item">
            <a href="http://localhost/advancedraw/cart" class="nav-link">
              Keranjang Belanja
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/advancedraw/history" onclick="scrollToDownload()">
              Riwayat Transaksi
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/advancedraw/site/faq" onclick="scrollToDownload()">
              FAQ
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://localhost/advancedraw/user-profil" onclick="scrollToDownload()">
              Profil
            </a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link" href="http://localhost/advancedraw/site/Contact" onclick="scrollToDownload()">
              Logout
            </a> -->
           <?= Html::beginForm(['site/logout'], 'post');?>
           <?= Html::submitButton('Logout (' . Yii::$app->user->identity->username . ')',['class' => 'btn btn-link logout'])?>
           <?= Html::endForm();?>
          </li>
        </ul>
      </div>


  <?php }

    ?>
      
    </div>
  </nav>

<!-- <div class="wrap"> -->

    <!-- <div class="container"> -->
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    <!-- </div> -->
<!-- </div> -->

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; <?= Html::encode(Yii::$app->name) ?> <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
