<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "news".
 *
 * @property integer $id
 * @property string $title
 * @property string $text
 * @property string $img
 * @property string $create_date
 */
class News extends \yii\db\ActiveRecord
{
    public $file;
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
            [['title', 'text', 'img', 'create_date'], 'required'],
            [['text'], 'string'],
            [['create_date', 'user_id', 'tag_id'], 'safe'],
            [['title', 'img'], 'string', 'max' => 42],
            [['file'], 'file', 'extensions'=>'jpg, png']
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
            'user_id' => 'Пользователь',
            'tag_id' => 'Тег'

        ];
    }

   public function getUser() 
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }

    public function getTag() 
    {
        return $this->hasOne(Tag::className(), ['id' => 'tag_id']);
    }
}
