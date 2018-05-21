<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penjahit_info".
 *
 * @property int $info_id
 * @property int $pjht_id
 * @property string $info_jenis
 * @property string $info_jml_order
 * @property int $info_durasi_kerja
 * @property string $info_spesialisasi
 * @property string $info_status
 * @property string $info_sertif
 */
class PenjahitInfo extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penjahit_info';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pjht_id', 'info_jenis', 'info_jml_order', 'info_durasi_kerja', 'info_spesialisasi', 'info_status', 'info_sertif', 'user_id'], 'required'],
            [['pjht_id', 'info_durasi_kerja'], 'integer'],
            [['info_sertif'], 'string'],
            [['info_jenis', 'info_jml_order', 'info_spesialisasi'], 'string', 'max' => 100],
            [['info_status'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'info_id' => 'Info ID',
            'pjht_id' => 'Pjht ID',
            'info_jenis' => 'Info Jenis',
            'info_jml_order' => 'Info Jml Order',
            'info_durasi_kerja' => 'Info Durasi Kerja',
            'info_spesialisasi' => 'Info Spesialisasi',
            'info_status' => 'Info Status',
            'info_sertif' => 'Info Sertif',
            'user_id' => 'User ID'
        ];
    }
}
