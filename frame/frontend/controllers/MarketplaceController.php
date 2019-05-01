<?php

namespace frontend\controllers;

use Yii;

use app\models\Marketplace;
use app\models\MypostSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use app\models\MarketplaceSearch;
use app\models\BoughtSearch;
use app\models\NegotiateSearch;


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

    public function actionInvoice()
    {
        $this->layout='loginLayout';
       

        return $this->render('invoice');
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

    public function actionMypost()
    {
        $this->layout='loginLayout';
        $searchModel = new MypostSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('mypost', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
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

    public function actionNegotiateview($id)
    {
        $this->layout='loginLayout';
        return $this->render('negotiateview', [
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

    public function actionMypostview($id)
    {
        return $this->render('mypostview', [
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
        $this->layout='postproduct';
        $model = new Marketplace();
        $searchModel = new MarketplaceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);
        if ($model->load(Yii::$app->request->post())){
            $img=UploadedFile::getInstance($model,'foto');
            $model->foto=$img;
            $model->foto->saveAs(Yii::$app->basePath.'/web/uploads/'.$model->foto->baseName.'.'.$model->foto->extension);
            if($model->save(false)){
                Yii::$app->session->setFlash('success','product added successfully');
                return $this->render('index', [
                    'searchModel' => $searchModel,
                    'dataProvider' => $dataProvider,
                ]);
            }
        }
        return $this->render('create', [
            'model' => $model,
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
            Yii::$app->session->setFlash('success','You have have successfully ordered'.'  '.$model->quantity.'  '.$model->unit.'  '."of".'
              '.$model->product.'  '."from".'  '.$model->name.'  '.", wait for notification from ".'  '.$model->name.'  '."on how Your product shall be delivered");
                 return $this->render('print', [
                    'model' => $model,
            ]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }
    public function actionNegotiate($id)
    {
        $this->layout='loginLayout';
        $model = $this->findModel($id);
        $searchModel = new MarketplaceSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            Yii::$app->session->setFlash('success','You have have successfully ordered'.'  '.$model->quantity.'  '.$model->unit.'  '."of".'
              '.$model->product.'  '."from".'  '.$model->name.'  '.", wait for notification from ".'  '.$model->name.'  '."on how Your product shall be delivered");
              return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('negotiate', [
            'model' => $model,
        ]);
    }

    public function actionPrint($id)
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

    public function actionLoad($id)
    {
        //$this->layout='loginLayout';
        $model = $this->findModel($id);
        

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->id]);
        }

        return $this->render('update', [
            'model' => $model,
            'mode'=> Pdf::MODE_CORE,
           
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

        throw new NotFoundHttpException(Yii::t('app', 'The requested page does not exist.'));
    }

    public function actionFnegotiate()
    {
        $this->layout='loginLayout';
        $searchModel = new NegotiateSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('fnegotiate', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }
}
