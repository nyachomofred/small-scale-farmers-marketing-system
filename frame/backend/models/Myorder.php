<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "myorder".
 *
 * @property int $id
 * @property string $product
 * @property string $quantity
 * @property string $Unit
 * @property string $due_date
 * @property string $extrainformation
 * @property string $Name
 * @property string $email
 * @property string $phone
 * @property string $date
 */
class Myorder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'myorder';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['product', 'quantity', 'Unit', 'due_date', 'extrainformation', 'Name', 'email', 'phone'], 'required'],
            [['extrainformation'], 'string'],
            [['date'], 'safe'],
            [['product', 'quantity', 'Unit', 'due_date', 'phone'], 'string', 'max' => 100],
            [['Name', 'email'], 'string', 'max' => 255],
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
            'Unit' => 'Unit',
            'due_date' => 'Due Date',
            'extrainformation' => 'Extrainformation',
            'Name' => 'Name',
            'email' => 'Email',
            'phone' => 'Phone',
            'date' => 'Date',
        ];
    }
}
