<?php
/**
 * Created by PhpStorm.
 * User: IF
 * Date: 17.03.2018
 * Time: 18:59
 */

namespace app\models;


use yii\db\ActiveRecord;

/**
 * @property integer $id
 * @property string $fio
 * @property integer $balance
 */
class Clients extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'clients';
    }

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getFio()
    {
        return $this->fio;
    }

    /**
     * @param string $fio
     */
    public function setFio($fio)
    {
        $this->fio = $fio;
    }

    /**
     * @return int
     */
    public function getBalance()
    {
        return $this->balance;
    }

    /**
     * @param int $balance
     */
    public function setBalance($balance)
    {
        $this->balance = $balance;
    }

    public function rules()
    {
        return [
            [['id'], 'required'],
            [['fio'], 'string'],
            [['balance'], 'number'],
        ];
    }
}