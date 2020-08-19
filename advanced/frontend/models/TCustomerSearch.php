<?php

namespace frontend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TCustomer;

/**
 * TCustomerSearch represents the model behind the search form of `frontend\models\TCustomer`.
 */
class TCustomerSearch extends TCustomer
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_customer', 'nama_customer', 'alamat_customer', 'no_telp_customer'], 'safe'],
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
        $query = TCustomer::find();

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
        $query->andFilterWhere(['like', 'id_customer', $this->id_customer])
            ->andFilterWhere(['like', 'nama_customer', $this->nama_customer])
            ->andFilterWhere(['like', 'alamat_customer', $this->alamat_customer])
            ->andFilterWhere(['like', 'no_telp_customer', $this->no_telp_customer]);

        return $dataProvider;
    }
}
