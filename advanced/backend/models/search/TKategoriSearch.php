<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\TKategori;

/**
 * TKategoriSearch represents the model behind the search form of `frontend\models\TKategori`.
 */
class TKategoriSearch extends TKategori
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategori', 'jenis_kategori', 'lokasi'], 'safe'],
            [['jumlah_per_kategori'], 'integer'],
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
        $query = TKategori::find();

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
            'jumlah_per_kategori' => $this->jumlah_per_kategori,
        ]);

        $query->andFilterWhere(['like', 'id_kategori', $this->id_kategori])
            ->andFilterWhere(['like', 'jenis_kategori', $this->jenis_kategori])
            ->andFilterWhere(['like', 'lokasi', $this->lokasi]);

        return $dataProvider;
    }
}
