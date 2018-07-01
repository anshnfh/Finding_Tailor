<?php

namespace frontend\controllers;

use Yii;
use frontend\models\PenjahitJahitan;
use frontend\models\PenjahitJahitanSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;
use yii\data\ActiveDataProvider;

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
        $this->layout = "main_penjahit2";
       

        $searchModel = new PenjahitJahitanSearch();
       // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        $user_id = Yii::$app->user->identity->id;

        $dataProvider = new ActiveDataProvider([
        'query' => PenjahitJahitan::find()->andFilterWhere(['user_id' => $user_id])
       ]);

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
        $this->layout = "main_penjahit2";
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
        $this->layout = "main_penjahit2";
        $model = new PenjahitJahitan();

        $req = Yii::$app->request->post();
        $user_id = Yii::$app->user->identity->id;
        // $model->pjht_id = $this->    $pjht_id;

        $query = (new \yii\db\Query())
                ->select('*')
                ->from('penjahit_jahitan')
                
                // ->andWhere(['`penjahit_jahitan`.`user_id`' => $user_id])
                ->leftJoin('penjahit_profil', '`penjahit_profil`.`pjht_id` = `penjahit_jahitan`.`pjht_id`')
                ->leftJoin('user', '`user`.`id` = `penjahit_profil`.`user_id`');
                // ->andWhere(['`penjahit_jahitan`.`pjht_id`' => $pjht_id]);
                
                // ->leftJoin('user', '`user`.`id` = `penjahit_profil`.`user_id`')
                // ->leftJoin('penjahit_profil'.'`penjahit_profil`.`user_id` = `penjahit_jahitan`.`user_id`');
                // ->leftJoin('user', '`user`.`id` = `penjahit_profil`.`user_id`');

        $command = $query->createCommand(); 
        $data = $command->queryAll();
        
        // echo($data[0]['pjht_id']);

        // var_dump($data);
        // die();

        if($model->load($req)){
            $model->user_id = $user_id;
            $model->pjht_id = $data[0]['pjht_id'];
            $image = UploadedFile::getInstance($model, 'hasil_foto_jahit');
            $model->hasil_foto_jahit = 'uploads/' . $image->baseName. '.' . $image->extension;
            $image->saveAs($model->hasil_foto_jahit);
            $model->save();
            if ($model->save()) {
                return $this->redirect(['index', [
                    'datas'=>$data,
                ]]);
            }
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
        $this->layout = "main_penjahit2";
        $model = $this->findModel($id);

        if($model->load($req)){
            $model->user_id = $user_id;
            $model->pjht_id = $data[0]['pjht_id'];
            $image = UploadedFile::getInstance($model, 'hasil_foto_jahit');
            $model->hasil_foto_jahit = 'uploads/' . $image->baseName. '.' . $image->extension;
            $image->saveAs($model->hasil_foto_jahit);
            $model->save();
            if ($model->save()) {
                return $this->redirect(['index', [
                    'datas' => $data,
                ]]);
            }
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
        $this->layout = "main_penjahit2";
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
        $this->layout = "main_penjahit2";
        if (($model = PenjahitJahitan::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }


    public function actionGaleri()
    {
        $this->layout = "main_penjahit2";
        return $this->render('galeri');
    }
}
