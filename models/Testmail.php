<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "testmail".
 *
 * @property integer $id
 * @property string $fromemail
 * @property string $theme
 * @property string $data
 * @property string $text
 */
class Testmail extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'testmail';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['fromemail', 'theme', 'data', 'text'], 'required'],
            [['data'], 'safe'],
            [['text'], 'string'],
            [['fromemail', 'theme'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fromemail' => 'Fromemail',
            'theme' => 'Theme',
            'data' => 'Data',
            'text' => 'Text',
        ];
    }
}
