<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "image".
 *
 * @property integer $id
 * @property string $name
 * @property string $location_shooting
 * @property string $file
 * @property string $upload_date
 */
class Image extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'image';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'location_shooting', 'file', 'upload_date'], 'required'],
            [['file'], 'string'],
            [['upload_date'], 'safe'],
            [['name'], 'string', 'max' => 50],
            [['location_shooting'], 'string', 'max' => 200]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'location_shooting' => 'Location Shooting',
            'file' => 'File',
            'upload_date' => 'Upload Date',
        ];
    }
}
