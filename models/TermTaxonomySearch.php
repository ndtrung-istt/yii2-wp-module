<?php

namespace istt\wp\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use istt\wp\models\TermTaxonomy;

/**
 * TermTaxonomySearch represents the model behind the search form about `istt\wp\models\TermTaxonomy`.
 */
class TermTaxonomySearch extends TermTaxonomy
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['term_taxonomy_id', 'term_id', 'parent', 'count'], 'integer'],
            [['taxonomy', 'description'], 'safe'],
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
        $query = TermTaxonomy::find();

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
            'term_taxonomy_id' => $this->term_taxonomy_id,
            'term_id' => $this->term_id,
            'parent' => $this->parent,
            'count' => $this->count,
        ]);

        $query->andFilterWhere(['like', 'taxonomy', $this->taxonomy])
            ->andFilterWhere(['like', 'description', $this->description]);

        return $dataProvider;
    }
}
