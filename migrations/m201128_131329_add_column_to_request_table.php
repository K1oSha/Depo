<?php

use yii\db\Migration;

/**
 * Handles adding columns to table `{{%user}}`.
 */
class m201128_131329_add_column_to_request_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->addColumn('{{%request}}', 'contacts', $this->string());
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
    }
}
