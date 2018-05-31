<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "penjahit_jahitan".
 *
 * @property int $hasil_id
 * @property int $pjht_id
 * @property string $hasil_foto_jahit
 * @property string $hasil_ket
 */
class PenjahitJahitan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'penjahit_jahitan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pjht_id', 'hasil_foto_jahit', 'hasil_ket', 'user_id'], 'required'],
            [['pjht_id'], 'integer'],
            [['hasil_foto_jahit'], 'string'],
            //[['hasil_foto_jahit'], 'string'],
            //[['hasil_foto_jahit'], 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg'],
            [['hasil_ket'], 'string', 'max' => 100],
        ];
    }

    
    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'hasil_id' => 'Hasil ID',
            'pjht_id' => 'Pjht ID',
            'hasil_foto_jahit' => 'Hasil Foto Jahit',
            'hasil_ket' => 'Hasil Ket',
        ];
    }

}
