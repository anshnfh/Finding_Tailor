<?php

namespace frontend\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use frontend\models\PenjahitProfil;

/**
 * PenjahitProfilSearch represents the model behind the search form of `frontend\models\PenjahitProfil`.
 */
class PenjahitProfilSearch extends PenjahitProfil
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['pjht_id'], 'integer'],
            [['pjht_fullname', 'pjht_alamat', 'pjht_kec', 'pjht_kota', 'pjht_telp', 'pjht_photo', 'pjht_jam_oprs_buka', 'pjht_jam_oprs_tutup'], 'safe'],
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
        $query = PenjahitProfil::find();

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
            'pjht_id' => $this->pjht_id,
            'pjht_jam_oprs_buka' => $this->pjht_jam_oprs_buka,
            'pjht_jam_oprs_tutup' => $this->pjht_jam_oprs_tutup,
        ]);

        $query->andFilterWhere(['like', 'pjht_fullname', $this->pjht_fullname])
            ->andFilterWhere(['like', 'pjht_alamat', $this->pjht_alamat])
            ->andFilterWhere(['like', 'pjht_kec', $this->pjht_kec])
            ->andFilterWhere(['like', 'pjht_kota', $this->pjht_kota])
            ->andFilterWhere(['like', 'pjht_telp', $this->pjht_telp])
            ->andFilterWhere(['like', 'pjht_photo', $this->pjht_photo]);

        return $dataProvider;
    }
}
