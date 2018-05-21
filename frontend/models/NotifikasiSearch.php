<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\Notifikasi;

/**
 * NotifikasiSearch represents the model behind the search form of `frontend\models\Notifikasi`.
 */
class NotifikasiSearch extends Notifikasi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['notif_id', 'user_id', 'pjht_id'], 'integer'],
            [['notif_remind_date', 'notif_content', 'notif_exp_date'], 'safe'],
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
        $query = Notifikasi::find();

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
            'notif_id' => $this->notif_id,
            'notif_remind_date' => $this->notif_remind_date,
            'notif_exp_date' => $this->notif_exp_date,
            'user_id' => $this->user_id,
            'pjht_id' => $this->pjht_id,
        ]);

        $query->andFilterWhere(['like', 'notif_content', $this->notif_content]);

        return $dataProvider;
    }
}
