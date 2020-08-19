<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "t_produk".
 *
 * @property string $kode_produk
 * @property string $id_kategori
 * @property string $nama_produk
 * @property string $status_produk
 * @property int $harga_jual
 * @property int $harga_beli
 * @property int $jumlah_produk
 *
 * @property TKategori $kategori
 * @property TTransaksiPemasokan[] $tTransaksiPemasokans
 * @property TTransaksiPemesanan[] $tTransaksiPemesanans
 * @property TTransaksiPengembalian[] $tTransaksiPengembalians
 */
class TProduk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['kode_produk'], 'required'],
            [['harga_jual', 'harga_beli', 'jumlah_produk'], 'integer'],
            [['kode_produk', 'id_kategori'], 'string', 'max' => 20],
            [['nama_produk'], 'string', 'max' => 50],
            [['status_produk'], 'string', 'max' => 10],
            [['kode_produk'], 'unique'],
            [['id_kategori'], 'exist', 'skipOnError' => true, 'targetClass' => TKategori::className(), 'targetAttribute' => ['id_kategori' => 'id_kategori']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'kode_produk' => 'Kode Produk',
            'id_kategori' => 'Id Kategori',
            'nama_produk' => 'Nama Produk',
            'status_produk' => 'Status Produk',
            'harga_jual' => 'Harga Jual',
            'harga_beli' => 'Harga Beli',
            'jumlah_produk' => 'Jumlah Produk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKategori()
    {
        return $this->hasOne(TKategori::className(), ['id_kategori' => 'id_kategori']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTTransaksiPemasokans()
    {
        return $this->hasMany(TTransaksiPemasokan::className(), ['kode_produk' => 'kode_produk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTTransaksiPemesanans()
    {
        return $this->hasMany(TTransaksiPemesanan::className(), ['kode_produk' => 'kode_produk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTTransaksiPengembalians()
    {
        return $this->hasMany(TTransaksiPengembalian::className(), ['kode_produk' => 'kode_produk']);
    }
}
