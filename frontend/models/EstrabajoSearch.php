<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Estrabajo;

/**
 * EstrabajoSearch represents the model behind the search form of `app\models\Estrabajo`.
 */
class EstrabajoSearch extends Estrabajo
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'chasis', 'trabajadores_id', 'created_at', 'updated_at', 'crated_by', 'updated_by'], 'integer'],
            [['nomestacion', 'ip', 'monitor', 'teclado', 'mouse', 'impresora', 'escaner', 'bocinas', 'cddvdex', 'motherboard', 'microprocesador', 'ram', 'fuente', 'lectarjetas', 'cddvdint', 'ups', 'area', 'responsable'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Estrabajo::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'chasis' => $this->chasis,
            'trabajadores_id' => $this->trabajadores_id,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
            'crated_by' => $this->crated_by,
            'updated_by' => $this->updated_by,
        ]);

        $query->andFilterWhere(['like', 'nomestacion', $this->nomestacion])
            ->andFilterWhere(['like', 'ip', $this->ip])
            ->andFilterWhere(['like', 'monitor', $this->monitor])
            ->andFilterWhere(['like', 'teclado', $this->teclado])
            ->andFilterWhere(['like', 'mouse', $this->mouse])
            ->andFilterWhere(['like', 'impresora', $this->impresora])
            ->andFilterWhere(['like', 'escaner', $this->escaner])
            ->andFilterWhere(['like', 'bocinas', $this->bocinas])
            ->andFilterWhere(['like', 'cddvdex', $this->cddvdex])
            ->andFilterWhere(['like', 'motherboard', $this->motherboard])
            ->andFilterWhere(['like', 'microprocesador', $this->microprocesador])
            ->andFilterWhere(['like', 'ram', $this->ram])
            ->andFilterWhere(['like', 'fuente', $this->fuente])
            ->andFilterWhere(['like', 'lectarjetas', $this->lectarjetas])
            ->andFilterWhere(['like', 'cddvdint', $this->cddvdint])
            ->andFilterWhere(['like', 'ups', $this->ups])
            ->andFilterWhere(['like', 'area', $this->area])
            ->andFilterWhere(['like', 'responsable', $this->responsable]);

        return $dataProvider;
    }
}
