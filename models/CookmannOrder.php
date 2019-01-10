<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cookmann_order".
 *
 * @property int $id
 * @property string $meal
 * @property string $name
 * @property string $phone
 * @property string $email
 * @property string $address
 * @property string $comment
 * @property int $active
 */
class CookmannOrder extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cookmann_order';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['meal', 'phone'], 'required'],
            [['meal'], 'string'],
            [['active'], 'integer'],
            [['name', 'phone', 'email', 'address', 'comment'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'meal' => 'Блюда',
            'name' => 'Имя',
            'phone' => 'Телефон',
            'email' => 'Email',
            'address' => 'Адрес',
            'comment' => 'Комментарий',
            'active' => 'Активная',
        ];
    }
}
