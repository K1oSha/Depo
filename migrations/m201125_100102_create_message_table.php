<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%message}}`.
 */
class m201125_100102_create_message_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%message}}', [
            'id' => $this->primaryKey(),
            'text' => $this->string(),
            'coworking' => $this->integer(),
            'speaker' => $this->integer(),
            'personal' => $this->integer(),
            'request_id' => $this->integer(),
            'user_id' => $this->integer(),
            'creation_time' => $this->dateTime(),
            
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%message}}');
    }
}
