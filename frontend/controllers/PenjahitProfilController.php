<?php

namespace frontend\controllers;

use Yii;
use frontend\models\PenjahitProfil;

use frontend\models\PenjahitProfilSearch;
use frontend\models\SpesialisasiPjht;
use yii\web\Controller;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use common\models\LoginFormPenjahit;
use yii\web\UploadedFile;
use yii\helpers\Url;


/**
 * PenjahitProfilController implements the CRUD actions for PenjahitProfil model.
 */
class PenjahitProfilController extends Controller
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
     * Lists all PenjahitProfil models.
     * @return mixed
     */
    public function actionIndex()
    {
        $this->layout = "main_penjahit2";
         // $searchModel = new PenjahitProfilSearch();
         // $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

         $user_id = Yii::$app->user->identity->id;
         $user = Yii::$app->user;


         // $user_uname = Yii::$app->user->identity->username;
         // $user_email = Yii::$app->user->identity->email;
         //echo $user_id;
         $query = (new \yii\db\Query())
                ->select('*')
                ->from('penjahit_profil')
                ->where(['user_id' => $user_id])
                ->leftJoin('user', '`user`.`id` = `penjahit_profil`.`user_id`');

        $command = $query->createCommand(); 
        $data = $command->queryOne();

        // var_dump($data);
        // die();

        // var_dump($user_id = Yii::$app->user); //user->nampilkan isi di model user


        return $this->render('index', [
            'userid' => $user_id,
            'datas' => $data,
            // 'useruname' => $user_uname,
            // 'usermail' => $user_email
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
        $this->layout = "main_penjahit2";
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
        $this->layout = "main_penjahit2";
        $model = new PenjahitProfil(['scenario' => 'create']);
        $model->scenario = 'create';

        $model1 = new SpesialisasiPjht();

        $req = Yii::$app->request->post();
        $user_id = Yii::$app->user->identity->id;

        $query = (new \yii\db\Query())
                ->select('*')
                ->from('penjahit_profil')
                ->where(['user_id' => $user_id])
                ->leftJoin('user', '`user`.`id` = `penjahit_profil`.`user_id`');


        $command = $query->createCommand(); 
        $data = $command->queryOne();

       if($model->load($req) && $model1->load($req)){
            $model->user_id = $user_id;
            $image = UploadedFile::getInstance($model, 'pjht_photo');
            $model->pjht_photo = 'profpics/' . $image->baseName. '.' . $image->extension;
            $image->saveAs($model->pjht_photo);
            $model->save();
            if ($model->save() && $model1->save()) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('create', [
            'model' => $model,
            'model1' => $model1,
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
        $this->layout = "main_penjahit2";

        $model = $this->findModel($id);

        

        //  if(isset($_POST['TestA'])&&isset($_POST['TestB']))
        //     {
        //          $model->attributes=$_POST['TestA'];

        //          $modelB = TestB::model()->findByAttributes(array('testid'=>$model->testid));

        //          if ($modelB == null) {
        //            $modelB = new TestB;
        //            $modelB->testid = $model->testid;
        //          }

        //          $model_B->attributes=$_POST['TestB'];


        //          if ($model_A->save()) {
        //             $model_B->save();
        //          }

        //         $this->render('update',array(
        //             'model'=>$model,
        //         ));
        // }

        $model->scenario = 'update';

        $model1 = SpesialisasiPjht::find();
       
        $req = Yii::$app->request->post();
        $user_id = Yii::$app->user->identity->id;

        $query = (new \yii\db\Query())
                ->select('*')
                ->from('penjahit_profil')
                ->where(['user_id' => $user_id])
                ->leftJoin('user', '`user`.`id` = `penjahit_profil`.`user_id`');

        $command = $query->createCommand(); 
        $data = $command->queryOne();

        

        // SpesialisasiPjht::model()->findByAttributes(array('spec_pjht_id' => $model->pjht_id));

        $model1 = SpesialisasiPjht::find(array('spec_pjht_id' => $model->pjht_id));
        
        // var_dump($model1);
        // die();
       
       if($model->load($req) && $model->load($req)){ 
            
            $model->attributes=$_POST[$model];
            $model1 = SpesialisasiPjht::find(array('spec_pjht_id' => $model->spec_pjht_id));

            if($model1 == null){
                $model1 = new SpesialisasiPjht();
                $model1->prod_id = $model->pjht_id;

            }

            $model1->attributes=$_POST[$model1];

            if($model->save()){
                $model1->save();
            }

            $model->user_id = $user_id;
            $image = UploadedFile::getInstance($model, 'pjht_photo');
            $model->pjht_photo = 'profpics/' . $image->baseName. '.' . $image->extension;
            $image->saveAs($model->pjht_photo);
            $model->save();
            if ($model->save()) {
                return $this->redirect(['index']);
            }
        }

        return $this->render('update', [
            'model' => $model,
            'model1' => $model1,
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
        $this->layout = "main_penjahit2";
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
        $this->layout = "main_penjahit2";
        if (($model = PenjahitProfil::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

}