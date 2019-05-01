<?php
namespace frontend\models;

use yii\base\Model;
use common\models\User;

/**
 * Signup form
 */
class SignupForm extends Model
{
    public $username;
    public $email;
    public $password;
    public $firstname;
    public $lastname;
    public $phonenumber;


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [

            ['firstname', 'trim'],
            ['firstname', 'required'],
           
            ['firstname', 'string', 'max' => 255],
            ['firstname', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This firstname has already been taken.'],

            ['lastname', 'trim'],
            ['lastname', 'required'],
           
            ['lastname', 'string', 'max' => 255],
            ['lastname', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This lastname has already been taken.'],

            ['phonenumber', 'trim'],
            ['phonenumber', 'required'],
           
            ['phonenumber', 'integer'],
            ['phonenumber', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This phone number  has already been taken.'],

            ['username', 'trim'],
            ['username', 'required'],
            ['username', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This username has already been taken.'],
            ['username', 'string', 'min' => 2, 'max' => 255],

            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'string', 'max' => 255],
            ['email', 'unique', 'targetClass' => '\common\models\User', 'message' => 'This email address has already been taken.'],

            ['password', 'required'],
            ['password', 'string', 'min' => 6],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new User();
        $user->username = $this->username;
        $user->firstname = $this->firstname;
        $user->phonenumber = $this->phonenumber;
        $user->lastname = $this->lastname;
        $user->email = $this->email;
        $user->setPassword($this->password);
        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }
    public function attributeLabels(){
        return[
            'firstname'=>'First Name',
            'lastname'=>'Last Name',
            'phonenumber'=>'phone Number',
            'username'=>'User name',
            'email'=>'Email',
            
        ];
    }
}
