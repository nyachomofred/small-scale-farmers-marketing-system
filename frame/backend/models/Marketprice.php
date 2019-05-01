<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "marketprice".
 *
 * @property int $id
 * @property string $comodity
 * @property string $uom
 * @property string $weight
 * @property string $location
 * @property string $price
 */
class Marketprice extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marketprice';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['comodity', 'uom', 'weight', 'location', 'price'], 'required'],
            [['comodity', 'uom', 'weight', 'location', 'price'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'comodity' => 'Comodity',
            'uom' => 'Uom',
            'weight' => 'Weight',
            'location' => 'Location',
            'price' => 'Price',
        ];
    }
}
