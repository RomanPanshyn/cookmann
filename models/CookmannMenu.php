<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "cookmann_menu".
 *
 * @property int $id
 * @property string $caption
 * @property string $description
 * @property int $weight
 * @property int $price
 * @property string $picture
 * @property string $alt
 */
class CookmannMenu extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cookmann_menu';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['caption', 'description', 'weight', 'price', 'picture', 'alt'], 'required'],
            [['weight', 'price'], 'integer'],
            [['caption', 'picture', 'alt'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'caption' => 'Заголовок',
            'description' => 'Описание',
            'weight' => 'Вес',
            'price' => 'Цена',
            'picture' => 'Картинка',
            'alt' => 'Текст картинки',
        ];
    }
}
