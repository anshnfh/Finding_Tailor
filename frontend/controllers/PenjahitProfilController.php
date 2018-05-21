<?php

namespace frontend\controllers;

use Yii;
use frontend\models\PenjahitProfil;
use frontend\models\PenjahitProfilSearch;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\LoginFormPenjahit;
/**
 * PenjahitProfilController implements the CRUD actions for PenjahitProfil model.
 */
class PenjahitProfilController extends Controller
{
    /**
     * @inheritdoc
     */

    // $session = Yii::$app->session;
    // // open a session
    // $session->open();
    // // close a session
    // $session->close();


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
     * Lists all PenjahitProfil models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = "main_penjahit";
         // $searchModel = new PenjahitProfilSearch();
         // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

         $user_id = Yii::$app->user->identity->id;
         $user_uname = Yii::$app->user->identity->username;
         $user_email = Yii::$app->user->identity->email;
         //echo $user_id;
         $query = (new \yii\db\Query())
                ->select('*')
                ->from('penjahit_profil')
                ->where(['user_id' => $user_id]);

        $command = $query->createCommand(); 
        $data = $command->queryAll();

        // var_dump($user_id = Yii::$app->user); //user->nampilkan isi di model user
        // die();

        // /var_dump($data);

        return $this->render('index', [
            'userid' => $user_id,
            'datas' => $data,
            'useruname' => $user_uname,
            'usermail' => $user_email
        ]);                // var_dump($query);

        //     $id_session = $_SESSION["__id"];

        //     return $this->render('index', [
        //      'searchModel' => $searchModel,
        //      'dataProvider' => $dataProvider,
        //     //'query'=>$query
        // ]);

            // echo $id_session;
            // die();

        // $query = (new \yii\db\Query())
        //     ->select(['pjht_fullname'])
        //     ->from('penjahit_profil')
        //     ->where(['pjht_id' => $id_session]);

            

        

            // return $this->render('index', [
            //     'data' => $data,
            // ]);
    }

    /**
     * Displays a single PenjahitProfil model.
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
     * Creates a new PenjahitProfil model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $this->layout = "main_penjahit";
        $model = new PenjahitProfil();

        $req = Yii::$app->request->post();
        $user_id = Yii::$app->user->identity->id;

        $query = (new \yii\db\Query())
                ->select('user_id')
                ->from('penjahit_profil')
                ->where(['user_id' => $user_id]);

        $command = $query->createCommand();
        $data = $command->queryAll();

        if ($data[0]['user_id'] == $user_id) {
            echo "Anda sudah mengisi Profil. <button>Edit?</button>";
            die();
        }

        if($model->load($req)){
            $model->user_id = $user_id;
            
            if ($model->save()) {
                return $this->redirect(['view', 'id' => $model->pjht_id]);
            }
        }

        

        

        // print_r($model);
        // var_dump($model);
        // die();

        // print_r($req['PenjahitProfil']['pjht_fullname']);

        // $model->load(Yii::$app->request->post();

        // if($query){
            // if ($model->load(Yii::$app->request->post()) && $model->save()) {
            // return $this->redirect(['view', 'id' => $model->pjht_id]);
            // }
        //}

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing PenjahitProfil model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $this->layout = "main_penjahit";
        // $model = $this->findModel($id);
        // if ($model->load(Yii::$app->request->post()) && $model->save()) {
        //     return $this->redirect(['view', 'id' => $model->pjht_id]);
        //     }   
         $user_id = Yii::$app->user->identity->id;
         //echo $user_id;
         $query = (new \yii\db\Query())
                ->select('*')
                ->from('penjahit_profil')
                ->where(['user_id' => $user_id]);

        $command = $query->createCommand(); 
        $data = $command->queryAll();

        return $this->render('update', [
            //'model' => $model,
            'userid' => $user_id,
            'datas' => $data
        ]);
    }

    /**
     * Deletes an existing PenjahitProfil model.
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

    // public function actionTampilProfil($id){
    //     $this->layout = "main_penjahit";
        
    //     $model = Post::findOne($id);
    //     if ($model === null) {
    //         throw new NotFoundHttpException;
    //     }

    //     return $this->render('index', [
    //         'model' => $model,
    //     ]);
    // }

    /**
     * Finds the PenjahitProfil model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return PenjahitProfil the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        $this->layout = "main_penjahit";
        if (($model = PenjahitProfil::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}