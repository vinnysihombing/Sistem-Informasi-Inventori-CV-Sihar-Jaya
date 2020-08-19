<?php

namespace frontend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TTransaksiPemasokan as TTransaksiPemasokanModel;

/**
 * TTransaksiPemasokan represents the model behind the search form of `frontend\models\TTransaksiPemasokan`.
 */
class TTransaksiPemasokan extends TTransaksiPemasokanModel
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pemasokan'], 'integer'],
            [['id_supplier', 'kode_produk', 'tgl_masuk'], 'safe'],
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
        $query = TTransaksiPemasokanModel::find();

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
            'no_pemasokan' => $this->no_pemasokan,
            'tgl_masuk' => $this->tgl_masuk,
        ]);

        $query->andFilterWhere(['like', 'id_supplier', $this->id_supplier])
            ->andFilterWhere(['like', 'kode_produk', $this->kode_produk]);

        return $dataProvider;
    }
}
