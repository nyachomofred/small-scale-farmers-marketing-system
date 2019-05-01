<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "marketplace".
 *
 * @property int $id
 * @property int $from
 * @property int $to
 * @property string $product
 * @property string $quantity
 * @property string $unit
 * @property string $price
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property string $foto
 * @property string $description
 * @property string $location
 * @property string $date
 * @property string $buyer_name
 * @property string $phone_email
 * @property string $order_date
 * @property string $buyer_phone
 * @property string $quantity_bought
 * @property string $sort
 *  @property string $negotiate
 */
class Marketplace extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marketplace';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [[ 'negotiate','sort'], 'required','on'=>'backend'],
            [['product', 'quantity', 'unit', 'price', 'name', 'email', 'phone', 'foto', 'description', 'location', 'buyer_name', 'phone_email', 'buyer_phone', 'quantity_bought', 'sort'], 'safe'],
            [['description'], 'string'],
            [['date', 'order_date','negotiate'], 'safe'],
            [['product', 'quantity', 'unit', 'price', 'name','negotiate', 'email', 'phone', 'foto','from','to', 'location', 'buyer_name', 'phone_email', 'buyer_phone', 'quantity_bought', 'sort'], 'string', 'max' => 100],
        ];
    }

    public function scenarios(){
        $scenarios=parent::scenarios();
        $scenarios['backend']=['negotiate','sort'];
        return $scenarios;
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'product' => 'Product name',
            'quantity' => 'Quantity',
            'unit' => 'Unit',
            'price' => 'Price',
            'name' => 'Seller Name',
            'email' => 'Seller Email',
            'phone' => 'Seller Phonenumber',
            'foto' => 'Foto',
            'description' => 'Description',
            'location' => 'Location',
            'date' => 'Date and time',
            'buyer_name' => 'Buyer Name',
            'phone_email' => 'Phone Email',
            'order_date' => 'Order Date',
            'buyer_phone' => 'Buyer Phone',
            'quantity_bought' => 'Quantity Bought',
            'sort' => ' Period',
            'from'=>'From',
            'to'=>'To',
            'negotiate'=>'Status',
        ];
    }
}
