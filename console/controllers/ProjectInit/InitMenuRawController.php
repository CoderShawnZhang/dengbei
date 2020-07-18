<?php
/**
 * Created by PhpStorm.
 * User: zhanghongbo
 * Date: 2020-07-18
 * Time: 16:45
 */
namespace console\controllers\ProjectInit;

use console\controllers\BaseController;
use console\models\MenuAr;
use yii\widgets\Menu;

class InitMenuRawController extends BaseController
{
    public function beforeAction($action)
    {
        $menu = MenuAr::deleteAll(['type_name' => 'rbac']);
        return parent::beforeAction($action); // TODO: Change the autogenerated stub
    }

    /**
     * 执行RBAC菜单初始化
     */
    public function actionRun()
    {
        $menu = new MenuAr();
        $trans = \Yii::$app->db->beginTransaction();
        try{
            $rbacMenuArray = $this->getRbacMenuArray(0);
            $parent =  $rbacMenuArray['parent'];
            $menu = new MenuAr();
            $menu->load($parent,'');
            $insertParentRes = $menu->save();
            if(!$insertParentRes){
                throw new \Exception($menu->getErrors());
            } else {
                $parent_id = \Yii::$app->db->getLastInsertID();
                $this->echoLine('RBAC(开发使用)');
            }
            $rbacMenuArray = $this->getRbacMenuArray($parent_id);
            $data = $rbacMenuArray['children'];
            foreach($data as $key => $val){
                $menu = new MenuAr();
                $menu->load($val,'');
                $res = $menu->save();
                if(!$res){
                    throw new \Exception($menu->getErrors());
                }
                $this->echoLine($val['name']);
            }
            $trans->commit();
        } catch (\Exception $e){
            $trans->rollBack();
            $this->echoLine($e->getMessage());
        }
    }

    /**
     * RBAC菜单
     * @param $parent_id
     * @return array
     */
    private function getRbacMenuArray($parent_id)
    {
        return [
            'parent' => ['name' => 'RBAC(开发使用)', 'parent' => '', 'route' => '/admin/role/index', 'order'=>'', 'data'=>'{"icon":"layui-icon-auz"}' ,'type_name' => 'rbac'],
            'children' => [
                ['name' => '角色列表', 'parent' => $parent_id, 'route' => '/admin/role/index', 'order'=>1, 'data'=>'{"icon":"layui-icon-set"}' ,'type_name' => 'rbac'],
                ['name' => '权限列表', 'parent' => $parent_id, 'route' => '/admin/permission/index', 'order'=>2, 'data'=>'{"icon":"layui-icon-set"}' ,'type_name' => 'rbac'],
                ['name' => '路由列表', 'parent' => $parent_id, 'route' => '/admin/route/index', 'order'=>3, 'data'=>'{"icon":"layui-icon-set"}' ,'type_name' => 'rbac'],
                ['name' => '规则列表', 'parent' => $parent_id, 'route' => '/admin/rule/index', 'order'=>4, 'data'=>'{"icon":"layui-icon-set"}' ,'type_name' => 'rbac'],
                ['name' => '菜单列表', 'parent' => $parent_id, 'route' => '/admin/menu/index', 'order'=>5, 'data'=>'{"icon":"layui-icon-set"}' ,'type_name' => 'rbac']
            ]
        ];
    }
}