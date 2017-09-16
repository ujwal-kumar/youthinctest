<?php

namespace common\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\QuestionMaster;

/**
 * QuestionnaireSearch represents the model behind the search form about `common\models\QuestionMaster`.
 */
class QuestionnaireSearch extends QuestionMaster
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Question_ID', 'Category_ID', 'IsActive', 'DisplayOrder'], 'integer'],
            [['QuestionName', 'ControlType', 'CreatedDate', 'ModifiedDate'], 'safe'],
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
        $query = QuestionMaster::find()->orderBy(['Last_Modified_Date'=>SORT_DESC]);

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
            'Question_ID' => $this->Question_ID,
            'Category_ID' => $this->Category_ID,
            'IsActive' => $this->IsActive,
            'DisplayOrder' => $this->DisplayOrder,
            'CreatedDate' => $this->CreatedDate,
            'ModifiedDate' => $this->ModifiedDate,
        ]);

        $query->andFilterWhere(['like', 'QuestionName', $this->QuestionName])
            ->andFilterWhere(['like', 'ControlType', $this->ControlType]);

        return $dataProvider;
    }
}
