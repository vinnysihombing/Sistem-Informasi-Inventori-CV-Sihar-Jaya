<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TProduk;

/**
 * TProdukSearch represents the model behind the search form of `frontend\models\TProduk`.
 */
class TProdukSearch extends TProduk
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_produk', 'id_kategori', 'nama_produk', 'status_produk'], 'safe'],
            [['harga_jual', 'harga_beli', 'jumlah_produk'], 'integer'],
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
        $query = TProduk::find();

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
            'harga_jual' => $this->harga_jual,
            'harga_beli' => $this->harga_beli,
            'jumlah_produk' => $this->jumlah_produk,
        ]);

        $query->andFilterWhere(['like', 'kode_produk', $this->kode_produk])
            ->andFilterWhere(['like', 'id_kategori', $this->id_kategori])
            ->andFilterWhere(['like', 'nama_produk', $this->nama_produk])
            ->andFilterWhere(['like', 'status_produk', $this->status_produk]);

        return $dataProvider;
    }
}
