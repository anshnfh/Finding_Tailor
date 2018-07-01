<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "orderan".
 *
 * @property int $order_id
 * @property int $order_jml
 * @property string $order_jenis
 * @property string $order_model
 * @property string $order_ukuran
 * @property string $order_aksesoris
 * @property string $order_photo_model
 * @property string $order_date
 * @property int $order_total
 * @property int $user_id
 */
class Orderan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'orderan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_jml', 'order_jenis', 'order_model', 'order_ukuran', 'order_aksesoris', 'order_photo_model', 'order_date', 'user_id'], 'required'],
            [['order_jml', 'user_id'], 'integer'],
            [['order_photo_model'], 'string'],
            [['order_date'], 'safe'],
            [['order_jenis', 'order_model'], 'string', 'max' => 50],
            [['order_ukuran'], 'string', 'max' => 11],
            [['order_aksesoris'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'order_id' => 'Order ID',
            'order_jml' => 'Order Jml',
            'order_jenis' => 'Order Jenis',
            'order_model' => 'Order Model',
            'order_ukuran' => 'Order Ukuran',
            'order_aksesoris' => 'Order Aksesoris',
            'order_photo_model' => 'Order Photo Model',
            'order_date' => 'Order Date',
            'order_total' => 'Order Total',
            'user_id' => 'User ID',
        ];
    }
}
