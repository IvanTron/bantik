<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace app\assets;

use yii\web\AssetBundle;

/**
 * @author Qiang Xue <qiang.xue@gmail.com>
 * @since 2.0
 */
class AppAsset extends AssetBundle
{
    public $basePath = '@webroot';
    public $baseUrl = '@web';
    public $css = [
        'css/tabs.css',
        'css/easy-responsive-tabs.min.css',
        'css/templatemo-style.css',
        'css/animate.min.css',
        'flexslider.css',
    ];
    public $js = [
        'jquery.flexslider-min.js',
        'js/easyResponsiveTabs.js',
        'js/plugins.js',
        'js/jquery.nicescroll.min.js',
        'js/jquery.gmap3.min.js',
        'js/jquery.blueberry.js',
        'js/main.js',
    ];
    public $depends = [
        'yii\web\YiiAsset',
        'yii\bootstrap\BootstrapAsset',
    ];
}
