<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "user_profil".
 *
 * @property int $cust_id
 * @property string $cust_fullname
 * @property string $cust_alamat
 * @property string $cust_kecamatan
 * @property string $cust_kota
 * @property string $cust_phone
 * @property string $cust_photo
 * @property int $user_id
 */
class CustProfil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */

    public function scenarios1(){
        $scenarios = parent::scenarios1();
        $scenarios['create'] = ['cust_fullname', 'cust_alamat', 'cust_kecamatan', 'cust_kota', 'cust_phone', 'cust_photo', 'user_id'];
        $scenarios['update'] = ['cust_fullname', 'cust_alamat', 'cust_kecamatan', 'cust_kota', 'cust_phone', 'user_id'];

        return $scenarios;
    }

    public static function tableName()
    {
        return 'user_profil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cust_fullname', 'cust_alamat', 'cust_kecamatan', 'cust_kota', 'cust_phone', 'cust_photo', 'user_id'], 'required'],
            [['cust_photo'], 'string'],
            [['cust_photo'], 'required', 'message' => 'Foto tidak boleh kosong', 'on' => 'create'],
            [['user_id'], 'integer'],
            [['cust_fullname', 'cust_kecamatan', 'cust_kota'], 'string', 'max' => 100],
            [['cust_alamat'], 'string', 'max' => 150],
            [['cust_phone'], 'string', 'max' => 15],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'cust_id' => 'Cust ID',
            'cust_fullname' => 'Cust Fullname',
            'cust_alamat' => 'Cust Alamat',
            'cust_kecamatan' => 'Cust Kecamatan',
            'cust_kota' => 'Cust Kota',
            'cust_phone' => 'Cust Phone',
            'cust_photo' => 'Cust Photo',
            'user_id' => 'User ID',
        ];
    }
}
