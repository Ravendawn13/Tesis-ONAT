<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "modsalida".
 *
 * @property int $id
 * @property string $fsalida
 * @property string $equipo
 * @property string $marca
 * @property string $inventario
 * @property string $destino
 * @property string $piereparadas
 * @property string $recibe
 * @property int $created_at
 * @property int $updated_at
 * @property int $created_by
 * @property int $updated_by
 */
class Modsalida extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'modsalida';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fsalida', 'equipo', 'marca', 'inventario', 'destino', 'piereparadas', 'recibe', 'created_at', 'updated_at', 'created_by', 'updated_by'], 'required'],
            [['fsalida'], 'safe'],
            [['created_at', 'updated_at', 'created_by', 'updated_by'], 'integer'],
            [['equipo', 'marca', 'inventario', 'destino', 'piereparadas', 'recibe'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fsalida' => 'Fsalida',
            'equipo' => 'Equipo',
            'marca' => 'Marca',
            'inventario' => 'Inventario',
            'destino' => 'Destino',
            'piereparadas' => 'Piereparadas',
            'recibe' => 'Recibe',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
            'created_by' => 'Created By',
            'updated_by' => 'Updated By',
        ];
    }
}
