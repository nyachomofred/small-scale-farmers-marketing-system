<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "dailyprices".
 *
 * @property int $id
 * @property int $product
 * @property int $location
 * @property string quantity;
 * 
 * @property string $low_price
 * @property string $high_price
 *
 * @property Product $product0
 * @property Location $location0
 */
class Dailyprices extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'dailyprices';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product', 'location', 'low_price', 'high_price','quantity'], 'required'],
            [['product', 'location'], 'integer'],
            [['low_price', 'high_price'], 'string', 'max' => 100],
            [['product'], 'exist', 'skipOnError' => true, 'targetClass' => Product::className(), 'targetAttribute' => ['product' => 'id']],
            [['location'], 'exist', 'skipOnError' => true, 'targetClass' => Location::className(), 'targetAttribute' => ['location' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product' => 'Product',
            'location' => 'Location',
             'quntity'=>'Quantity',
            'low_price' => 'Low Price',
            'high_price' => 'High Price',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProduct0()
    {
        return $this->hasOne(Product::className(), ['id' => 'product']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getLocation0()
    {
        return $this->hasOne(Location::className(), ['id' => 'location']);
    }
}
