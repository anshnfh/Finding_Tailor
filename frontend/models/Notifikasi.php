<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "notifikasi".
 *
 * @property int $notif_id
 * @property string $notif_remind_date
 * @property string $notif_content
 * @property string $notif_exp_date
 * @property int $user_id
 * @property int $pjht_id
 */
class Notifikasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'notifikasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['notif_remind_date', 'notif_content', 'notif_exp_date', 'user_id', 'pjht_id'], 'required'],
            [['notif_remind_date', 'notif_exp_date'], 'safe'],
            [['user_id', 'pjht_id'], 'integer'],
            [['notif_content'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'notif_id' => 'Notif ID',
            'notif_remind_date' => 'Notif Remind Date',
            'notif_content' => 'Notif Content',
            'notif_exp_date' => 'Notif Exp Date',
            'user_id' => 'User ID',
            'pjht_id' => 'Pjht ID',
        ];
    }
}
