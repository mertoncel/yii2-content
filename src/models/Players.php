<?php

namespace mertoncel\content\models;

use Yii;

/**
 * This is the model class for table "{{%players}}".
 *
 * @property int $player_id
 * @property string $player_name
 * @property string $player_team
 * @property int $player_age
 * @property string $player_country
 * @property string|null $player_position
 * @property string|null $player_pros
 * @property string|null $player_cons
 * @property string|null $scout_name
 * @property int|null $created_at
 */
class Players extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return '{{%players}}';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['player_id', 'player_name', 'player_team', 'player_age', 'player_country'], 'required'],
            [['player_id', 'player_age', 'created_at'], 'integer'],
            [['player_pros', 'player_cons'], 'string'],
            [['player_name', 'player_team', 'player_country', 'scout_name'], 'string', 'max' => 50],
            [['player_position'], 'string', 'max' => 20],
            [['player_id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'player_id' => 'ID',
            'player_name' => 'Name',
            'player_team' => 'Team',
            'player_age' => 'Age',
            'player_country' => 'Country',
            'player_position' => 'Position',
            'player_pros' => 'Pros',
            'player_cons' => 'Cons',
            'scout_name' => 'Scout',
            'created_at' => 'Date',
        ];
    }

    /**
     * {@inheritdoc}
     * @return \mertoncel\content\models\query\PlayersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new \mertoncel\content\models\query\PlayersQuery(get_called_class());
    }
}
