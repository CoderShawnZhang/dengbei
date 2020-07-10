<?php
namespace Service\Modules\GoodsModule;

use Service\Modules\GoodsModule\Models\AreaCity;
use yii\data\ActiveDataProvider;
use yii\data\Pagination;
use yii\debug\models\timeline\DataProvider;

class GoodsService
{
    public static function test()
    {
        return 123;
    }

    public static function getList()
    {
        $query = AreaCity::find();
        $pagination = new Pagination([
            'defaultPageSize' => 10,
            'totalCount' => $query->count()
        ]);
        return $query->offset($pagination->offset)->limit($pagination->limit)->all();
    }

    public static function getCount()
    {
       return AreaCity::find()->count();
    }

    public static function getProvider()
    {
        $query = AreaCity::find();

        /* @var $provider ActiveDataProvider */
        $provider = new ActiveDataProvider([
            'query' => $query,
            'pagination'=>[
                'pageSize' => 10
            ],
            'sort' => [
                'defaultOrder' => [
                    'id' => SORT_DESC
                ]
            ]
        ]);
        return $provider;
    }
}