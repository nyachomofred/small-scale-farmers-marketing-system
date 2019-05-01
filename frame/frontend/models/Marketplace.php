<?php

namespace app\models;

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
 * @property string $sort
 * @property string $quantity_bought
 * @property string $negotiate
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
            
            [['product', 'quantity', 'unit', 'price', 'name', 'email','quantity_bought', 'phone', 'foto', 'description', 'location', 'buyer_name', 'phone_email','buyer_phone',], 'safe'],
            [['description'], 'string'],
            [['phone_email'], 'email'],
            [['email'], 'email'],
            [['phone'], 'string'],
            [['from'], 'date'],
            [['to'], 'date'],
            [['buyer_phone'], 'string'],
            [['date', 'sort','order_date'], 'safe'],
            [['product', 'quantity', 'unit', 'price', 'from','to','name','sort','negotiate', 'quantity_bought','email',  'foto', 'location', 'buyer_name'], 'string', 'max' => 100],
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
            'quantity' => 'Quantity',
            'unit' => 'Unit',
            'price' => 'Price',
            'name' => 'Seller Name',
            'email' => 'Seller Email',
            'phone' => 'Seller Phone No',
            'foto' => 'Image',
            'description' => 'Description',
            'location' => 'Location',
            'date' => 'Date posted',
            'buyer_name' => ' Buyer name',
            'phone_email' => ' Buyer email',
            'buyer_phone' => ' Buyer Phonenumbe',
            'order_date' => ' Date ordered',
            'sort'=>'Sort by',
            'quantity_bought'=>'Quantity',
            'from'=>'From Date',
            'to'=>'To Date',
            'negotiate'=>'Do you want to negotiate for this product?',
        ];
    }
}
