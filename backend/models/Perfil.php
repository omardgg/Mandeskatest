<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "perfil".
 *
 * @property int $id
 * @property int $client_id
 * @property string|null $descripcion
 * @property string|null $fecha_creacion
 *
 * @property Client $client
 */
class Perfil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perfil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['client_id'], 'required'],
            [['client_id'], 'integer'],
            [['descripcion'], 'string'],
            [['fecha_creacion'], 'safe'],
            [['client_id'], 'exist', 'skipOnError' => true, 'targetClass' => Client::class, 'targetAttribute' => ['client_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'client_id' => 'client ID',
            'descripcion' => 'Descripcion',
            'fecha_creacion' => 'Fecha Creacion',
        ];
    }

    /**
     * Gets query for [[client]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getclient()
    {
        return $this->hasOne(Client::class, ['id' => 'client_id']);
    }
}
