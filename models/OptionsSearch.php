<?php

namespace istt\wp\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use istt\wp\models\Options;

/**
 * OptionsSearch represents the model behind the search form about `istt\wp\models\Options`.
 */
class OptionsSearch extends Options
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['option_id'], 'integer'],
            [['option_name', 'option_value', 'autoload'], 'safe'],
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
        $query = Options::find();

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
            'option_id' => $this->option_id,
        ]);

        $query->andFilterWhere(['like', 'option_name', $this->option_name])
            ->andFilterWhere(['like', 'option_value', $this->option_value])
            ->andFilterWhere(['like', 'autoload', $this->autoload]);

        return $dataProvider;
    }
}
