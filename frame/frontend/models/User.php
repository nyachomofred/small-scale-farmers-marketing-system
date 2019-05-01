<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string $firstname
 * @property string $lastname
 * @property string $username
 * @property string $auth_key
 * @property string $password_hash
 * @property string $password_reset_token
 * @property string $phonenumber
 * @property string $email
 * @property string $pass
 * @property string $old
 * @property string $new
 * @property int $status
 * @property int $created_at
 * @property int $updated_at
 *
 * @property Orders $orders
 * @property Posts $posts
 * 
 */
class User extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['firstname', 'lastname', 'username', 'auth_key', 'password_hash', 'phonenumber', 'email', 'created_at', 'updated_at'], 'required'],
            [['status', 'created_at', 'updated_at'], 'integer'],
            [['firstname', 'lastname', 'phonenumber'], 'string', 'max' => 100],
            [['username', 'password_hash', 'password_reset_token', 'email'], 'string', 'max' => 255],
            [['auth_key'], 'string', 'max' => 32],
            [['username'], 'unique'],
            [['email'], 'unique'],

            [['pass'], 'unique'],
            [['pass'], 'email'],
            [['pass'], 'exist','targetAttribute'=>'email'],


            [['password_reset_token'], 'unique'],

        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'firstname' => 'First name',
            'lastname' => 'Last name',
            'username' => 'Username',
            'auth_key' => 'Auth Key',
            'password_hash' => 'Password Hash',
            'password_reset_token' => 'Password Reset Token',
            'phonenumber' => 'Phone number',
            'email' => 'Email',
            'pass' => 'email',
            'old' => 'Old Password',
            'new' => 'New Password',
            'status' => 'Status',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getOrders()
    {
        return $this->hasOne(Orders::className(), ['orderby' => 'id']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getPost()
    {
        return $this->hasOne(Post::className(), ['user_id' => 'id']);
    }
}
