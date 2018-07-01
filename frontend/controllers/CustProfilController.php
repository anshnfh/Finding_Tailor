<?php

namespace frontend\controllers;

use Yii;
use frontend\models\CustProfil;
use frontend\models\CustProfilSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\data\ActiveDataProvider;
use yii\web\UploadedFile;
use yii\helpers\Url;

/**
 * CustProfilController implements the CRUD actions for CustProfil model.
 */
class CustProfilController extends Controller
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
     * Lists all CustProfil models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = "main_customer";
        // $searchModel = new CustProfilSearch();
        // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $user_id = Yii::$app->user->identity->id;
        $user = Yii::$app->user;
        // var_dump($user_id);
        // die();

       //  $dataProvider = new ActiveDataProvider([
       //  'query' => CustProfil::find()->andFilterWhere(['user_id' => $user_id])
       // ]);

        //if -> ada data profil: tampilin
        //elses -> tampilin isi profilmu!

        $query = (new \yii\db\Query())
                ->select('*')
                ->from('user_profil')
                ->where(['user_id' => $user_id])
                ->leftJoin('user', '`user`.`id` = `user_profil`.`user_id`');

        $command = $query->createCommand(); 
        $data = $command->queryOne();

        return $this->render('index', [
            'userid' => $user_id,
            'datas' => $data,
            // 'searchModel' => $searchModel,
            // 'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single CustProfil model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        $this->layout = "main_customer";
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new CustProfil model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout = "main_customer";
        $model = new CustProfil(['scenario' => 'create']);
        $model->scenario = 'create';

        $req=Yii::$app->request->post();
        $user_id = Yii::$app->user->identity->id;

        $query = (new \yii\db\Query())
                ->select('*')
                ->from('user_profil')
                ->leftJoin('user', '`user`.`id` = `user_profil`.`user_id`');

        $command = $query->createCommand(); 
        $data = $command->queryOne();

        if($model->load($req)){
            $model->user_id = $user_id;
            $image = UploadedFile::getInstance($model, 'cust_photo');
            $model->cust_photo= 'profpicscust/' . $image->baseName. '.' . $image->extension;
            $image->saveAs($model->cust_photo);
            $model->save();
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }


        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing CustProfil model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $this->layout = "main_customer";
        $model = $this->findModel($id);
        $model->scenario = 'update';

        $req = Yii::$app->request->post();
        $user_id = Yii::$app->user->identity->id;

        $query = (new \yii\db\Query())
                ->select('*')
                ->from('user_profil')
                ->where(['user_id' => $user_id])
                ->leftJoin('user', '`user`.`id` = `user_profil`.`user_id`');


        $command = $query->createCommand(); 
        $data = $command->queryOne();

        if($model->load($req)){
            $model->user_id = $user_id;
            $image = UploadedFile::getInstance($model, 'cust_photo');
            $model->cust_photo= 'profpicscust/' . $image->baseName. '.' . $image->extension;
            $image->saveAs($model->cust_photo);
            $model->save();
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }

        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->cust_id]);
        // }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing CustProfil model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->layout = "main_customer";
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the CustProfil model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return CustProfil the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = CustProfil::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }
}
