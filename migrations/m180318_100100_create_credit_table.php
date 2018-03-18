<?php

use yii\db\Migration;

/**
 * Handles the creation of table `credit`.
 */
class m180318_100100_create_credit_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('credit', [
            'id' => $this->primaryKey(),
            'client_id' => $this->integer(),
            'application_id' => $this->integer(),
            'status' => $this->string(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);

        $this->execute('
            INSERT INTO `credit` (`client_id`, `application_id`, `status`, `created_at`, `updated_at`) VALUES (1, 1, \'1\', \'2018-03-17 12:06:58\', \'2018-03-17 12:07:04\');
            INSERT INTO `credit` (`client_id`, `application_id`, `status`, `created_at`, `updated_at`) VALUES (7, 7, \'1\', \'2018-03-17 12:07:15\', \'2018-03-17 12:47:01\');
            INSERT INTO `credit` (`client_id`, `application_id`, `status`, `created_at`, `updated_at`) VALUES (3, 3, \'1\', \'2018-03-17 12:07:24\', \'2018-03-17 12:07:24\');
            INSERT INTO `credit` (`client_id`, `application_id`, `status`, `created_at`, `updated_at`) VALUES (1, 4, \'1\', \'2018-03-17 12:07:36\', \'2018-03-17 12:07:36\');
            INSERT INTO `credit` (`client_id`, `application_id`, `status`, `created_at`, `updated_at`) VALUES (1, 0, \'1\', \'2018-03-17 13:40:22\', \'2018-03-17 13:40:24\');
        ');
    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('credit');
    }
}
