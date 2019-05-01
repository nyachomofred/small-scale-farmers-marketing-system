<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Dailyprices;

/**
 * DailypricesSearch represents the model behind the search form of `app\models\Dailyprices`.
 */
class DailypricesSearch extends Dailyprices
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'product', 'location'], 'integer'],
            [['quantity', 'low_price', 'high_price'], 'safe'],
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
        $query = Dailyprices::find();

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
            'product' => $this->product,
            'location' => $this->location,
        ]);

        $query->andFilterWhere(['like', 'quantity', $this->quantity])
            ->andFilterWhere(['like', 'low_price', $this->low_price])
            ->andFilterWhere(['like', 'high_price', $this->high_price]);

        return $dataProvider;
    }
}
