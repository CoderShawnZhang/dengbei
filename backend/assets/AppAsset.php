<?php

namespace backend\assets;

use yii\web\AssetBundle;

/**
 * Main backend application asset bundle.
 */
class AppAsset extends AssetBundle
{
    // public $basePath = '@webroot';
    // public $baseUrl = '@web';
    public $sourcePath = '@backend/assets/static';
    public $css = [
        
       
       
        'layui/css/layui.css',
        'css/xadmin.css',
        'css/style.css',
        'css/font.css',
         'css/xadmin.css'
    ];
    public $js = [
        'javascript/xcity.js',
       
        'javascript/jquery.min.js',
       
         'layui/layui.js',
          'javascript/xadmin.js',
    ];
    public $depends = [
        // 'yii\web\YiiAsset',
        // 'yii\bootstrap\BootstrapAsset',
    ];
}
