<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "t_transaksi_pemesanan".
 *
 * @property int $no_pemesanan
 * @property string $id_customer
 * @property string $kode_produk
 * @property int $jumlah_pemesanan
 * @property string $tgl_pemesanan
 *
 * @property TCustomer $customer
 * @property TProduk $kodeProduk
 */
class TTransaksiPemesanan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_transaksi_pemesanan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pemesanan'], 'required'],
            [['no_pemesanan', 'jumlah_pemesanan'], 'integer'],
            [['tgl_pemesanan'], 'safe'],
            [['id_customer', 'kode_produk'], 'string', 'max' => 20],
            [['no_pemesanan'], 'unique'],
            [['id_customer'], 'exist', 'skipOnError' => true, 'targetClass' => TCustomer::className(), 'targetAttribute' => ['id_customer' => 'id_customer']],
            [['kode_produk'], 'exist', 'skipOnError' => true, 'targetClass' => TProduk::className(), 'targetAttribute' => ['kode_produk' => 'kode_produk']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pemesanan' => 'No Pemesanan',
            'id_customer' => 'Id Customer',
            'kode_produk' => 'Kode Produk',
            'jumlah_pemesanan' => 'Jumlah Pemesanan',
            'tgl_pemesanan' => 'Tgl Pemesanan',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCustomer()
    {
        return $this->hasOne(TCustomer::className(), ['id_customer' => 'id_customer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeProduk()
    {
        return $this->hasOne(TProduk::className(), ['kode_produk' => 'kode_produk']);
    }
}
