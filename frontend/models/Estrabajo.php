<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "estrabajo".
 *
 * @property int $id
 * @property string $nomestacion
 * @property string $ip
 * @property string $monitor
 * @property string $teclado
 * @property string $mouse
 * @property string $impresora
 * @property string $escaner
 * @property string $bocinas
 * @property string $cddvdex
 * @property string $motherboard
 * @property string $microprocesador
 * @property string $ram
 * @property string $fuente
 * @property string $lectarjetas
 * @property string $cddvdint
 * @property string $ups
 * @property int $chasis
 * @property string $area
 * @property int $trabajadores_id
 * @property string $responsable
 * @property int $created_at
 * @property int $updated_at
 * @property int $crated_by
 * @property int $updated_by
 *
 * @property Trabajadores $trabajadores
 */
class Estrabajo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estrabajo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nomestacion', 'ip', 'monitor', 'teclado', 'mouse', 'impresora', 'escaner', 'bocinas', 'cddvdex', 'motherboard', 'microprocesador', 'ram', 'fuente', 'lectarjetas', 'cddvdint', 'ups', 'chasis', 'area', 'trabajadores_id', 'responsable', 'created_at', 'updated_at', 'crated_by', 'updated_by'], 'required'],
            [['chasis', 'trabajadores_id', 'created_at', 'updated_at', 'crated_by', 'updated_by'], 'integer'],
            [['nomestacion', 'ip', 'monitor', 'teclado', 'mouse', 'impresora', 'escaner', 'bocinas', 'cddvdex', 'motherboard', 'microprocesador', 'ram', 'fuente', 'lectarjetas', 'cddvdint', 'ups', 'area', 'responsable'], 'string', 'max' => 255],
            [['trabajadores_id'], 'exist', 'skipOnError' => true, 'targetClass' => Trabajadores::className(), 'targetAttribute' => ['trabajadores_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nomestacion' => 'Nomestacion',
            'ip' => 'Ip',
            'monitor' => 'Monitor',
            'teclado' => 'Teclado',
            'mouse' => 'Mouse',
            'impresora' => 'Impresora',
            'escaner' => 'Escaner',
            'bocinas' => 'Bocinas',
            'cddvdex' => 'Cddvdex',
            'motherboard' => 'Motherboard',
            'microprocesador' => 'Microprocesador',
            'ram' => 'Ram',
            'fuente' => 'Fuente',
            'lectarjetas' => 'Lectarjetas',
            'cddvdint' => 'Cddvdint',
            'ups' => 'Ups',
            'chasis' => 'Chasis',
            'area' => 'Area',
            'trabajadores_id' => 'Trabajadores ID',
            'responsable' => 'Responsable',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'crated_by' => 'Crated By',
            'updated_by' => 'Updated By',
        ];
    }

    /**
     * Gets query for [[Trabajadores]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTrabajadores()
    {
        return $this->hasOne(Trabajadores::className(), ['id' => 'trabajadores_id']);
    }
}
