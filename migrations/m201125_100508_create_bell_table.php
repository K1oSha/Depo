<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contributor}}`.
 */
class m201125_100508_create_bell_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%bell}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'request_id' => $this->integer(),
            'text' => $this->string(),
            'is_read' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%bell}}');
    }
}
