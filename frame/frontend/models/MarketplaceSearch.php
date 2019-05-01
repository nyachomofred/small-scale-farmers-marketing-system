<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Marketplace;

/**
 * MarketplaceSearch represents the model behind the search form of `app\models\Marketplace`.
 */
class MarketplaceSearch extends Marketplace
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'foto'], 'integer'],
            [['product', 'quantity','quantity_bought','from','to', 'unit', 'price', 'name','location', 'sort','email', 'phone','date'], 'safe'],
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
        $value="";
        $query = Marketplace::find()->where(['quantity_bought'=>$value]);

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
          //  'foto' => $this->foto,
        ]);

        $query->andFilterWhere(['like', 'product', $this->product])
            ->andFilterWhere(['like', 'quantity', $this->quantity])
            ->andFilterWhere(['like', 'quantity_bought', $this->quantity_bought])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'date', $this->date])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'sort', $this->sort]);

        return $dataProvider;
    }
}
