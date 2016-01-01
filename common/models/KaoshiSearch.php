<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Kaoshi;

/**
 * KaoshiSearch represents the model behind the search form about `common\models\Kaoshi`.
 */
class KaoshiSearch extends Kaoshi
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'baomingshijian', 'jiezhishijian', 'kaoshishijian', 'is_reminder', 'created_at', 'updated_at'], 'integer'],
            [['title'], 'safe'],
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
        $query = Kaoshi::find();

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
            'id' => $this->id,
            'baomingshijian' => $this->baomingshijian,
            'jiezhishijian' => $this->jiezhishijian,
            'kaoshishijian' => $this->kaoshishijian,
            'is_reminder' => $this->is_reminder,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere(['like', 'title', $this->title]);

        return $dataProvider;
    }
}