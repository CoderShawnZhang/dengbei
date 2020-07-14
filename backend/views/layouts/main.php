<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\AppAsset;
use yii\helpers\Html;
use yii\helpers\Url;

AppAsset::register($this);
?>

<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<body class="layui-layout-body">
<div class="layui-layout layui-layout-admin">
    <div class="layui-header">
        <div class="layui-logo">搜灯管理后台</div>
        <!-- 头部区域（可配合layui已有的水平导航） -->
        <ul class="layui-nav layui-layout-left topLevelMenus">
            <li class="layui-nav-item" data-menu="1"><a href="javascript:;">搜灯网</a></li>
            <li class="layui-nav-item" data-menu="2"><a href="javascript:;">统计报表</a></li>
            <li class="layui-nav-item" data-menu="2"><a href="javascript:;">单据查询</a></li>
            <li class="layui-nav-item" data-menu="3"><a href="javascript:;">定时任务</a></li>
            <li class="layui-nav-item" data-menu="3"><a href="javascript:;">配置管理</a></li>
            <li class="layui-nav-item" data-menu="4"><a href="javascript:;">系统管理</a></li>
            <span class="layui-nav-bar"></span>
        </ul>
        <ul class="layui-nav layui-layout-right">
            <li class="layui-nav-item">
                <a href="javascript:;">
                    <img src="//tva1.sinaimg.cn/crop.0.0.118.118.180/5db11ff4gw1e77d3nqrv8j203b03cweg.jpg" class="layui-nav-img">
                    管理员
                    <span class="layui-nav-more"></span>
                </a>
                <dl class="layui-nav-child">
                    <dd><a href="">基本资料</a></dd>
                    <dd><a href="">安全设置</a></dd>
                </dl>
            </li>
            <li class="layui-nav-item"><a href="">退出</a></li>
            <span class="layui-nav-bar"></span>
        </ul>
    </div>

    <div class="layui-side layui-bg-black">
        <div class="layui-side-scroll">
            <!-- 左侧导航区域（可配合layui已有的垂直导航） -->
            <ul class="layui-nav layui-nav-tree" lay-filter="test">

            </ul>
        </div>
    </div>

    <div class="layui-body">
        <!-- 内容主体区域 -->
        <div>
            <div class="layui-tab" lay-filter="top_nav_raw" lay-allowclose="true">
                <ul class="layui-tab-title">
                    <li class="layui-this"><i class="layui-icon">&#xe68e;</i>网站设置</li>
                </ul>
                <div class="layui-tab-content clildFrame">
                    <div class="layui-tab-item layui-show">
                        <iframe src='/site/welcome'></iframe>
                    </div>
                </div>
            </div>
         </div>
    </div>

    <div class="layui-footer">
        <!-- 底部固定区域 -->
        © layui.com - 底部固定区域
    </div>
</div>
</body>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
