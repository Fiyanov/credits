<?php

use yii\db\Migration;

/**
 * Handles the creation of table `client`.
 */
class m180318_100201_create_clients_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('clients', [
            'id' => $this->primaryKey(),
            'fio' => $this->string(),
            'balance' => $this->decimal(),
        ]);

        $this->insert('clients', ['fio' => 'Иванов Иван Иваныч', 'balance' => 10000]);
        $this->insert('clients', ['fio' => 'Петров Михаил Викторович', 'balance' => 5000]);
        $this->insert('clients', ['fio' => 'Сидоров Семён Семёныч', 'balance' => 0]);
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('clients');
    }
}
