<?php

namespace app\controllers;

use Yii;
use yii\filters\AccessControl;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\LoginForm;
use app\models\ContactForm;
use app\models\CookmannMenu;
use app\models\CookmannMenuSearch;
use app\models\CookmannCallback;
use app\models\CookmannCallbackSearch;
use app\models\CookmannOrder;
use app\models\CookmannOrderSearch;

class SiteController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
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
        $searchModelMenu = new CookmannMenuSearch();
        $dataProviderMenu = $searchModelMenu->search(Yii::$app->request->queryParams);
        $modelCallback = new CookmannCallback();
        $modelOrder = new CookmannOrder();
        $menu = CookmannMenu::find()->all();
        if ($modelCallback->load(Yii::$app->request->post()) && $modelCallback->save()) {
            Yii::$app->session->setFlash('success', 'Ваш запрос №'. $modelCallback->id .' успешно принят. Мы Вам перезвоним!');
            Yii::$app->telegram->sendMessage(['chat_id' => '-243872264', 'text' => 'Поступил запрос на перезвон №' . $modelCallback->id . '. Тел.: '. $modelCallback->phone]);
            return $this->render('index', [
                'searchModelMenu' => $searchModelMenu,
                'dataProviderMenu' => $dataProviderMenu,
                'menu' => $menu,
                'modelCallback' => $modelCallback,
                'modelOrder' => $modelOrder,
            ]);
        }
        if ($modelOrder->load(Yii::$app->request->post()) && $modelOrder->save()) {
            Yii::$app->session->setFlash('success', 'Ваш заказ №'. $modelOrder->id .' успешно принят!');
            if ($modelOrder->active == 1)
                $active = 'активный';
            else
                $active = 'не активный';
            Yii::$app->telegram->sendMessage(['chat_id' => '-243872264', 'text' => 'Поступил '. $active .' заказ №' . $modelOrder->id . '. Блюда: '. $modelOrder->meal .' Тел.: '. $modelOrder->phone]);
            return $this->render('index', [
                'searchModelMenu' => $searchModelMenu,
                'dataProviderMenu' => $dataProviderMenu,
                'menu' => $menu,
                'modelCallback' => $modelCallback,
                'modelOrder' => $modelOrder,
            ]);
        }
        return $this->render('index', [
            'searchModelMenu' => $searchModelMenu,
            'dataProviderMenu' => $dataProviderMenu,
            'menu' => $menu,
            'modelCallback' => $modelCallback,
            'modelOrder' => $modelOrder,
        ]);
    }

    public function actionAdmin()
    {
        if (!Yii::$app->user->isGuest) {
            $searchModelMenu = new CookmannMenuSearch();
            $dataProviderMenu = $searchModelMenu->search(Yii::$app->request->queryParams);
            $searchModelCallback = new CookmannCallbackSearch();
            $dataProviderCallback = $searchModelCallback->search(Yii::$app->request->queryParams);
            $searchModelOrder = new CookmannOrderSearch();
            $dataProviderOrder = $searchModelOrder->search(Yii::$app->request->queryParams);

            return $this->render('admin', [
                'searchModelMenu' => $searchModelMenu,
                'dataProviderMenu' => $dataProviderMenu,
                'searchModelCallback' => $searchModelCallback,
                'dataProviderCallback' => $dataProviderCallback,
                'searchModelOrder' => $searchModelOrder,
                'dataProviderOrder' => $dataProviderOrder,
            ]);
        }
        return $this->redirect(['/site/login']);
    }

    public function actionViewmenu($id)
    {
        if (!Yii::$app->user->isGuest) {
            return $this->render('viewmenu', [
                'model' => $this->findMenuModel($id),
            ]);
        }
        return $this->redirect(['/site/login']);
    }

    public function actionViewcallback($id)
    {
        if (!Yii::$app->user->isGuest) {
            return $this->render('viewcallback', [
                'model' => $this->findCallbackModel($id),
            ]);
        }
        return $this->redirect(['/site/login']);
    }

    public function actionVieworder($id)
    {
        if (!Yii::$app->user->isGuest) {
            return $this->render('vieworder', [
                'model' => $this->findOrderModel($id),
            ]);
        }
        return $this->redirect(['/site/login']);
    }

    public function actionCreatemenu()
    {
        if (!Yii::$app->user->isGuest) {
            $model = new CookmannMenu();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['viewmenu', 'id' => $model->id]);
            }

            return $this->render('createmenu', [
                'model' => $model,
            ]);
        }
        return $this->redirect(['/site/login']);
    }

    public function actionCreatecallback()
    {
        if (!Yii::$app->user->isGuest) {
            $model = new CookmannCallback();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['viewcallback', 'id' => $model->id]);
            }

            return $this->render('createcallback', [
                'model' => $model,
            ]);
        }
        return $this->redirect(['/site/login']);
    }

    public function actionCreateorder()
    {
        if (!Yii::$app->user->isGuest) {
            $model = new CookmannOrder();

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['vieworder', 'id' => $model->id]);
            }

            return $this->render('createorder', [
                'model' => $model,
            ]);
        }
        return $this->redirect(['/site/login']);
    }

    public function actionUpdatemenu($id)
    {
        if (!Yii::$app->user->isGuest) {
            $model = $this->findMenuModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['viewmenu', 'id' => $model->id]);
            }

            return $this->render('updatemenu', [
                'model' => $model,
            ]);
        }
        return $this->redirect(['/site/login']);
    }

    public function actionUpdatecallback($id)
    {
        if (!Yii::$app->user->isGuest) {
            $model = $this->findCallbackModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['viewcallback', 'id' => $model->id]);
            }

            return $this->render('updatecallback', [
                'model' => $model,
            ]);
        }
        return $this->redirect(['/site/login']);
    }

    public function actionUpdateorder($id)
    {
        if (!Yii::$app->user->isGuest) {
            $model = $this->findOrderModel($id);

            if ($model->load(Yii::$app->request->post()) && $model->save()) {
                return $this->redirect(['vieworder', 'id' => $model->id]);
            }

            return $this->render('updateorder', [
                'model' => $model,
            ]);
        }
        return $this->redirect(['/site/login']);
    }

    public function actionDeletemenu($id)
    {
        if (!Yii::$app->user->isGuest) {

            $this->findMenuModel($id)->delete();

            return $this->redirect(['admin']);
        }
        return $this->redirect(['/site/login']);
    }

    public function actionDeletecallback($id)
    {
        if (!Yii::$app->user->isGuest) {
            $this->findCallbackModel($id)->delete();

            return $this->redirect(['admin']);
        }
        return $this->redirect(['/site/login']);
    }

    public function actionDeleteorder($id)
    {
        if (!Yii::$app->user->isGuest) {
            $this->findOrderModel($id)->delete();

            return $this->redirect(['admin']);
        }
        return $this->redirect(['/site/login']);
    }

    protected function findMenuModel($id)
    {
        if (($model = CookmannMenu::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findCallbackModel($id)
    {
        if (($model = CookmannCallback::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    protected function findOrderModel($id)
    {
        if (($model = CookmannOrder::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    /**
     * Login action.
     *
     * @return Response|string
     */
    public function actionLogin()
    {
        if (!Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $model = new LoginForm();
        if ($model->load(Yii::$app->request->post()) && $model->login()) {
            return $this->redirect(['/site/admin']);
        }

        $model->password = '';
        return $this->render('login', [
            'model' => $model,
        ]);
    }

    /**
     * Logout action.
     *
     * @return Response
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model,
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }
}
