<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\assets\MaterialAsset;
use frontend\models\PenjahitProfil;
use kartik\rating\StarRating;
use yii\bootstrap\Modal;
use yii\widgets\ActiveForm;

// MaterialAsset::register($this);
?>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-warning card-header-icon">
                    <h4 class="card-title">Detail Penjahit </h4>
                </div>
                <div class="card-body">
                    <form action="grid-view">
                        <div class="row">
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Nama Lengkap</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas[0]['pjht_fullname'];?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Alamat</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas[0]['pjht_alamat'];?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Kecamatan</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas[0]['pjht_kec'];?>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Kota/Kabupaten</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas[0]['pjht_kota'];?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 pr-1">
                                <div class="form-group">
                                    <label>No telpon</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas[0]['pjht_telp'];?>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 px-1">
                                <div class="form-group">
                                    <label>Jam Operasi Buka</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas[0]['pjht_jam_oprs_buka'];?>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 pl-1">
                                <div class="form-group">
                                    <label>Jam Operasi Tutup</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas[0]['pjht_jam_oprs_tutup'];?>  
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
                                        <?php echo $datas[0]['pjht_jenis'];?>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Range Jumlah Order</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas[0]['pjht_jml_order'];?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 pr-1">
                                <div class="form-group">
                                    <label>Perkiraan Durasi Pengerjaan</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas[0]['pjht_durasi_kerja'];?>  
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 pl-1">
                                <div class="form-group">
                                    <label>Status Penerimaan Pekerjaan</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php echo $datas[0]['pjht_status'];?>  
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label>Spesialisasi</label>
                                    <div class="font-icon-list col-lg-6 col-md-6 col-sm-6 col-6">
                                        <?php //echo $datas[0]['pjht_spesialisasi'];?>  
                                    </div>
                                </div>
                            </div>

                        </div> -->
                        <!-- <button type="submit" class="btn btn-info btn-fill pull-right">Update Profile</button> -->

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

                            <?php echo Html::img(Yii::$app->request->baseUrl . '/'. $datas[0]['pjht_photo'], ['width' => '300px','height' => '200px']);
                            ?>

                            <h2 class="title"><!-- isi nama username --></h2>
                        </a>
                    </div>

                    <div class="col-md-6">
                        <h3>Rating</h3>
                        <!-- <?php 
                            $form //= ActiveForm::begin();?>
                        <?//= $form->field($model, 'rating')->widget(StarRating::classname(), [
                                //'pluginOptions' => ['step' => 0.1]
                            ]); ?>
                        <?php //ActiveForm::end(); ?> -->
                        
                    </div>

                    <div class="row">
                        <?= Html::a('Lakukan Transaksi', ['orderan/create', 'id' => $datas[0]['pjht_id']], ['class' => 'btn btn-success pull-right']) ?>
                    </div>                                        
                </div>
                <hr>
                <div class="button-container mr-auto ml-auto">
                    <p>© FindingTailor | 2018 </p>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header card-header-warning card-header-icon">
                    <h4 class="card-title">Review</h4>

                </div>
                
                <?php $n=0; foreach ($datas as $key): $n++; { ?>
                    <div class="card-body">
                        <div class="col-md-8">
                            <div class="row">
                                <!-- <p><b>Nama Penjahit</b></p> -->

                                <!-- <p><b> --><?php echo $key['username'];?><!-- </b></p> -->
                            </div>
                            <div class="row">
                                <!-- <p>Alamat</p> -->
                                <!-- <br> -->
                                "<?php echo $key['review_content'];?>"
                            </div>
                        </div>
                    </div>

                <?php  } ?>

            <?php endforeach; ?>

            <div class="col-md-8">
                <?= Html::a('Berikan review', ['review/create','id' => $pjht_id], ['class' => 'btn btn-primary pull-left']) ?>
                <!-- <?//= Html::button($content = 'Berikan review', $options=['class' => 'btn btn-primary pull-left', 'data-toggle' => 'modal', 'data-target' => '#modalReview' ]) ?> -->
                <!-- <div class="modal fade" id="modalReview" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Berikan Review</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <div class="modal-body">

                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Save changes</button>
                </div>
            </div>
        </div>
    </div> -->

    
    
</div>

</div>
</div>
</div>
</div>