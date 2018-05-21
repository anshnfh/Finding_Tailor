<?php

namespace frontend\controllers;

use Yii;
use frontend\models\PenjahitJahitan;
use frontend\models\PenjahitJahitanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * PenjahitJahitanController implements the CRUD actions for PenjahitJahitan model.
 */
class PenjahitJahitanController extends Controller
{
    /**
     * @inheritdoc
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
     * Lists all PenjahitJahitan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = "main_penjahit";
        $searchModel = new PenjahitJahitanSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single PenjahitJahitan model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $this->layout = "main_penjahit";
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new PenjahitJahitan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout = "main_penjahit";
        $model = new PenjahitJahitan();

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->hasil_id]);
        }


        if ($model->load(Yii::$app->request->post())) {
            $image = UploadedFile::getInstance($model, 'hasil_foto_jahit');
            $model->hasil_foto_jahit = 'uploads/' . $image->baseName. '.' . $image->extension;
            $image->saveAs($model->hasil_foto_jahit);
            $model->save();
            return $this->redirect(['view', 'id' => $model->hasil_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);

        
    }

    /**
     * Updates an existing PenjahitJahitan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $this->layout = "main_penjahit";
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->hasil_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing PenjahitJahitan model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->layout = "main_penjahit";
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the PenjahitJahitan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PenjahitJahitan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        $this->layout = "main_penjahit";
        if (($model = PenjahitJahitan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionUpload()
    {
        $model = new PenjahitJahitan();

        if (Yii::$app->request->isPost) {
            $model->hasil_foto_jahit = UploadedFile::getInstance($model, 'hasil_foto_jahit');
            if ($model->upload()) {
                // file is uploaded successfully
                return $this->redirect(['view', 'id' => $model->id]);
            }
        }

        return $this->render('upload', ['model' => $model]);
    }

    public function actionGaleri()
    {
        $this->layout = "main_penjahit";
        return $this->render('galeri');
    }
}
