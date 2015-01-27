<?php

namespace istt\wp\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use istt\wp\models\Users;

/**
 * UsersSearch represents the model behind the search form about `istt\wp\models\Users`.
 */
class UsersSearch extends Users
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'user_status'], 'integer'],
            [['user_login', 'user_pass', 'user_nicename', 'user_email', 'user_url', 'user_registered', 'user_activation_key', 'display_name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
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
        $query = Users::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'ID' => $this->ID,
            'user_registered' => $this->user_registered,
            'user_status' => $this->user_status,
        ]);

        $query->andFilterWhere(['like', 'user_login', $this->user_login])
            ->andFilterWhere(['like', 'user_pass', $this->user_pass])
            ->andFilterWhere(['like', 'user_nicename', $this->user_nicename])
            ->andFilterWhere(['like', 'user_email', $this->user_email])
            ->andFilterWhere(['like', 'user_url', $this->user_url])
            ->andFilterWhere(['like', 'user_activation_key', $this->user_activation_key])
            ->andFilterWhere(['like', 'display_name', $this->display_name]);

        return $dataProvider;
    }
}
