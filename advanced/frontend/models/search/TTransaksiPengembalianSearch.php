<?php

namespace frontend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\TTransaksiPengembalian;

/**
 * TTransaksiPengembalianSearch represents the model behind the search form of `frontend\models\TTransaksiPengembalian`.
 */
class TTransaksiPengembalianSearch extends TTransaksiPengembalian
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_retur', 'jumlah_produk_retur'], 'integer'],
            [['id_customer', 'kode_produk', 'tgl_retur'], 'safe'],
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
        $query = TTransaksiPengembalian::find();

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
            'no_retur' => $this->no_retur,
            'jumlah_produk_retur' => $this->jumlah_produk_retur,
            'tgl_retur' => $this->tgl_retur,
        ]);

        $query->andFilterWhere(['like', 'id_customer', $this->id_customer])
            ->andFilterWhere(['like', 'kode_produk', $this->kode_produk]);

        return $dataProvider;
    }
}
