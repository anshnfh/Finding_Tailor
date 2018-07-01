<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penjahit_profil".
 *
 * @property int $pjht_id
 * @property string $pjht_fullname
 * @property string $pjht_alamat
 * @property string $pjht_kec
 * @property string $pjht_kota
 * @property string $pjht_telp
 * @property string $pjht_photo
 * @property string $pjht_jam_oprs_buka
 * @property string $pjht_jam_oprs_tutup
 */
class PenjahitProfil extends \yii\db\ActiveRecord
{

   public function scenarios() {
        $scenarios = parent::scenarios();
        $scenarios['create'] = ['pjht_fullname', 'pjht_alamat', 'pjht_kec', 'pjht_kota', 'pjht_telp','pjht_jam_oprs_buka', 'pjht_jam_oprs_tutup', 'pjht_jenis', 'pjht_jml_order', 'pjht_durasi_kerja', 'pjht_spesialisasi', 'pjht_status','user_id', 'pjht_photo'];
        $scenarios['update'] = ['pjht_fullname', 'pjht_alamat', 'pjht_kec', 'pjht_kota', 'pjht_telp','pjht_jam_oprs_buka', 'pjht_jam_oprs_tutup', 'pjht_jenis', 'pjht_jml_order', 'pjht_durasi_kerja', 'pjht_spesialisasi', 'pjht_status','user_id'];
                
        return $scenarios;
    }


    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penjahit_profil';
    }

    /**
     * @inheritdoc
     */

    public function rules()
    {
        return [
            [['pjht_fullname', 'pjht_alamat', 'pjht_kec', 'pjht_kota', 'pjht_telp','pjht_jam_oprs_buka', 'pjht_jam_oprs_tutup', 'pjht_jenis', 'pjht_jml_order', 'pjht_durasi_kerja', 'pjht_spesialisasi', 'pjht_status','user_id'], 'required'],
            [['pjht_photo'], 'string'],
            [['pjht_photo'], 'required', 'message' => 'Foto tidak boleh kosong', 'on' => 'create'],
            [['pjht_durasi_kerja'], 'integer'],
            [['pjht_jam_oprs_buka', 'pjht_jam_oprs_tutup'], 'safe'],
            [['pjht_fullname', 'pjht_kec', 'pjht_kota','pjht_jenis', 'pjht_jml_order', 'pjht_spesialisasi'], 'string', 'max' => 100],
            [['pjht_alamat'], 'string', 'max' => 150],
            [['pjht_telp'], 'string', 'max' => 12],
            [['pjht_status'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'pjht_id' => 'Penjahit ID',
            'pjht_fullname' => 'Nama Lengkap',
            'pjht_alamat' => 'Alamat',
            'pjht_kec' => 'Kecamatan',
            'pjht_kota' => 'Kota',
            'pjht_telp' => 'Nomor Telpon',
            'pjht_photo' => 'Photo',
            'pjht_jam_oprs_buka' => 'Jam Operasi Buka',
            'pjht_jam_oprs_tutup' => 'Jam Operasi Tutup',
            'pjht_jenis' => 'Info Jenis',
            'pjht_jml_order' => 'Info Jml Order',
            'pjht_durasi_kerja' => 'Info Durasi Kerja',
            'pjht_spesialisasi' => 'Info Spesialisasi',
            'pjht_status' => 'Info Status',
            'user_id' => 'User ID'
        ];
    }

}
