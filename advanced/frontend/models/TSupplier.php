<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "t_supplier".
 *
 * @property string $id_supplier
 * @property string $nama_supplier
 * @property string $alamat_supplier
 * @property string $no_telp_supplier
 *
 * @property TTransaksiPemasokan[] $tTransaksiPemasokans
 */
class TSupplier extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 't_supplier';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_supplier'], 'required'],
            [['id_supplier', 'no_telp_supplier'], 'string', 'max' => 20],
            [['nama_supplier', 'alamat_supplier'], 'string', 'max' => 50],
            [['id_supplier'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_supplier' => 'Id Supplier',
            'nama_supplier' => 'Nama Supplier',
            'alamat_supplier' => 'Alamat Supplier',
            'no_telp_supplier' => 'No Telp Supplier',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTTransaksiPemasokans()
    {
        return $this->hasMany(TTransaksiPemasokan::className(), ['id_supplier' => 'id_supplier']);
    }
}
