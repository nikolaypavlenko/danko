<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $img
 * @property string $create_date
 * @property string $id_tag
 */
class News extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'news';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['title', 'text', 'img', 'create_date', 'id_tag'], 'required'],
            [['text'], 'string'],
            [['create_date'], 'safe'],
            [['title', 'img', 'id_tag'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'text' => 'Text',
            'img' => 'Img',
            'create_date' => 'Create Date',
            'id_tag' => 'Id Tag',
        ];
    }
}
