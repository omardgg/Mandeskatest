<?php
namespace app\models;

use yii\db\ActiveRecord;

class Client extends ActiveRecord
{
    public static function tableName()
    {
        return 'client';
    }

    public function rules()
    {
        return [
            [['nombre', 'email', 'telefono'], 'required'],
            ['email', 'email'],
            ['telefono', 'string', 'max' => 20],
        ];
    }
}
?>