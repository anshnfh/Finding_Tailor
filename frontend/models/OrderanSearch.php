<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Orderan;

/**
 * OrderanSearch represents the model behind the search form of `frontend\models\Orderan`.
 */
class OrderanSearch extends Orderan
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['order_id', 'order_jml', 'order_total', 'user_id'], 'integer'],
            [['order_jenis', 'order_model', 'order_ukuran', 'order_aksesoris', 'order_photo_model', 'order_date'], 'safe'],
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
        $query = Orderan::find();

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
            'order_id' => $this->order_id,
            'order_jml' => $this->order_jml,
            'order_date' => $this->order_date,
            'order_total' => $this->order_total,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'order_jenis', $this->order_jenis])
            ->andFilterWhere(['like', 'order_model', $this->order_model])
            ->andFilterWhere(['like', 'order_ukuran', $this->order_ukuran])
            ->andFilterWhere(['like', 'order_aksesoris', $this->order_aksesoris])
            ->andFilterWhere(['like', 'order_photo_model', $this->order_photo_model]);

        return $dataProvider;
    }
}
