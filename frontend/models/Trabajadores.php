<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "trabajadores".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellidos
 * @property string $ci
 *
 * @property Estrabajo[] $estrabajos
 */
class Trabajadores extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'trabajadores';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nombre', 'apellidos', 'ci'], 'required'],
            [['id'], 'integer'],
            [['nombre', 'apellidos', 'ci'], 'string', 'max' => 255],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'ci' => 'Ci',
        ];
    }

    /**
     * Gets query for [[Estrabajos]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEstrabajos()
    {
        return $this->hasMany(Estrabajo::className(), ['trabajadores_id' => 'id']);
    }
}
