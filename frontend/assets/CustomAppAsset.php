<?php

namespace frontend\assets;

use yii\web\AssetBundle;

/**
 * Main frontend application asset bundle.
 */
class CustomAppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';

    public $css = [
        'css/linearicons.css',
        'css/font-awesome.min.css',
        'css/font-awesome.css',
        'css/magnific-popup.css',
        'css/nice-select.css',
        'css/bootstrap.css',
        'css/bootstrap.min.css',
        'css/bootstrap2.min.css',
        'css/main.css',
        // 'css/new-age.min.css',
        'css/site.css',
        'css/style.css',
        // 'css/site.css',
        // 'css/site.css',
        'css/style_login.css',
        'css/now-ui-dashboard.css',
        'css/now-ui-dashboard.min.css',
        'css/demo.css',
        'css/style_login.css'



    ];
    public $js = [
        
        // 'js/vendor/bootstrap.min.js',
        // 'js/jquery.nice-select.min.js',
        // 'js/jquery.sticky.js',
        // 'js/parallax.min.js',
        // 'js/jquery.magnific-popup.min.js',
        // 'js/waypoints.min.js',
        // 'js/jquery.counterup.min.js',
        'js/main.js',
        'js/index.js',
         // 'js/index_login.js',
        // 'js/core/bootstrap.min.js',
        // 'js/core/bootstrap.js',
        // 'js/core/jquery.3.2.1.min.js',
        // 'js/core/jquery.min.js',
        // 'js/core/popper.min.js',
        // 'js/plugins/bootstrap-datepicker.js',
        // 'js/plugins/bootstrap-notify.js',
        // 'js/plugins/bootstrap-switch.js',
        // 'js/plugins/chartist.min.js',
        // 'js/plugins/chartjs.min.js',
        // 'js/plugins/nouislider.min.js',
        // 'js/plugins/perfect-scrollbar.jquery.min.js',
        //'js/plugins/demo.js',
        //'js/now-ui-dashboard.js',
        //'js/now-ui-dashboard.min.js',






    ];
    public $sass =[
        'sass/light-bootstrap-dashboard.scss',
        
    ];

    public $scss =[
        'scss/style.scss',
        'scss/now-ui-dashboard.scss',
        
    ];

    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
