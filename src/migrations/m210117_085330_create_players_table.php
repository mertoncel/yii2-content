<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%players}}`.
 */
class m210117_085330_create_players_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%players}}', [
            'player_id' => $this->smallInteger()->notNull(),
            'player_name' => $this->string(50)->notNull(),
            'player_team' => $this->string(50)->notNull(),
            'player_age' => $this->tinyInteger()->notNull(),
            'player_country' => $this->string(50)->notNull(),
            'player_position' => $this->string(20),
            'player_pros' => $this->text(),
            'player_cons' => $this->text(),
            'scout_name' => $this->string(50),
            'created_at' => $this->integer(11),
        ]);
        $this->addPrimaryKey('PK_players_player_id','{{%players}}','player_id');
    }


    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%players}}');
    }
}
