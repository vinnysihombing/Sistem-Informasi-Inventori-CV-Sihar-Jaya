<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "t_kategori".
 *
 * @property string $id_kategori
 * @property int $jumlah_per_kategori
 * @property string $jenis_kategori
 * @property string $lokasi
 *
 * @property TProduk[] $tProduks
 */
class TKategori extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_kategori';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_kategori'], 'required'],
            [['jumlah_per_kategori'], 'integer'],
            [['id_kategori'], 'string', 'max' => 10],
            [['jenis_kategori'], 'string', 'max' => 50],
            [['lokasi'], 'string', 'max' => 20],
            [['id_kategori'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_kategori' => 'Id Kategori',
            'jumlah_per_kategori' => 'Jumlah Per Kategori',
            'jenis_kategori' => 'Jenis Kategori',
            'lokasi' => 'Lokasi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTProduks()
    {
        return $this->hasMany(TProduk::className(), ['id_kategori' => 'id_kategori']);
    }
}
