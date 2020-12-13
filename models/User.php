<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property int $id
 * @property string|null $name
 * @property string|null $number
 * @property string|null $position
 * @property string|null $telegram
 * @property string|null $whatsapp
 * @property int|null $is_created
 * @property int|null $is_admin
 * @property int|null $is_moderator
 * @property int|null $activity
 * @property int|null $personal
 * @property int|null $marketing
 * @property int|null $strategic
 * @property int|null $industry
 * @property int|null $investment
 * @property int|null $bigdata
 * @property string $email
 * @property string $passhash
 * @property string|null $authokey
 * @property string|null $avatar
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
            [['is_created', 'is_admin', 'is_moderator', 'activity', 'personal', 'marketing', 'strategic', 'industry', 'investment', 'bigdata'], 'integer'],
            [['email', 'passhash'], 'required'],
            [['name', 'number', 'position', 'telegram', 'whatsapp', 'email', 'passhash', 'authokey', 'avatar'], 'string', 'max' => 255],
            [['email'], 'unique'],
            [['authokey'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Имя',
            'number' => 'Номер',
            'position' => 'Position',
            'telegram' => 'Telegram',
            'whatsapp' => 'Whatsapp',
            'is_created' => 'Is Created',
            'is_admin' => 'Is Admin',
            'is_moderator' => 'Is Moderator',
            'activity' => 'Activity',
            'personal' => 'Personal',
            'marketing' => 'Marketing',
            'strategic' => 'Strategic',
            'industry' => 'Industry',
            'investment' => 'Investment',
            'bigdata' => 'Bigdata',
            'email' => 'Email',
            'passhash' => 'Passhash',
            'authokey' => 'Authokey',
            'avatar' => 'Avatar',
        ];
    }
}
