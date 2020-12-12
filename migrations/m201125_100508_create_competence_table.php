<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contributor}}`.
 */
class m201125_100508_create_competence_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%competence}}', [
            'id' => $this->primaryKey(),
            'title' => $this->string(),
            'request_id' => $this->integer(),
            'weight' => $this->string(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%competence}}');
    }
}
