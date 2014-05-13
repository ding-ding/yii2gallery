<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "album".
 *
 * @property integer $id
 * @property string $name
 * @property string $description
 * @property string $email
 * @property string $phone
 * @property string $create_date
 * @property string $change_date
 * @property string $last_upload
 * @property integer $number_of_photos
 */
class Album extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'album';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'description', 'create_date'], 'required'],
            [['create_date', 'change_date', 'last_upload'], 'safe'],
            [['number_of_photos'], 'integer'],
            [['name'], 'string', 'max' => 50],
            [['description'], 'string', 'max' => 200],
            [['email'], 'string', 'max' => 100],
            [['phone'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Название',
            'description' => 'Описание',
            'email' => 'Email',
            'phone' => 'Телефон',
            'create_date' => 'Дата создания',
            'change_date' => 'Дата изменения информации',
            'last_upload' => 'Дата последней загрузки',
            'number_of_photos' => 'Количество фотографий',
        ];
    }
}
