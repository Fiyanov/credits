<?php

use yii\db\Migration;

/**
 * Handles the creation of table `application`.
 */
class m180318_095850_create_application_table extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {
        $this->createTable('application', [
            'id' => $this->primaryKey(),
            'client_id' => $this->integer(),
            'status' => $this->string(),
            'requested_amount' => $this->decimal(),
            'requested_period' => $this->integer(),
            'approved_amount' => $this->decimal(),
            'approved_period' => $this->integer(),
            'offer_id' => $this->integer(),
            'created_at' => $this->timestamp(),
            'updated_at' => $this->timestamp(),
        ]);

        $this->execute('
        INSERT INTO `application` (`client_id`, `status`, `requested_amount`, `requested_period`, `approved_amount`, `approved_period`, `offer_id`, `created_at`, `updated_at`) VALUES (1, \'1\', 10000.00, 0, 10000.00, 0, 0, \'2018-03-17 12:04:18\', \'2018-03-17 12:04:18\');
        INSERT INTO `application` (`client_id`, `status`, `requested_amount`, `requested_period`, `approved_amount`, `approved_period`, `offer_id`, `created_at`, `updated_at`) VALUES (2, \'1\', 5000.00, 0, 4000.00, 0, 0, \'2018-03-17 12:04:50\', \'2018-03-17 12:04:50\');
        INSERT INTO `application` (`client_id`, `status`, `requested_amount`, `requested_period`, `approved_amount`, `approved_period`, `offer_id`, `created_at`, `updated_at`) VALUES (3, \'1\', 9000.00, 0, 7000.00, 0, 0, \'2018-03-17 12:04:50\', \'2018-03-17 12:05:21\');
        INSERT INTO `application` (`client_id`, `status`, `requested_amount`, `requested_period`, `approved_amount`, `approved_period`, `offer_id`, `created_at`, `updated_at`) VALUES (1, \'1\', 20000.00, 0, 19000.00, 0, 0, \'2018-03-17 12:07:48\', \'2018-03-17 12:07:48\');
        INSERT INTO `application` (`client_id`, `status`, `requested_amount`, `requested_period`, `approved_amount`, `approved_period`, `offer_id`, `created_at`, `updated_at`) VALUES (1, \'1\', 10000.00, 0, 10000.00, 0, 0, \'2018-03-17 13:40:37\', \'2018-03-17 13:40:37\');
        ');

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        $this->dropTable('application');
    }
}
