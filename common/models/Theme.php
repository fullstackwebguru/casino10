<?php
namespace common\models;

use Yii;
use yii\base\NotSupportedException;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

/**
 * This is the model class for table "theme".
 *
 * @property integer $id
 * @property string $banner_heading
 * @property string $banner_subheading
 * @property string $banner_image
 * @property integer $created_at
 * @property integer $updated_at
 */

class Theme extends ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%theme}}';
    }

    /**
     * @inheritdoc
     */
    public function behaviors()
    {
        return [
            TimestampBehavior::className(),
        ];
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['category_id' ], 'required'],
            [['banner_heading','banner_subheading','banner_image'], 'string'],
            [['category_id' ], 'integer'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'banner_image' => 'Banner Image',
            'banner_heading' => 'Banner Text',
            'banner_subheading' => 'Banner Text1',
            'category_id' => 'Main Category',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Category::className(), ['id' => 'category_id']);
    }
}
