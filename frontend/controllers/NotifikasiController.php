<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Notifikasi;
use frontend\models\NotifikasiSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;

/**
 * NotifikasiController implements the CRUD actions for Notifikasi model.
 */
class NotifikasiController extends Controller
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
     * Lists all Notifikasi models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = "main_penjahit";
        $searchModel = new NotifikasiSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $user_id = Yii::$app->user->identity->id;

        $dataProvider = new ActiveDataProvider([
        'query' => Notifikasi::find()->andFilterWhere(['user_id' => $user_id])
       ]);


        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Notifikasi model.
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
     * Creates a new Notifikasi model.
     * If creation is successful, the browser will be redirected to the 'view' page.w
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout = "main_penjahit";
        $model = new Notifikasi();

        $user_id = Yii::$app->user->identity->id;
        $user = Yii::$app->user;

        $query = (new \yii\db\Query())
                ->select('*')
                ->from('notifikasi')
                ->leftJoin('user', '`user`.`id` = `notifikasi`.`user_id`');
                // ->leftJoin('penjahit_profil', '`penjahit_profil`.`pjht_id` = `penjahit_jahitan`.`pjht_id`')
                // ->leftJoin('user', '`user`.`id` = `penjahit_profil`.`user_id`');

        $command = $query->createCommand(); 
        $data = $command->queryAll();


        if($model->load(Yii::$app->request->post())){
            $model->user_id = $user_id;
            $model->pjht_id = $data[0]['pjht_id'];
            $model->save();
            if ($model->save()) {
                return $this->redirect(['index', [
                    'datas'=>$data,
                ]]);
            }

        }

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->notif_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Notifikasi model.
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
            return $this->redirect(['view', 'id' => $model->notif_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Notifikasi model.
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
     * Finds the Notifikasi model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Notifikasi the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Notifikasi::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
