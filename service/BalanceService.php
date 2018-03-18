<?php

/**
 * Created by PhpStorm.
 * User: IF
 * Date: 18.03.2018
 * Time: 13:24
 */
namespace app\service;

use app\models\Clients;
use Yii;

class BalanceService
{
    public function move($from, $to, $amount)
    {
        $amount = intval($amount);
        $client_from = Clients::findOne($from);
        $client_to = Clients::findOne($to);

        if ($from == $to) {
            return false;
        }

        if ($amount > intval($client_from->getBalance())) {
            return false;
        }

        $transaction = Yii::$app->db->beginTransaction();

        $client_from->setBalance($client_from->getBalance() - $amount);
        $client_to->setBalance($client_to->getBalance() + $amount);

        if ($client_from->save() && $client_to->save()) {
            // если сохранение прошло без ошибок, то коммитим транзакцию
            $transaction->commit();
            return true;
        } else {
            // если хоть одно из сохранений не удалось, то откатываемся
            $transaction->rollback();
            return false;
        }
    }
}