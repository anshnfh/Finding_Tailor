<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "role".
 *
 * @property int $role_id
 * @property string $role_nama
 * @property string $role_desc
 */
class Role extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'role';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['role_nama', 'role_desc'], 'required'],
            [['role_nama', 'role_desc'], 'string', 'max' => 50],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'role_id' => 'Role ID',
            'role_nama' => 'Role Nama',
            'role_desc' => 'Role Desc',
        ];
    }

    
}
