<?php
namespace Service\Modules\GoodsModule\Models;

use yii\base\Model;
use yii\db\ActiveRecord;

class AreaCity extends ActiveRecord
{
    public static function tableName()
    {
        return '{{%area_city}}';
    }
}