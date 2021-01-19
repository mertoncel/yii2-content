<?php

namespace mertoncel\content\models\query;

/**
 * This is the ActiveQuery class for [[\common\models\Players]].
 *
 * @see mertoncel\content\models\Players
 */
class PlayersQuery extends \yii\db\ActiveQuery
{
    /*public function active()
    {
        return $this->andWhere('[[status]]=1');
    }*/

    /**
     * {@inheritdoc}
     * @return \mertoncel\content\models\Players[]|array
     */
    public function all($db = null)
    {
        return parent::all($db);
    }

    public function one($db = null)
    {
        return parent::one($db);
    }

    public function creator($userId)
    {
        return $this->andWhere(['scout_name' => $userId]);
    }

    public function latest()
    {
        return $this->orderBy(['created_at' => SORT_DESC]);
    }

    public function byKeyword($keyword)
    {
        return $this->andWhere("MATCH(player_name,player_team,player_country,player_position,scout_name)
        AGAINST (:keyword)",['keyword' => $keyword]);
    }


}
