<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "address".
 *
 * @property int $id
 * @property int $client_id
 * @property string|null $calle
 * @property string|null $ciudad
 * @property string|null $codigo_postal
 */
class Address extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'address';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id'], 'required'],
            [['client_id'], 'integer'],
            [['calle', 'ciudad'], 'string', 'max' => 255],
            [['codigo_postal'], 'string', 'max' => 10],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_id' => 'Client ID',
            'calle' => 'Calle',
            'ciudad' => 'Ciudad',
            'codigo_postal' => 'Codigo Postal',
        ];
    }
}
