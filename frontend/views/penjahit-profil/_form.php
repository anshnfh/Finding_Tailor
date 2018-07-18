    <?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use kartik\widgets\FileInput;
use yii\helpers\ArrayHelper;
use frontend\models\Gender;
use frontend\models\Spesialisasi;
use frontend\models\StatusJahit;
use kartik\checkbox\CheckboxX;
use softark\duallistbox\DualListbox;
use frontend\models\SpesialisasiProd;
use frontend\models\SpesialisasiPjht;

$spesialisasi = ArrayHelper::map(SpesialisasiProd::find()->all(), 'prod_id', 'prod_name');

/* @var $this yii\web\View */
/* @var $model frontend\models\PenjahitProfil */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="penjahit-profil-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'pjht_fullname')
    ->textInput(['maxlength' => true])
    ->textInput(['placeholder' => $model->getAttributeLabel('Masukkan Nama Lengkap')])?>

    <?= $form->field($model, 'pjht_alamat')
    ->textInput(['maxlength' => true])
    ->textInput(['placeholder' => $model->getAttributeLabel('Masukkan Alamat')])?>

    <?= $form->field($model, 'pjht_kec')
    ->textInput(['maxlength' => true])
    ->textInput(['placeholder' => $model->getAttributeLabel('Masukkan Kecamatan')])?>

    <?= $form->field($model, 'pjht_kota')
    ->textInput(['maxlength' => true])
    ->textInput(['placeholder' => $model->getAttributeLabel('Masukkan Kota')])?>

    <?= $form->field($model, 'pjht_telp')
    ->textInput(['maxlength' => true])
    ->textInput(['placeholder' => $model->getAttributeLabel('Masukkan No. Telepon')])?>

    <?= $form->field($model, 'pjht_jam_oprs_buka')->input('time', ['placeholder'=>'Masukkan Jam Buka']); ?>

    <?= $form->field($model, 'pjht_jam_oprs_tutup')->input('time', ['placeholder'=>'Masukkan Jam Tutup']); ?>

    <?= $form->field($model, 'pjht_jenis')->dropDownList(
        ArrayHelper::map(Gender::find()->asArray()->all(),'nama_gender','nama_gender'), ['prompt'=>'Pilih Gender'])?>

    <?= $form->field($model, 'pjht_jml_order')->input('number', ['min'=>1, 'step'=>1, 'placeholder'=>'Pilih Jumlah']); ?>

    <?= $form->field($model, 'pjht_durasi_kerja')->textInput(['maxlength' => true])
    ->textInput(['placeholder' => $model->getAttributeLabel('Masukkan durasi pengerjaan')]); ?>

    <!-- <?//= $form->field($model, 'pjht_spesialisasi')->textInput(['maxlength' => true]) 
     //->textInput(['placeholder' => $model->getAttributeLabel('Masukkan spesialisasi jahitan')]);?> -->

    <!-- <?//= $form->field($model1, 'prod_id[]')->checkboxList($spesialisasi, [
     //  'separator' => '<br>',
     //  'itemOptions' => [
     //    'class' => 'spesialisasi'
     //  ]
     // ])->label('Spesialisasi <label><input type="checkbox" id="checkAll">Check All</label>');
    ?> -->

    <?php $model1 = SpesialisasiPjht::find(array('spec_pjht_id' => $model->pjht_id));
 ?>
    <?= $form->field($model1, 'spesialisasi')->checkboxList($spesialisasi) ?>

    <?php   $this->registerJs("jQuery('#checkAll').change(function(){jQuery('.spesialisasi').prop('checked',this.checked?'checked':'');})");?>

    <?= $form->field($model, 'pjht_status')->dropDownList(
        ArrayHelper::map(StatusJahit::find()->asArray()->all(),'nama_status','nama_status'), ['prompt'=>'Pilih Status'])?>

   <?= $form->field($model, 'pjht_photo')->widget(FileInput::classname(), [
            'options' => ['accept' => 'image/*'],
            'pluginOptions'=>[
            'allowedFileExtensions'=>['jpg', 'png', 'gif'],
            'showUpload' => false,
            'showRemove' => false,
        ],
        ]);?> 

    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
