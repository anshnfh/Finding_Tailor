<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\models\PenjahitProfil;
use yii\helpers\Url;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\PenjahitProfilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

//$this->title = 'Penjahit Profil';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="penjahit-profil-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php //echo $this->render('_search', ['model' => $searchModel]); ?>
    
</div>

<?php $this->title='Profil Penjahit'?>
<div class="content">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-8">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title"><?= Html::encode($this->title) ?></h4>
                                </div>
                                <div class="card-body">
                                    <form action="grid-view">
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <?php echo $datas['username'];?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Alamat Email</label>
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <?php echo $datas['email'];?>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <?php echo $datas['pjht_fullname'];?>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <?php echo $datas['pjht_alamat'];?>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Kecamatan</label>
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <?php echo $datas['pjht_kec'];?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Kota/Kabupaten</label>
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <?php echo $datas['pjht_kota'];?>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>No telpon</label>
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <?php echo $datas['pjht_telp'];?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-1">
                                                <div class="form-group">
                                                    <label>Jam Operasi Buka</label>
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <?php echo $datas['pjht_jam_oprs_buka'];?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Jam Operasi Tutup</label>
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <?php echo $datas['pjht_jam_oprs_tutup'];?>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <hr>
                                        <h4>Informasi Penjahit</h4>
                                            <div class="row">
                                                <div class="col-md-6 pr-1">
                                                    <div class="form-group">
                                                        <label>Jahitan Untuk Gender</label>
                                                        <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                            <?php echo $datas['pjht_jenis'];?>  
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pl-1">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Range Jumlah Order</label>
                                                        <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                            <?php echo $datas['pjht_jml_order'];?>  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 pr-1">
                                                    <div class="form-group">
                                                        <label>Perkiraan Durasi Pengerjaan</label>
                                                        <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                            <?php echo $datas['pjht_durasi_kerja'];?>  
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pl-1">
                                                    <div class="form-group">
                                                        <label>Status Penerimaan Pekerjaan</label>
                                                        <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                            <?php echo $datas['pjht_status'];?>  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Spesialisasi</label>
                                                        <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                            <?php echo $datas['pjht_spesialisasi'];?>  
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        <!-- <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button> -->
                                        <p>
                                            
                                            <?= Html::a('Update', ['update', 'id' => $datas['pjht_id']], ['class' => 'btn btn-primary']) ?>      
                                        </p>
                                        <div class="clearfix"></div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card card-user">
                                <div class="card-image">
                                    <!-- <img src="https://ununsplash.imgix.net/photo-1431578500526-4d9613015464?fit=crop&fm=jpg&h=300&q=75&w=400" alt="..."> -->
                                </div>
                                <div class="card-body">
                                    <div class="author">
                                        <a href="#">
                                            
                                                <?php echo Html::img(Yii::$app->request->baseUrl . '/'. $datas['pjht_photo'], ['width' => '300px','height' => '200px']);
                                                ?>
                                            
                                            <h2 class="title"><!-- isi nama username --></h2>
                                        </a>
                                    </div>
                                </div>
                                <hr>
                                <div class="button-container mr-auto ml-auto">
                                    <p>© FindingTailor | 2018 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                     
                </div>
            </div>



               
            