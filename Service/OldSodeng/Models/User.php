<?php
namespace Service\OldSodeng\Models;

class User extends \yii\db\ActiveRecord
{
    /**
     * 使用搜灯旧数据库
     * @return \yii\db\Connection
     */
    public static function getDb()
    {
        return Yii::$app->old_sodeng;
    }

    /**
     * user表
     * @return string
     */
    public static function tableName()
    {
        return 'oa_user';
    }
}