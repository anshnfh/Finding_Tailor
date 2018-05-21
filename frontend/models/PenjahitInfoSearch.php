<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenjahitInfo;

/**
 * PenjahitInfoSearch represents the model behind the search form of `frontend\models\PenjahitInfo`.
 */
class PenjahitInfoSearch extends PenjahitInfo
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['info_id', 'pjht_id', 'info_durasi_kerja'], 'integer'],
            [['info_jenis', 'info_jml_order', 'info_spesialisasi', 'info_status', 'info_sertif'], 'safe'],
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
        $query = PenjahitInfo::find();

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
            'info_id' => $this->info_id,
            'pjht_id' => $this->pjht_id,
            'info_durasi_kerja' => $this->info_durasi_kerja,
        ]);

        $query->andFilterWhere(['like', 'info_jenis', $this->info_jenis])
            ->andFilterWhere(['like', 'info_jml_order', $this->info_jml_order])
            ->andFilterWhere(['like', 'info_spesialisasi', $this->info_spesialisasi])
            ->andFilterWhere(['like', 'info_status', $this->info_status])
            ->andFilterWhere(['like', 'info_sertif', $this->info_sertif]);

        return $dataProvider;
    }
}
