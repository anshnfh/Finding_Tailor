<?php

namespace frontend\controllers;

use Yii;
use frontend\models\Review;
use frontend\models\ReviewSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;

/**
 * ReviewController implements the CRUD actions for Review model.
 */
class ReviewController extends Controller
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
     * Lists all Review models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = "main_customer";
        $searchModel = new ReviewSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Review model.
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
     * Creates a new Review model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate($id)
    {
        $this->layout = "main_customer";
        $model = new Review();

        // var_dump($id);
        // die();

        $user_id = Yii::$app->user->identity->id;
        $user = Yii::$app->user;

        // var_dump($user_id);
        // die();

        $pjht_id = $id;

        $query = (new \yii\db\Query())
                ->select('*')
                ->from('review')
                ->leftJoin('user', '`user`.`id` = `review`.`review_id`')
                ->leftJoin('penjahit_profil', '`penjahit_profil`.`pjht_id` = `review`.`pjht_id`')
                 ->where(['`penjahit_profil`.`pjht_id`' => $pjht_id]);
                 // ->where(['`penjahit_profil`.`pjht_id`' => $pjht_id]);
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
            // return $this->redirect(['view', 'id' => $model->review_id]);
            return $this->redirect(['detail', 'id' => $model->pjht_id]);
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Review model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);

        if ($model->load(Yii::$app->request->post()) && $model->save()) {
            return $this->redirect(['view', 'id' => $model->review_id]);
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Review model.
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
     * Finds the Review model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Review the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Review::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
