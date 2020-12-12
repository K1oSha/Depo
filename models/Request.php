<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "request".
 *
 * @property int $id
 * @property int|null $author_id
 * @property string|null $title
 * @property string|null $desc
 * @property string|null $extra_desc
 * @property int|null $availability
 * @property string|null $register_end
 * @property int|null $confirmed
 * @property int|null $rejected
 * @property string|null $rej_msg
 * @property string|null $start
 * @property string|null $end
 * @property string|null $bannerurl
 * @property int|null $deleted
 * @property int|null $place_talk
 * @property int|null $place_hall
 * @property string|null $broadcasturl
 * @property int|null $category_id
 * @property int|null $visited
 * @property int|null $registered
 * @property int|null $views
 */
class Request extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'request';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['author_id', 'availability', 'confirmed', 'rejected', 'deleted', 'place_talk', 'place_hall', 'category_id', 'visited', 'registered', 'views'], 'integer'],
            [['desc', 'extra_desc', 'rej_msg'], 'string'],
            [['register_end', 'start', 'end'], 'safe'],
            [['title', 'bannerurl', 'broadcasturl'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'author_id' => 'Author ID',
            'title' => 'Название',
            'desc' => 'Описание',
            'extra_desc' => 'Дополнительное описание',
            'availability' => 'Отбор заявок',
            'register_end' => 'Время оконачания регистрации',
            'confirmed' => 'Подтверждено',
            'rejected' => 'Отклонено',
            'rej_msg' => 'Комментарий отказа',
            'start' => 'Начало',
            'end' => 'Конец',
            'bannerurl' => 'Баннер',
            'deleted' => 'Удалено',
            'place_talk' => 'Переговорная',
            'place_hall' => 'Зал',
            'broadcasturl' => 'Ссылка на трансляцию',
            'category_id' => 'Category ID',
            'visited' => 'Посетителей',
            'registered' => 'Зарегистрировано',
            'views' => 'Просмотров',
        ];
    }
}
