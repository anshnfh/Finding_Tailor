<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model frontend\models\CustProfil */

$this->title = 'Create Cust Profil';
$this->params['breadcrumbs'][] = ['label' => 'Cust Profils', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="cust-profil-create">
	<div class="container-fluid">
		<div class="col-lg-12">
			<div class="content">
				<div class="card">
					<div class="card-header card-chart card-header-info">
						<h3><?= Html::encode($this->title) ?></h3>
					</div>
					<div class="card-body">
						<?= $this->render('_form', [
					        'model' => $model,
					    ]) ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
