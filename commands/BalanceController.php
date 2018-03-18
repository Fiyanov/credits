<?php
/**
 * Created by PhpStorm.
 * User: IF
 * Date: 17.03.2018
 * Time: 14:02
 */

namespace app\commands;

use app\service\BalanceService;
use yii\console\Controller;
use yii\console\ExitCode;



class BalanceController extends Controller
{
    public function actionIndex()
    {
        return $this->actionHelp();
    }

    public function actionMove($from, $to, $amount)
    {
        print ((new BalanceService())->move($from, $to,$amount) ? 'complete' : 'not move') . "\r\n";

        return ExitCode::OK;
    }

    public function actionHelp()
    {
        print "
            Допустимые команды: \r\n
            help - эта справка \r\n
            balance user_from user_to - перевод баланса \r\n            
        ";

        return ExitCode::OK;
    }
}