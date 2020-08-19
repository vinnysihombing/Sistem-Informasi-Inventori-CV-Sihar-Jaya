<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "t_transaksi_pemasokan".
 *
 * @property int $no_pemasokan
 * @property string $id_supplier
 * @property string $kode_produk
 * @property string $tgl_masuk
 * @property int $Jumlah_produk
 *
 * @property TProduk $kodeProduk
 * @property TSupplier $supplier
 */
class TTransaksiPemasokan extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_transaksi_pemasokan';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['no_pemasokan'], 'required'],
            [['no_pemasokan', 'Jumlah_produk'], 'integer'],
            [['tgl_masuk'], 'safe'],
            [['id_supplier', 'kode_produk'], 'string', 'max' => 20],
            [['no_pemasokan'], 'unique'],
            [['kode_produk'], 'exist', 'skipOnError' => true, 'targetClass' => TProduk::className(), 'targetAttribute' => ['kode_produk' => 'kode_produk']],
            [['id_supplier'], 'exist', 'skipOnError' => true, 'targetClass' => TSupplier::className(), 'targetAttribute' => ['id_supplier' => 'id_supplier']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'no_pemasokan' => 'No Pemasokan',
            'id_supplier' => 'Id Supplier',
            'kode_produk' => 'Kode Produk',
            'tgl_masuk' => 'Tgl Masuk',
            'Jumlah_produk' => 'Jumlah Produk',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKodeProduk()
    {
        return $this->hasOne(TProduk::className(), ['kode_produk' => 'kode_produk']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getSupplier()
    {
        return $this->hasOne(TSupplier::className(), ['id_supplier' => 'id_supplier']);
    }
}
