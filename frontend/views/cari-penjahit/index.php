<?php
/* @var $this yii\web\View */

use yii\helpers\Html;
use frontend\assets\MaterialAsset;
use frontend\models\PenjahitProfil;

  MaterialAsset::register($this);
?>
<!-- <h1>cari-penjahit/index</h1>

<p>
    You may change the content of this page by modifying
    the file <code><?= __FILE__; ?></code>.
</p>
 -->
<div class="container">
      <!-- <div class="row">
        <div class="col-md-6">
          <h1 class="title">Cari Penjahit Pilihanmu!</h1>
          <h4>Every landing page needs a small description after the big bold title, that&apos;s why we added this text here. Add here all the information that can make you or your product create the first impression.</h4>
          <br>
        </div>
        <div class="col-md-6" style="padding: 100px;">
          <?//= Html::a('Cari Penjahit!', ['site/index'], ['class' => 'btn btn-danger pull-right']) ?>
        </div>
      </div> -->
    </div>
  <!-- </div> -->
  <div class="content">
    <div class="container-fluid" style="padding: 50px;">
    	<div class="row">
    		 <div class="col-md-12 col-sm-12" >
			      <div class="card card-stats">
			          <div class="card-header card-header-success card-header-icon">
			            <div class="card-icon">
			              <i class="material-icons">store</i>
			            </div>
			            <h3 class="card-title pull-left">Cari Penjahit Terdekat</h3>
			          </div>
			          <div class="card-body">
			          	<?php
			          		$n=0; foreach ($datas as $key): $n++; {?>
			          			<div class="card">
			          				<div class="col-lg-12">
			          					<div class="col-md-4">
			          						<?php echo Html::img(Yii::$app->request->baseUrl . '/'. $key['pjht_photo'], ['width' => '50%px','height' => '50%px;']);?>
			          					</div>
			          					<div class="col-md-8">
			          						<div class="row">
			          							<p><b>Nama Penjahit</b></p>
			          							
			          							<?php echo $key['pjht_fullname'];?>
			          						</div>
			          						<div class="row">
			          							<p>Alamat</p>
			          							<br>
			          							<?php echo $key['pjht_fullname'];?>
			          						</div>
			          						<div class="row">
			          							<p>Jenis Jahitan</p>
			          							<br>
			          							<?php echo $key['pjht_jenis'];?>
			          						</div>
			          						<div class="row">
			          							<p>Jenis Jahitan</p>
			          							<br>
			          							<?php echo $key['pjht_status'];?>
			          						</div>
			          					</div>
			          					<?= Html::a('Detail Info Penjahit', ['detail', 'id' => $key['pjht_id']], ['class' => 'btn btn-primary pull-right']) ?>
			          					<?= Html::a('Lakukan Transaksi', ['orderan/create'], ['class' => 'btn btn-success pull-right']) ?>
			          				</div>
			          			</div>
			          			
			          			

			          	<?php	} 	?>
			          <?php endforeach; ?>
			          </div>
			          <div class="card-footer">
			              <div class="stats">
			                  <i class="material-icons">date_range</i> Last 24 Hours
			              </div>
			          </div>
			      </div>
			  </div>
    	</div>
     <!--  <div class="col-lg-12">
        <div class="card card-stats">
          <div class="card-header card-chart card-header-info"> -->
          	<!-- <div class="row">
          		<div class="col-md-4 pull-left">
          		 	<h4><b>Cari Penjahit</b></h4>
	          	</div>
	          	<div class="col-md-8">
	          		<div class="input-group pull-right">
		                <input type="text" value="" class="form-control" placeholder="Search...">
		                    <button type="submit" class="btn btn-white btn-round btn-just-icon">
		                        <i class="material-icons">search</i>
		                        <div class="ripple-container"></div>
		                    </button>
		            </div>
	          	</div> 
         	</div>
          </div>  
          <div class="card-body">
            <div class="container-fluid">
              
            </div>
          </div>
        </div>
      </div>   -->
    </div>
  </div>
