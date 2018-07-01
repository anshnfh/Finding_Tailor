<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\CustProfil;

/**
 * CustProfilSearch represents the model behind the search form of `frontend\models\CustProfil`.
 */
class CustProfilSearch extends CustProfil
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['cust_id', 'user_id'], 'integer'],
            [['cust_fullname', 'cust_alamat', 'cust_kecamatan', 'cust_kota', 'cust_phone', 'cust_photo'], 'safe'],
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
        $query = CustProfil::find();

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
            'cust_id' => $this->cust_id,
            'user_id' => $this->user_id,
        ]);

        $query->andFilterWhere(['like', 'cust_fullname', $this->cust_fullname])
            ->andFilterWhere(['like', 'cust_alamat', $this->cust_alamat])
            ->andFilterWhere(['like', 'cust_kecamatan', $this->cust_kecamatan])
            ->andFilterWhere(['like', 'cust_kota', $this->cust_kota])
            ->andFilterWhere(['like', 'cust_phone', $this->cust_phone])
            ->andFilterWhere(['like', 'cust_photo', $this->cust_photo]);

        return $dataProvider;
    }
}
