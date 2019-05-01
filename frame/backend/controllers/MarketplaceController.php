<?php

namespace backend\controllers;

use Yii;
use backend\models\Marketplace;
use backend\models\MarketplaceSearch;
use backend\models\BoughtSearch;
use backend\models\NegotiateSearch;
use backend\models\User;
use backend\models\UserSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * MarketplaceController implements the CRUD actions for Marketplace model.
 */
class MarketplaceController extends Controller
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
     * Lists all Marketplace models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout='loginLayout';
        $searchModel = new MarketplaceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionNegotiate()
    {
        $this->layout='loginLayout';
        $searchModel = new NegotiateSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('negotiate', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    public function actionReport()
    {
        $this->layout='loginLayout';
        $model=new User();
        $searchModel = new UserSearch();
        $query= User::find()->all();
        
      
        return $this->render('report');
    }

    
    /**
     * Displays a single Marketplace model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $this->layout='loginLayout';
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    public function actionBview($id)
    {
        $this->layout='loginLayout';
        return $this->render('bview', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Marketplace model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout='loginLayout';
        $model = new Marketplace();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    public function actionBought()
    {
        $this->layout='loginLayout';
        $searchModel = new BoughtSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('bought', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Updates an existing Marketplace model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $this->layout='loginLayout';
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Marketplace model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->layout='loginLayout';
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Marketplace model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Marketplace the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        $this->layout='loginLayout';
        if (($model = Marketplace::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
