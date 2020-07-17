<?php
/**
 * Created by PhpStorm.
 * User: zhanghongbo
 * Date: 2020-07-17
 * Time: 10:37
 */
namespace app\console\fixtures;

use yii\test\ActiveFixture;

class TestFixture extends ActiveFixture
{
    public $tableName = 'user';
    //或指定模型
//    public $modelClass = 'app\\models\User';
}