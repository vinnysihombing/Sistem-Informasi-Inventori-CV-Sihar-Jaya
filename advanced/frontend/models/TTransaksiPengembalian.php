<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "t_transaksi_pengembalian".
 *
 * @property int $no_retur
 * @property string $id_customer
 * @property string $kode_produk
 * @property int $jumlah_produk_retur
 * @property string $tgl_retur
 *
 * @property TCustomer $customer
 * @property TProduk $kodeProduk
 */
class TTransaksiPengembalian extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_transaksi_pengembalian';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_retur'], 'required'],
            [['no_retur', 'jumlah_produk_retur'], 'integer'],
            [['tgl_retur'], 'safe'],
            [['id_customer', 'kode_produk'], 'string', 'max' => 20],
            [['no_retur'], 'unique'],
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
            'no_retur' => 'No Retur',
            'id_customer' => 'Id Customer',
            'kode_produk' => 'Kode Produk',
            'jumlah_produk_retur' => 'Jumlah Produk Retur',
            'tgl_retur' => 'Tgl Retur',
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
