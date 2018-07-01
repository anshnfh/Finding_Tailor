<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use common\widgets\Alert;

// AppAsset::register($this);
use frontend\assets\TemplateAsset;

// if (class_exists('ramosisw\CImaterial\web\MaterialAsset')) {
//     ramosisw\CImaterial\web\MaterialAsset::register($this);
// }

TemplateAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Roboto+Slab:400,700|Material+Icons" />
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>

<body class="">
<?php //$this->beginBody() ?>

    <div class="wrapper">
        <?= $this->render('sidebar.php');?>


        <div class="main-panel">
            <?= $this->render('header.php'); ?>
            
            <div class="content">
                <?= Alert::widget() ?>
                <?= $content ?>
            </div>
           <?= $this->render('footer.php')?>

           
        </div>
    </div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
