<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modentrada".
 *
 * @property int $id
 * @property string $fentrada
 * @property string $equipo
 * @property string $marca
 * @property string $inventario
 * @property string $procedencia
 * @property string $diagnostico
 * @property string $reparado
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class Modentrada extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modentrada';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fentrada', 'equipo', 'marca', 'inventario', 'procedencia', 'diagnostico', 'reparado', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'required'],
            [['fentrada'], 'safe'],
            [['created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['equipo', 'marca', 'inventario', 'procedencia', 'diagnostico', 'reparado'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fentrada' => 'Fecha de Entrada',
            'equipo' => 'Equipo',
            'marca' => 'Marca o Modelo',
            'inventario' => 'No. Inventario',
            'procedencia' => 'Procedencia',
            'diagnostico' => 'Diagnóstico de la Rotura',
            'reparado' => 'Reparado',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
