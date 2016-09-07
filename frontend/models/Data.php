<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "data".
 *
 * @property integer $id
 * @property string $status
 * @property string $fio
 * @property integer $inn
 * @property integer $ifns
 * @property integer $knd
 * @property string $desc
 * @property string $period
 * @property string $var
 * @property string $data
 * @property string $kvit
 * @property string $prot
 * @property string $fname
 */
class Data extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'data';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'status', 'fio', 'inn', 'ifns', 'knd', 'desc', 'period', 'var', 'data', 'kvit', 'prot', 'fname'], 'required'],
            [['id', 'inn', 'ifns', 'knd'], 'integer'],
            [['data'], 'safe'],
            [['status', 'fio', 'desc', 'period', 'var', 'kvit', 'prot', 'fname'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'status' => 'Status',
            'fio' => 'Fio',
            'inn' => 'Inn',
            'ifns' => 'Ifns',
            'knd' => 'Knd',
            'desc' => 'Desc',
            'period' => 'Period',
            'var' => 'Var',
            'data' => 'Data',
            'kvit' => 'Kvit',
            'prot' => 'Prot',
            'fname' => 'Fname',
        ];
    }
}
