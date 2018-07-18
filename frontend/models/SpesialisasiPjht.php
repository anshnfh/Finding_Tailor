<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "spesialisasi_pjht".
 *
 * @property int $spec_pjht_id
 * @property int $pjht_id
 * @property int $prod_id
 */
class SpesialisasiPjht extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'spesialisasi_pjht';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['pjht_id', 'prod_id'], 'required'],
            [['pjht_id', 'prod_id'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'spec_pjht_id' => 'Spec Pjht ID',
            'pjht_id' => 'Pjht ID',
            'prod_id' => 'Prod ID',
        ];
    }
}
