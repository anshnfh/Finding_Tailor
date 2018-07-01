<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel frontend\models\CustProfilSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Cust Profils';
// $this->params['breadcrumbs'][] = $this->title;
?>
<div class="cust-profil-index" style="margin-top:100px;">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-8">
                 <div class="card">
                    <div class="card-header card-header-primary">
                        <h4 class="card-title">Edit Profile</h4>
                        <p class="card-category">Complete your profile</p>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Username</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas['username'];?>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Alamat Email</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas['email'];?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Alamat</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas['cust_alamat'];?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Kecamatan</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas['cust_kecamatan'];?>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Kota</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas['cust_kota'];?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Kecamatan</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas['cust_kecamatan'];?>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label class="bmd-label-floating">Kota</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas['cust_kota'];?>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label class="bmd-label-floating">No Telepon</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas['cust_phone'];?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?= Html::a('Update', ['update', 'id' => $datas['cust_id']], ['class' => 'btn btn-primary pull-right']) ?>
                        <?= Html::a('Home', ['site/index'], ['class' => 'btn btn-success pull-left']) ?>
                        <div class="clearfix"></div>                                        
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card card-profile">
                    <div class="card-avatar">
                        <a href="#pablo">
                            <?php echo Html::img(Yii::$app->request->baseUrl . '/'. $datas['cust_photo'], ['width' => '300px','height' => '200px']);?>
                        </a>
                    </div>
                    <div class="card-body">
                        <h6 class="card-category text-gray">Customer</h6>
                        <h4 class="card-title"><?php echo $datas['cust_fullname'];?></h4>
                    </div>
                </div>
            </div>            
        </div>
    </div>
</div>
