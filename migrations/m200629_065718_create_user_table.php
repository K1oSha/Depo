<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%user}}`.
 */
class m200629_065718_create_user_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%user}}', [
            'id' => $this->primaryKey(),
            'name' => $this->string(),
            'number' => $this->string(),
            'position' => $this->string(),
            'telegram' => $this->string(),
            'whatsapp' => $this->string(),
            'is_created' => $this->boolean(),
            'is_admin' => $this->boolean(),
            'is_moderator' => $this->boolean(),
            'is_admin' => $this->boolean(),
            'activity' => $this->integer(),
            'personal' => $this->integer(),
            'marketing' => $this->integer(),
            'strategic' => $this->integer(),
            'industry' => $this->integer(),
            'investment' => $this->integer(),
            'bigdata' => $this->integer(),
            'email' => $this->string()->unique()->notNull(),
            'passhash' => $this->string()->notNull()
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%user}}');
    }
}
