<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model frontend\models\PenjahitProfil */

$this->title = 'Update Penjahit Profil';
// $this->params['breadcrumbs'][] = ['label' => 'Penjahit Profils', 'url' => ['index']];
// $this->params['breadcrumbs'][] = ['label' => $model->pjht_id, 'url' => ['view', 'id' => $model->pjht_id]];
// $this->params['breadcrumbs'][] = 'Update';
?>
<div class="penjahit-profil-update">

    <!-- <h1><?//= Html::encode($this->title) ?></h1> -->

    <!-- <?//= $this->render('_form', [
        //'model' => $model,
    ]) ?> -->

</div>

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
                                            <?php
                                                foreach ($datas as $key) {
                                                    
                                                
                                            ?>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="text" class="form-control" placeholder="Company" value="<?php echo $key['user_uname'];?>">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Alamat Email</label>
                                                    <input type="text" class="form-control" placeholder="Company" value="<?php echo $key['user_email'];?>">
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                          
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Nama Lengkap</label>
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <?php echo $key['pjht_fullname'];?>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label>Alamat</label>
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <?php echo $key['pjht_alamat'];?>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Kecamatan</label>
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <?php echo $key['pjht_kec'];?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Kota/Kabupaten</label>
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <?php echo $key['pjht_kota'];?>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-4 pr-1">
                                                <div class="form-group">
                                                    <label>No telpon</label>
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <?php echo $key['pjht_telp'];?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 px-1">
                                                <div class="form-group">
                                                    <label>Jam Operasi Buka</label>
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <?php echo $key['pjht_jam_oprs_buka'];?>  
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-4 pl-1">
                                                <div class="form-group">
                                                    <label>Jam Operasi Tutup</label>
                                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                        <?php echo $key['pjht_jam_oprs_tutup'];?>  
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php 
                                        }
                                        ?>
                                        <hr>
                                        <h4>Informasi Penjahit</h4>
                                            <div class="row">
                                                <div class="col-md-6 pr-1">
                                                    <div class="form-group">
                                                        <label>Jahitan Untuk Gender</label>
                                                        <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                            <?php echo $key['pjht_jenis'];?>  
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pl-1">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1">Range Jumlah Order</label>
                                                        <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                            <?php echo $key['pjht_jml_order'];?>  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6 pr-1">
                                                    <div class="form-group">
                                                        <label>Perkiraan Durasi Pengerjaan</label>
                                                        <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                            <?php echo $key['pjht_durasi_kerja'];?>  
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 pl-1">
                                                    <div class="form-group">
                                                        <label>Status Penerimaan Pekerjaan</label>
                                                        <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                            <?php echo $key['pjht_status'];?>  
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label>Spesialisasi</label>
                                                        <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                                            <?php echo $key['pjht_spesialisasi'];?>  
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                            </div>
                                        <!-- <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button> -->
                                        <p>
                                            <?= Html::a('Update', ['update'], ['class' => 'btn btn-success']) ?>        
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
                                            <img class="avatar border-gray" src="../assets/img/faces/face-3.jpg" alt="...">
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