<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contributor}}`.
 */
class m201125_100508_create_speaker_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%speaker}}', [
            'id' => $this->primaryKey(),
            'user_id' => $this->integer(),
            'request_id' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%speaker}}');
    }
}
