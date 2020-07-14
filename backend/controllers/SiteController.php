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
                'id' => 2,'pid' => 1,'title' => '主菜单1','icon' => '&#xe716;','href'=>'/site/welcome','target' => '_self',
                'children'=>[
                    ['id' => 4,'pid' => 2,'title' => '1-子菜单1','icon' => '&#xe716;','href'=>'/site/welcome','target' => '_self'],
                    ['id' => 5,'pid' => 2,'title' => '1-子菜单2','icon' => '&#xe716;','href'=>'/site/welcome','target' => '_self'],
                    ['id' => 6,'pid' => 2,'title' => '1-子菜单3','icon' => '&#xe716;','href'=>'/site/welcome','target' => '_self'],
                    ['id' => 6,'pid' => 2,'title' => '1-123','icon' => '&#xe716;','href'=>'/site/welcome','target' => '_self'],
                    ['id' => 6,'pid' => 2,'title' => '1-333','icon' => '&#xe716;','href'=>'/site/welcome','target' => '_self'],
                    ['id' => 6,'pid' => 2,'title' => '1-444','icon' => '&#xe716;','href'=>'/site/welcome','target' => '_self'],
                ]
            ],
            [
                'id' => 3,'pid' => 1,'title' => '主菜单2','icon' => '&#xe716;','href'=>'/site/welcome','target' => '_self',
                'children'=>[
                    ['id' => 7,'pid' => 3,'title' => '2-子菜单1','icon' => '&#xe716;','href'=>'/site/welcome','target' => '_self'],
                    ['id' => 8,'pid' => 3,'title' => '2-子菜单2','icon' => '&#xe716;','href'=>'/site/welcome','target' => '_self'],
                    ['id' => 9,'pid' => 3,'title' => '2-子菜单3','icon' => '&#xe716;','href'=>'/site/welcome','target' => '_self'],
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
                'id' => 2,'pid' => 1,'title' => '主菜单1','icon' => '&#xe716;','href'=>'/site/welcome','target' => '_self',
                'children'=>[
                    ['id' => 4,'pid' => 2,'title' => '1-子菜单1','icon' => '&#xe716;','href'=>'/site/welcome','target' => '_self'],
                ]
            ],
            [
                'id' => 3,'pid' => 1,'title' => '主菜单2','icon' => '&#xe716;','href'=>'/site/welcome','target' => '_self',
                'children'=>[
                    ['id' => 7,'pid' => 3,'title' => '2-子菜单1','icon' => '&#xe716;','href'=>'/site/welcome','target' => '_self'],
                    ['id' => 8,'pid' => 3,'title' => '2-子菜单2','icon' => '&#xe716;','href'=>'/site/welcome','target' => '_self'],
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
