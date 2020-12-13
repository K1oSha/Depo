<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\User;

/**
 * UserSearch represents the model behind the search form of `app\models\User`.
 */
class UserSearch extends User
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'is_created', 'is_admin', 'is_moderator', 'activity', 'personal', 'marketing', 'strategic', 'industry', 'investment', 'bigdata'], 'integer'],
            [['name', 'number', 'position', 'telegram', 'whatsapp', 'email', 'passhash', 'authokey', 'avatar'], 'safe'],
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
        $query = User::find();

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
            'is_created' => $this->is_created,
            'is_admin' => $this->is_admin,
            'is_moderator' => $this->is_moderator,
            'activity' => $this->activity,
            'personal' => $this->personal,
            'marketing' => $this->marketing,
            'strategic' => $this->strategic,
            'industry' => $this->industry,
            'investment' => $this->investment,
            'bigdata' => $this->bigdata,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'number', $this->number])
            ->andFilterWhere(['like', 'position', $this->position])
            ->andFilterWhere(['like', 'telegram', $this->telegram])
            ->andFilterWhere(['like', 'whatsapp', $this->whatsapp])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'passhash', $this->passhash])
            ->andFilterWhere(['like', 'authokey', $this->authokey])
            ->andFilterWhere(['like', 'avatar', $this->avatar]);

        return $dataProvider;
    }
}
