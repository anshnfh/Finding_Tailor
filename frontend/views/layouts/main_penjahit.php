<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use frontend\assets\CustomAppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php //$this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <!-- <meta charset="<?//= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1"> -->
    <meta charset="<?= Yii::$app->charset ?>" />
    <link rel="apple-touch-icon" sizes="76x76" href="../frontend/web/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/frontend/web/img/favicon.ico">
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="/findingtailor2/frontend/web/css/bootstrap.min.css" rel="stylesheet" />
    <link href="/findingtailor2/frontend/web/css/light-bootstrap-dashboard.css?v=2.0.1" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="/findingtailor2/frontend/web/css/demo.css" rel="stylesheet" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrapper">
<?= $this->render('sidebar.php')?>
    <div class="main-panel">
        <nav class="navbar navbar-expand-lg " color-on-scroll="500">
            <div class="container-fluid">
                <a><?= Html::a('Dashboard', ['/site/index'], ['class'=>'navbar-brand'])?></a>
                <button href="" class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                <span class="navbar-toggler-bar burger-lines"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                    <ul class="nav navbar-nav mr-auto">
                        <li class="nav-item">
                            <a href="#" class="nav-link" data-toggle="dropdown">
                                <i class="nc-icon nc-palette"></i>
                                <span class="d-lg-none">

                                </span>
                                </a>
                        </li>
                        <!-- <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                                    <i class="nc-icon nc-planet"></i>
                                    <span class="notification">5</span>
                                    <span class="d-lg-none">Notification</span>
                                </a>
                                <ul class="dropdown-menu">
                                    <a class="dropdown-item" href="#">Notification 1</a>
                                    <a class="dropdown-item" href="#">Notification 2</a>
                                    <a class="dropdown-item" href="#">Notification 3</a>
                                    <a class="dropdown-item" href="#">Notification 4</a>
                                    <a class="dropdown-item" href="#">Another notification</a>
                                </ul>
                            </li> -->
                    </ul>
                    <ul class="navbar-nav ml-auto">
                            <li class="nav-item">
                                <a>
                                    <?= Html::a('Profile', ['/site/profile'], ['class'=>'nav-link'])?>
                                    <span class="no-icon"></span>
                                </a>
                            </li>
                            <?php
                                NavBar::begin([
                                // 'brandLabel' => Yii::$app->name,
                                // 'brandUrl' => Yii::$app->homeUrl,
                                'options' => [
                                    'class' => 'navbar-inverse navbar-fixed-top',
                                ],
                                ]);
                                if (Yii::$app->user->isGuest) {
                        $menuItems[] = ['label' => 'Signup', 'url' => ['/site/signup']];
                        $menuItems[] = ['label' => 'Login', 'url' => ['/site/login']];
                    } else {
                    $menuItems[] = '<li>'
                        . Html::beginForm(['/site/logout'], 'post')
                        . Html::submitButton(
                            'Logout (' . Yii::$app->user->identity->username . ')',
                            ['class' => 'btn btn-link logout']
                        )
                        . Html::endForm()
                        . '</li>';
                    }
                    echo Nav::widget([
                    'options' => ['class' => 'navbar-nav navbar-right'],
                    'items' => $menuItems,
                ]);
                NavBar::end();  
                    ?>

                        </ul>
                </div>
                
            </div>
        </nav>
                
    <div class="content">
               
                <?= Alert::widget(); ?>
                <?= $content ?>
                <!-- </div> -->
            </div>
        </div>
    </div>


   
</div>


</body>
<?php $this->render('footer.php')?>
</html>
<?php //$this->endPage() ?>
