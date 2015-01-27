<?php

namespace istt\wp\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use istt\wp\models\Links;

/**
 * LinksSearch represents the model behind the search form about `istt\wp\models\Links`.
 */
class LinksSearch extends Links
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link_id', 'link_owner', 'link_rating'], 'integer'],
            [['link_url', 'link_name', 'link_image', 'link_target', 'link_description', 'link_visible', 'link_updated', 'link_rel', 'link_notes', 'link_rss'], 'safe'],
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
        $query = Links::find();

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
            'link_id' => $this->link_id,
            'link_owner' => $this->link_owner,
            'link_rating' => $this->link_rating,
            'link_updated' => $this->link_updated,
        ]);

        $query->andFilterWhere(['like', 'link_url', $this->link_url])
            ->andFilterWhere(['like', 'link_name', $this->link_name])
            ->andFilterWhere(['like', 'link_image', $this->link_image])
            ->andFilterWhere(['like', 'link_target', $this->link_target])
            ->andFilterWhere(['like', 'link_description', $this->link_description])
            ->andFilterWhere(['like', 'link_visible', $this->link_visible])
            ->andFilterWhere(['like', 'link_rel', $this->link_rel])
            ->andFilterWhere(['like', 'link_notes', $this->link_notes])
            ->andFilterWhere(['like', 'link_rss', $this->link_rss]);

        return $dataProvider;
    }
}
