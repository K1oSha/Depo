<?php

namespace app\controllers;

use Yii;
use app\models\Request;
use app\models\RequestSearch;
use yii\web\Controller;
use app\models\UserRecord;
use app\models\Contributor;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * RequestController implements the CRUD actions for Request model.
 */
class RequestController extends Controller
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Request models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new RequestSearch();
        $searchModel->confirmed = 1;

        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionIndexmod()
    {
        // 'confirmed' => $this->confirmed,
        $searchModel = new RequestSearch();
        $searchModel->confirmed = 0;
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        return $this->render('index_mod', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Request model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $model = $this->findModel($id);
        $model->visited += 1;
        $model->save();
        return $this->render('view', [
            'model' => $model,
        ]);
    }

    /**
     * Creates a new Request model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Request();

        if ($model->load(Yii::$app->request->post()))
        {
            $model->author_id = Yii::$app->user->identity->id;
            $model->start = date("Y-m-d H:i",strtotime($model->start));
            $model->end = date("Y-m-d H:i",strtotime($model->end));
            $model->bannerurl = '/banners/pasha.png'; 
            $model->confirmed = 0; 
            $model->contacts = 'Организатор: РЖД<br>E-mail: g-shock@gmail.clock<br>Швец Анна Владимировна +7 (916) 237-50-76';
            $model->register_end = date("Y-m-d H:i",strtotime($model->register_end));
            // $model->category_id =  implode(', ', $model->category_id);
            if ($model->save()) {
                $contrib = new Contributor;
                $contrib->user_id = Yii::$app->user->identity->id;
                $contrib->request_id = $model->id;
                $contrib->came = 0;
                $contrib->save();
                return $this->redirect(['index']);

            } 
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionRegister($id)
    {
        $model = new Contributor;
        Yii::$app->session['test1'] = $model;
        if (Yii::$app->request->isPost)
        {
            $model->user_id    = Yii::$app->user->identity->id;
            $model->request_id = $id;
            $model->came       = 0;
            Yii::$app->session['test'] = $model;
            $model->save();
        }
        $request = $this->findModel($id);
        $request->registered += 1;
        $request->save();
        return $this->redirect(['view', 'id' => $model->request_id]);

    }

    public function actionRegisterguest($id)
    {
        $user = new UserRecord;
        if (Yii::$app->request->post())
        {
            $user->email  = Yii::$app->request->post('email');
            $user->name   = Yii::$app->request->post('name');
            $user->number = Yii::$app->request->post('phone');
            if ($user->validate())
            {
                $known = UserRecord::find()->where(['email'=>$user->email])->one();
                if (!$known)
                {
                    $user->setPassword('1');
                    $user->save();
                }
                else
                {
                    $user = $known;
                }
                $model             = new Contributor;
                $model->user_id    = $user->id;
                $model->request_id = $id;
                $model->came       = 0;
                $model->save();
            }
            
        }
        return $this->render('view', ['model'=>$this->findModel($id)]);
    }

    /**
     * Updates an existing Request model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post())) {
            if (Yii::$app->user->identity->is_moderator)
            {
                $model->confirmed = 1;
            }
            // if ($model->category_id) $model->category_id =  implode(', ', $model->category_id);
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Request model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Request model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Request the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Request::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
