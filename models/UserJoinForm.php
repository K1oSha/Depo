<?php

namespace app\models;
use yii\base\Model;

class UserJoinForm extends Model{

    public $name;
    public $email;
    public $number;
    public $position;
    public $telegram;
    public $whatsapp;
    public $password;
    public $password2;


    public function  rules()
    {
        return [
            [['name','email','password','password2'],'required','message'=>'Это поле должно быть заполнено'],
            ['name','string','min'=>3,'max'=>30],
            [['number','position','telegram','whatsapp'], 'fields'],
            ['email','email','message'=>'Адрес электронной почты указан неверно'],
            ['password','string','min'=>4],
            ['password2','compare','compareAttribute'=>'password'],
            ['email','errorIfEmailUsed']
        ];
    }
        public function setUserRecord($userRecord)
        {
            $this->name     = $userRecord->name;
            $this->email    = $userRecord->email;
            $this->number   = $userRecord->number;
            $this->position = $userRecord->position;
            $this->telegram = $userRecord->telegram;
            $this->whatsapp = $userRecord->whatsapp;
            $this->password = $this->password2;
        }

        public function errorIfEmailUsed()
        {
            if (UserRecord::existsEmail($this->email))
            $this->addError('email','This e-mail already exists');
        }


        public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'ФИО',
            'email' => 'E-mail',
            'number' => 'Телефонный номер',
            'position' => 'Должность',
            'telegram' => 'Телеграм',
            'whatsapp' => 'Ватсапп',
            'password' => 'Пароль',
            'password2' => 'Повторите пароль',
        ];
    }
}