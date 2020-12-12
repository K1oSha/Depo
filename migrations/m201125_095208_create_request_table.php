<?php

use yii\db\Migration;

/**
 * Handles the creation of table `{{%request}}`.
 */
class m201125_095208_create_request_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('{{%request}}', [
            'id' => $this->primaryKey(),
            'author_id' => $this->integer(),
            'title' => $this->string(),
            'desc' => $this->text(),
            'extra_desc' => $this->text(),
            'availability' => $this->integer(),
            'register_end' => $this->dateTime(),
            'confirmed' => $this->boolean(),
            'rejected' => $this->boolean(),
            'rej_msg' => $this->text(),
            'start' => $this->dateTime(),
            'end' => $this->dateTime(),
            'bannerurl' => $this->string(),
            'deleted' => $this->boolean()->defaultValue(0),
            'place_talk' => $this->boolean()->defaultValue(0),
            'place_hall' => $this->boolean()->defaultValue(0),
            'broadcasturl' => $this->string(),
            'category_id' => $this->integer(),
            'visited' => $this->integer(),
            'registered' => $this->integer(),
            'views' => $this->integer(),
        ]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('{{%request}}');
    }
}
