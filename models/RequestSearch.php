<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Request;

/**
 * RequestSearch represents the model behind the search form of `app\models\Request`.
 */
class RequestSearch extends Request
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'author_id', 'availability', 'confirmed', 'rejected', 'deleted', 'place_talk', 'place_hall', 'category_id', 'visited', 'registered', 'views'], 'integer'],
            [['title', 'desc', 'extra_desc', 'register_end', 'rej_msg', 'start', 'end', 'bannerurl', 'broadcasturl'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Request::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'author_id' => $this->author_id,
            'availability' => $this->availability,
            'register_end' => $this->register_end,
            'confirmed' => $this->confirmed,
            'rejected' => $this->rejected,
            'start' => $this->start,
            'end' => $this->end,
            'deleted' => $this->deleted,
            'place_talk' => $this->place_talk,
            'place_hall' => $this->place_hall,
            'category_id' => $this->category_id,
            'visited' => $this->visited,
            'registered' => $this->registered,
            'views' => $this->views,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'desc', $this->desc])
            ->andFilterWhere(['like', 'extra_desc', $this->extra_desc])
            ->andFilterWhere(['like', 'rej_msg', $this->rej_msg])
            ->andFilterWhere(['like', 'bannerurl', $this->bannerurl])
            ->andFilterWhere(['like', 'broadcasturl', $this->broadcasturl]);

        return $dataProvider;
    }
}
