<?php

namespace istt\wp\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use istt\wp\models\TermRelationships;

/**
 * TermRelationshipsSearch represents the model behind the search form about `istt\wp\models\TermRelationships`.
 */
class TermRelationshipsSearch extends TermRelationships
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['object_id', 'term_taxonomy_id', 'term_order'], 'integer'],
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
        $query = TermRelationships::find();

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
            'object_id' => $this->object_id,
            'term_taxonomy_id' => $this->term_taxonomy_id,
            'term_order' => $this->term_order,
        ]);

        return $dataProvider;
    }
}
