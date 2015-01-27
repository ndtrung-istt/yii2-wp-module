<?php

namespace istt\wp\models;

use Yii;

/**
 * This is the model class for table "{{%links}}".
 *
 * @property string $link_id
 * @property string $link_url
 * @property string $link_name
 * @property string $link_image
 * @property string $link_target
 * @property string $link_description
 * @property string $link_visible
 * @property string $link_owner
 * @property integer $link_rating
 * @property string $link_updated
 * @property string $link_rel
 * @property string $link_notes
 * @property string $link_rss
 */
class Links extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return '{{%links}}';
    }

    /**
     * @return \yii\db\Connection the database connection used by this AR class.
     */
    public static function getDb()
    {
        return Yii::$app->get('wpDb');
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['link_owner', 'link_rating'], 'integer'],
            [['link_updated'], 'safe'],
            [['link_notes'], 'required'],
            [['link_notes'], 'string'],
            [['link_url', 'link_name', 'link_image', 'link_description', 'link_rel', 'link_rss'], 'string', 'max' => 255],
            [['link_target'], 'string', 'max' => 25],
            [['link_visible'], 'string', 'max' => 20]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'link_id' => Yii::t('wp', 'Link ID'),
            'link_url' => Yii::t('wp', 'Link Url'),
            'link_name' => Yii::t('wp', 'Link Name'),
            'link_image' => Yii::t('wp', 'Link Image'),
            'link_target' => Yii::t('wp', 'Link Target'),
            'link_description' => Yii::t('wp', 'Link Description'),
            'link_visible' => Yii::t('wp', 'Link Visible'),
            'link_owner' => Yii::t('wp', 'Link Owner'),
            'link_rating' => Yii::t('wp', 'Link Rating'),
            'link_updated' => Yii::t('wp', 'Link Updated'),
            'link_rel' => Yii::t('wp', 'Link Rel'),
            'link_notes' => Yii::t('wp', 'Link Notes'),
            'link_rss' => Yii::t('wp', 'Link Rss'),
        ];
    }
}
