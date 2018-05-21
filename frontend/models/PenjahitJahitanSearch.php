<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenjahitJahitan;

/**
 * PenjahitJahitanSearch represents the model behind the search form of `frontend\models\PenjahitJahitan`.
 */
class PenjahitJahitanSearch extends PenjahitJahitan
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hasil_id', 'pjht_id'], 'integer'],
            [['hasil_foto_jahit', 'hasil_ket'], 'safe'],
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
        $query = PenjahitJahitan::find();

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
            'hasil_id' => $this->hasil_id,
            'pjht_id' => $this->pjht_id,
        ]);

        $query->andFilterWhere(['like', 'hasil_foto_jahit', $this->hasil_foto_jahit])
            ->andFilterWhere(['like', 'hasil_ket', $this->hasil_ket]);

        return $dataProvider;
    }
}
