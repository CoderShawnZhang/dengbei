<?php
namespace backend\controllers;

use Yii;
use yii\web\Controller;
use yii\filters\VerbFilter;
use yii\filters\AccessControl;
use common\models\LoginForm;
use yii\web\Response;

/**
 * Site controller
 */
class SiteController extends Controller
{

    /**
     * {@inheritdoc}
     */
    // public function behaviors()
    // {
    //     return [
    //         'access' => [
    //             'class' => AccessControl::className(),
    //             'rules' => [
    //                 [
    //                     'actions' => ['login', 'error'],
    //                     'allow' => true,
    //                 ],
    //                 [
    //                     'actions' => ['logout'],
    //                     'allow' => true,
    //                     'roles' => ['@'],
    //                 ],
    //             ],
    //         ],
    //         'verbs' => [
    //             'class' => VerbFilter::className(),
    //             'actions' => [
    //                 'logout' => ['post'],
    //             ],
    //         ],
    //     ];
    // }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    /**
     * @test
     */
    private function getMenu()
    {
        $menuArray = [
            [
                'id' => 2,'pid' => 1,'title' => '产品库','icon' => 'layui-icon-cellphone','url'=>'/site/welcome','target' => '_self',
                'children'=>[
                    ['id' => 4,'pid' => 2,'title' => '1-子菜单1','icon' => 'layui-icon-vercode','url'=>'/Goods/index/test','target' => '_self'],
                    ['id' => 5,'pid' => 2,'title' => '1-子菜单2','icon' => 'layui-icon-login-wechat','url'=>'/Orders/index/index','target' => '_self'],
                    ['id' => 6,'pid' => 2,'title' => '1-子菜单3','icon' => 'layui-icon-login-qq','url'=>'/Orders/user-order/order-log','target' => '_self'],
                    ['id' => 6,'pid' => 2,'title' => '1-123','icon' => 'layui-icon-login-weibo','url'=>'/site/welcome','target' => '_self'],
                    ['id' => 6,'pid' => 2,'title' => '1-333','icon' => 'layui-icon-password','url'=>'/site/welcome','target' => '_self'],
                    ['id' => 6,'pid' => 2,'title' => '1-444','icon' => 'layui-icon-username','url'=>'/site/welcome','target' => '_self'],
                ]
            ],
            [
                'id' => 3,'pid' => 1,'title' => 'RBAC','icon' => 'layui-icon-auz','url'=>'/site/welcome','target' => '_self',
                'children'=>[
//                    ['id' => 7,'pid' => 3,'title' => '用户列表','icon' => 'layui-icon-website','url'=>'/admin/','target' => '_self'],
//                    ['id' => 8,'pid' => 3,'title' => '分配','icon' => 'layui-icon-console','url'=>'/admin/role','target' => '_self'],
                    ['id' => 9,'pid' => 3,'title' => '角色列表','icon' => 'layui-icon-set','url'=>'/admin/role','target' => '_self'],
                    ['id' => 9,'pid' => 3,'title' => '权限列表','icon' => 'layui-icon-set','url'=>'/admin/permission','target' => '_self'],
                    ['id' => 9,'pid' => 3,'title' => '路由列表','icon' => 'layui-icon-set','url'=>'/admin/route','target' => '_self'],
                    ['id' => 9,'pid' => 3,'title' => '规则列表','icon' => 'layui-icon-set','url'=>'/admin/rule','target' => '_self'],
                    ['id' => 9,'pid' => 3,'title' => '菜单列表','icon' => 'layui-icon-set','url'=>'/admin/menu','target' => '_self'],
                ]
            ],
            [
                'id' => 3,'pid' => 1,'title' => '仓库管理','icon' => 'layui-icon-radio','url'=>'/site/welcome','target' => '_self',
                'children'=>[
                    ['id' => 7,'pid' => 3,'title' => '2-子菜单1','icon' => 'layui-icon-website','url'=>'/site/welcome','target' => '_self'],
                    ['id' => 8,'pid' => 3,'title' => '2-子菜单2','icon' => 'layui-icon-console','url'=>'/site/welcome','target' => '_self'],
                    ['id' => 9,'pid' => 3,'title' => '2-子菜单3','icon' => 'layui-icon-set','url'=>'/site/welcome','target' => '_self'],
                ]
            ],
            [
                'id' => 3,'pid' => 1,'title' => '用户管理','icon' => 'layui-icon-add-circle','url'=>'/site/welcome','target' => '_self',
                'children'=>[
                    ['id' => 7,'pid' => 3,'title' => '2-子菜单1','icon' => 'layui-icon-website','url'=>'/site/welcome','target' => '_self'],
                    ['id' => 8,'pid' => 3,'title' => '2-子菜单2','icon' => 'layui-icon-console','url'=>'/site/welcome','target' => '_self'],
                    ['id' => 9,'pid' => 3,'title' => '2-子菜单3','icon' => 'layui-icon-set','url'=>'/site/welcome','target' => '_self'],
                ]
            ]
        ];
        return $menuArray;
    }


    /**
     * @test
     */
    private function getMenu1()
    {
        $menuArray = [
            [
                'id' => 2,'pid' => 1,'title' => '主菜单1','icon' => 'layui-icon-location','url'=>'/site/welcome','target' => '_self',
                'children'=>[
                    ['id' => 4,'pid' => 2,'title' => '1-子菜单1','icon' => 'layui-icon-read','url'=>'/site/welcome','target' => '_self'],
                ]
            ],
            [
                'id' => 3,'pid' => 1,'title' => '主菜单2','icon' => 'layui-icon-face-smile','url'=>'/site/welcome','target' => '_self',
                'children'=>[
                    ['id' => 7,'pid' => 3,'title' => '2-子菜单1','icon' => 'layui-icon-find-fill','url'=>'/site/welcome','target' => '_self'],
                    ['id' => 8,'pid' => 3,'title' => '2-子菜单2','icon' => 'layui-icon-speaker','url'=>'/site/welcome','target' => '_self'],
                ]
            ]
        ];
        return $menuArray;
    }

    public function actionMenu()
    {
        Yii::$app->response->format = Response::FORMAT_JSON;

        return [
            'menu' => $this->getMenu(),
            'success' => 22,
            'msg' => 11,
        ];
    }

    public function actionTop()
    {

        $get = Yii::$app->request->get();
        $type = isset($get['type']) ? $get['type'] : 0;

        Yii::$app->response->format = Response::FORMAT_JSON;
        return [
            'menu' => $this->getMenu1(),
            'success' => 22,
            'msg' => 11,
        ];
    }
    /**
     * Login action.
     *
     * @return string
     */
    public function actionLogin()
    {
        $this->layout = "@backend/views/layouts/login";
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->goBack();
        } else {
            $model->password = '';

            return $this->render('login', [
                'model' => $model,
            ]);
        }
    }
//    public $layout = 'header';   //定义父模板名为home
    public function actionWelcome(){
        $this->layout = false;

        return $this->render('welcome');
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }
}
