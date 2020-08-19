<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TTransaksiPemesanan;

/**
 * TTransaksiPemesananSearch represents the model behind the search form of `frontend\models\TTransaksiPemesanan`.
 */
class TTransaksiPemesananSearch extends TTransaksiPemesanan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pemesanan', 'jumlah_pemesanan'], 'integer'],
            [['id_customer', 'kode_produk', 'tgl_pemesanan'], 'safe'],
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
        $query = TTransaksiPemesanan::find();

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
            'no_pemesanan' => $this->no_pemesanan,
            'jumlah_pemesanan' => $this->jumlah_pemesanan,
            'tgl_pemesanan' => $this->tgl_pemesanan,
        ]);

        $query->andFilterWhere(['like', 'id_customer', $this->id_customer])
            ->andFilterWhere(['like', 'kode_produk', $this->kode_produk]);

        return $dataProvider;
    }
}
