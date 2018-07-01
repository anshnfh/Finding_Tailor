<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class TemplateAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [

        'assets/36d77ac6/css/material-dashboard.css'
        // 'template/css/material-dashboard.css',
        // 'template/css/material-dashboard.min.css',
        // 'template/demo/demo.css',
        // 'css/site.css',
        // 'template/demo/docs.css',
        // 'template/demo/docs.min.css',

    ];
    public $js = [
  

        'template/js/material-dashboard.js',
        // 'template/js/core/bootstrap-material-design.min.js',
        // 'template/js/core/popper.min.js',

    ];

    public $scss = [
        // 'template/scss/material-dashboard.scss',
    ];

    public $depends = [
        'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
