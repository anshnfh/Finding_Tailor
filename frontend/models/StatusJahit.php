<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "status_jahit".
 *
 * @property int $id_status 1=tidak, 2=terima
 * @property string $nama_status
 */
class StatusJahit extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'status_jahit';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_status'], 'required'],
            [['nama_status'], 'string', 'max' => 20],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_status' => 'Id Status',
            'nama_status' => 'Nama Status',
        ];
    }
}
