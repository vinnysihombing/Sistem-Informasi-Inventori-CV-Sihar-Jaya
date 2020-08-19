<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "t_customer".
 *
 * @property string $id_customer
 * @property string $nama_customer
 * @property string $alamat_customer
 * @property string $no_telp_customer
 *
 * @property TTransaksiPemesanan[] $tTransaksiPemesanans
 * @property TTransaksiPengembalian[] $tTransaksiPengembalians
 */
class TCustomer extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_customer';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_customer'], 'required'],
            [['id_customer', 'no_telp_customer'], 'string', 'max' => 20],
            [['nama_customer', 'alamat_customer'], 'string', 'max' => 50],
            [['id_customer'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_customer' => 'Id Customer',
            'nama_customer' => 'Nama Customer',
            'alamat_customer' => 'Alamat Customer',
            'no_telp_customer' => 'No Telp Customer',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTTransaksiPemesanans()
    {
        return $this->hasMany(TTransaksiPemesanan::className(), ['id_customer' => 'id_customer']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTTransaksiPengembalians()
    {
        return $this->hasMany(TTransaksiPengembalian::className(), ['id_customer' => 'id_customer']);
    }
}
