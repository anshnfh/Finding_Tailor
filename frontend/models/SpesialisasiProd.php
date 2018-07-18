<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "spesialisasi_prod".
 *
 * @property int $prod_id
 * @property string $prod_name
 */
class SpesialisasiProd extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spesialisasi_prod';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['prod_name'], 'required'],
            [['prod_name'], 'string', 'max' => 150],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'prod_id' => 'Prod ID',
            'prod_name' => 'Prod Name',
        ];
    }
}
