<?php
namespace backend\Modules\Goods\Controllers;

use backend\controllers\BaseController;

/**
 * Site controller
 */
class IndexController extends BaseController
{
    public function actionIndex()
	{
		return $this->render('index');
	}

	public function actionTest()
	{
		var_dump(111);die;
	}
}