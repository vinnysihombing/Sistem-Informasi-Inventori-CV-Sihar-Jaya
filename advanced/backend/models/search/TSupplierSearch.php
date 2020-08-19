<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TSupplier;

/**
 * TSupplierSearch represents the model behind the search form of `frontend\models\TSupplier`.
 */
class TSupplierSearch extends TSupplier
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_supplier', 'nama_supplier', 'alamat_supplier', 'no_telp_supplier'], 'safe'],
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
        $query = TSupplier::find();

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
        $query->andFilterWhere(['like', 'id_supplier', $this->id_supplier])
            ->andFilterWhere(['like', 'nama_supplier', $this->nama_supplier])
            ->andFilterWhere(['like', 'alamat_supplier', $this->alamat_supplier])
            ->andFilterWhere(['like', 'no_telp_supplier', $this->no_telp_supplier]);

        return $dataProvider;
    }
}
