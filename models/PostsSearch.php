<?php

namespace istt\wp\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use istt\wp\models\Posts;

/**
 * PostsSearch represents the model behind the search form about `istt\wp\models\Posts`.
 */
class PostsSearch extends Posts
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['ID', 'post_author', 'post_parent', 'menu_order', 'comment_count'], 'integer'],
            [['post_date', 'post_date_gmt', 'post_content', 'post_title', 'post_excerpt', 'post_status', 'comment_status', 'ping_status', 'post_password', 'post_name', 'to_ping', 'pinged', 'post_modified', 'post_modified_gmt', 'post_content_filtered', 'guid', 'post_type', 'post_mime_type'], 'safe'],
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
        $query = Posts::find();

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
            'post_author' => $this->post_author,
            'post_date' => $this->post_date,
            'post_date_gmt' => $this->post_date_gmt,
            'post_modified' => $this->post_modified,
            'post_modified_gmt' => $this->post_modified_gmt,
            'post_parent' => $this->post_parent,
            'menu_order' => $this->menu_order,
            'comment_count' => $this->comment_count,
        ]);

        $query->andFilterWhere(['like', 'post_content', $this->post_content])
            ->andFilterWhere(['like', 'post_title', $this->post_title])
            ->andFilterWhere(['like', 'post_excerpt', $this->post_excerpt])
            ->andFilterWhere(['like', 'post_status', $this->post_status])
            ->andFilterWhere(['like', 'comment_status', $this->comment_status])
            ->andFilterWhere(['like', 'ping_status', $this->ping_status])
            ->andFilterWhere(['like', 'post_password', $this->post_password])
            ->andFilterWhere(['like', 'post_name', $this->post_name])
            ->andFilterWhere(['like', 'to_ping', $this->to_ping])
            ->andFilterWhere(['like', 'pinged', $this->pinged])
            ->andFilterWhere(['like', 'post_content_filtered', $this->post_content_filtered])
            ->andFilterWhere(['like', 'guid', $this->guid])
            ->andFilterWhere(['like', 'post_type', $this->post_type])
            ->andFilterWhere(['like', 'post_mime_type', $this->post_mime_type]);

        return $dataProvider;
    }
}
