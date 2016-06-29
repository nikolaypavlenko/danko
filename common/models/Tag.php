<?php

namespace common\models;

use common\models\News;
use Yii;

/**
 * This is the model class for table "tag".
 *
 * @property integer $id
 * @property string $name_tag
 */
class Tag extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tag';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name_tag'], 'required'],
            [['name_tag'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name_tag' => 'Name Tag',
        ];
    }

    public function getNews()
    {
             return $this->hasMany(News::className(), ['tag_id' => 'id']);
    }
}
