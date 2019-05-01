<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Marketplace;

/**
 * MarketplaceSearch represents the model behind the search form of `backend\models\Marketplace`.
 */
class NegotiateSearch extends Marketplace
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id'], 'integer'],
            [['product', 'quantity', 'unit', 'price', 'name', 'email', 'phone', 'foto', 'description', 'location','negotiate', 'date', 'buyer_name', 'phone_email', 'order_date', 'buyer_phone', 'quantity_bought', 'sort'], 'safe'],
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

        $query = Marketplace::find()->where(['negotiate'=>'negotiate']);

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
            'date' => $this->date,
            'order_date' => $this->order_date,
        ]);

        $query->andFilterWhere(['like', 'product', $this->product])
            ->andFilterWhere(['like', 'quantity', $this->quantity])
            ->andFilterWhere(['like', 'unit', $this->unit])
            ->andFilterWhere(['like', 'price', $this->price])
            ->andFilterWhere(['like', 'name', $this->name])
            ->andFilterWhere(['like', 'email', $this->email])
            ->andFilterWhere(['like', 'phone', $this->phone])
            ->andFilterWhere(['like', 'foto', $this->foto])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'location', $this->location])
            ->andFilterWhere(['like', 'buyer_name', $this->buyer_name])
            ->andFilterWhere(['like', 'phone_email', $this->phone_email])
            ->andFilterWhere(['like', 'buyer_phone', $this->buyer_phone])
            ->andFilterWhere(['like', 'quantity_bought', $this->quantity_bought])
            ->andFilterWhere(['like', 'negotiate', $this->negotiate])
            ->andFilterWhere(['like', 'sort', $this->sort]);

        return $dataProvider;
    }
}
