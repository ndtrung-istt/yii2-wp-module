<?php

namespace istt\wp\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use istt\wp\models\Postmeta;

/**
 * PostmetaSearch represents the model behind the search form about `istt\wp\models\Postmeta`.
 */
class PostmetaSearch extends Postmeta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['meta_id', 'post_id'], 'integer'],
            [['meta_key', 'meta_value'], 'safe'],
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
        $query = Postmeta::find();

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
            'meta_id' => $this->meta_id,
            'post_id' => $this->post_id,
        ]);

        $query->andFilterWhere(['like', 'meta_key', $this->meta_key])
            ->andFilterWhere(['like', 'meta_value', $this->meta_value]);

        return $dataProvider;
    }
}
