<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cookmann_callback".
 *
 * @property int $id
 * @property string $phone
 * @property string $description
 */
class CookmannCallback extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cookmann_callback';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['phone'], 'required'],
            [['description'], 'string'],
            [['phone'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'phone' => 'Телефон',
            'description' => 'Описание',
        ];
    }
}
