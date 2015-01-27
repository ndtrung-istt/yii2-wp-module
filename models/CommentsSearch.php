<?php

namespace istt\wp\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use istt\wp\models\Comments;

/**
 * CommentsSearch represents the model behind the search form about `istt\wp\models\Comments`.
 */
class CommentsSearch extends Comments
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['comment_ID', 'comment_post_ID', 'comment_karma', 'comment_parent', 'user_id'], 'integer'],
            [['comment_author', 'comment_author_email', 'comment_author_url', 'comment_author_IP', 'comment_date', 'comment_date_gmt', 'comment_content', 'comment_approved', 'comment_agent', 'comment_type'], 'safe'],
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
        $query = Comments::find();

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
            'comment_ID' => $this->comment_ID,
            'comment_post_ID' => $this->comment_post_ID,
            'comment_date' => $this->comment_date,
            'comment_date_gmt' => $this->comment_date_gmt,
            'comment_karma' => $this->comment_karma,
            'comment_parent' => $this->comment_parent,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'comment_author', $this->comment_author])
            ->andFilterWhere(['like', 'comment_author_email', $this->comment_author_email])
            ->andFilterWhere(['like', 'comment_author_url', $this->comment_author_url])
            ->andFilterWhere(['like', 'comment_author_IP', $this->comment_author_IP])
            ->andFilterWhere(['like', 'comment_content', $this->comment_content])
            ->andFilterWhere(['like', 'comment_approved', $this->comment_approved])
            ->andFilterWhere(['like', 'comment_agent', $this->comment_agent])
            ->andFilterWhere(['like', 'comment_type', $this->comment_type]);

        return $dataProvider;
    }
}
