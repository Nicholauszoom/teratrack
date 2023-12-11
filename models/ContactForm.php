<?php

namespace app\models;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactForm extends Model
{
    public $name;
    public $email;
    public $phone; // Add the phone attribute
    public $country;
    public $message;

    /**
     * @return array the validation rules.
     */
    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email', 'phone','message'], 'required'],
            // email has to be a valid email address
            ['email', 'email'],
       
        ];
    }

   
   
}