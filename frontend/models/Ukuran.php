<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "ukuran".
 *
 * @property int $ukuran_id
 * @property string $ukuran_jenis
 */
class Ukuran extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'ukuran';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['ukuran_jenis'], 'required'],
            [['ukuran_jenis'], 'string', 'max' => 3],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'ukuran_id' => 'Ukuran ID',
            'ukuran_jenis' => 'Ukuran Jenis',
        ];
    }
}
