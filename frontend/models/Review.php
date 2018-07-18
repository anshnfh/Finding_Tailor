<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "review".
 *
 * @property int $review_id
 * @property string $review_content
 * @property string $review_date
 * @property int $user_id
 * @property int $pjht_id
 */
class Review extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'review';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['review_content', 'review_date', 'user_id', 'pjht_id'], 'required'],
            [['review_date'], 'safe'],
            [['user_id', 'pjht_id'], 'integer'],
            [['review_content'], 'string', 'max' => 200],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'review_id' => 'Review ID',
            'review_content' => 'Review Content',
            'review_date' => 'Review Date',
            'user_id' => 'User ID',
            'pjht_id' => 'Pjht ID',
        ];
    }
}
