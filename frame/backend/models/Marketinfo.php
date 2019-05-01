<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "marketinfo".
 *
 * @property int $id
 * @property string $market_name
 * @property string $location
 * @property string $capacity
 * @property string $market_day
 * @property string $info
 */
class Marketinfo extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'marketinfo';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['market_name', 'location', 'capacity', 'market_day', 'info'], 'required'],
            [['info'], 'string'],
            [['market_name', 'location', 'capacity', 'market_day'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'market_name' => 'Market Name',
            'location' => 'Location',
            'capacity' => 'Capacity',
            'market_day' => 'Market Day',
            'info' => 'Extra Information',
        ];
    }
}
