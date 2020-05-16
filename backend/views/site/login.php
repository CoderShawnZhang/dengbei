<?php

/* @var $this \yii\web\View */
/* @var $content string */

use backend\assets\LoginAsset;
use yii\helpers\Html;
LoginAsset::register($this);
?>
<div id="wrapper" class="login-page">
<div id="login_form" class="form">
<form class="register-form">
<input type="text" placeholder="用户名" value="admin" id="r_user_name" />
<input type="password" placeholder="密码" id="r_password" />
<input type="text" placeholder="电子邮件" id="r_emial" />
<button id="create">创建账户</button>
<p class="message">已经有了一个账户? <a href="#">立刻登录</a></p>
</form>
<form class="login-form">
 <h2>管理登录</h2>
<input type="text" placeholder="用户名" value="admin" id="user_name" />
<input type="password" placeholder="密码" id="password" />
<button id="login">登　录</button>
<p class="message">还没有账户? <a href="#">立刻创建</a></p>
</form>
</div>
</div>

