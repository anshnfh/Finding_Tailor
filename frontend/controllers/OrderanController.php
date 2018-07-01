<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Orderan;
use frontend\models\OrderanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;

/**
 * OrderanController implements the CRUD actions for Orderan model.
 */
class OrderanController extends Controller
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
     * Lists all Orderan models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new OrderanSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

       $user_id = Yii::$app->user->identity->id;

        $dataProvider = new ActiveDataProvider(['query' => Orderan::find()->andFilterWhere(['user_id' => $user_id])]);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Orderan model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Orderan model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Orderan();

        $req = Yii::$app->request->post();
        $user_id = Yii::$app->user->identity->id;

        $query = (new \yii\db\Query())
                ->select('*')
                ->from('orderan')
                ->leftJoin('user', '`user`.`id` = `orderan`.`user_id`')
                ->leftJoin('penjahit_profil', '`penjahit_profil`.`pjht_id` = `orderan`.`pjht_id`');
                // ->where(['user_id' => $user_id])
                // ->andWhere(['pjht_id' => $pjht_id]);

        

                


        $command = $query->createCommand(); 
        $data = $command->queryAll();


       if($model->load($req)){
            $model->user_id = $user_id;
            $model->pjht_id = $data[0]['pjht_id'];
            $image = UploadedFile::getInstance($model, 'order_photo_model');
            $model->order_photo_model = 'model/' . $image->baseName. '.' . $image->extension;
            $image->saveAs($model->order_photo_model);
            $model->save();
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->order_id]);
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Orderan model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->order_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Orderan model.
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
     * Finds the Orderan model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Orderan the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Orderan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
