<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%contributor}}`.
 */
class m201125_100508_create_stat_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%stat}}', [
            'id' => $this->primaryKey(),
            'creation_time' => $this->dateTime(),
            'meropriyat_visits' => $this->integer(),
            'meropriyat_regs' => $this->integer(),
            'cowork_visits' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%stat}}');
    }
}
