<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contributor}}`.
 */
class m201125_100508_create_contributor_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%contributor}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'request_id' => $this->integer(),
            'is_speaker' => $this->boolean(),
            'came' => $this->boolean(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%contributor}}');
    }
}
