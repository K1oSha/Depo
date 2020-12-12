<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "contributor".
 *
 * @property int $id
 * @property int|null $user_id
 * @property int|null $request_id
 * @property int|null $is_speaker
 * @property int|null $came
 */
class Contributor extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'contributor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['user_id', 'request_id', 'is_speaker', 'came'], 'integer'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'user_id' => 'User ID',
            'request_id' => 'Request ID',
            'is_speaker' => 'Is Speaker',
            'came' => 'Came',
        ];
    }
}
